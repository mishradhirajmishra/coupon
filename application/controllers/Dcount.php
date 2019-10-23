<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dcount extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mstore');
        $this->load->helper('url');
        $this->load->helper('sendsms');
        $this->load->helper('form');
         $this->load->model('admodel');


    }

    public function index()
    {

        $this->load->helper('url');
        if ($_SESSION['user_role'] == 'store') {
            $data['s_des'] = $this->mstore->m_st_login($_SESSION['st_id']);
            $data['store'] = $this->mstore->m_total_store();
            $data['user'] = $this->mstore->m_total_user();
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $this->load->view('store/index', $data);
            $this->load->view('store/footer');
        } else {
            $_SESSION['user_role'] = "";

            redirect(base_url() . 'index.php/dcount/login', 'refresh');
        }
    }

    function login()
    {

        $this->load->view('store/slogin');

    }

    function manage_ac()
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data["message"] = 0;
        $data['s_des'] = $this->mstore->m_st_login($_SESSION['st_id']);
        $this->load->view('store/manage_ac', $data);
        $this->load->view('store/footer');
    }

    function update_ac()
    {
        $name = $this->input->post('name');
        $pass = $this->input->post('pass');
        if ($name) {
            $this->mstore->st_update_ac($_SESSION['st_id'], $name, $pass);
            $data["message"] = 1;
        }
        $this->load->view('store/header');
        $this->load->view('store/sidebar');

        $data['s_des'] = $this->mstore->m_st_login($_SESSION['st_id']);
        $this->load->view('store/manage_ac', $data);
        $this->load->view('store/footer');
    }


    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'index.php/dcount/login', 'refresh');
    }

    public function getslogin()
    {
        $store = $this->input->post('store');
        $name = $this->input->post('sname');
        $pass = $this->input->post('password');
        $x = $this->mstore->m_st_login($store);


        $user_data = array('st_id' => $store, 'user_role' => "store", 'loged_in' => true);
        $this->session->set_userdata($user_data);

        if ($x["mo_no"] == $name && $x["pass"] == $pass) {
            redirect(base_url() . 'index.php/dcount', 'refresh');
        } else {
            redirect(base_url() . 'index.php/dcount/login', 'refresh');
        }

    }



    /****************************DASHBORD**************************************/
    function dashboard()
    {
        if ($_SESSION['user_role'] == 'store') {
            $data['store'] = $this->mstore->m_total_store();
            $data['user'] = $this->mstore->m_total_user();
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $this->load->view('store/index', $data);
            $this->load->view('store/footer');
        }
    }

    /****************************CATEGORY**************************************/
    function add_category()
    {
        if ($_SESSION['user_role'] == 'store') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $cat_name = $this->input->post('cat_name');
            $cat_type = $this->input->post('cat_type');
            $this->upload->do_upload('cat_image');
            $d = $this->upload->data();
            $cat_image = $d['file_name'];
            $h = $d['image_height'];
            $w = $d['image_width'];
            $cat_desc = $this->input->post('cat_desc');
            $data['message'] = 0;
            if (isset($cat_name)) {
                if ($h <= 300 && $w <= 480) {
                    $this->mstore->m_add_category($cat_name, $cat_type, $cat_image, $cat_desc);
                    $data['message'] = 1;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['category'] = $this->mstore->list_category();
            $this->load->view('store/category', $data);
            $this->load->view('store/footer');
        }
    }

    function edit_category($x = "")
    {

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->mstore->list_category2($x);
        $this->load->view('store/update_category', $data);
        $this->load->view('store/footer');
    }

    function update_category()
    {
        if ($_SESSION['user_role'] == 'store') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $cat_name = $this->input->post('cat_name');
            $cat_type = $this->input->post('cat_type');
            $this->upload->do_upload('cat_image');
            $d = $this->upload->data();
            $cat_image = $d['file_name'];
            $h = $d['image_height'];
            $w = $d['image_width'];
            $cat_desc = $this->input->post('cat_desc');
            $cat_status = $this->input->post('ch_status');
            $id = $this->input->post('cat_id');
            $data['message'] = 0;
            if (isset($cat_name)) {
                if ($h <= 300 && $w <= 480) {
                    $this->mstore->m_update_category($id, $cat_name, $cat_type, $cat_image, $cat_desc, $cat_status);
                    $data['message'] = 2;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['category'] = $this->mstore->list_category();
            $this->load->view('store/category', $data);
            $this->load->view('store/footer');
        }
    }

    function delete_category($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['del'] = $this->mstore->m_delete_category($x);
        $data['message'] = 3;
        $data['category'] = $this->mstore->list_category();
        $this->load->view('store/category', $data);
        $this->load->view('store/footer');

    }


    /****************************STORE**************************************/
    function add_store1()
    {
        if ($_SESSION['user_role'] == 'store') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $store_name = $this->input->post('store_name');
            $cat_name = $this->input->post('cat_name');
            $store_type = $this->input->post('store_type');
            $this->upload->do_upload('store_image');
            $s = $this->upload->data();
            $store_image = $s['file_name'];
            $h = $s['image_height'];
            $w = $s['image_width'];
            $store_desc = $this->input->post('store_desc');
            $store_loc = $this->input->post('store_loc');
            $store_add = $this->input->post('store_add');

            $mo = $this->input->post('mo_no');
            $email = $this->input->post('email');
            $map = $this->input->post('map');
            $data['message'] = 0;
            if (isset($store_name)) {
                if ($h <= 400 && $w <= 750) {
                    $this->mstore->m_add_store($store_name, $cat_name, $store_type, $store_image, $store_desc, $store_loc, $store_add, $mo, $email, $map);
                    $data['message'] = 1;

                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['location'] = $this->mstore->list_location();
            $data['category'] = $this->mstore->list_category();
            $data['store'] = $this->mstore->list_store();
            $this->load->view('store/store', $data);
            $this->load->view('store/footer');
        }
    }


    function st_update()
    {

        if ($_SESSION['user_role'] == 'store') {
            $data['store_list'] = $this->mstore->m_st_login($_SESSION['st_id']);

            $data['store'] = $this->mstore->m_total_store();
            $data['user'] = $this->mstore->m_total_user();
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $this->load->view('store/update_store', $data);
            $this->load->view('store/footer');
        } else {
            $_SESSION['user_role'] = "";
            redirect(base_url() . 'index.php/dcount/login', 'refresh');
        }
    }

    function update_store_image()
    {
        if ($_SESSION['user_role'] == 'store') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload('store_image');
            $s = $this->upload->data();
            $store_image = $s['file_name'];
            $h = $s['image_height'];
            $w = $s['image_width'];
                $id = $_SESSION['st_id'];
                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$store_image;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 750;
                $config['height']       = 400;
                if(($h-400)>0){ $config['x_axis'] = ($h-400)/2;}else{ $config['x_axis'] = 0;}
                if( ($w-750) >0){$config['y_axis'] = ($w-750)/2;}else{$config['y_axis'] = 0;} 
                
                $this->load->library('image_lib', $config);
                
                $this->image_lib->crop();
                
              /*__________________________________*/
          if($store_image=="");
            {
            $this->mstore->m_update_store_image($id, $store_image);
            }
            $data['message'] = 0;
			
			        $data['store_list'] = $this->mstore->m_st_login($_SESSION['st_id']);
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $this->load->view('store/update_store', $data);
            $this->load->view('store/footer');
        }
    }
    
    /************************************************/
     function update_store()
    {
        if ($_SESSION['user_role'] == 'store') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload('store_image');
            $s = $this->upload->data();
            $h = $s['image_height'];
            $w = $s['image_width'];
            $store_image = $s['file_name'];
            if($store_image){
        /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$store_image;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 750;
                $config['height']       = 400;
                if(($h-400)>0){ $config['y_axis'] = ($h-400)/2;}else{ $config['y_axis'] = 0;}
                if($w-750>0){$config['x_axis'] = ($w-750)/2;}else{$config['x_axis'] = 0;} 

                $this->load->library('image_lib', $config);
                
                $this->image_lib->crop();
                
              /*__________________________________*/
            }
            $store_desc = $this->input->post('store_desc');
            $store_add = $this->input->post('store_add');
            $id = $_SESSION['st_id'];
            $mo = $this->input->post('mo_no');
            $email = $this->input->post('email');
            $data['message'] = 0;
          
               
                    $this->mstore->m_update_store($id, $store_image, $store_desc, $store_add, $mo, $email);
                    $data['message'] = 2;


            $data['store_list'] = $this->mstore->m_st_login($_SESSION['st_id']);

            $data['store'] = $this->mstore->m_total_store();
            $data['user'] = $this->mstore->m_total_user();
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $this->load->view('store/update_store', $data);
            $this->load->view('store/footer');
        }
    }

    
    /*&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&*/


    function edit_store($x = "")
    {

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['location'] = $this->mstore->list_location();
        $data['category'] = $this->mstore->list_category();
        $data['store_list'] = $this->mstore->list_store2($x);
        $this->load->view('store/update_store', $data);
        $this->load->view('store/footer');
    }

    function update_store_image1()
    {
        if ($_SESSION['user_role'] == 'store') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->upload->do_upload('store_image2');
            $s = $this->upload->data();
            $h = $s['image_height'];
            $w = $s['image_width'];
            $store_image2 = $s['file_name'];
            $data['message'] = 0;
            $id = $this->input->post('st_id');

            if ($h <= 400 && $w <= 750) {
                $this->mstore->m_update_store_image($id, $store_image2);
                $data['message'] = 2;
            } else {
                $data['message'] = 4;
            }

            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['location'] = $this->mstore->list_location();
            $data['category'] = $this->mstore->list_category();
            $data['store'] = $this->mstore->list_store();
            $this->load->view('store/store', $data);
            $this->load->view('store/footer');
        }
    }

    function edit_store_image($x = "")
    {

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['location'] = $this->mstore->list_location();
        $data['category'] = $this->mstore->list_category();
        $data['store_list'] = $this->mstore->list_store2($x);
        $this->load->view('store/update_store_image', $data);
        $this->load->view('store/footer');
    }

    function delete_store($x = "")
    {
        $data['message'] = 3;
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['del'] = $this->mstore->m_delete_store($x);
        $data['store'] = $this->mstore->list_store();
        $this->load->view('store/store', $data);
        $this->load->view('store/footer');

    }

    /****************************LOCATION**************************************/
    function add_location()
    {
        if ($_SESSION['user_role'] == 'store') {
            $location_name = $this->input->post('location_name');
            $city = $this->input->post('city');
            $area = $this->input->post('area');
            $pin = $this->input->post('pin');
            $subarea = $this->input->post('subarea');
            $sector = $this->input->post('sector');
            $data['message'] = 0;
            if (isset($location_name)) {
                $data['message'] = 1;
                $this->mstore->m_add_location($location_name, $city, $area, $pin, $subarea, $sector);
            }
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['location'] = $this->mstore->list_location();
            $this->load->view('store/location', $data);
            $this->load->view('store/footer');
        }
    }

    function update_location()
    {
        if ($_SESSION['user_role'] == 'store') {
            $location_name = $this->input->post('location_name');
            $city = $this->input->post('city');
            $area = $this->input->post('area');
            $pin = $this->input->post('pin');
            $subarea = $this->input->post('subarea');
            $sector = $this->input->post('sector');
            $id = $this->input->post('loc_id');
            $data['message'] = 0;
            if (isset($location_name)) {
                $this->mstore->m_update_location($id, $location_name, $city, $area, $pin, $subarea, $sector);
                $data['message'] = 2;
            }
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['location'] = $this->mstore->list_location();
            $this->load->view('store/location', $data);
            $this->load->view('store/footer');
        }
    }


    function edit_location($x = "")
    {

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['location_list'] = $this->mstore->list_location2($x);
        $this->load->view('store/update_location', $data);
        $this->load->view('store/footer');
    }

    function delete_location($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['message'] = 3;
        $data['del'] = $this->mstore->m_delete_location($x);
        $data['location'] = $this->mstore->list_location();
        $this->load->view('store/location', $data);
        $this->load->view('store/footer');

    }


    /****************************COUPON**************************************/


    function add_coupon()
    {
        if ($_SESSION['user_role'] == 'store') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $dis = $this->input->post('dis');
            $coupon_name = $this->input->post('coupon_name');
            $store_name = $_SESSION['st_id'];
            $coupon_code = $this->input->post('coupon_code');
            $this->upload->do_upload('coupon_image');
            $c = $this->upload->data();
            $coupon_image = $c['file_name'];
            $h = $c['image_height'];
            $w = $c['image_width'];
            $expiry_date = $this->input->post('expiry_date');
            $coupon_desc = $this->input->post('coupon_desc');
            $deal = $this->input->post('deal');
            $featured = $this->input->post('featured');
            $coupon_image = "dcountnow.png";
            $data['message'] = 0;
            if (isset($coupon_name)) {
                if ($h <= 130 && $w <= 230) {
                    $this->mstore->m_add_coupon($dis, $coupon_name, $store_name, $coupon_code, $coupon_image, $expiry_date, $coupon_desc, $deal, $featured);
                    $data['message'] = 1;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['coupon'] = $this->mstore->list_coupon();
            $data['store'] = $this->mstore->list_store();
            $this->load->view('store/coupon', $data);
            $this->load->view('store/footer');
        }
    }

    function update_coupon()
    {
        if ($_SESSION['user_role'] == 'store') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $dis = $this->input->post('dis');
            $coupon_name = $this->input->post('coupon_name');
            $store_name = $_SESSION['st_id'];
            $coupon_code = $this->input->post('coupon_code');
            $this->upload->do_upload('coupon_image');
            $c = $this->upload->data();
            $h = $c['image_height'];
            $w = $c['image_width'];
            $coupon_image = $c['file_name'];
            $expiry_date = $this->input->post('expiry_date');
            $coupon_desc = $this->input->post('coupon_desc');
            $deal = $this->input->post('deal');
            $featured = $this->input->post('featured');
            $id = $this->input->post('cop_id');
            $data['message'] = 0;
            $coupon_image = "dcountnow.png";
            if (isset($coupon_name)) {
                if ($h <= 130 && $w <= 230) {
                    $this->mstore->m_update_coupon($dis, $id, $coupon_name, $store_name, $coupon_code, $coupon_image, $expiry_date, $coupon_desc, $deal, $featured);
                    $data['message'] = 2;
                } else {
                    $data['message'] = 4;
                }
            }

            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['coupon'] = $this->mstore->list_coupon();
            $data['store'] = $this->mstore->list_store();
            $this->load->view('store/coupon', $data);
            $this->load->view('store/footer');
        }
    }


    function edit_coupon($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store'] = $this->mstore->list_store();
        $data['coupon_list'] = $this->mstore->list_coupon2($x);
        $this->load->view('store/update_coupon', $data);
        $this->load->view('store/footer');
    }

    function delete_coupon($x = "")
    {
        $data['message'] = 3;
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['del'] = $this->mstore->m_delete_coupon($x);
        $data['coupon'] = $this->mstore->list_coupon();
        $this->load->view('store/coupon', $data);
        $this->load->view('store/footer');

    }


    /****************************LANDING**************************************/
    function add_landing()
    {
        $this->load->library('email');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $name = $this->input->post('lname');
        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $this->upload->do_upload('image');
        $i = $this->upload->data();
        $image = $i['file_name'];
        $this->upload->do_upload('vidios');
        $v = $this->upload->data();
        $vidios = $v['file_name'];

        if (isset($cat_name)) {
            $this->mstore->add_landing($name, $mobile, $email, $image, $vidios);
            $this->email->send();
        }
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $this->load->view('store/landing');
        $this->load->view('store/footer');
        /******************email*************/
        $to = "dhiraj.siswa.mishra@gmail.com";

        $this->load->library('email');
        $config = Array(
            'mailtype' => 'html',
        );
        $this->email->initialize($config);
        $this->email->from('dcountnow@gmail.com', 'dcountnow');
        $this->email->to($to);
        $this->email->subject("test");
        $msg = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Dcountnow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div>
<img style="border-radius: 16px; background-color: dodgerblue;height: 75px; margin-top: 10px; margin-left: 10px;" src="http://dcountnow.com/assets/img/Dcount.png">
<br>
<br>
<p style=" margin-left: 200px;Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Thank you for regestring with us. Once we will get online, will let you know</p> 
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-right: 100px;float:right">From:dcountnow.com </p>
<br/><br/>

<div style="text-align:center;border-top: 1px solid black; padding-top: 12px;">
					© All rights are reserved to DCOUNT NOW 2017-18 : <span> Powered by : Irebel Webtech</span><br><br>
					
					<a href="https://www.facebook.com/dcountnow/"><img class="imgch" src="http://dcountnow.com/assets/fb.png"></a>
					<a href="https://www.instagram.com/dcount_now/"><img class="imgch" src="http://dcountnow.com/assets/in.png"></a>
					<a href="https://twitter.com/Dcount_Now"><img class="imgch" src="http://dcountnow.com/assets/tw.png"></a>
				</div>
</div>
</body>
</html>';
        $this->email->message($msg);
        if ($result = $this->email->send()) {
            echo "sent";
        } else {
            echo "not sent";

        }


        /*******************************/
    }


    function reg_user()
    {
        $data['luser'] = $this->mstore->list_landing();
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $this->load->view('store/userlist', $data);
        $this->load->view('store/footer');
    }

    function contact_us()
    {
        if ($_SESSION['user_role'] == 'store') {
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['contact'] = $this->mstore->list_contact();
            $this->load->view('store/contact', $data);
            $this->load->view('store/footer');
        }
    }

    function code_reg_user()
    {
        $data['luser'] = $this->mstore->list_user($_SESSION['st_id']);
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $this->load->view('store/codeuserlist', $data);
        $this->load->view('store/footer');
    }

    function store_comment()
    {
        $data['message'] = 0;
        $data['comment'] = $this->mstore->m_admin_comment();
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $this->load->view('store/comment', $data);
        $this->load->view('store/footer');
    }


    function delete_comment($x = "")
    {
        $data['message'] = 3;
        $data['del'] = $this->mstore->m_delete_comment($x);
        $data['comment'] = $this->mstore->m_admin_comment();
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $this->load->view('store/comment', $data);
        $this->load->view('store/footer');

    }

    function edit_comment($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['com_list'] = $this->mstore->m_list_comment_byid($x);
        $this->load->view('store/update_comment', $data);
        $this->load->view('store/footer');
    }

    function update_comment()
    {
        if ($_SESSION['user_role'] == 'store') {
            $cat_status = $this->input->post('ch_status');
            $id = $this->input->post('id');
            $data['message'] = 0;
            if (isset($cat_status)) {
                $this->mstore->m_update_comment2($x, $cat_status);
                $data['message'] = 2;
            }
            $data['comment'] = $this->mstore->m_admin_comment();
            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $this->load->view('store/comment', $data);
            $this->load->view('store/footer');
        }
    }


    function img_test()
    {
        $this->load->library('image_lib');
        /*file upload*/
        $config['upload_path'] = './uploads2/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('cat_image');
        $data['data'] = $d = $this->upload->data();
        $cat_image = $d['file_name'];
        $raw = $d['raw_name'];
        $ext = $d['file_ext'];
        $cat_image_new = $raw . '_thumb' . $ext;
        if ($cat_image != "") {
            $this->mstore->m_add_img_test($cat_image, $cat_image_new);
        }
        /********************************/
        if ($cat_image != "") {
            $config['width'] = 75;
            $config['height'] = 50;
            $config['maintain_ratio'] = FALSE;
            $config['source_image'] = './uploads2/' . $cat_image;
            $config['create_thumb'] = TRUE;
            $this->image_lib->initialize($config);

            if (!$this->image_lib->resize()) {
                echo $this->image->display_errors();

            }
        }

        /*****************************/
        $this->load->view('store/header');
        $data['img'] = $this->mstore->m_test_img();
        $this->load->view('store/sidebar');
        $this->load->view('store/test_img', $data);
        $this->load->view('store/footer');
    }

    function img()
    {

        $this->load->library('image_lib');
        $config['width'] = 75;
        $config['height'] = 50;
        $config['source_image'] = './uploads2/sample3.jpg';
        $config['create_thumb'] = TRUE;
        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo $this->image->display_errors();

        }

    }
    
    /* register store*/
        function addstore()
    {

            $store_name = $this->input->post('store_name');
            $store_pass = $this->input->post('store_pass');
            $cat_name = $this->input->post('cat_name');
            $store_loc = $this->input->post('store_loc');
            $mo = $this->input->post('mo_no');
            $m=$this->admodel->single_store_by_mo($mo);
            $email = $this->input->post('email');
            $data['message'] = 0;
            if (isset($store_name)) {
                if (!$m) {

                    $this->admodel->m_add_store_itself($store_name,$store_pass, $cat_name, $store_loc, $mo, $email);
                        $data['message'] = 1;
            /*__________message to dcount_________________*/
            $msg = "Store: " . $store_name . " Added by vender itself Mo no ". $mo;
            $this->load->helper('sendsms_helper');
            $mob=7379404444;
            $to = 91 . $mob;
            $x = sendsms($to, $msg, $sendondate = NULL);
                    
            /*____________/message to store________________*/
                    
            $msg2 = " Thank You for regestring with  Dcount now . Your passward is:$store_pass";
            $to1 = 91 . $mo;
            $x = sendsms($to1, $msg2, $sendondate = NULL);
            /*______________email to store for login credential__________________________*/
            
            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/


            $this->load->library('email');
            $config = Array('mailtype' => 'html',);
            $this->email->initialize($config);
            $this->email->from('dcountnow@gmail.com', 'dcountnow');
            $this->email->to($email);
            $this->email->subject("DcountNow Store Credential");
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
<br >Your Name is: <span style="color:red">' . $store_name . '</span> <br> Password is :<span style="color:red">' . $store_pass . '</span></p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 20px;line-height: 25px;Margin-bottom: 25px">P.S. We Hope You Like Deals!!!!</p> 
<br>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Watch your e-mail for the inside scoop on exclusive deals and bargains, coupons, what’s new and lots more!</p> 
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-bottom: 25px">Cheers!!!</p> 

<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 15px;line-height: 25px;Margin-right: 100px;float:right">-Dcount Now Team!</p>
<br/><br/>
  <p class="lead" style="text-align:center;" >
    <a  style="background-color: blue;padding: 10px;color: white;text-decoration: none;"  href="http://dcountnow.com/index.php/dcount/login_from_email/' . $store_name . '">Manage Your Account</a>
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
               
                redirect(base_url() . 'index.php/dcount/thanks', 'refresh');
            } else {

            }
            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
                
  
            /*____________________________________________________________________________*/
                } else {
                   if($m){
                      $data['message'] = 6;  
                    }else{
                    $data['message'] = 4;}
                }
            }
 
            $data['location'] = $this->admodel->list_location();
            $data['category'] = $this->admodel->list_category();
            $data['store'] = $this->admodel->list_store_admin();
            $this->load->view('store/store_reg', $data);
            $this->load->view('admin/footer');
        }
        
        function thanks(){ $this->load->view('store/thanks');}
          function addstore_old()
    {
     
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $store_name = $this->input->post('store_name');
            $store_pass = $this->input->post('store_pass');
            $cat_name = $this->input->post('cat_name');
            $store_type = $this->input->post('store_type');
            $this->upload->do_upload('store_image');
            $s = $this->upload->data();
            $store_image = $s['file_name'];
            $h = $s['image_height'];
            $w = $s['image_width'];
            $store_desc = $this->input->post('store_desc');
            $store_loc = $this->input->post('store_loc');
            $store_add = $this->input->post('store_add');

            $mo = $this->input->post('mo_no');
            $m=$this->admodel->single_store_by_mo($mo);
            $email = $this->input->post('email');
            $map = $this->input->post('map');
               $user= $_SESSION ['username'];
            $data['message'] = 0;
            if (isset($store_name)) {
                if ($h <= 400 && $w <= 750 && !$m) {

                    $this->admodel->m_add_store_itself($store_name,$store_pass, $cat_name, $store_type, $store_image, $store_desc, $store_loc, $store_add, $mo, $email, $map,$user);
                        $data['message'] = 1;
                    /*__________message_________________*/
                            $msg = "Store: " . $store_name . " Added by vender itself Mo no ". $mo;
       
        $this->load->helper('sendsms_helper');
        $mob=7379404444;
        $to = 91 . $mob;
        $x = sendsms($to, $msg, $sendondate = NULL);
                    
                    
                    /*____________/message________________*/
                    
                       $msg2 = " Thank You for regestring with  Dcount now ";
                       $to1 = 91 . $mo;
                       $x = sendsms($to1, $msg2, $sendondate = NULL);
                    /*________________________________________*/
                
  

                } else {
                   if($m){
                      $data['message'] = 6;  
                    }else{
                    $data['message'] = 4;}
                }
            }
 
            $data['location'] = $this->admodel->list_location();
            $data['category'] = $this->admodel->list_category();
            $data['store'] = $this->admodel->list_store_admin();
            $this->load->view('store/store_reg', $data);
            $this->load->view('admin/footer');
        }
        
        /* mobile verification*/
        
               function verifymo()
    {
        $this->load->helper('sendsms_helper');
        $id = $this->input->post('id');
        $mobile_no = $this->input->post('mobile_no');
        $recived_otp = $this->input->post('recived_otp');
        $send_otp = $this->input->post('send_otp');
        if ( $send_otp && !$recived_otp ) {
          $msg2 = "Store Varification otp is $send_otp ";
            $to = 91 . $mobile_no;
            $x = sendsms($to, $msg2, $sendondate = NULL);
            echo 1;
        } elseif ($recived_otp == $send_otp) {
           $this->mstore->m_verify_st_mo($id,$mobile_no);
            echo 2;

        } else {
            echo 3;
        }


    }
    
            /*email verification*/
            
                function login_from_email($name = "")
    {

        $this->mstore->m_verify_st_email($name);
        $st=$this->mstore->m_verify_st_email($name);
        $store=$st['st_id'];
        $user_data = array('st_id' => $store, 'user_role' => "store", 'loged_in' => true);
        $this->session->set_userdata($user_data);
        redirect(base_url() . 'index.php/dcount', 'refresh');

    }
            /**************************************************************************/
        
               function verifyemail()
    {
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $recived_otp = $this->input->post('recived_otp');
        $send_otp = $this->input->post('send_otp');
        if (!$recived_otp && $send_otp) {
                        /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/


            $this->load->library('email');
            $config = Array(
                'mailtype' => 'html',
            );
            $this->email->initialize($config);
            $this->email->from('dcountnow@gmail.com', 'dcountnow');
            $this->email->to($email);
            $this->email->subject("DcountNow Email verification");
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
  <p >OTP:<?php echo $send_otp ?>
  
    
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

            /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
            echo 1;
        } elseif ($recived_otp == $send_otp) {
           $this->mstore->m_verify_st_email($id,$mobile_no);
            echo 2;

        } else {
            echo 3;
        }


    }
    
    /**************************STORE GALLERY***************************/
           function edit_store_gal($x = "")
    {
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*________________first gallery immage______________*/
    function change_gal_img1($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img1', $data);
        $this->load->view('store/footer');
    }

    function update_gallery1_img($x = "")
    {   
        $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal1');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        
        
        
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        
            $this->admodel->m_update_gal_img1($id, $img1);


        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*________________2nd gallery immage______________*/
    function change_gal_img2($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img2', $data);
        $this->load->view('store/footer');
    }

    function update_gallery2_img($x = "")
    {
         $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal2');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
    
            $this->admodel->m_update_gal_img2($id, $img1);


        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*________________3rd gallery immage______________*/
    function change_gal_img3($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img3', $data);
        $this->load->view('store/footer');
    }

    function update_gallery3_img($x = "")
    {
         $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal3');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;

            $this->admodel->m_update_gal_img3($id, $img1);


        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________4 gallery immage______________*/
    function change_gal_img4($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img4', $data);
        $this->load->view('store/footer');
    }

    function update_gallery4_img($x = "")
    {
         $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal4');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;

            $this->admodel->m_update_gal_img4($id, $img1);


        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________5 gallery immage______________*/
    function change_gal_img5($x = "")
    {
        
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img5', $data);
        $this->load->view('store/footer');
    }

    function update_gallery5_img($x = "")
    {
         $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal5');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;

            $this->admodel->m_update_gal_img5($id, $img1);


        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________6 gallery immage______________*/
    function change_gal_img6($x = "")
    {
         $x =$_SESSION['st_id'];
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img6', $data);
        $this->load->view('store/footer');
    }

    function update_gallery6_img($x = "")
    {    $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal6');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
     
            $this->admodel->m_update_gal_img6($id, $img1);
 

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________7 gallery immage______________*/
    function change_gal_img7($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img7', $data);
        $this->load->view('store/footer');
    }

    function update_gallery7_img($x = "")
    {   $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal7');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
     
            $this->admodel->m_update_gal_img7($id, $img1);


        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________8 gallery immage______________*/
    function change_gal_img8($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img8', $data);
        $this->load->view('store/footer');
    }

    function update_gallery8_img($x = "")
    {    $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal8');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
     
            $this->admodel->m_update_gal_img8($id, $img1);


        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________9 gallery immage______________*/
    function change_gal_img9($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('store/gal_img9', $data);
        $this->load->view('store/footer');
    }

    function update_gallery9_img($x = "")
    {    $x =$_SESSION['st_id'];
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal9');
        $s_img1 = $this->upload->data();
/**********************************************/
                $img1 = $s_img1['file_name'];
                $s_img1_h = $s_img1['image_height'];
                $s_img1_w = $s_img1['image_width'];                
                /*______________________________*/
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/'.$img1;
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 980;
                $config['height']       = 380;
                if(($s_img1_h-380)>0){ $config['x_axis'] = ($s_img1_h-380)/2;}else{ $config['x_axis'] = 0;}
                if(($s_img1_w-980)>0){$config['y_axis'] = ($s_img1_w-980)/2;}else{$config['y_axis'] = 0;}            
                $this->load->library('image_lib', $config);                
                $this->image_lib->crop();               
              /*__________________________________*/
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
     
            $this->admodel->m_update_gal_img9($id, $img1);
  

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('store/store_gal', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/


    /*_______________________________________________________*/
    function edit_slider($x = "")
    {
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('store/update_slider', $data);
        $this->load->view('store/footer');
    }

    /*________________first slider immage______________*/
    function update_slider1($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('store/slider_img1', $data);
        $this->load->view('store/footer');
    }

    function update_slider1_img($x = "")
    {
        $id = $this->input->post('cat_id');
        $url = $this->input->post('s_url');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('s_img1');
        $s_img1 = $this->upload->data();
        $img1 = $s_img1['file_name'];
        $s_img1_h = $s_img1['image_height'];
        $s_img1_w = $s_img1['image_width'];
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        if ($s_img1_h <= 600 && $s_img1_w <= 1600) {
            $this->admodel->m_update_s_img1($id, $img1,$url);
            $data['img1_msg'] = 1;
            $data['img1_msg'] = 1;
        } else {
            $data['img1_msg'] = 2;
        }

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('store/update_slider', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*________________second slider immage______________*/
    function update_slider2($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('store/slider_img2', $data);
        $this->load->view('store/footer');
    }

    function update_slider2_img($x = "")
    {
        $id = $this->input->post('cat_id');
         $url = $this->input->post('s_url');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('s_img2');
        $s_img1 = $this->upload->data();
        $img1 = $s_img1['file_name'];
        $s_img1_h = $s_img1['image_height'];
        $s_img1_w = $s_img1['image_width'];
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        if ($s_img1_h <= 600 && $s_img1_w <= 1600) {
            $this->admodel->m_update_s_img2($id, $img1,$url);
            $data['img2_msg'] = 1;
            $data['img2_msg'] = 1;
        } else {
            $data['img2_msg'] = 2;
        }

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('store/update_slider', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*________________third slider immage______________*/
    function update_slider3($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('store/slider_img3', $data);
        $this->load->view('store/footer');
    }

    function update_slider3_img($x = "")
    {
        $id = $this->input->post('cat_id');
         $url = $this->input->post('s_url');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('s_img3');
        $s_img1 = $this->upload->data();
        $img1 = $s_img1['file_name'];
        $s_img1_h = $s_img1['image_height'];
        $s_img1_w = $s_img1['image_width'];
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        if ($s_img1_h <= 600 && $s_img1_w <= 1600) {
            $this->admodel->m_update_s_img3($id, $img1,$url);
            $data['img3_msg'] = 1;
            $data['img3_msg'] = 1;
        } else {
            $data['img3_msg'] = 2;
        }

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('store/update_slider', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*________________forth slider immage______________*/
    function update_slider4($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('store/slider_img4', $data);
        $this->load->view('store/footer');
    }

    function update_slider4_img($x = "")
    {
        $id = $this->input->post('cat_id');
         $url = $this->input->post('s_url');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('s_img4');
        $s_img1 = $this->upload->data();
        $img1 = $s_img1['file_name'];
        $s_img1_h = $s_img1['image_height'];
        $s_img1_w = $s_img1['image_width'];
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        if ($s_img1_h <= 600 && $s_img1_w <= 1600) {
            $this->admodel->m_update_s_img4($id, $img1,$url);
            $data['img4_msg'] = 1;
            $data['img4_msg'] = 1;
        } else {
            $data['img4_msg'] = 2;
        }

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('store/update_slider', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*________________fifth slider immage______________*/
    function update_slider5($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('store/slider_img5', $data);
        $this->load->view('store/footer');
    }

    function update_slider5_img($x = "")
    {
        $id = $this->input->post('cat_id');
        $url = $this->input->post('s_url');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('s_img5');
        $s_img1 = $this->upload->data();
        $img1 = $s_img1['file_name'];
        $s_img1_h = $s_img1['image_height'];
        $s_img1_w = $s_img1['image_width'];
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        if ($s_img1_h <= 600 && $s_img1_w <= 1600) {
            $this->admodel->m_update_s_img5($id, $img1,$url);
            $data['img5_msg'] = 1;
            $data['img5_msg'] = 1;
        } else {
            $data['img5_msg'] = 2;
        }

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('store/update_slider', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/
    /*________________sisth slider immage______________*/
    function update_slider6($x = "")
    {
        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('store/slider_img6', $data);
        $this->load->view('store/footer');
    }

    function update_slider6_img($x = "")
    {
        $id = $this->input->post('cat_id');
         $url = $this->input->post('s_url');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('s_img6');
        $s_img1 = $this->upload->data();
        $img1 = $s_img1['file_name'];
        $s_img1_h = $s_img1['image_height'];
        $s_img1_w = $s_img1['image_width'];
        $data['img1_msg'] = 0;
        $data['img2_msg'] = 0;
        $data['img3_msg'] = 0;
        $data['img4_msg'] = 0;
        $data['img5_msg'] = 0;
        $data['img6_msg'] = 0;
        if ($s_img1_h <= 600 && $s_img1_w <= 1600) {
            $this->admodel->m_update_s_img6($id, $img1,$url);
            $data['img6_msg'] = 1;
            $data['img6_msg'] = 1;
        } else {
            $data['img6_msg'] = 2;
        }

        $this->load->view('store/header');
        $this->load->view('store/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('store/update_slider', $data);
        $this->load->view('store/footer');
    }

    /*****************************************************/


    function update_slider()
    {
      

            $id = $this->input->post('cat_id');
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);

            /*first immage*/
            $f = $this->upload->do_upload('s_img1');
            $s_img1 = $f->upload->data();
            $img1 = $s_img1['file_name'];
            $s_img1_h = $s_img1['image_height'];
            $s_img1_w = $s_img1['image_width'];
            $data['img1_msg'] = 0;
            if ($s_img1_h <= 600 && $s_img1_w <= 1600) {
                $this->admodel->m_update_s_img1($id, $img1);
                $data['img1_msg'] = 1;
            } else {
                $data['img1_msg'] = 2;
            }

            /*second immage*/
            $s = $this->upload->do_upload('s_img2');
            $s_img2 = $s->upload->data();
            $img2 = $s_img2['file_name'];
            $s_img2_h = $s_img2['image_height'];
            $s_img2_w = $s_img2['image_width'];
            $data['img2_msg'] = 0;
            if ($s_img2_h <= 600 && $s_img2_w <= 1600) {
                $this->admodel->m_update_s_img2($id, $img2);
                $data['img2_msg'] = 1;
            } else {
                $data['img2_msg'] = 2;
            }


            /*third immage*/
            $t = $this->upload->do_upload('s_img3');
            $s_img3 = $t->upload->data();
            $img3 = $s_img1['file_name'];
            $s_img3_h = $s_img3['image_height'];
            $s_img3_w = $s_img3['image_width'];
            $data['img3_msg'] = 0;
            if ($s_img3_h <= 600 && $s_img3_w <= 1600) {
                $this->admodel->m_update_s_img3($id, $img3);
                $data['img3_msg'] = 1;
            } else {
                $data['img3_msg'] = 2;
            }

            /*forth immage*/
            $fo = $this->upload->do_upload('s_img4');
            $s_img4 = $fo->upload->data();
            $img4 = $s_img1['file_name'];
            $s_img4_h = $s_img4['image_height'];
            $s_img4_w = $s_img4['image_width'];
            $data['img4_msg'] = 0;
            if ($s_img4_h <= 600 && $s_img4_w <= 1600) {
                $this->admodel->m_update_s_img4($id, $img4);
                $data['img4_msg'] = 1;
            } else {
                $data['img4_msg'] = 2;
            }

            /*fifth immage*/
            $fi = $this->upload->do_upload('s_img5');
            $s_img5 = $fi->upload->data();
            $img5 = $s_img5['file_name'];
            $s_img5_h = $s_img5['image_height'];
            $s_img5_w = $s_img5['image_width'];
            $data['img5_msg'] = 0;
            if ($s_img5_h <= 600 && $s_img5_w <= 1600) {
                $this->admodel->m_update_s_img5($id, $img5);
                $data['img5_msg'] = 1;
            } else {
                $data['img5_msg'] = 2;
            }

            /*sixth immage*/
            $si = $this->upload->do_upload('s_img6');
            $s_img6 = $si->upload->data();
            $img6 = $s_img6['file_name'];
            $s_img6_h = $s_img6['image_height'];
            $s_img6_w = $s_img6['image_width'];
            $data['img6_msg'] = 0;
            if ($s_img5_h <= 600 && $s_img6_w <= 1600) {
                $this->admodel->m_update_s_img6($id, $img6);
                $data['img6_msg'] = 1;
            } else {
                $data['img6_msg'] = 2;
            }

            $this->load->view('store/header');
            $this->load->view('store/sidebar');
            $data['cat_list'] = $this->admodel->list_category2($id);
            $this->load->view('store/update_slider', $data);
            $this->load->view('store/footer');
        
    }
    

   /**************************END STORE GALLERY***************************/

}





