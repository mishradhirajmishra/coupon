<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admodel extends CI_Model
{
        /****************************slider**************************************/
            function m_add_slider($img_dsk,$img_mob,$url)
    {
        $data = array(
            'id' =>'',
            'img_dsk' =>$img_dsk,
            'img_mob' =>$img_mob,
            'url' =>$url,
            'date' => date("y-m-d")
        );
           
            $this->db->insert('main_slider', $data);
    
    }
                function m_update_slider($id,$img_dsk,$img_mob,$url)
    {
        if($img_dsk && $img_mob && $url){
        $data = array('img_dsk' =>$img_dsk,'img_mob' =>$img_mob,'url' =>$url);  }
                if(!$img_dsk && $img_mob && $url){
        $data = array('img_mob' =>$img_mob,'url' =>$url);  }
                if(!$img_dsk && !$img_mob && $url){
        $data = array('url' =>$url);  }
            $this->db->where('id', $id);
            $this->db->update('main_slider', $data);
    
    }
    
    function m_update_slider_url($id,$url)
    {
      $data = array('url' =>$url);  
      $this->db->where('id', $id);
      $this->db->update('main_slider', $data);
    }
    
        function m_update_slider_mob($id,$img_mob)
    {
      $data = array('img_mob' =>$img_mob);  
      $this->db->where('id', $id);
      $this->db->update('main_slider', $data);
    }
    
        function m_update_slider_dsk($id,$img_dsk)
    {
      $data = array('img_dsk' =>$img_dsk);  
      $this->db->where('id', $id);
      $this->db->update('main_slider', $data);
    }
    

    
      function m_list_slider()
    {
           $sl=  $this->db->get('main_slider');
           return $sl->result_array();
    }
    
          function m_list_slider_byid($x)
    {
       $sl=  $this->db->get_where('main_slider',array('id'=>$x));
       return $sl->row_array();
    }
    
        function m_delete_main_slider($x)
    {
        
        $this->db->delete('main_slider', array('id' => $x)); 
        return "dsd";
    }
    
    /****************************CATEGORY**************************************/
    
    function m_add_category( $cat_name,$cat_type,$cat_image,$cat_desc )
    {
        $data = array(
            'cat_id' =>'',
            'cat_name' =>$cat_name,
            'cat_desc' =>$cat_desc,
            'cat_type' =>$cat_type,
            'cat_date' => date("y-m-d"),
            'cat_status' => 0,
            'cat_image' =>$cat_image
        );
    
            $this->db->insert('category', $data);
    
    }
    
       function list_user1($x) {
        $cat=  $this->db->get_where('user_coupon',array('st_id'=>$x));

      return $cat->result_array();
    }
    
    
    function m_update_category($id,$cat_name, $cat_type, $cat_image, $cat_desc, $cat_status)
    {
        if($cat_image)
        {
            $data = array(
           
            'cat_name' =>$cat_name,
            'cat_desc' =>$cat_desc,
            'cat_type' =>$cat_type,
            'cat_date' => date("y-m-d"),
            'cat_status' => $cat_status,
            'cat_image' =>$cat_image
            );
        }
        else
        {
            $data = array(
          
            'cat_name' =>$cat_name,
            'cat_desc' =>$cat_desc,
            'cat_type' =>$cat_type,
            'cat_date' => date("y-m-d"),
            'cat_status' => $cat_status
            );
        }
       $this->db->where('cat_id', $id);
       $this->db->update('category', $data);
    }
    
    
    
     /*************store immage*******************/
function m_update_gal_img1($id,$img1)
    {  
       $data = array( 'gal1' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
    function m_update_gal_img2($id,$img1)
    {  
       $data = array( 'gal2' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
    function m_update_gal_img3($id,$img1)
    {  
       $data = array( 'gal3' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
    function m_update_gal_img4($id,$img1)
    {  
       $data = array( 'gal4' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
    function m_update_gal_img5($id,$img1)
    {  
       $data = array( 'gal5' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
    function m_update_gal_img6($id,$img1)
    {  
       $data = array( 'gal6' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
    function m_update_gal_img7($id,$img1)
    {  
       $data = array( 'gal7' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
    function m_update_gal_img8($id,$img1)
    {  
       $data = array( 'gal8' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
    function m_update_gal_img9($id,$img1)
    {  
       $data = array( 'gal9' => $img1);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
    }
     
    /*************category immage*******************/
   function m_update_s_img1($id,$img1,$url)
    {  
        $data = array( 's_img1' => $img1,'cimg1' =>$url);
       $this->db->where('cat_id', $id);
       $this->db->update('category', $data);
    }
       function m_update_s_img2($id,$img2,$url)
    {   $data = array( 's_img2' => $img2,'cimg2' =>$url);
       $this->db->where('cat_id', $id);
       $this->db->update('category', $data);
    }
       function m_update_s_img3($id,$img3,$url)
    {   $data = array( 's_img3' => $img3,'cimg3' =>$url);
       $this->db->where('cat_id', $id);
       $this->db->update('category', $data);
    }
       function m_update_s_img4($id,$img4,$url)
    {   $data = array( 's_img4' => $img4,'cimg4' =>$url);
       $this->db->where('cat_id', $id);
       $this->db->update('category', $data);
    }
       function m_update_s_img5($id,$img5,$url)
    {   $data = array( 's_img5' => $img5,'cimg5' =>$url);
       $this->db->where('cat_id', $id);
       $this->db->update('category', $data);
    }
       function m_update_s_img6($id,$img6,$url)
    {   $data = array( 's_img6' => $img6,'cimg6' =>$url);
        $this->db->where('cat_id', $id);
        $this->db->update('category', $data);
    }
    
    
    function m_delete_category($x)
    {
        
        $this->db->delete('category', array('cat_id' => $x)); 
        return "dsd";
    }
    
    function list_category() 
    {
        $cat=  $this->db->get('category');
        return $cat->result_array();
    }
        
    function list_category2($x) 
    {
        $cat=  $this->db->get_where('category',array('cat_id'=>$x));
        return $cat->row_array();
    }
        
        
        
    
/****************************STORE**************************************/
    function m_add_store_itself($store_name,$store_pass, $cat_name, $store_loc, $mo, $email){
    $data = array(
        'st_id' =>"",
        'cat_id' =>$cat_name,
        'st_name' =>$store_name,
        'st_desc' =>"",
        'st_location' =>$store_loc,
        'st_type' =>0,
        'st_address' =>"",
        'st_image2' =>"",
        'st_date' => date("y-m-d"),
        'no_of_coupons' => 50,
        'st_status' =>0,
        'mo_no' =>$mo,
        'email' => $email,
         'map' =>"",
         'pass' =>$store_pass,
         'emp_user' =>"Store",
        );
        $this->db->insert('store', $data);

}
    function m_add_store_itself_old($store_name,$pass,$cat_name,$store_type, $store_image,$store_desc, $store_loc,$store_add,$mo,$email,$map,$user){
    $data = array(
        'st_id' =>"",
        'cat_id' =>$cat_name,
        'st_name' =>$store_name,
        'st_desc' =>$store_desc ,
        'st_location' => $store_loc,
        'st_type' =>0,
        'st_address' =>$store_add,
        'st_image2' =>$store_image,
        'st_date' => date("y-m-d"),
        'no_of_coupons' => 50,
        'st_status' =>0,
        'mo_no' =>$mo,
        'email' => $email,
         'map' => $map,
         'pass' => $pass,
         'emp_user' => $user,
        );
        $this->db->insert('store', $data);

}
        
    function m_add_store($store_name,$cat_name,$store_type, $store_image,$store_desc, $store_loc,$store_add,$mo,$email,$map,$user){
    $data = array(
        'st_id' =>"",
        'cat_id' =>$cat_name,
        'st_name' =>$store_name,
        'st_desc' =>$store_desc ,
        'st_location' => $store_loc,
        'st_type' =>0,
        'st_address' =>$store_add,
        'st_image2' =>$store_image,
        'st_date' => date("y-m-d"),
        'no_of_coupons' => 50,
        'st_status' =>0,
        'mo_no' =>$mo,
        'email' => $email,
         'map' => $map,
         'user' => "st_user",
         'pass' => "dcount@pass123",
         'emp_user' => $user,
        );
        $this->db->insert('store', $data);

}

   function m_update_store($id,$status,$store_name,$cat_name,$store_type, $store_image,$store_desc, $store_loc,$store_add,$mo,$email,$map){
       if($store_image ){
           if($map){
                       $data = array(
        'cat_id' =>$cat_name,
        'st_name' =>$store_name,
        'st_desc' =>$store_desc ,
        'st_location' => $store_loc,
        'st_type' =>$store_type,
        'st_address' =>$store_add,
        'st_image2' =>$store_image,
        'no_of_coupons' => 50,
        'st_status' =>$status,
        'mo_no' =>$mo,
        'email' => $email,
         'map' => $map
        );
               
           }else{
                      $data = array(
        'cat_id' =>$cat_name,
        'st_name' =>$store_name,
        'st_desc' =>$store_desc ,
        'st_location' => $store_loc,
        'st_type' =>$store_type,
        'st_address' =>$store_add,
        'st_image2' =>$store_image,
        'no_of_coupons' => 50,
        'st_status' =>$status,
        'mo_no' =>$mo,
        'email' => $email,
         );
               
           }
 
       }
        else{
                 if($map){    
            $data = array(
        'cat_id' =>$cat_name,
        'st_name' =>$store_name,
        'st_desc' =>$store_desc ,
        'st_location' => $store_loc,
        'st_type' =>$store_type,
        'st_address' =>$store_add,
        'no_of_coupons' => 50,
        'st_status' =>$status,
        'mo_no' =>$mo,
        'email' => $email,
         'map' => $map
        );
                 }
                 else{
              $data = array(
        'cat_id' =>$cat_name,
        'st_name' =>$store_name,
        'st_desc' =>$store_desc ,
        'st_location' => $store_loc,
        'st_type' =>$store_type,
        'st_address' =>$store_add,
        'no_of_coupons' => 50,
        'st_status' =>$status,
        'mo_no' =>$mo,
        'email' => $email,
             );
                     
                     
                 }
        }
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
       
   }
        function m_update_store_image($id,$store_image2){
       $data = array( 'st_image2' =>$store_image2,);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
       
   }
   
    function single_store_by_mo($x) {
      $cat=  $this->db->get_where('store',array('mo_no'=>$x));
      return $cat->row_array();
    }
    function single_store($x) {
      $cat=  $this->db->get_where('store',array('st_id'=>$x,'st_status'=>1));
      return $cat->row_array();
    }
    function list_store() {
      $cat=  $this->db->get_where('store',array('st_status'=>1));
      return $cat->result_array();
    }
     function list_store_of_type($x) {
      $cat=  $this->db->get_where('store',array('st_status'=>1,'cat_id'=>$x));
      return $cat->result_array();
    }
    function list_store_admin() {
      $cat=  $this->db->get('store');
      return $cat->result_array();
    }
         function list_store_search($search) {
       $this->db->like('st_name', $search);
       $this->db->or_like('st_desc', $search);
       $this->db->where('st_status', 1); 
       $cat=  $this->db->get('store');
       return $cat->result_array();
    }
    function list_store_search_no($search) {
       $this->db->like('st_name', $search); 
       $this->db->or_like('st_desc', $search);
       $this->db->where('st_status', 1); 
       $cat=  $this->db->get('store');
       return $cat->num_rows(); ;
    }
    
    function list_location_search($search) {
     $this->db->like('locname', $search);
       $cat=  $this->db->get('location');
       return $cat->result_array();
    }
        function list_location_search_no($search) {
     $this->db->like('locname', $search);    
       $cat=  $this->db->get('location');
       return $cat->num_rows();
    }
    
       function list_store_filter_cat($cat) {
       $q=  $this->db->get_where('store',array('cat_id'=>$cat,'st_status'=>1));
       return $q->result_array();
       }

   function list_store_filter($loc,$cat) {
        if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat,'st_status'=>1));  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc,'st_status'=>1));  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat,'st_status'=>1)); 
         }
         else{
               $q=  $this->db->get_where('store',array('st_status'=>1));
         }
    
      return $q->result_array();
    }
    
       function list_store_filter_no($loc,$cat) {
        if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat,'st_status'=>1));  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc,'st_status'=>1));  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat,'st_status'=>1)); 
         }
         else{
               $q=  $this->db->get_where('store',array('st_status'=>1));
         }
    
      return $q->num_rows();
    }
    
    
    
    
    
      function list_store_filter_test($loc,$cat,$limit,$ofset) {
        if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat,'st_status'=>1),$limit,$ofset);  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc,'st_status'=>1),$limit,$ofset);  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat,'st_status'=>1),$limit,$ofset); 
         }
         else{
               $q=  $this->get_where('store',array('st_status'=>1),$limit,$ofset);
         }
    
      return $q->result_array();
    }
    /*_______________________*/
       function list_store_filter_test222($loc,$cat,$limit,$ofset){
       if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat,'st_status'=>1),$limit,$ofset);  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc,'st_status'=>1),$limit,$ofset);  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat,'st_status'=>1),$limit,$ofset); 
         }
         else{
               $q=  $this->get_where('store',array('st_status'=>1),$limit,$ofset);
         }
     
      return $q->result_array();
    }
    
    function list_store_count($loc,$cat){
        if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat,'st_status'=>1));  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc,'st_status'=>1));  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat,'st_status'=>1)); 
         }
         else{
               $q=  $this->db->get_where('store',array('st_status'=>1)); 
         }
   
       return $q->num_rows();  
    }
    
    /*____________________________*/
    
    function list_store_f() {
            $x=1;
      $cat=  $this->db->get_where('store',array('st_type'=>$x,'st_status'=>1));
      return $cat->result_array();
    }
            
    function list_store2($x) {
    
          $cat=  $this->db->get_where('store',array('st_id'=>$x));
          return $cat->row_array();
    }
        function m_delete_store($x){
        
        $this->db->delete('store', array('st_id' => $x)); 
        return "dsd";
    }
       
    function m_add_subscriber( $email){
        $data = array(
        'id' =>"",
        'email' =>$email,
        'date' =>date("d-m-y"),
        );
        $this->db->insert('subscriber', $data);
        } 
    function list_subscriber() {
      $cat=  $this->db->get('subscriber');
      return $cat->result_array();
    }
    
        function m_add_fb_user($id,$name, $email){
            if(!$email){
        $data = array(
            'id' =>'',
            'name' =>$name,
            'password' =>"xxx",
            'user_role' =>"user",
            'email' =>"",
            'mo_no'=>0,
            'status' =>0,
            'date' =>date("d-m-y"),
            'fb_id' =>$id,
            'g_id' =>"0",
            'type' =>'f'
        );
            }else{
          $data = array(
            'id' =>'',
            'name' =>$name,
            'password' =>"xxx",
            'user_role' =>"user",
            'email' =>$email,
            'mo_no'=>0,
            'status' =>0,
            'date' =>date("d-m-y"),
            'fb_id' =>$id,
            'g_id' =>"0",
            'type' =>'f'
        );
                
                
            }
        $query = $this->db->get_where('user',array('fb_id'=>$id));
        $res=$query->num_rows();
        if($res==0){
        $this->db->insert('user', $data);
        }
        } 
        function m_add_g_user($id,$name,$email){
        $data = array(
            'id' =>'',
            'name' =>$name,
            'password' =>"",
            'user_role' =>"user",
            'email' =>$email,
            'mo_no'=>0,
            'status' =>0,
            'date' =>date("d-m-y"),
            'fb_id' =>"",
            'g_id' =>$id,
            'type' =>'g'
        );
         $query = $this->db->get_where('user',array('g_id'=>$id));
        $res=$query->num_rows();
        if($res==0){
        $this->db->insert('user', $data);
        }
        } 
/****************************LOCATION**************************************/

        
    function m_add_location( $location_name,$city,$area,$pin,$subarea,$sector){
        
    $data = array(
        'loc_id' =>"",
        'city' =>$city,
        'area' =>$area,
        'subarea' =>$subarea ,
        'sector' => $sector,
        'pin' =>$pin,
        'loc_date' => date("y-m-d"),
        'locname' =>$location_name,
        );
        $this->db->insert('location', $data);
}

   function m_update_location($id,$location_name,$city,$area,$pin,$subarea,$sector){
             
    $data = array(
        'city' =>$city,
        'area' =>$area,
        'subarea' =>$subarea ,
        'sector' => $sector,
        'pin' =>$pin,
        'locname' =>$location_name,
        );
       $this->db->where('loc_id', $id);
       $this->db->update('location', $data);
       
   }
    function list_location() {
      $cat=  $this->db->get('location');
      return $cat->result_array();
    }
            
    function list_location2($x) {
    
          $cat=  $this->db->get_where('location',array('loc_id'=>$x));
          return $cat->row_array();
    }
        function m_delete_location($x){
        
        $this->db->delete('location', array('loc_id' => $x)); 
        return "dsd";
    }
    
   /*   function m_location_category($x){
          $cat=  $this->db->get_where('location',array('loc_id'=>$x));
          return $cat->result_array();
        }*/
        
        
        
    /***************************COUPON**************************************/
    function m_add_coupon($dis, $coupon_name,$store_name, $coupon_code,$coupon_image,$expiry_date,$coupon_desc,$deal,$featured,$cop_status,$user){
        $data = array(
        'cop_id' =>"",
        'st_id' =>$store_name,
        'cop_name' =>$coupon_name,
        'cop_desc' =>$coupon_desc ,
        'cop_date' => date("y-m-d"),
        'cop_exp_date' =>$expiry_date,
        'cop_image' =>$coupon_image,
        'cop_code' =>$coupon_code,
        'cop_d_day' =>$deal,
        'cop_featured' =>$featured,
        'cop_ststus' =>$cop_status,
        'dis' =>$dis,
        'user' =>$user,
        );
        $this->db->insert('coupon', $data);
    }
/*___________________________________________*/
        function list_coupon_code($x) {
        $cat=  $this->db->get_where('coupon',array('cop_id'=>$x));
          $x=$cat->row_array();
         return $x ;
    }
        function list_coupon() {
      $this->db->order_by('cop_id', 'DESC');
      $cat=  $this->db->get_where('coupon',array('cop_ststus'=>1));
      return $cat->result_array();
    }
    function list_ad_coupon() {
      $this->db->order_by('cop_id', 'DESC');
      $cat=  $this->db->get('coupon');
      return $cat->result_array();
    }

      function list_coupon_recent() {
      $this->db->order_by('cop_id', 'DESC');
   /*   $d=strtotime(date("y-m-d"));
     $this->db->where('cop_date >=', $d);*/
      $cat= $this->db->get_where('coupon',array('cop_ststus'=>1));
      return $cat->result_array();
    }
    function list_coupon_recent_no() {
            $this->db->order_by('cop_id', 'DESC');
      $cat=  $this->db->get_where('coupon',array('cop_ststus'=>1));
      return $cat->num_rows();
    }
    /*______________________________________________*/
          function list_coupon_featured() {
     $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_featured'=>$x,'cop_ststus'=>1));
      return $cat->result_array();
    }
    
       function list_coupon_featured_single() {
     $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_featured'=>$x,'cop_ststus'=>1));
      return $cat->result_array();
    }
           function list_coupon_featured_no() {
     $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_featured'=>$x,'cop_ststus'=>1));
      return $cat->num_rows();
    }
    /*______________________________________________*/
      function list_coupon_deal() {
       $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_d_day'=>$x,'cop_ststus'=>1));
      return $cat->result_array();
    }
    function list_coupon_deal_single() {
       $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_d_day'=>$x,'cop_ststus'=>1));
      return $cat->result_array();
    }
    function list_coupon_deal_no() {
       $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_d_day'=>$x,'cop_ststus'=>1));
      return $cat->num_rows();
    }
    /*______________________________________________*/
    
        function list_coupon2($x) {
    
          $cat=  $this->db->get_where('coupon',array('cop_id'=>$x,'cop_ststus'=>1));
          return $cat->row_array();
    }
            function list_coupon3($x) {
    
          $cat=  $this->db->get_where('coupon',array('cop_id'=>$x));
          return $cat->row_array();
    }
        function m_delete_coupon($x){
        
        $this->db->delete('coupon', array('cop_id' => $x)); 
        return "dsd";
    }
   function single_store_coupons($x) {
          $cat=  $this->db->get_where('coupon',array('st_id'=>$x,'cop_ststus'=>1));
          return $cat->result_array();
    }
    

    function single_page_store_coupons($x,$limit,$ofset) {
          $cat=  $this->db->get_where('coupon',array('st_id'=>$x,'cop_ststus'=>1),$limit,$ofset);
          return $cat->result_array();
    }
   function single_page_store_coupons_no($x) {
          $cat=  $this->db->get_where('coupon',array('st_id'=>$x,'cop_ststus'=>1));
          return $cat->num_rows();
    }
    
    function  m_update_coupon($dis,$id, $coupon_name,$store_name, $coupon_code,$coupon_image,$expiry_date,$coupon_desc,$deal,$featured,$cop_status)
    {
        if($coupon_image){
        $data = array(
        'st_id' =>$store_name,
        'cop_name' =>$coupon_name,
        'cop_desc' =>$coupon_desc ,
        'cop_exp_date' =>$expiry_date,
        'cop_image' =>$coupon_image,
        'cop_code' =>$coupon_code,
        'cop_d_day' =>$deal,
        'cop_featured' =>$featured,
        'cop_ststus' =>$cop_status,
        'dis' =>$dis,
        );
            
        }else{
            
        $data = array(
        'st_id' =>$store_name,
        'cop_name' =>$coupon_name,
        'cop_desc' =>$coupon_desc ,
        'cop_exp_date' =>$expiry_date,
        'cop_code' =>$coupon_code,
        'cop_d_day' =>$deal,
        'cop_featured' =>$featured,
        'cop_ststus' =>$cop_status,
         'dis' =>$dis,
        );
            
        }
        
        
        $this->db->where('cop_id', $id);
       $this->db->update('coupon', $data);  
    }

    /***************************LANDING**************************************/
    
    function add_landing($lname, $email, $phone, $img,$vid){
        $data = array(
            'id' =>'',
            'name' =>$lname,
            'mobile' =>$phone,
            'email' =>$email,
            'image' => $img,
            'vidios' => $vid,
        );
        
        $this->db->insert('landing', $data);

    }
    
            function list_landing() {
      $cat=  $this->db->get('landing');
      return $cat->result_array();
    }
   function list_user() {
      $cat=  $this->db->get('user');
      return $cat->result_array();
    }
    
    /***************User******************/

  function add_contact($name,$email,$phone,$subject,$message){
      
        $data = array(
            'cont_id' =>'',
            'cont_name' =>$name,
            'cont_email' =>$email,
            'cont_phone' =>$phone,
            'cont_subj' =>$subject,
            'cont_msg' =>$message,
            'cont_date' => date("y-m-d"),
            'status' => 0,
        );
    
            $this->db->insert('contact', $data);
      
  }
   function list_contact(){	
       $cat=  $this->db->get('contact');
        return $cat->result_array();
       
   }
 function m_total_user(){
       $q=  $this->db->get('user');
       return $q->num_rows();  
 }
  function m_total_store(){
       $q=  $this->db->get_where('store',array('st_status'=>1));
       return $q->num_rows();  
 }
  function m_user_coupon(	$name,$st_id,$cop_id,$type){
      

        $data = array(
            'id' =>'',
            'name' =>$name,
            'st_id' =>$st_id,
            'cop_id' =>$cop_id,
            'date' =>date("y-m-d"),
            'type'=>$type
        );
    
            $this->db->insert('user_coupon', $data);
      
  }
  
     function m_list_user_coupon($x,$y){
        $this->db->order_by('id', 'DESC');
        $cat=  $this->db->get_where('user_coupon',array('name'=>$x,'type'=>$y));
        return $cat->result_array();
   }
    function m_s_user($x,$y){
       $q=  $this->db->get_where('user',array('name'=>$x,'type'=>$y));
       return $q->row_array();  
     } 
     function m_s_user_ref($z){
       $q=  $this->db->get_where('user_refrence',array('refer_id'=>$z));
       return $q->result_array();  
     }
     
     function m_update_refuser( $id,$status)
    {  
       $data = array( 'status' => $status);
       $this->db->where('id', $id);
       $this->db->update('user_refrence', $data);
    }
    function user_name($x){
       $q=  $this->db->get_where('user',array('name'=>$x));
       return $q->num_rows();  
     }
       function user_idbyname($x){
       $q=  $this->db->get_where('user',array('name'=>$x,'type'=>'d'));
      $r=$q->row_array();  
       return $r['id'];
     }
     
    function user_email($x){
       $q=  $this->db->get_where('user',array('email'=>$x));
       return $q->num_rows();  
     }
    function user_mobile($x){
       $q=  $this->db->get_where('user',array('mo_no'=>$x));
       return $q->num_rows();  
     }
     function m_reset_password($email,$pass){
               $data = array(
                 'password' =>$pass,
                );
       $this->db->where('email', $email);
       $this->db->update('user', $data);
     }
      function get_user_detail_recovery($x){
       $q=  $this->db->get_where('user',array('email'=>$x));
       return $q->row_array();  
     }
     
       function add_comment($st_id,$user,$comment){
        $data = array(
            'id' =>'',
            'st_id' =>$st_id,
            'user' =>$user,
            'comment' =>$comment,
            'date' => date("d-m-y"),
            'status' => 0,
        );
    
            $this->db->insert('comment', $data);
      
    }

                function m_admin_subscriber(){	
        $cat=  $this->db->get('subscriber');
        return $cat->result_array();
        }
        function m_admin_comment(){	
        $cat=  $this->db->get('comment');
        return $cat->result_array();
        }
        
      function m_delete_comment($x){
        
        $this->db->delete('comment', array('id' => $x)); 
        return "dsd";
    }
    /*__________________________________rating_________________________________ */
    
       function m_add_rating($cop_id,$user,$rating){
        $data = array(
            'id' =>'',
            'cop_id' =>$cop_id,
            'user' =>$user,
            'rating' =>$rating,
            'like'=>1,
            'date' => date("d-m-y"),
            'status' => 0,
        );
    
            $this->db->insert('rating', $data);
      
    }    
        function m_list_rating_by_user($user,$cop_id){
        $cat=  $this->db->get_where('rating',array('cop_id' =>$cop_id,'user'=>$user));
        return $cat->num_rows();
            
        }
    
        function m_list_rating_avrage($cop_id){
        $this->db->select_avg('rating');
        $cat=  $this->db->get_where('rating',array('cop_id'=>$cop_id));
        return $cat->row_array();
        }
        
        function m_list_rating_by_user_all($cop_id){	
        $cat=  $this->db->get_where('rating',array('cop_id'=>$cop_id));
        return $cat->result_array();
        }
        
        function m_list_rating_by_user_all_count($cop_id){	
        $cat=  $this->db->get_where('rating',array('cop_id' =>$cop_id));
        return $cat->num_rows();
        }
        
        function m_update_comment2($x,$cat_status){
      $data = array('status' => $cat_status, );
        $this->db->update('comment', $data);
        }

         function m_list_comment($st_id){	
        $cat=  $this->db->get_where('comment',array('st_id' =>$st_id));
        return $cat->result_array();
        }
        
        function m_list_comment_count($st_id){	
        $cat=  $this->db->get_where('comment',array('st_id' =>$st_id));
        return $cat->num_rows();
        }
        
         function m_list_comment_byid($x){	
        $cat=  $this->db->get_where('comment',array('id' =>$x));
        return $cat->row_array();
        }
        
        /***************************/
              function m_update_profile($id,$pass){
               $data = array(
                 'u_location' =>$pass,
                );
       $this->db->where('id', $id);
       $this->db->update('user', $data);
     }
        
      function m_change_pass($id,$pass){
               $data = array(
                 'password' =>$pass,
                );
       $this->db->where('id', $id);
       $this->db->update('user', $data);
     }
           function m_change_mono($id,$pass){
               $data = array(
                 'mo_no' =>$pass,
                );
       $this->db->where('id', $id);
       $this->db->update('user', $data);
     }

    function m_add_img_test( $cat_image,$cat_image_new)
    {
        $data = array(
            'id' =>'',
            'img1' =>$cat_image,
            'img2' =>$cat_image_new,
            'org' =>$cat_image,
        );
    
            $this->db->insert('test_img', $data);
    
    }
            
        function m_test_img(){	
        $cat=  $this->db->get('test_img');
        return $cat->result_array();
        }
        
    public function insert_admin($name,$email,$mobile,$pass)
    {
        $data = array(
            'id' =>'',
            'name' =>$name,
            'password' =>$pass,
            'user_role' =>"admin",
            'email' =>$email,
            'mo_no'=>$mobile,
            'status' =>1,
            'date' =>date("d-m-y"),
            'type' =>'d'
           
        );
    
            $this->db->insert('user', $data);
    }
    
        public function update_admin($id,$name,$email,$mobile,$pass)
    {
        $data = array(
            'id' =>'',
            'name' =>$name,
            'password' =>$pass,
            'user_role' =>"admin",
            'email' =>$email,
            'mo_no'=>$mobile,
            'status' =>1,
            'date' =>date("d-m-y"),
           
        );
    
    
        $this->db->where('id', $id);
        $this->db->update('user', $data);
            
    }
    
        function m_delete_admin($x)
    {
        
        $this->db->delete('user', array('id' => $x)); 
        return "dsd";
    }
    
    
            function m_list_admin($id){
        $cat=  $this->db->get_where('user',array('id' =>$id));
        return $cat->row_array();
            
        }
                public function login_get_mobile($user)
    {
        $query = $this->db->get_where('user',array('name'=>$user));
        $res=$query->row_array();
        return $res['mo_no'];
    }


}
