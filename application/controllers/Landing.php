<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admodel');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {

        $this->load->view('land/landing');
    }

    function land()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|mp4|3gp|mpg';
        $this->load->library('upload', $config);
        $lname = $this->input->post('lname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $this->upload->do_upload('image');
        $i = $this->upload->data();
        $img = $i['file_name'];
        $this->upload->do_upload('vidios');
        $v = $this->upload->data();
        $vid = $v['file_name'];
        if (isset($lname)) {
            $this->admodel->add_landing($lname, $email, $phone, $img, $vid);
        }
        $this->load->view('landing/landing');
        /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
        /* $to="dhiraj.siswa.mishra@gmail.com";*/

        $this->load->library('email');
        $config = Array(
            'mailtype' => 'html',
        );
        $this->email->initialize($config);
        $this->email->from('dcountnow@gmail.com', 'dcountnow');
        $this->email->to($email);
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
        /*    $this->email->message($msg);
            if($result = $this->email->send()){
                echo "sent";
            }
            else{   echo "not sent";

            }*/


        /*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
    }


}





