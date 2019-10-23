<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admodel');
        $this->load->helper('url');
        $this->load->helper('sendsms');
        $this->load->helper('form');
        $this->load->helper('sendsms_helper');


    }

    public function index()
    {

        $this->load->helper('url');
        if ($_SESSION['user_role'] == 'admin') {
            $data['store'] = $this->admodel->m_total_store();
            $data['user'] = $this->admodel->m_total_user();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/index', $data);
            $this->load->view('admin/footer');
        } else {
            $_SESSION['user_role'] = "";
            redirect(base_url() . 'index.php/login', 'refresh');
        }
    }

    function s_user($x = "")
    {
        if ($_SESSION['user_role'] == 'admin') {
            $data['st_name'] = $this->admodel->single_store($x);
            $data['luser'] = $this->admodel->list_user1($x);
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/s_user', $data);
            $this->load->view('admin/footer');
        }
    }
        function rs_user($x = "")
    {
        if ($_SESSION['user_role'] == 'admin') {
            $data['ref'] = $this->admodel->m_s_user_ref($x);
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/rs_user', $data);
            $this->load->view('admin/footer');
        }
    }
            function rs_user_excel($x = "")
    {
        if ($_SESSION['user_role'] == 'admin') {
            $data['ref'] = $this->admodel->m_s_user_ref($x);
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/rs_user', $data);
            $this->load->view('admin/footer');
        }
    }

    function c_user($x = "")
    {
        if ($_SESSION['user_role'] == 'admin') {
            $data['st_name'] = $this->admodel->single_store($x);
            $data['luser'] = $this->admodel->list_user1($x);
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/s_user', $data);
            $this->load->view('admin/footer');
        }
    }


    function subscriber()
    {
        if ($_SESSION['user_role'] == 'admin') {

            $data['store'] = $this->admodel->list_subscriber();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/subscriber', $data);
            $this->load->view('admin/footer');
        }
    }

    /****************************DASHBORD**************************************/
    function dashboard()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $data['store'] = $this->admodel->m_total_store();
            $data['user'] = $this->admodel->m_total_user();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/index', $data);
            $this->load->view('admin/footer');
        }
    }

    /****************************user**************************************/
            function edit_rs_user($x = "")
    {   $id = $this->input->post('id');
        $rid = $this->input->post('refer_id');
        $status = $this->input->post('status');
       
        $this->admodel->m_update_refuser( $id,$status);


        $data['cdfc']="cfdf";
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/update_rs_user', $data);
        $this->load->view('admin/footer');
    }
    
            function update_rs_user($x = "")
    {       $id = $this->input->post('id');
            $rid = $this->input->post('refer_id');
            $status = $this->input->post('status');
            if($status){
            $this->admodel->m_update_refuser( $id,$status);
              redirect(base_url() . 'index.php/admin/rs_user/277', 'refresh');
            }
        $data['cdfc']="cfdf";
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/update_rs_user', $data);
        $this->load->view('admin/footer');
    }
            /****************************MAIN SLIDER**************************************/
            
            
             function add_main_slider()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            
            $url = $this->input->post('url');
            
            $this->upload->do_upload('img_dsk');
            $dsk = $this->upload->data();
            $img_dsk = $dsk['file_name'];
            $dsk_h = $dsk['image_height'];
            $dsk_w = $dsk['image_width'];
            
            $this->upload->do_upload('img_mob');
            $mob = $this->upload->data();
            $img_mob = $mob['file_name'];
            $mob_h = $mob['image_height'];
            $mob_w = $mob['image_width'];
            
            
            
            $data['message'] = 0;
            if (isset($url)) {
                if ( $dsk_h <= 600 &&  $dsk_w <= 1600 && $mob_h <= 600 && $mob_w <= 680) {
                    $this->admodel->m_add_slider($img_dsk,$img_mob,$url);
                    $data['message'] = 1;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['slider'] = $this->admodel->m_list_slider();
            $this->load->view('admin/main_slider', $data);
            $this->load->view('admin/footer');
        }
    }

    function edit_main_slider($x = "")
    {

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['slider']=$this->admodel->m_list_slider_byid($x);
        $this->load->view('admin/update_main_slider', $data);
        $this->load->view('admin/footer');
    }
    function update_main_slider()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            
            $url = $this->input->post('url');
             $id = $this->input->post('id');
            
            $this->upload->do_upload('img_dsk');
            $dsk = $this->upload->data();
            $img_dsk = $dsk['file_name'];
            $dsk_h = $dsk['image_height'];
            $dsk_w = $dsk['image_width'];
            
            $this->upload->do_upload('img_mob');
            $mob = $this->upload->data();
            $img_mob = $mob['file_name'];
            $mob_h = $mob['image_height'];
            $mob_w = $mob['image_width'];
            
            if(!$img_mob){$mob_h= 600 ; $mob_w = 680;}
            if(!$img_dsk){$dsk_h= 600; $dsk_w = 1600;}
            
            $data['message'] = 0;
            if (isset($url)) {
                if ( $dsk_h <= 600 &&  $dsk_w <= 1600 && $mob_h <= 600 && $mob_w <= 680) {
                    $this->admodel-> m_update_slider($id,$img_dsk,$img_mob,$url);
                    $data['message'] = 2;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['slider'] = $this->admodel->m_list_slider();
            $this->load->view('admin/main_slider', $data);
            $this->load->view('admin/footer');
        }

    }
    
        function delete_main_slider($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['del'] = $this->admodel->m_delete_main_slider($x);
        $data['message'] = 3;
        $data['slider'] = $this->admodel->m_list_slider();
        $this->load->view('admin/main_slider', $data);
        $this->load->view('admin/footer');

    }
            
        
        
        /****************************CATEGORY**************************************/
    function add_category()
    {
        if ($_SESSION['user_role'] == 'admin') {
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
                    $this->admodel->m_add_category($cat_name, $cat_type, $cat_image, $cat_desc);
                    $data['message'] = 1;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['category'] = $this->admodel->list_category();
            $this->load->view('admin/category', $data);
            $this->load->view('admin/footer');
        }
    }

    function edit_category($x = "")
    {

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/update_category', $data);
        $this->load->view('admin/footer');
    }
    function update_category()
    {
        if ($_SESSION['user_role'] == 'admin') {
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
                    $this->admodel->m_update_category($id, $cat_name, $cat_type, $cat_image, $cat_desc, $cat_status);
                    $data['message'] = 2;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['category'] = $this->admodel->list_category();
            $this->load->view('admin/category', $data);
            $this->load->view('admin/footer');
        }
    }

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

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*________________first gallery immage______________*/
    function change_gal_img1($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img1', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery1_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal1');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img1($id, $img1);
            $data['img1_msg'] = 1;
            $data['img1_msg'] = 1;
        } else {
            $data['img1_msg'] = 2;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*________________2nd gallery immage______________*/
    function change_gal_img2($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img2', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery2_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal2');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img2($id, $img1);
            $data['img2_msg'] = 1;
            $data['img2_msg'] = 1;
        } else {
            $data['img2_msg'] = 2;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*________________3rd gallery immage______________*/
    function change_gal_img3($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img3', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery3_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal3');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img3($id, $img1);
            $data['img3_msg'] = 1;
        } else {
            $data['img3_msg'] = 2;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________4 gallery immage______________*/
    function change_gal_img4($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img4', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery4_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal4');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img4($id, $img1);
            $data['img4_msg'] = 1;
        } else {
            $data['img4_msg'] = 2;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________5 gallery immage______________*/
    function change_gal_img5($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img5', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery5_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal5');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img5($id, $img1);
            $data['img5_msg'] = 1;
        } else {
            $data['img3_msg'] = 5;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________6 gallery immage______________*/
    function change_gal_img6($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img6', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery6_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal6');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img6($id, $img1);
            $data['img6_msg'] = 1;
        } else {
            $data['img6_msg'] = 2;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________7 gallery immage______________*/
    function change_gal_img7($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img7', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery7_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal7');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img7($id, $img1);
            $data['img7_msg'] = 1;
        } else {
            $data['img7_msg'] = 2;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________8 gallery immage______________*/
    function change_gal_img8($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img8', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery8_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal8');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img8($id, $img1);
            $data['img8_msg'] = 1;
        } else {
            $data['img3_msg'] = 8;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*****************************************************/
    /*________________9 gallery immage______________*/
    function change_gal_img9($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/gal_img9', $data);
        $this->load->view('admin/footer');
    }

    function update_gallery9_img($x = "")
    {
        $id = $this->input->post('st_id');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        $this->upload->do_upload('gal9');
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
        $data['img7_msg'] = 0;
        $data['img8_msg'] = 0;
        $data['img9_msg'] = 0;
        if ($s_img1_h <= 380 && $s_img1_w <= 980) {
            $this->admodel->m_update_gal_img9($id, $img1);
            $data['img9_msg'] = 1;
        } else {
            $data['img3_msg'] = 2;
        }

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store_list'] = $this->admodel->list_store2($id);
        $this->load->view('admin/store_gal', $data);
        $this->load->view('admin/footer');
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

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('admin/update_slider', $data);
        $this->load->view('admin/footer');
    }

    /*________________first slider immage______________*/
    function update_slider1($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('admin/slider_img1', $data);
        $this->load->view('admin/footer');
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

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('admin/update_slider', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*________________second slider immage______________*/
    function update_slider2($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('admin/slider_img2', $data);
        $this->load->view('admin/footer');
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

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('admin/update_slider', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*________________third slider immage______________*/
    function update_slider3($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('admin/slider_img3', $data);
        $this->load->view('admin/footer');
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

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('admin/update_slider', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*________________forth slider immage______________*/
    function update_slider4($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('admin/slider_img4', $data);
        $this->load->view('admin/footer');
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

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('admin/update_slider', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*________________fifth slider immage______________*/
    function update_slider5($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('admin/slider_img5', $data);
        $this->load->view('admin/footer');
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

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('admin/update_slider', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/
    /*________________sisth slider immage______________*/
    function update_slider6($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($x);
        $this->load->view('admin/slider_img6', $data);
        $this->load->view('admin/footer');
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

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['cat_list'] = $this->admodel->list_category2($id);
        $this->load->view('admin/update_slider', $data);
        $this->load->view('admin/footer');
    }

    /*****************************************************/


    function update_slider()
    {
        if ($_SESSION['user_role'] == 'admin') {

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

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['cat_list'] = $this->admodel->list_category2($id);
            $this->load->view('admin/update_slider', $data);
            $this->load->view('admin/footer');
        }
    }


    function delete_category($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['del'] = $this->admodel->m_delete_category($x);
        $data['message'] = 3;
        $data['category'] = $this->admodel->list_category();
        $this->load->view('admin/category', $data);
        $this->load->view('admin/footer');

    }


    /****************************STORE**************************************/
    
    
        function add_store_c()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['location'] = $this->admodel->list_location();
            $data['category'] = $this->admodel->list_category();
            $data['store'] = $this->admodel->list_store_admin();
            $this->load->view('admin/store_c', $data);
            $this->load->view('admin/footer');
        }
    }
    function add_store()
    {
        if ($_SESSION['user_role'] == 'admin') {
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
            $m=$this->admodel->single_store_by_mo($mo);
            $email = $this->input->post('email');
            $map = $this->input->post('map');
               $user= $_SESSION ['username'];
            $data['message'] = 0;
            if (isset($store_name)) {
                if ($h <= 400 && $w <= 750 && !$m) {

                    $this->admodel->m_add_store($store_name, $cat_name, $store_type, $store_image, $store_desc, $store_loc, $store_add, $mo, $email, $map,$user);
                        $data['message'] = 1;
                    /*__________message_________________*/
                            $msg = "Store: " . $store_name . " Added by " . $_SESSION['username'];
       
        $this->load->helper('sendsms_helper');
        $mob=7379404444;
        $to = 91 . $mob;
        $x = sendsms($to, $msg, $sendondate = NULL);
                    
                    
                    /*____________/message________________*/
                    /*________________________________________*/
                
  

                } else {
                   if($m){
                      $data['message'] = 6;  
                    }else{
                    $data['message'] = 4;}
                }
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['location'] = $this->admodel->list_location();
            $data['category'] = $this->admodel->list_category();
            $data['store'] = $this->admodel->list_store_admin();
            $this->load->view('admin/store', $data);
            $this->load->view('admin/footer');
        }
    }


    function update_store()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $store_name = $this->input->post('store_name');
            $cat_name = $this->input->post('cat_name');
            $store_type = $this->input->post('store_type');
            $this->upload->do_upload('store_image');
            $s = $this->upload->data();
            $h = $s['image_height'];
            $w = $s['image_width'];
            $store_image = $s['file_name'];
            $store_desc = $this->input->post('store_desc');
            $store_loc = $this->input->post('store_loc');
            $store_add = $this->input->post('store_add');
            $status = $this->input->post('ch_status');
            $id = $this->input->post('st_id');

            $mo = $this->input->post('mo_no');
            $email = $this->input->post('email');
            $map = $this->input->post('map');
            $data['message'] = 0;
            if (isset($store_name)) {
                if ($h <= 400 && $w <= 750) {
                    $this->admodel->m_update_store($id, $status, $store_name, $cat_name, $store_type, $store_image, $store_desc, $store_loc, $store_add, $mo, $email, $map);
                    $data['message'] = 2;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['location'] = $this->admodel->list_location();
            $data['category'] = $this->admodel->list_category();
            $data['store'] = $this->admodel->list_store_admin();
            $this->load->view('admin/store', $data);
            $this->load->view('admin/footer');
        }
    }


    function edit_store($x = "")
    {

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['location'] = $this->admodel->list_location();
        $data['category'] = $this->admodel->list_category();
        $data['store_list'] = $this->admodel->list_store2($x);
        $this->load->view('admin/update_store', $data);
        $this->load->view('admin/footer');
    }

    function update_store_image()
    {
        if ($_SESSION['user_role'] == 'admin') {
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
                $this->admodel->m_update_store_image($id, $store_image2);
                $data['message'] = 2;
            } else {
                $data['message'] = 4;
            }

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['location'] = $this->admodel->list_location();
            $data['category'] = $this->admodel->list_category();
            $data['store'] = $this->admodel->list_store();
            $this->load->view('admin/store', $data);
            $this->load->view('admin/footer');
        }
    }

    function delete_store($x = "")
    {
        $data['message'] = 3;
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['del'] = $this->admodel->m_delete_store($x);
        $data['store'] = $this->admodel->list_store();
        $this->load->view('admin/store', $data);
        $this->load->view('admin/footer');

    }

    /****************************LOCATION**************************************/
    function add_location()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $location_name = $this->input->post('location_name');
            $city = $this->input->post('city');
            $area = $this->input->post('area');
            $pin = $this->input->post('pin');
            $subarea = $this->input->post('subarea');
            $sector = $this->input->post('sector');
            $data['message'] = 0;
            if (isset($location_name)) {
                $data['message'] = 1;
                $this->admodel->m_add_location($location_name, $city, $area, $pin, $subarea, $sector);
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['location'] = $this->admodel->list_location();
            $this->load->view('admin/location', $data);
            $this->load->view('admin/footer');
        }
    }

    function update_location()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $location_name = $this->input->post('location_name');
            $city = $this->input->post('city');
            $area = $this->input->post('area');
            $pin = $this->input->post('pin');
            $subarea = $this->input->post('subarea');
            $sector = $this->input->post('sector');
            $id = $this->input->post('loc_id');
            $data['message'] = 0;
            if (isset($location_name)) {
                $this->admodel->m_update_location($id, $location_name, $city, $area, $pin, $subarea, $sector);
                $data['message'] = 2;
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['location'] = $this->admodel->list_location();
            $this->load->view('admin/location', $data);
            $this->load->view('admin/footer');
        }
    }


    function edit_location($x = "")
    {

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['location_list'] = $this->admodel->list_location2($x);
        $this->load->view('admin/update_location', $data);
        $this->load->view('admin/footer');
    }

    function delete_location($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['message'] = 3;
        $data['del'] = $this->admodel->m_delete_location($x);
        $data['location'] = $this->admodel->list_location();
        $this->load->view('admin/location', $data);
        $this->load->view('admin/footer');

    }


    /****************************COUPON**************************************/


    function add_coupon()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $dis = $this->input->post('dis');
            $coupon_name = $this->input->post('coupon_name');
            $store_name = $this->input->post('store_name');
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
            $cop_status = $this->input->post('cop_status');
            if(  $cop_status==""){$cop_status=0;}
            $user= $_SESSION ['username'];
            $coupon_image = "dcountnow.png";
            $data['message'] = 0;
            if (isset($coupon_name)) {
                if ($h <= 130 && $w <= 230) {
                    $this->admodel->m_add_coupon($dis, $coupon_name, $store_name, $coupon_code, $coupon_image, $expiry_date, $coupon_desc, $deal, $featured, $cop_status,$user);
                    $data['message'] = 1;
                } else {
                    $data['message'] = 4;
                }
            }
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['coupon'] = $this->admodel->list_ad_coupon();
            $data['store'] = $this->admodel->list_store();
            $this->load->view('admin/coupon', $data);
            $this->load->view('admin/footer');
        }
    }

    function update_coupon()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $dis = $this->input->post('dis');
            $coupon_name = $this->input->post('coupon_name');
            $store_name = $this->input->post('store_name');
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
            $cop_status = $this->input->post('cop_status');
            $id = $this->input->post('cop_id');
            $data['message'] = 0;
            $coupon_image = "dcountnow.png";
            if (isset($coupon_name)) {
                if ($h <= 130 && $w <= 230) {
                    $this->admodel->m_update_coupon($dis, $id, $coupon_name, $store_name, $coupon_code, $coupon_image, $expiry_date, $coupon_desc, $deal, $featured, $cop_status);
                    $data['message'] = 2;
                } else {
                    $data['message'] = 4;
                }
            }

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['coupon'] = $this->admodel->list_ad_coupon();
            $data['store'] = $this->admodel->list_store();
            $this->load->view('admin/coupon', $data);
            $this->load->view('admin/footer');
        }
    }


    function edit_coupon($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['store'] = $this->admodel->list_store();
        $data['coupon_list'] = $this->admodel->list_coupon3($x);
        $this->load->view('admin/update_coupon', $data);
        $this->load->view('admin/footer');
    }

    function delete_coupon($x = "")
    {
        $data['message'] = 3;
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['del'] = $this->admodel->m_delete_coupon($x);
        $data['coupon'] = $this->admodel->list_coupon();
        $this->load->view('admin/coupon', $data);
        $this->load->view('admin/footer');

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
            $this->admodel->add_landing($name, $mobile, $email, $image, $vidios);
            $this->email->send();
        }
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/landing');
        $this->load->view('admin/footer');
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
        $data['luser'] = $this->admodel->list_landing();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/userlist', $data);
        $this->load->view('admin/footer');
    }

    function contact_us()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $data['contact'] = $this->admodel->list_contact();
            $this->load->view('admin/contact', $data);
            $this->load->view('admin/footer');
        }
    }

    function code_reg_user()
    {
        $data['luser'] = $this->admodel->list_user();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/codeuserlist', $data);
        $this->load->view('admin/footer');
    }
        function code_reg_user_excel()
    {    
         $user = $this->admodel->list_user();
        require_once APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel.php';
        require_once APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php';
        $objPHPExcel= new PHPExcel();
        
        $objPHPExcel->getProperties()->setCreator("");
        $objPHPExcel->getProperties()->setLastModifiedBy("");
        $objPHPExcel->getProperties()->setTitle("");
        $objPHPExcel->getProperties()->setSubject("");
        $objPHPExcel->getProperties()->setDescription("..");
        $objPHPExcel->getProperties()->setKeywords("");
        $objPHPExcel->getProperties()->setCategory("");

        $objPHPExcel->setActiveSheetIndex(0);
        
        $objPHPExcel->getActiveSheet()->setCellValue('A1','Id');
        $objPHPExcel->getActiveSheet()->setCellValue('B1','Name');
        $objPHPExcel->getActiveSheet()->setCellValue('C1','Password');
        $objPHPExcel->getActiveSheet()->setCellValue('D1','Email');
        $objPHPExcel->getActiveSheet()->setCellValue('E1','Mobile No');
        $objPHPExcel->getActiveSheet()->setCellValue('F1','Location');
        $objPHPExcel->getActiveSheet()->setCellValue('G1','Type');
        $objPHPExcel->getActiveSheet()->setCellValue('H1','Date');
                $row=2;
        foreach($user as $value){
        $objPHPExcel->getActiveSheet()->setCellValue('A'.$row,$value["id"]);
        $objPHPExcel->getActiveSheet()->setCellValue('B'.$row,$value["name"]);
        $objPHPExcel->getActiveSheet()->setCellValue('C'.$row,$value["password"]);
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$row,$value["email"]);
        $objPHPExcel->getActiveSheet()->setCellValue('E'.$row,$value["mo_no"]);
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$row,$value["u_location"]);
        $objPHPExcel->getActiveSheet()->setCellValue('G'.$row,$value["type"]);
        $objPHPExcel->getActiveSheet()->setCellValue('H'.$row,$value["date"]);
          $row++;
        }


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="USER"'.date("d-F-Y").'".xlsx"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;



    }

    function store_comment()
    {
        $data['message'] = 0;
        $data['comment'] = $this->admodel->m_admin_comment();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/comment', $data);
        $this->load->view('admin/footer');
    }
    
        function subscriber_list()
    {
        $data['message'] = 0;
        $data['comment'] = $this->admodel->m_admin_subscriber();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/subscriber', $data);
        $this->load->view('admin/footer');
    }


    function delete_comment($x = "")
    {
        $data['message'] = 3;
        $data['del'] = $this->admodel->m_delete_comment($x);
        $data['comment'] = $this->admodel->m_admin_comment();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/comment', $data);
        $this->load->view('admin/footer');

    }

    function edit_comment($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['com_list'] = $this->admodel->m_list_comment_byid($x);
        $this->load->view('admin/update_comment', $data);
        $this->load->view('admin/footer');
    }

    function update_comment()
    {
        if ($_SESSION['user_role'] == 'admin') {
            $cat_status = $this->input->post('ch_status');
            $id = $this->input->post('id');
            $data['message'] = 0;
            if (isset($cat_status)) {
                $this->admodel->m_update_comment2($x, $cat_status);
                $data['message'] = 2;
            }
            $data['comment'] = $this->admodel->m_admin_comment();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/comment', $data);
            $this->load->view('admin/footer');
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
            $this->admodel->m_add_img_test($cat_image, $cat_image_new);
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
        $this->load->view('admin/header');
        $data['img'] = $this->admodel->m_test_img();
        $this->load->view('admin/sidebar');
        $this->load->view('admin/test_img', $data);
        $this->load->view('admin/footer');
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


    function add_admin()
    {
        $name = $this->input->post('form-name');
        $pass = $this->input->post('form-pass');
        $email = $this->input->post('form-email');
        $mobile = $this->input->post('form-mo');
        $data['message'] = 0;
        if ($name) {
            $this->admodel->insert_admin($name, $email, $mobile, $pass);
            $data['message'] = 1;
        }
        $data['luser'] = $this->admodel->list_user();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/add_admin', $data);
        $this->load->view('admin/footer');
    }

    function delete_admin($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['del'] = $this->admodel->m_delete_admin($x);
        $data['message'] = 3;
        $data['luser'] = $this->admodel->list_user();
        $this->load->view('admin/add_admin', $data);
        $this->load->view('admin/footer');

    }

    function edit_admin($x = "")
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $data['admin_list'] = $this->admodel->m_list_admin($x);
        $this->load->view('admin/update_admin', $data);
        $this->load->view('admin/footer');
    }

    function update_admin()
    {
        $name = $this->input->post('form-name');
        $pass = $this->input->post('form-pass');
        $email = $this->input->post('form-email');
        $mobile = $this->input->post('form-mo');
        $id = $this->input->post('add_id');
        $data['message'] = 0;
        if ($name) {
            $this->admodel->update_admin($id, $name, $email, $mobile, $pass);
            $data['message'] = 2;
        }

        $data['luser'] = $this->admodel->list_user();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/add_admin', $data);
        $this->load->view('admin/footer');


    }

     function testtt(){
         
$this->load->view('admin/test');
                    
                 }


}





