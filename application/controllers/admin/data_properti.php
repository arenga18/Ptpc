<?php

class Data_properti extends CI_Controller{
    
    public function index()
    {
        $data['property'] = $this->rental_model->get_data('property')->result();
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_properti',$data);
        $this->load->view('templates_admin/footer');
    }
    
    public function tambah_properti()
    {
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_properti',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_properti_aksi() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_properti();
        } else {
            $kode_type = $this->input->post('kode_type');
            $area = $this->input->post('area');
            $nama_prop = $this->input->post('nama_prop');
            $alamat = $this->input->post('alamat');
            $ukuran = $this->input->post('ukuran');
            $kamar = $this->input->post('kamar');
            $kamar_mandi = $this->input->post('kamar_mandi');
            $harga = $this->input->post('harga');
            $status = $this->input->post('status');
            $keterangan = $this->input->post('keterangan');
            $gambar = $_FILES['gambar']['name'];

            if ($gambar) {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type' => $kode_type,
                'area' => $area,
                'nama_prop' => $nama_prop,
                'alamat' => $alamat,
                'ukuran' => $ukuran,
                'kamar' => $kamar,
                'kamar_mandi' => $kamar_mandi,
                'status' => $status,
                'harga' => $harga,
                'keterangan' => $keterangan,
                'gambar' => $gambar
            );

            $this->rental_model->insert_data($data, 'property');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
            Data Berhasil ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/data_properti');
        }
    }

    public function update_properti($id)
    {
        $where = array('id_prop' => $id);
        $data['property'] = $this->db->query("SELECT * FROM property pr, tipe tp WHERE pr.kode_type=tp.kode_type AND pr.id_prop='$id'")->result();
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        
        $this->load->view("templates_admin/header");
        $this->load->view("templates_admin/sidebar");
        $this->load->view("admin/form_update_properti", $data);
        $this->load->view("templates_admin/footer");
    }

    public function update_properti_aksi()
    {
        $this->_rules();
       
        if($this->form_validation->run() == FALSE){
            $this->update_properti();
        } else {
            $id               = $this->input->post('id_prop');
            $kode_type        = $this->input->post('kode_type');
            $area             = $this->input->post('area');
            $nama_prop        = $this->input->post('nama_prop');
            $alamat           = $this->input->post('alamat');
            $ukuran           = $this->input->post('ukuran');
            $kamar            = $this->input->post('kamar');
            $kamar_mandi      = $this->input->post('kamar_mandi');
            $harga            = $this->input->post('harga');
            $status           = $this->input->post('status');
            $keterangan       = $this->input->post('keterangan');
            $gambar           = $_FILES['gambar']['name'];
            if($gambar){
                $config ['upload_path']       = './assets/upload';
                $config ['allowed_types']     = 'jpg|jpeg|png|tiff';

                $this->load->library ('upload', $config);

                if(!$this->upload->do_upload('gambar')){
                    $gambar=$this->upload->data('file_name');
                    $this->db->set('gambar',$gambar);
            }else{
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type' => $kode_type,
                'area'      => $area,
                'nama_prop' => $nama_prop,
                'alamat'    => $alamat,
                'ukuran'    => $ukuran,
                'kamar'     => $kamar,
                'kamar_mandi'=> $kamar_mandi,
                'harga'     => $harga,
                'status'    => $status,
                'keterangan'=> $keterangan,
                'gambar'    => $gambar,
            );
            $where = array(
                'id_prop' => $id
            );

            $this->rental_model->update_data('property', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
            Data Berhasil diperbaharui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/data_properti');
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('kode_type', 'Tipe Properti', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('nama_prop', 'Nama Properti', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
        $this->form_validation->set_rules('kamar', 'Jumlah Kamar', 'required');
        $this->form_validation->set_rules('kamar_mandi', 'Jumlah Kamar Mandi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

    }

    public function detail_properti($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_properti($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_properti',$data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_properti($id)
    {
        $where = array('id_prop'=> $id);
        $this->rental_model->delete_data($where,'property');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
        Data Berhasil dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/data_properti');
    }
}
?>