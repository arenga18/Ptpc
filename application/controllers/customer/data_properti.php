<?php

class Data_properti extends CI_Controller{

    public function index()
    {
        $data['property'] = $this->rental_model->get_data('property')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/data_properti', $data);
        $this->load->view('templates_customer/footer');
    }

    public function detail_properti($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_properti($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/detail_properti', $data);
        $this->load->view('templates_customer/footer');
    }
}

?>
