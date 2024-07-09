<?php

class Tipe_properti extends CI_Controller {
    public function index()
    {
        $data['tipe'] = $this->rental_model->get_data('tipe')->result();
        $this->load->view("templates_admin/header");
        $this->load->view("templates_admin/sidebar");
        $this->load->view("admin/tipe_properti", $data);
        $this->load->view("templates_admin/footer");
    }

    public function tambah_tipe()
    {
        $this->load->view("templates_admin/header");
        $this->load->view("templates_admin/sidebar");
        $this->load->view("admin/form_tambah_tipe");
        $this->load->view("templates_admin/footer");
    }

    public function tambah_tipe_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_tipe();
        } else{
            $kode_type  = $this->input->post('kode_type');
            $nama_type  = $this->input->post('nama_type');

            $data = array(
                'kode_type' => $kode_type,
                'nama_type' => $nama_type,
            );

            $this->rental_model->insert_data($data,'tipe');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
            Data Berhasil ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/tipe_properti');
        }
    }

    public function update_type($id)
    {
        $where = array('id_type' => $id);
        $data['tipe'] = $this->db->query("SELECT * FROM tipe WHERE id_type='$id'")->result();
        $this->load->view("templates_admin/header");
        $this->load->view("templates_admin/sidebar");
        $this->load->view("admin/form_update_tipe", $data);
        $this->load->view("templates_admin/footer");
    }

    public function update_type_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->update_type();
        } else {
            $id         = $this->input->post('id_type');
            $kode_type  = $this->input->post('kode_type');
            $nama_type  = $this->input->post('nama_type');

            $data = array(
                'kode_type'=> $kode_type,
                'nama_type'=> $nama_type,
            );

            $where = array(
                'id_type'=> $id,
            );

            $this->rental_model->update_data('tipe', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> 
            Data Berhasil diperbaharui!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/tipe_properti');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_type','Kode Type', 'required');
        $this->form_validation->set_rules('nama_type','Nama Type', 'required');
    }

    public function delete_type($id){
        $where = array('id_type => $id');
        $this->rental_model->delete_data($where,'tipe');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
        Data Berhasil dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/tipe_properti');

    }
}

?>