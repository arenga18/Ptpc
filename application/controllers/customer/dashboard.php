<?php

class Dashboard extends CI_Controller{

    public function index()
    {
        $data['property'] = $this->rental_model->get_data('property')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/dashboard', $data);
        $this->load->view('templates_customer/footer');
    }
}

?>
