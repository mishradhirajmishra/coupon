<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store_ch extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mstore');
        $this->load->helper('url');
        $this->load->helper('sendsms');
        $this->load->helper('form');


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

            redirect(base_url() . 'index.php/store/login', 'refresh');
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
        redirect(base_url() . 'index.php/Store/login', 'refresh');
    }

    public function getslogin()
    {
        $store = $this->input->post('store');
        $name = $this->input->post('sname');
        $pass = $this->input->post('password');
        $x = $this->mstore->m_st_login($store);


        $user_data = array('st_id' => $store, 'user_role' => "store", 'loged_in' => true);
        $this->session->set_userdata($user_data);

        if ($x["user"] == $name && $x["pass"] == $pass) {
            redirect(base_url() . 'index.php/Store', 'refresh');
        } else {
            redirect(base_url() . 'index.php/Store/login', 'refresh');
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
            redirect(base_url() . 'index.php/store/login', 'refresh');
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
    function add_store()
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
            $store_desc = $this->input->post('store_desc');
            $store_add = $this->input->post('store_add');
            $id = $_SESSION['st_id'];
            $mo = $this->input->post('mo_no');
            $email = $this->input->post('email');
            $data['message'] = 0;
            if (isset($store_name)) {
                if ($h <= 400 && $w <= 750) {
                    $this->mstore->m_update_store($id, $store_image, $store_desc, $store_add, $mo, $email);
                    $data['message'] = 2;
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

    function update_store_image()
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

}





