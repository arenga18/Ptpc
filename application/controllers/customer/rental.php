<?php

class Rental extends CI_Controller {

    public function tambah_rental($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_properti($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/tambah_rental', $data);
        $this->load->view('templates_customer/footer');
    }
    
    public function tambah_rental_aksi()
    {
        $id_customer        = $this->session->userdata('id_customer');
        $id_prop            = $this->input->post('id_prop');
        $harga              = $this->input->post('harga');
        $tanggal_sewa       = date('Y-m-d');
        $tanggal_masuk      = $this->input->post('tanggal_masuk');
        $tanggal_keluar     = $this->input->post('tanggal_keluar');
        
        $data = array(
            'id_customer'   => $id_customer,
            'id_prop'       => $id_prop,
            'harga'         => $harga,
            'tanggal_sewa'  => $tanggal_sewa,
            'tanggal_masuk' => $tanggal_masuk,
            'tanggal_keluar'=> $tanggal_keluar,
            'status_keluar' => '0',
            'status_sewa'   => '0'
        );

        $this->rental_model->insert_data($data, 'transaksi');

        $status = array(
            'status' => '0'
        );
        $id = array(
            'id_prop' => $id_prop
        );

        $this->rental_model->update_data('property', $status, $id);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
            Transaksi Berhasil, Silahkan Checkout!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('customer/data_properti');
    }
}
?>