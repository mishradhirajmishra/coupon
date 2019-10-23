<?php

class custom404 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admodel');
        $this->load->model('Loginmodel');
        $this->load->helper('url');
        $this->load->helper('sendsms_helper');
        $this->load->library('session');
        $this->load->model('Loginmodel');
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $data['category'] = $this->admodel->list_category();
        $data['content'] = 'custom404view';  // View name
        $this->load->view('user/header', $data);
        $this->load->view('error_template', $data);
        $this->load->view('user/footer');

    }
}

?>