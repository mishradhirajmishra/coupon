<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function login_validate()
    {
        $user= $this->input->post('user_name');
        $password= $this->input->post('password');
        $query = $this->db->get_where('user',array('name'=>$user,'password'=>$password));
        $res=$query->row_array();
        return $res;
    }
    
    public function login_validate_user($user,$password)
    {
        $query = $this->db->get_where('user',array('name'=>$user,'password'=>$password));
        $res=$query->row_array();
        return $res;
    }
    
    public function insert_user($name,$email,$mobile,$pass)
    {
        $data = array(
            'id' =>'',
            'name' =>$name,
            'password' =>$pass,
            'user_role' =>"user",
            'email' =>$email,
            'mo_no'=>$mobile,
            'status' =>0,
            'date' =>date("d-m-y"),
            'type' =>'d'
           
        );
    
            $this->db->insert('user', $data);
    }
        public function insert_user_ref( $name,$ref,$email)
    {
        $data = array(
            'id' =>'',
            'user_name' =>$name,
            'email' =>$email,
            'refer_id' =>$ref,
            'status' =>"0",
            'date' =>date("d-m-y"),
        );
    
            $this->db->insert('user_refrence', $data);
    }
		
}
