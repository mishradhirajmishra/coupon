<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('loginmodel');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function getlogin()
    {
        $l_res = $this->loginmodel->login_validate();
        if (!$l_res) {
            $this->load->view('admin/login');
        } else {
            if ($l_res['user_role'] == 'admin') {
                $user_data = array('username' => $l_res['name'], 'user_role' => $l_res['user_role'], 'loged_in' => true, 'status' => $l_res['status']);
                $this->session->set_userdata($user_data);
                redirect(base_url() . 'index.php/Admin', 'refresh');
            } elseif ($l_res['user_role'] == 'user') {
                $user_data = array('username' => $l_res['name'], 'user_role' => $l_res['user_role'], 'loged_in' => true, 'status' => $l_res['status']);
                $this->session->set_userdata($user_data);
                redirect(base_url() . 'index.php/User', 'refresh');
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        header('location: ../../');
    }
}