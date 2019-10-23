<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admodel');
        $this->load->model('Loginmodel');
        $this->load->helper('url');
        $this->load->helper('sendsms_helper');
        $this->load->library('session');
   


    }

    function fb_login()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $img = $this->input->post('im');
        $this->admodel->m_add_fb_user($id, $name, $email);
        $user_data = array('username' => $name, 'user_role' => "user", 'loged_in' => true, 'status' => "fb", 'type' => 'f');
        $this->session->set_userdata($user_data);
          $this->session->set_userdata('user_img', $img);
    }

    function g_login()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $img = $this->input->post('im');
        $this->admodel->m_add_g_user($id, $name, $email);
        $user_data = array('username' => $name, 'user_role' => "user", 'loged_in' => true, 'status' => "g", 'type' => 'g');
        $this->session->set_userdata($user_data);
        $this->session->set_userdata('user_img', $img);
        }


    function private_policy()
    {
        print_r("private_policy");

    }


    function term_condition()
    {
        print_r("term_condition");

    }

    function subscriber()
    {
        $email = $this->input->post('email');
        if($email){
          $this->admodel->m_add_subscriber($email);
        echo "Thanks for subscribing with us"; 
        }

    }

    public function index()
    {
        
        
/*        $data['storef'] = $this->admodel->list_store_f();
        $data['category'] = $this->admodel->list_category();
        $data['coupon'] = $this->admodel->list_coupon();
        $data['coupon_f'] = $this->admodel->list_coupon_featured();
        $data['coupon_d'] = $this->admodel->list_coupon_deal();

        $this->load->view('user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/footer');*/
                 
      

        redirect(base_url() . 'home', 'refresh');
    }

    public function home()
    {
        $data['storef'] = $this->admodel->list_store_f();
        $data['category'] = $this->admodel->list_category();
        $data['coupon'] = $this->admodel->list_coupon();
        $data['coupon_f'] = $this->admodel->list_coupon_featured();
        $data['coupon_d'] = $this->admodel->list_coupon_deal();
        $data['slider'] = $this->admodel->m_list_slider();
        $this->load->view('user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/footer');
    }
        public function test22()
    {
        $data['storef'] = $this->admodel->list_store_f();
        $data['category'] = $this->admodel->list_category();
        $data['coupon'] = $this->admodel->list_coupon();
        $data['coupon_f'] = $this->admodel->list_coupon_featured();
        $data['coupon_d'] = $this->admodel->list_coupon_deal();
        $data['slider'] = $this->admodel->m_list_slider();
        $this->load->view('user/header', $data);
        $this->load->view('user/index_t', $data);
        $this->load->view('user/footer');
    }


    function usre_sms()
    {
        $this->load->helper('sendsms_helper');
        $to = 91 . $this->input->post('mobile');
        $msg = "Dcount Test4";
        $x = sendsms($to, $msg, $sendondate = NULL);
        $data['store'] = $this->admodel->list_store();
        $data['category'] = $this->admodel->list_category();
        $data['coupon'] = $this->admodel->list_coupon();
        $this->load->view('user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/footer');

    }

    function view_all_categories($x = "", $y = "")
    {
        $cat = $x;
        $data['category'] = $this->admodel->list_category();
        $data['location'] = $this->admodel->list_location();
        $data['store'] = $this->admodel->list_store_filter_cat($cat);
        $data['cat_name'] = $this->admodel->list_category2($x);
        $this->load->view('user/header', $data);
        $this->load->view('user/categories', $data);
        $this->load->view('user/footer');
    }

    function view_all_store()
    {
        $loc = $this->input->post('location');
        $cat = $this->input->post('catgory');
        $data['category'] = $this->admodel->list_category();
        $data['location'] = $this->admodel->list_location();
        $data['store'] = $this->admodel->list_store_filter($loc, $cat);
        $data['store_no'] = $this->admodel->list_store_filter_no($loc, $cat);
        $this->load->view('user/header', $data);
        $this->load->view('user/allstore', $data);
        $this->load->view('user/footer');
    }
        function viewallstore()
    {
        $loc = $this->input->post('location');
        $cat = $this->input->post('catgory');
        $data['category'] = $this->admodel->list_category();
        $data['location'] = $this->admodel->list_location();
        $data['store'] = $this->admodel->list_store_filter($loc, $cat);
        $data['store_no'] = $this->admodel->list_store_filter_no($loc, $cat);
        $this->load->view('user/header', $data);
        $this->load->view('user/allstore', $data);
        $this->load->view('user/footer');
    }

    function viewalldeal()
    {
        /*         $this->load->library('pagination');
                $limit=12;$ofset=$this->uri->segment(3);*/
        $data['coupon'] = $this->admodel->list_coupon_deal_single();
        /*$no=$this->admodel->list_coupon_deal_no();*/
        /*********************/
        /*$config['base_url'] = base_url() . 'index.php/user/view_all_deal';
            $config['total_rows'] = $no;
            $config['per_page'] = 12;
            $config["uri_segment"] = 3;
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
            $config['full_tag_open'] = '<ul class="pagination1">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = '<i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i>';
            $config['first_tag_open'] = '<li class="active">';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = '<i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i>';
            $config['last_tag_open'] = '<li class="active">';
            $config['last_tag_close'] = '</li>';
            
            $config['next_link'] = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
            $config['next_tag_open'] = '<li class="active2">';
            $config['next_tag_close'] = '</li>';
            $config['prev_link'] = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
            $config['prev_tag_open'] = '<li class="active2">';
            $config['prev_tag_close'] = '</li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="act">';
            $config['cur_tag_close'] = '</li>';
            $this->pagination->initialize($config);*/
        /***************/
        /* $data['coupon']=$this->admodel->list_coupon_deal();*/
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/deal', $data);
        $this->load->view('user/footer');
    }

    function viewallrecent()
    {
        /*        $this->load->library('pagination');
                $limit=12;$ofset=$this->uri->segment(3);*/
        $data['coupon'] = $this->admodel->list_coupon_recent();
        // $no=$this->admodel->list_coupon_recent_no();
        /*********************/
        /* $config['base_url'] = base_url() . 'index.php/user/view_all_recent';
             $config['total_rows'] = $no;
             $config['per_page'] = 12;
             $config["uri_segment"] = 3;*/
        // custom paging configuration
        /* $config['num_links'] = 2;
         $config['use_page_numbers'] = TRUE;
         $config['reuse_query_string'] = TRUE;
         $config['full_tag_open'] = '<ul class="pagination1">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = '<i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i>';
         $config['first_tag_open'] = '<li class="active">';
         $config['first_tag_close'] = '</li>';

         $config['last_link'] = '<i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i>';
         $config['last_tag_open'] = '<li class="active">';
         $config['last_tag_close'] = '</li>';

         $config['next_link'] = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
         $config['next_tag_open'] = '<li class="active2">';
         $config['next_tag_close'] = '</li>';
         $config['prev_link'] = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
         $config['prev_tag_open'] = '<li class="active2">';
         $config['prev_tag_close'] = '</li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="act">';
         $config['cur_tag_close'] = '</li>';
         $this->pagination->initialize($config);
*/        /***************/
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/recent', $data);
        $this->load->view('user/footer');
    }

    function viewallfeatured()
    {
        $data['category'] = $this->admodel->list_category();
        /*        $this->load->library('pagination');
                $limit=12;$ofset=$this->uri->segment(3);*/
        $data['coupon'] = $this->admodel->list_coupon_featured_single();
        /* $no=$this->admodel->list_coupon_featured_no();*/
        /*********************/
        /* $config['base_url'] = base_url() . 'index.php/user/view_all_featured';
             $config['total_rows'] = $no;
             $config['per_page'] = 12;
             $config["uri_segment"] = 3;
             // custom paging configuration
             $config['num_links'] = 2;
             $config['use_page_numbers'] = TRUE;
             $config['reuse_query_string'] = TRUE;
             $config['full_tag_open'] = '<ul class="pagination1">';
             $config['full_tag_close'] = '</ul>';
             $config['first_link'] = '<i class="fa fa-angle-left" aria-hidden="true"></i><i class="fa fa-angle-left" aria-hidden="true"></i>';
             $config['first_tag_open'] = '<li class="active">';
             $config['first_tag_close'] = '</li>';

             $config['last_link'] = '<i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i>';
             $config['last_tag_open'] = '<li class="active">';
             $config['last_tag_close'] = '</li>';

             $config['next_link'] = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
             $config['next_tag_open'] = '<li class="active2">';
             $config['next_tag_close'] = '</li>';
             $config['prev_link'] = '<i class="fa fa-angle-left" aria-hidden="true"></i>';
             $config['prev_tag_open'] = '<li class="active2">';
             $config['prev_tag_close'] = '</li>';
             $config['num_tag_open'] = '<li>';
             $config['num_tag_close'] = '</li>';
             $config['cur_tag_open'] = '<li class="act">';
             $config['cur_tag_close'] = '</li>';
             $this->pagination->initialize($config);*/
        /***************/
        /* $data['coupon']=$this->admodel->list_coupon_featured();*/
        $this->load->view('user/header', $data);
        $this->load->view('user/featured', $data);
        $this->load->view('user/footer');
    }


    function store($x = "",$y = "")
    {


        /* _____________________________________________________*/
        $data['comment_list'] = $this->admodel->m_list_comment($x);
        $data['comment_list_count'] = $this->admodel->m_list_comment_count($x);
        $data['location'] = $this->admodel->list_location();
        $data['coupon'] = $this->admodel->single_store_coupons($x);
        $data['coupon_count'] = $this->admodel->single_page_store_coupons_no($x);
        $data['store'] = $this->admodel->single_store($x);
        $cat_id = $data['store']['cat_id'];
        $data['store_of_type'] = $this->admodel->list_store_of_type($cat_id);
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/store', $data);
        $this->load->view('user/footer');
    }
    
        function view_single_store($x = "",$y = "")
    {


        /* _____________________________________________________*/
        $data['comment_list'] = $this->admodel->m_list_comment($x);
        $data['comment_list_count'] = $this->admodel->m_list_comment_count($x);
        $data['location'] = $this->admodel->list_location();
        $data['coupon'] = $this->admodel->single_store_coupons($x);
        $data['coupon_count'] = $this->admodel->single_page_store_coupons_no($x);
        $data['store'] = $this->admodel->single_store($x);
        $cat_id = $data['store']['cat_id'];
        $data['store_of_type'] = $this->admodel->list_store_of_type($cat_id);
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/store', $data);
        $this->load->view('user/footer');
    }

    function contactus()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $data['message'] = 0;
        if (isset($name)) {
            $this->admodel->add_contact($name, $email, $phone, $subject, $message);
            $data['message'] = 1;
        }
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/contact', $data);
        $this->load->view('user/footer');
    }
        function signup_user_r()
    {    
        $this->load->helper('string');
        $pass = random_string('alnum', 12);
        $name = $this->input->post('form-name');
        $email = $this->input->post('form-email');
        $mobile = $this->input->post('form-mo');
        $ref = $this->input->post('form-ref');
        $mobile = 0000000000;
        $x = $data['name'] = $this->admodel->user_name($name);
        $y = $data['email'] = $this->admodel->user_email($email);
        /*$z=$data['mobile']= $this->admodel->user_mobile($mobile);*/
        $t = $x + $y;
        if ($t == 0) {
            $this->Loginmodel->insert_user($name, $email, $mobile, $pass);
            $this->Loginmodel->insert_user_ref( $name,$ref,$email);
            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/


            $this->load->library('email');
            $config = Array(
                'mailtype' => 'html',
            );
            $this->email->initialize($config);
            $this->email->from('dcountnow@gmail.com', 'dcountnow');
            $this->email->to($email);
            $this->email->subject("DcountNow Credential");
            $msg = '<html>
<head>
    <meta charset="utf-8" />
    <title>Dcountnow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div style="text-align:center;  ">
    <img style="background-color: dodgerblue; width:80%;height:auto; margin: 50px 0px;;" src="http://dcountnow.com/assets/mail.jpg">

<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">
<br >Your Name is: <span style="color:red">' . $name . '</span> <br> Password is :<span style="color:red">' . $pass . '</span></p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 20px;line-height: 25px;Margin-bottom: 25px">P.S. We Hope You Like Deals!!!!</p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Watch your e-mail for the inside scoop on exclusive deals and bargains, coupons, what’s new and lots more!</p> 
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Cheers!!!</p> 

<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-right: 100px;float:right">-Dcount Now Team!</p>
<br/><br/>
  <p class="lead" style="text-align:center;" >
    <a  style="background-color: blue;padding: 10px;color: white;text-decoration: none;"  href="http://dcountnow.com/index.php/user/login_from_email/' . $name . '">Manage Your Account</a>
  </p>

<div style="text-align:center;border-top: 1px solid black; padding-top: 12px;">
					© All rights are reserved to DCOUNT NOW 2017-18 : <span> Powered by : Irebel Webtech</span><br><br>
					
					<a href="https://www.facebook.com/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/fb1.png"></a>
					<a href="https://www.instagram.com/dcount_now/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/in1.png"></a>
					<a href="https://in.pinterest.com/DcountNow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/pi1.png"></a>
					<a href="https://twitter.com/Dcount_Now"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/tw1.png"></a>
					<a href="https://www.linkedin.com/in/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/li1.png"></a>
					
				</div>
</div> 
</body>
</html>';
            $this->email->message($msg);
            if ($result = $this->email->send()) {
                $this->load->view('user/thanks');
            } else {

            }
            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
        } else {
            $this->load->view('user/sorry', $data);
        }
    }

    function signup_user()
    {    
        $this->load->helper('string');
        $pass = random_string('alnum', 12);
        $name = $this->input->post('form-name');
        $email = $this->input->post('form-email');
        $mobile = $this->input->post('form-mo');
        $mobile = 0000000000;
        $x = $data['name'] = $this->admodel->user_name($name);
        $y = $data['email'] = $this->admodel->user_email($email);
        /*$z=$data['mobile']= $this->admodel->user_mobile($mobile);*/
        $t = $x + $y;
        if ($t == 0) {
            $this->Loginmodel->insert_user($name, $email, $mobile, $pass);


            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/


            $this->load->library('email');
            $config = Array(
                'mailtype' => 'html',
            );
            $this->email->initialize($config);
            $this->email->from('dcountnow@gmail.com', 'dcountnow');
            $this->email->to($email);
            $this->email->subject("DcountNow Credential");
            $msg = '<html>
<head>
    <meta charset="utf-8" />
    <title>Dcountnow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div style="text-align:center;  ">
    <img style="background-color: dodgerblue; width:80%;height:auto; margin: 50px 0px;;" src="http://dcountnow.com/assets/mail.jpg">

<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">
<br >Your Name is: <span style="color:red">' . $name . '</span> <br> Password is :<span style="color:red">' . $pass . '</span></p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 20px;line-height: 25px;Margin-bottom: 25px">P.S. We Hope You Like Deals!!!!</p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Watch your e-mail for the inside scoop on exclusive deals and bargains, coupons, what’s new and lots more!</p> 
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Cheers!!!</p> 

<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-right: 100px;float:right">-Dcount Now Team!</p>
<br/><br/>
  <p class="lead" style="text-align:center;" >
    <a  style="background-color: blue;padding: 10px;color: white;text-decoration: none;"  href="http://dcountnow.com/index.php/user/login_from_email/' . $name . '">Manage Your Account</a>
  </p>

<div style="text-align:center;border-top: 1px solid black; padding-top: 12px;">
					© All rights are reserved to DCOUNT NOW 2017-18 : <span> Powered by : Irebel Webtech</span><br><br>
					
					<a href="https://www.facebook.com/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/fb1.png"></a>
					<a href="https://www.instagram.com/dcount_now/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/in1.png"></a>
					<a href="https://in.pinterest.com/DcountNow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/pi1.png"></a>
					<a href="https://twitter.com/Dcount_Now"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/tw1.png"></a>
					<a href="https://www.linkedin.com/in/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/li1.png"></a>
					
				</div>
</div> 
</body>
</html>';
            $this->email->message($msg);
            if ($result = $this->email->send()) {
                $this->load->view('user/thanks');
            } else {

            }
            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
        } else {
            $this->load->view('user/sorry', $data);
        }
    }

    function sign_in()
    {
        $user = $this->input->post('form-name');
        $password = $this->input->post('form-pass');
        $l_res = $this->Loginmodel->login_validate_user($user, $password);
        if (!$l_res) {
            $this->load->view('user/sorry2');
        } else {
            if ($l_res['user_role'] == 'admin') {
                $user_data = array('username' => $l_res['name'], 'user_role' => $l_res['user_role'], 'loged_in' => true, 'status' => $l_res['status'], 'type' => $l_res['type']);
                $this->session->set_userdata($user_data);
                redirect(base_url() . 'index.php/Admin', 'refresh');
            } elseif ($l_res['user_role'] == 'user') {
                $user_data = array('username' => $l_res['name'], 'user_role' => $l_res['user_role'], 'loged_in' => true, 'status' => $l_res['status'], 'type' => $l_res['type']);
                $this->session->set_userdata($user_data);
                $this->session->set_userdata('user_img', "");
                redirect(base_url() . 'profile', 'refresh');
                $data['storef'] = $this->admodel->list_store_f();
                $data['category'] = $this->admodel->list_category();
                $data['coupon'] = $this->admodel->list_coupon();
                $data['coupon_f'] = $this->admodel->list_coupon_featured();
                $data['coupon_d'] = $this->admodel->list_coupon_deal();

                $this->load->view('user/header', $data);
                $this->load->view('user/index', $data);
                $this->load->view('user/footer');
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
                $user_data = array('username' => "xxxx", 'user_role' => "xxxx", 'loged_in' => false);
           $this->session->set_userdata($user_data);
           
        header('location: /../user');
    }

    function track_user_coupon()
    {
        $mob = $this->input->post('role');
        $uname = $this->input->post('uname');
        $st = $this->input->post('st');
        $store = $this->admodel->single_store($st);
        $st_mo = $store['mo_no'];
        $cop = $this->input->post('cop');
        $type = $_SESSION['type'];
        $code = $this->admodel->list_coupon_code("$cop");
        $code = "DCOUNTNOW Coupon code : " . $code['cop_code'] . " for Coupon " . $code['cop_name'] . "  AND : " . $code['cop_desc'];
        $msg1 = "DCOUNTNOW Coupon code : " . $code['cop_code'] . " for Coupon " . $code['cop_name'] . "  AND : " . $code['cop_desc'] . 'has been used by ' . $uname . ' Mobile No :' . $st_mo;
        $this->admodel->m_user_coupon($uname, $st, $cop, $type);
        $this->load->helper('sendsms_helper');
        /*  $x=8543029454;*/
        $to = 91 . $mob;
        $msg = $code;
        $x = sendsms($to, $msg, $sendondate = NULL);

        $tos = 91 . $st_mo;
        $msg1 = $code;
        $x = sendsms($tos, $msg1, $sendondate = NULL);
    }

    function login_from_email($x = "")
    {

        $l_res = $this->admodel->m_list_admin($x);
        $user_data = array('username' => $l_res['name'], 'user_role' => $l_res['user_role'], 'loged_in' => true, 'status' => $l_res['status'], 'type' => $l_res['type']);
        $this->session->set_userdata($user_data);
         $this->session->set_userdata('user_img', "");
        redirect(base_url('index.php/user/') . 'list_user_coupon');

    }

    function list_user_coupon()
    {
        $data['msg'] = 0;
        $x = $_SESSION['username'];
        $y = $_SESSION['type'];
        $data['user_coupon'] = $this->admodel->m_list_user_coupon($x, $y);
        $data['user'] = $this->admodel->m_s_user($x, $y);
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('user/footer');
    }
        function listusercoupon()
    {
        $data['msg'] = 0;
        $x = $_SESSION['username'];
        $y = $_SESSION['type'];
        $data['user_coupon'] = $this->admodel->m_list_user_coupon($x, $y);
        $data['user'] = $this->admodel->m_s_user($x, $y);
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('user/footer');
    }
        function list_user_coupon2()
    {
        $data['msg'] = 0;
        $x = $_SESSION['username'];
        $y = $_SESSION['type'];
        $data['user_coupon'] = $this->admodel->m_list_user_coupon($x, $y);
        $data['user'] = $this->admodel->m_s_user($x, $y);
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);

         $this->load->view('user/enduser', $data);
        $this->load->view('user/footer');
    }

    function search2()
    {
        $data['store'] = $this->admodel->list_store_search($store);
        $store = $this->input->post('search_name');
        $data['category'] = $this->admodel->list_category();
        $data['location'] = $this->admodel->list_location();
        $data['store'] = $this->admodel->list_store_filter($loc, $cat);
        $this->load->view('user/header', $data);
        $this->load->view('user/allstore', $data);
        $this->load->view('user/footer');

    }

    function search()
    {
        $search = $this->input->post('search_name');
        $loc = $this->input->post('location');
        $cat = $this->input->post('catgory');
        $data['category'] = $this->admodel->list_category();
        $data['location'] = $this->admodel->list_location();
        $data['store'] = $this->admodel->list_store_search($search);
        $data['store_no'] = $this->admodel->list_store_search_no($search);
        $data['loc'] = $this->admodel->list_location_search($search);
        $data['loc_no'] = $this->admodel->list_location_search_no($search);
        $this->load->view('user/header', $data);
        $this->load->view('user/search', $data);
        $this->load->view('user/footer');
    }

    function reset_pass()
    {
        $this->load->helper('string');
        $email = $this->input->post('email');

        $pass = random_string('alnum', 12);
        $this->admodel->m_reset_password($email, $pass);
        $d = $this->admodel->get_user_detail_recovery($email);
        $name = $d['name'];

        /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/


        $this->load->library('email');
        $config = Array(
            'mailtype' => 'html',
        );
        $this->email->initialize($config);
        $this->email->from('dcountnow@gmail.com', 'dcountnow');
        $this->email->to($email);
        $this->email->subject("DcountNow Reset Password");
        $msg = '<html>
<head>
    <meta charset="utf-8" />
    <title>Dcountnow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div style="text-align:center;  ">
    <img style="background-color: dodgerblue; width:80%;height:auto; margin: 50px 0px;;" src="http://dcountnow.com/assets/mail.jpg">

<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">
<br >Your Name is: <span style="color:red">' . $d ['name'] . '</span> <br> Password is :<span style="color:red">' . $pass . '</span></p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 20px;line-height: 25px;Margin-bottom: 25px">P.S. We Hope You Like Deals!!!!</p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Watch your e-mail for the inside scoop on exclusive deals and bargains, coupons, what’s new and lots more!</p> 
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Cheers!!!</p> 

<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-right: 100px;float:right">-Dcount Now Team!</p>
<br/><br/>
  <p class="lead" style="text-align:center;" >
  <a  style="background-color: blue;padding: 10px;color: white;text-decoration: none;"  href="http://dcountnow.com/index.php/user/login_from_email/' . $d ['name'] . '">Manage Your Account</a>
  </p>

<div style="text-align:center;border-top: 1px solid black; padding-top: 12px;">
					© All rights are reserved to DCOUNT NOW 2017-18 : <span> Powered by : Irebel Webtech</span><br><br>
					
					<a href="https://www.facebook.com/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/fb1.png"></a>
					<a href="https://www.instagram.com/dcount_now/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/in1.png"></a>
					<a href="https://in.pinterest.com/DcountNow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/pi1.png"></a>
					<a href="https://twitter.com/Dcount_Now"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/tw1.png"></a>
					<a href="https://www.linkedin.com/in/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/li1.png"></a>
					
				</div>
</div> 
</body>
</html>';
        $this->email->message($msg);
        if ($result = $this->email->send()) {
            $this->load->view('user/thanks');
        }

        /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/


    }

    function recovery()
    {
        $this->load->view('user/recovery');
    }


    function store_comment()
    {
        $st_id = $this->input->post('st_id');
        $user = $this->input->post('user');
        $comment = $this->input->post('comment');
        $this->admodel->add_comment($st_id, $user, $comment);
        $data['comment_list'] = $this->admodel->m_list_comment($st_id);
        /*$data['message']="";*/
        /* _____________________________________________________*/
        $x=$st_id;
        $data['comment_list'] = $this->admodel->m_list_comment($x);
        $data['comment_list_count'] = $this->admodel->m_list_comment_count($x);
        $data['location'] = $this->admodel->list_location();
        $data['coupon'] = $this->admodel->single_store_coupons($x);
        $data['coupon_count'] = $this->admodel->single_page_store_coupons_no($x);
        $data['store'] = $this->admodel->single_store($x);
        $cat_id = $data['store']['cat_id'];
        $data['store_of_type'] = $this->admodel->list_store_of_type($cat_id);
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/store', $data);
        $this->load->view('user/footer');

    }

    function login_reg()
    {
        $this->load->view('user/login_reg');

    }
        function loginreg()
    {
        $this->load->view('user/login_reg');

    }
            function refreg()
    {
        $this->load->view('user/r_login_reg');

    }

    function view_single_coupon($x = "")
    {
        $loc = $this->input->post('location');
        $cat = $this->input->post('catgory');
        $data['cop_sing'] = $this->admodel->list_coupon2($x);
        $data['category'] = $this->admodel->list_category();
        $data['location'] = $this->admodel->list_location();
        $data['store'] = $this->admodel->list_store_filter($loc, $cat);

        $data['all_rating'] = $this->admodel->m_list_rating_by_user_all($x);
        $data['rating_count'] = $this->admodel->m_list_rating_by_user_all_count($x);
        $data['avg_rating'] = $this->admodel->m_list_rating_avrage($x);


        $this->load->view('user/header', $data);
        $this->load->view('user/coupon', $data);
        $this->load->view('user/footer');
    }

    function viewsinglecoupon($x = "")
    {
        $loc = $this->input->post('location');
        $cat = $this->input->post('catgory');
        $data['cop_sing'] = $this->admodel->list_coupon2($x);
        $data['category'] = $this->admodel->list_category();
        $data['location'] = $this->admodel->list_location();
        $data['store'] = $this->admodel->list_store_filter($loc, $cat);

        $data['all_rating'] = $this->admodel->m_list_rating_by_user_all($x);
        $data['rating_count'] = $this->admodel->m_list_rating_by_user_all_count($x);
        $data['avg_rating'] = $this->admodel->m_list_rating_avrage($x);


        $this->load->view('user/header', $data);
        $this->load->view('user/coupon', $data);
        $this->load->view('user/footer');
    }


    function add_rating()
    {
        $cop_id = $this->input->post('cop_id');
        $user = $this->input->post('user');
        $rating = $this->input->post('rate');
        $x = $this->admodel->m_list_rating_by_user($user, $cop_id);
        if ($x == 0) {
            $this->admodel->m_add_rating($cop_id, $user, $rating);
        }

        redirect(base_url('index.php/user/') . 'view_single_coupon/' . $cop_id);

    }

    function about()
    {
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/about', $data);
        $this->load->view('user/footer');


    }

    function term()
    {
        $data['category'] = $this->admodel->list_category();
        $this->load->view('user/header', $data);
        $this->load->view('user/term', $data);
        $this->load->view('user/footer');

    }

    function test()
    {
        $d = $this->admodel->get_user_detail_recovery("dhiraj.siswa.mishra@gmail.com");
        print_r($d ['name']);
    }

    function update_profile()
    {
        $id = $this->input->post('id');
        $p1 = $this->input->post('p1');
    
        if ($p1) {
            $this->admodel->m_update_profile($id, $p1);
            echo 1;
        } else {
            echo 2;
        }

    }
            function message_user()
    {
        $mobile = $this->input->post('id');
        $msg1 = "Dear User, Dcount Now would like to provide you 2 free tickets for an upcoming movie to show our appreciation for you! You will get a confirmation call from us within 24 hours with the details.
So sit back, relax and we hope you enjoy the show!";
        $msg2 = $_SESSION['username']." contact no- : ".$mobile ." have claimed for the movie tickets ";
        if ($mobile) {
        $to = 91 . $mobile;
        $x = sendsms($to, $msg1, $sendondate = NULL);
        $mobile2=9919225534;
        $to2 = 91 . $mobile2;
        $y = sendsms($to2, $msg2, $sendondate = NULL);
                  echo 1;
        }
        else {echo 2;}

    }
    
    
        function update_refrence()
    {
        $id = $this->input->post('id');
        $p1 = $this->input->post('p1');
        
        $msg1 = $_SESSION['username']." has invited you at dcountnow.com. click on given link to create your account to grab awesome discount near you.: http://dcountnow.com/user/refreg/$id ";

        if ($p1) {
        $to = 91 . $p1;
        $x = sendsms($to, $msg1, $sendondate = NULL);
                  echo 1;
        }
        else {echo 2;}

    }
        function change_pass()
    {
        $id = $this->input->post('id');
        $p1 = $this->input->post('p1');
        $p2 = $this->input->post('p2');
        if ($p1 == $p2) {
            $this->admodel->m_change_pass($id, $p1);
            echo 1;
        } else {
            echo 2;
        }

    }

    function verifymo()
    {
        $this->load->helper('sendsms_helper');
        $id = $this->input->post('id');
        $p1 = $this->input->post('p1');
        $p2 = $this->input->post('p2');
        $p3 = $this->input->post('p3');
        $p4 = $this->input->post('p4');
        if ($p1 && !$p2) {
            $to = 91 . $p1;
            $x = sendsms($to, $p3, $sendondate = NULL);
            
            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/


            $this->load->library('email');
            $config = Array(
                'mailtype' => 'html',
            );
            $this->email->initialize($config);
            $this->email->from('dcountnow@gmail.com', 'dcountnow');
            $this->email->to($p4);
            $this->email->subject("DcountNow Credential");
            $msg = '<html>
<head>
    <meta charset="utf-8" />
    <title>Dcountnow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div style="text-align:center;  ">
    <img style="background-color: dodgerblue; width:80%;height:auto; margin: 50px 0px;;" src="http://dcountnow.com/assets/mail.jpg">

<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">
<br >Your OTP is: <span style="color:red">' . $p3 . '</span> </p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 20px;line-height: 25px;Margin-bottom: 25px">P.S. We Hope You Like Deals!!!!</p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Watch your e-mail for the inside scoop on exclusive deals and bargains, coupons, what’s new and lots more!</p> 
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Cheers!!!</p> 

<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-right: 100px;float:right">-Dcount Now Team!</p>
<br/><br/>
  <p class="lead" style="text-align:center;" >
    <a  style="background-color: blue;padding: 10px;color: white;text-decoration: none;"  href="http://dcountnow.com/' . $name . '">Go To Home</a>
  </p>

<div style="text-align:center;border-top: 1px solid black; padding-top: 12px;">
					© All rights are reserved to DCOUNT NOW 2017-18 : <span> Powered by : Irebel Webtech</span><br><br>
					
					<a href="https://www.facebook.com/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/fb1.png"></a>
					<a href="https://www.instagram.com/dcount_now/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/in1.png"></a>
					<a href="https://in.pinterest.com/DcountNow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/pi1.png"></a>
					<a href="https://twitter.com/Dcount_Now"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/tw1.png"></a>
					<a href="https://www.linkedin.com/in/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/li1.png"></a>
					
				</div>
</div> 

</body>
</html>';
            $this->email->message($msg);
            if ($result = $this->email->send()) {
                $this->load->view('user/thanks');
            } else {

            }
            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
            
            echo 1;
        } elseif ($p2 == $p3) {
            $this->admodel->m_change_mono($id, $p1);
            echo 2;

        } else {
            echo 3;
        }


    }


    function how()
    {
        $loc = $this->input->post('location');
        $cat = $this->input->post('catgory');
        $data['category'] = $this->admodel->list_category();
        $data['location'] = $this->admodel->list_location();
        $data['store'] = $this->admodel->list_store_filter($loc, $cat);
        $this->load->view('user/header', $data);
        $this->load->view('user/how', $data);
        $this->load->view('user/footer');
    }

    public function indextest()
    {   /* $user_data = array('username' => "xxxx", 'user_role' => "xxxx", 'loged_in' => false);
           $this->session->set_userdata($user_data);*/
        $data['storef'] = $this->admodel->list_store_f();
        $data['category'] = $this->admodel->list_category();
        $data['coupon'] = $this->admodel->list_coupon();
        $data['coupon_f'] = $this->admodel->list_coupon_featured();
        $data['coupon_d'] = $this->admodel->list_coupon_deal();

        $this->load->view('user/header2', $data);
        $this->load->view('user/index', $data);
        $this->load->view('user/footer');


    }


    function usre_sms_test()
    {
        $this->load->helper('sendsms_helper');
        $x = 8543029454;
        $to = 91 . $x;
        $msg = "Dcount Test4";
        $x = sendsms($to, $msg, $sendondate = NULL);

        echo $x;

    }


    function test1234()
    {   $x="dhiraj mishra";
        $z= $this->admodel->user_idbyname($x);
        print_r($z);
    }
}




