<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstore extends CI_Model
{
    function m_st_login($store){
      $cat=  $this->db->get_where('store',array('st_id'=>$store));
      return $cat->row_array();
        
    }
       function st_update_ac($id,$name,$pass){
        $data = array(
        'mo_no' =>$name,
        'pass' => $pass
        );

                
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
       
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

        
    function m_add_store($store_name,$cat_name,$store_type, $store_image,$store_desc, $store_loc,$store_add,$mo,$email,$map){
        
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
         'user' => "st_user",
         'pass' => "dcount@pass123",
        'email' => $email,
         'map' => $map
        
        );
        $this->db->insert('store', $data);

}


/*******************/

        function m_verify_st_mo($id,$mobile){
       $data = array( 'verify_mo' =>1,'mo_no' =>$mobile,);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
       
   }
    function m_verify_st_email($name){
      $data = array( 'st_name' =>$name);
      $q=  $this->db->get_where('store', $data);
      return  $q->row_array();
   }
   
    function m_get_store_id_byname($name){
        $this->db->where('st_name', $name);
        $this->db->update('store', $data);
   }


/********************/



   function m_update_store($id,$store_image,$store_desc, $store_add,$mo,$email){
       if($store_image ){
        $data = array(
        'st_desc' =>$store_desc ,
        'st_address' =>$store_add,
        'st_image2' =>$store_image,
        
        );
       }
        else{
        $data = array(
        'st_desc' =>$store_desc ,
        'st_address' =>$store_add,
        );
            
        }
                
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
       
   }
   
        function m_update_store_image($id,$store_image2){
       $data = array( 'st_image2' =>$store_image2,);
       $this->db->where('st_id', $id);
       $this->db->update('store', $data);
       
   }
   
    function single_store($x) {
      $cat=  $this->db->get_where('store',array('st_id'=>$x));
      return $cat->row_array();
    }
    function list_store() {
      $cat=  $this->db->get('store');
      return $cat->result_array();
    }
        function list_store_search($search) {
       $this->db->like('st_name', $search);      
       $cat=  $this->db->get('store');
       return $cat->result_array();
    }
    function list_store_search_no($search) {
       $this->db->like('st_name', $search);      
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
       $q=  $this->db->get_where('store',array('cat_id'=>$cat));
       return $q->result_array();
       }

   function list_store_filter($loc,$cat) {
        if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat));  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc));  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat)); 
         }
         else{
               $q=  $this->db->get('store');
         }
    
      return $q->result_array();
    }
    
    
    
    
    
      function list_store_filter_test($loc,$cat,$limit,$ofset) {
        if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat),$limit,$ofset);  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc),$limit,$ofset);  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat),$limit,$ofset); 
         }
         else{
               $q=  $this->db->get('store',$limit,$ofset);
         }
    
      return $q->result_array();
    }
    /*_______________________*/
       function list_store_filter_test222($loc,$cat,$limit,$ofset){
       if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat),$limit,$ofset);  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc),$limit,$ofset);  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat),$limit,$ofset); 
         }
         else{
               $q=  $this->db->get('store',$limit,$ofset);
         }
     
      return $q->result_array();
    }
    
    function list_store_count($loc,$cat){
        if($loc && $cat){
            $q=  $this->db->get_where('store',array('st_location'=>$loc,'cat_id'=>$cat));  
        }
        
        elseif($loc && $cat==""){
             $q=  $this->db->get_where('store',array('st_location'=>$loc));  
        }
         elseif($loc=="" && $cat){
            $q=  $this->db->get_where('store',array('cat_id'=>$cat)); 
         }
         else{
               $q=  $this->db->get('store');
         }
   
       return $q->num_rows();  
    }
    
    /*____________________________*/
    
    function list_store_f() {
            $x=1;
      $cat=  $this->db->get_where('store',array('st_type'=>$x));
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
    function m_add_coupon($dis, $coupon_name,$store_name, $coupon_code,$coupon_image,$expiry_date,$coupon_desc,$deal,$featured){
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
        'dis' =>$dis,
        );
        $this->db->insert('coupon', $data);
        
    }
/*___________________________________________*/
        function list_coupon() {
            $this->db->order_by('cop_id', 'DESC');
      $cat=  $this->db->get('coupon');
      return $cat->result_array();
    }

      function list_coupon_recent() {
      $this->db->order_by('cop_id', 'DESC');
      $cat=  $this->db->get('coupon');
      return $cat->result_array();
    }
    function list_coupon_recent_no() {
            $this->db->order_by('cop_id', 'DESC');
      $cat=  $this->db->get('coupon');
      return $cat->num_rows();
    }
    /*______________________________________________*/
          function list_coupon_featured() {
     $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_featured'=>$x));
      return $cat->result_array();
    }
    
       function list_coupon_featured_single() {
     $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_featured'=>$x));
      return $cat->result_array();
    }
           function list_coupon_featured_no() {
     $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_featured'=>$x));
      return $cat->num_rows();
    }
    /*______________________________________________*/
      function list_coupon_deal() {
       $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_d_day'=>$x));
      return $cat->result_array();
    }
    function list_coupon_deal_single() {
       $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_d_day'=>$x));
      return $cat->result_array();
    }
    function list_coupon_deal_no() {
       $x=1;
      $cat=  $this->db->get_where('coupon',array('cop_d_day'=>$x));
      return $cat->num_rows();
    }
    /*______________________________________________*/
    
        function list_coupon2($x) {
    
          $cat=  $this->db->get_where('coupon',array('cop_id'=>$x));
          return $cat->row_array();
    }
        function m_delete_coupon($x){
        
        $this->db->delete('coupon', array('cop_id' => $x)); 
        return "dsd";
    }
   function single_store_coupons($x) {
          $cat=  $this->db->get_where('coupon',array('st_id'=>$x));
          return $cat->result_array();
    }
    function single_page_store_coupons($x,$limit,$ofset) {
          $cat=  $this->db->get_where('coupon',array('st_id'=>$x),$limit,$ofset);
          return $cat->result_array();
    }
   function single_page_store_coupons_no($x) {
          $cat=  $this->db->get_where('coupon',array('st_id'=>$x));
          return $cat->num_rows();
    }
    
    function  m_update_coupon($dis,$id, $coupon_name,$store_name, $coupon_code,$coupon_image,$expiry_date,$coupon_desc,$deal,$featured)
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
   function list_user($x) {
        $cat=  $this->db->get_where('user_coupon',array('st_id'=>$x));

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
       $q=  $this->db->get('store');
       return $q->num_rows();  
 }
  function m_user_coupon(	$name,$st_id,$cop_id){
      

        $data = array(
            'id' =>'',
            'name' =>$name,
            'st_id' =>$st_id,
            'cop_id' =>$cop_id,
            'date' =>date("y-m-d")
        );
    
            $this->db->insert('user_coupon', $data);
      
  }
  
     function m_list_user_coupon($x){	
          $cat=  $this->db->get_where('user_coupon',array('name'=>$x));
       
        return $cat->result_array();
       
   }
    function m_s_user($x){
       $q=  $this->db->get_where('user',array('name'=>$x));
       return $q->row_array();  
     } 
    function user_name($x){
       $q=  $this->db->get_where('user',array('name'=>$x));
       return $q->num_rows();  
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
        
         function m_list_comment_byid($x){	
        $cat=  $this->db->get_where('comment',array('id' =>$x));
        return $cat->row_array();
        }
        
      function m_change_pass($id,$pass){
               $data = array(
                 'password' =>$pass,
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
    


}
