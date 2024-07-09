<?php

class transaksi extends CI_Controller
{
    public function index()
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, property pr, customer cs WHERE tr.id_prop=pr.id_prop AND tr.id_customer=cs.id_customer ")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function pembayaran($id)
    {
        $where = array('id_transaksi' => $id);
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi = $id")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi_pembayaran', $data);
        $this->load->view('templates_admin/footer');
    }

    public function cek_pembayaran()
    {
        $id                 = $this->input->post('id_transaksi');
        $status_pembayaran  = $this->input->post('status_pembayaran');

        $data = array(
            'status_pembayaran'=> $status_pembayaran,
        );

        $where = array(
            'id_transaksi'=> $id,
        );

        $this->rental_model->update_data('transaksi', $data, $where);
        redirect('admin/transaksi');
    }

    public function download_pembayaran($id)
    {
        $this->load->helper('download');
        $filePembayaran = $this->rental_model->downloadPembayaran($id);
        $file = 'assets/upload/'.$filePembayaran['bukti_pembayaran'];
        force_download($file, NULL);
    }

    public function transaksi_selesai($id)
    {
        $where = array('id_transaksi' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_transaksi='$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaksi_selesai', $data);
        $this->load->view('templates_admin/footer');
    }

    public function transaksi_selesai_aksi()
    {
        $id                = $this->input->post('id_transaksi');
        $status_keluar     = $this->input->post('status_keluar');
        $status_sewa       = $this->input->post('status_sewa');


        $data = array(
            'status_keluar' => $status_keluar,
            'status_sewa'   => $status_sewa,
        );

        $where = array(
            'id_transaksi' => $id,
        );

        $this->rental_model->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
        Transaksi Berhasil diperbaharui!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/transaksi');

    }

    public function transaksi_batal($id)
        {
            $where = array('id_transaksi' => $id);
            $data  = $this->rental_model->get_where($where,'transaksi')->row();
            
            $where2 = array('id_prop' => $data->id_prop);
            
            $data2 = array('status' => '1');

            $this->rental_model->update_data('property', $data2, $where2);
            $this->rental_model->delete_data($where2, 'transaksi');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
            Transaksi Berhasil dibatalkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/transaksi');
        }
}


?>