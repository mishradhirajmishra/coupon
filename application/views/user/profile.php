     <style>
     button.btn.btn-info {
    background-color: #002b5e;
}
       .uhead{
background-color:#002b5e;
text-align: center;
padding: 19px;
color: white;
}
       .uhead_b{
margin-bottom:50px;

}
.gimg {
    position: relative;
    border-radius: 100px;
}
.whatsapp123{
    display:none;
}
     @media screen and (max-width: 767px) {
         .whatsapp123{
    display:block;
}
.inner-bg {
    float: left;
    height: 197px;
    margin-top: 7px;
    width: 100%;
    margin-bottom: 104px; 
}
}
   </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <!-- header bg -->
  
  <div class="container" onload="signOut()">
    <div class="inner-bg">
      <div class="">
        <div class="dashboard clearfix"> 
          <div class="col-md-2">
            <div class="img"> 
            <!--user immage-->
                 <?php if($_SESSION['user_img']=="") {?>
                 <img class="gimg" style="width: 100%; height: 100%;" src="<?php echo base_url("assets/user1.jpg") ?>"  alt="Cinque Terre" >
                 <?php } else {?>
                 <img class="gimg" style="width: 100%; height: 100%;" src="<?php echo $_SESSION['user_img'] ?>" alt="Cinque Terre">
                 <?php } ?>
             <!--/user immage-->
            
            </div>
          </div>
          <div class="col-md-10">
            <div class="txt">
              <h3><?php echo $_SESSION['username'] ?></h3>
              <ul>
                 <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $user['email']; ?></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $user['date']; ?></li>
                     <?php  if($user['mo_no']){ ?>
                <li><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo $user['mo_no']; ?></li>
                <?php } ?>
                 <?php  if($user['u_location']){ ?>
                <li><i class="fa fa-location-arrow" aria-hidden="true"></i> <?php echo $user['u_location']; ?></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="space"></div>
    <div class="clearfix"></div>
    <hr>
  </div>
  <!-- header bg end --> 
</header>
<br><br><br>
<div class="col-md-8 col-md-offset-2">
           <div class="alert alert-danger">
              <strong>Refer and win !</strong> Refer at least 50 friends and  win 2 tickets for an upcoming movie on successfull Completion of their regestration.
            </div>
           <?php  $mobile_no=$user['mo_no'] ?>
              <div id="msg"></div>
             <?php  if(!$user['mo_no']){ ?>
              <div class="alert alert-danger"> <strong>Thanks !</strong>&nbsp;&nbsp;&nbsp; for subscribing with us</div>
              <?php } ?>
</div>
<section>
  <div class="container">
    <div class="col-md-4">
      <div class="dshbrd_tabs"> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#Dashboard" aria-controls="Dashboard" role="tab" data-toggle="tab">Dashboard</a></li>
          <li role="presentation"><a href="#Coupons" aria-controls="Coupons" role="tab" data-toggle="tab">Coupons</a></li>
          <li role="presentation"><a href="#refrence" aria-controls="refrence" role="tab" data-toggle="tab">Refrences</a></li>
       <!--   <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
        </ul>
        <!-- Tab panes --> 
      </div>
    </div>
    <div class="col-md-8">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="Dashboard">
          <div class="list-store-outer">
            <div class="row">
              <!--dashboard --> 
              <br><br>
                <div class="col-md-8 col-md-8 col-sm-offset-2">
                              <!--**********************************-->
                               <?php  if($user['mo_no']){ ?>
                               <ul>
                                   <li>  <button type="button" class="btn btn-info frofile" data-toggle="collapse" data-target="#demo1"><i class="fa fa-mobile" >&nbsp;&nbsp;&nbsp;&nbsp;</i>Change Mobile No.. </button></li>

                                                  <div id="demo1" class="collapse">       <br>
            				                    	<div class="form-group">
                                                      <input type="hidden" name="id" value="<?php echo $_SESSION['username'] ?>" >
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                        	<input type="text" id="m1" name="pass" placeholder="Mobile No" class="form-first-name form-control" maxlength="10">
            				                        </div>
            				                        <div class="form-group">
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                    			<input type="hidden" id="m_email" name="email"  class="form-first-name form-control" value="<?php  echo $user['mo_no']; ?>" >
            				                    		<input type="hidden" id="m" name="repass" placeholder="Enter OTP" class="form-first-name form-control" value="<?php echo rand(1111,9999); ?>" >
            				                        	<input type="text" id="m2" name="repass" placeholder="Enter OTP" class="form-first-name form-control" >
            				                        </div>
            				                    <button  id="sub"type="button" class="btn btnch4 frofile" onclick="verify_mobile(<?php echo $user['id']; ?>)" >Verify</button>

                  </div>
                  <br>
                  <!--**********************************-->
                   <?php } else {?>
                   <li>            <button type="button" class="btn btn-info frofile" data-toggle="collapse" data-target="#demo2"><i class="fa fa-mobile" >&nbsp;&nbsp;&nbsp;&nbsp;</i>Verify Mobile No.. </button></li>

                         <div id="demo2" class="collapse">       <br>
            				                    	<div class="form-group">
                                                      <input type="hidden" name="id" value="<?php echo $_SESSION['username'] ?>" >
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                        	<input type="text" id="m1" name="pass" placeholder="Mobile No" class="form-first-name form-control" maxlength="10">
            				                        </div>
            				                        <div class="form-group">
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                    		<input type="hidden" id="m" name="repass" placeholder="Enter OTP" class="form-first-name form-control" value="<?php echo rand(1111,9999); ?>" >
            				                    		<input type="hidden" id="m_email" name="email"  class="form-first-name form-control" value="<?php  echo $user['mo_no']; ?>" >
            				                        	<input type="text" id="m2" name="repass" placeholder="Enter OTP" class="form-first-name form-control" >
            				                        </div>
            				                    <button id="sub"type="button" class="btn btnch4 frofile" onclick="verify_mobile(<?php echo $user['id']; ?>)" >Verify</button>

                  </div>
                   
                   <br>
                   <?php } //echo $_SESSION['status'] ;?>
                   
             <?php if( $_SESSION['status']!="fb" && $_SESSION['status']!="g"){  ?>           
                    <li>            <button type="button" class="btn btn-info frofile" data-toggle="collapse" data-target="#demo3">Change Password </button></li>
        <?php } ?>

                         <div id="demo3" class="collapse">       <br>
            				                    	<div class="form-group">
                                                      <input type="hidden" name="id" value="<?php echo $_SESSION['username'] ?>" >
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                        	<input type="password" id="p1" name="pass" placeholder="Password" class="form-first-name form-control" >
            				                        </div>
            				                        <div class="form-group">
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                        	<input type="password" id="p2" name="repass" placeholder="Password" class="form-first-name form-control" >
            				                        </div>
            				                    <button type="button" class="btn btnch4 frofile" onclick="change_psss(<?php echo $user['id']; ?>)" >Submit</button>

                  </div>
                  
                  <!--update profile-->
                 <li>            <button type="button" class="btn btn-info frofile" data-toggle="collapse" data-target="#demo4"><i class="fa fa-user" >&nbsp;&nbsp;&nbsp;&nbsp;</i>Update Your profile</button></li>
                 <div id="demo4" class="collapse">       <br>
            				                    	<div class="form-group">
                                                      <input type="hidden" name="id" value="<?php echo $_SESSION['username'] ?>" >
            				                    		<label class="sr-only" for="form-first-name">Your Location</label>
            				                        	<input type="text" id="loc" name="u_location" placeholder="Your Location" class="form-first-name form-control" >
            				                        </div>
            				                    <button type="button" class="btn btnch4 frofile" onclick="update_profile(<?php echo $user['id']; ?>)" >Submit</button>

                  </div>
                  

                  
                  <!--/update profile-->
                 <!--Invite Your friends-->
                 <br>
                 <li>            <button type="button" class="btn btn-info frofile" data-toggle="collapse" data-target="#demo5"><i class="fa fa-envelope" ></i>&nbsp;&nbsp;&nbsp;&nbsp;Invite Your friends</button></li>
                 <div id="demo5" class="collapse">       <br>
            				                    	<div class="form-group">
                                                      <input type="hidden" name="id" value="<?php echo $_SESSION['username'] ?>" >
            				                    		<label class="sr-only" for="form-first-name">Your Location</label>
            				                        	<input type="text" id="r_mo" name="r_mo" placeholder="Your friends mobile no" class="form-first-name form-control" >
            				                        </div>
            				                    <button type="button" class="btn btnch4 frofile" onclick="update_refrence(<?php echo $user['id']; ?>)" >Submit</button>

                  </div>
                  <br>
                  
                  <!--/Invite Your friends-->
                  <li class="whatsapp123"><a  style="background-color: #002b5e;" class="btn btn-info frofile" href="whatsapp://send?text=<?php echo $_SESSION['username']; ?> has invited you at http://dcountnow.com/user/refreg/<?php echo $user['id']; ?>. Click on given link to create your account to grab awesome discount near you" data-action="share/whatsapp/share"><i class="fa fa-whatsapp" ></i> Share via WhatsApp</a>
</a></li>
                 </ul>
                 </div>
              <!--/dashboard-->
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="Coupons">
          <div class="clearfix"></div>
          <div class="list-store-outer">
            <div class="row">
                <!--used coupons-->
                <br>
                 <table class="table">
    <!--Table head-->
    <thead class="blue-grey darken-3">
        <tr>
           
          <!--  <th>Store</th>-->
            <th>Coupon</th>
            <th>Coupon Code</th>
             <th>Date</th>
          <!--   <th>Type</th>-->
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <?php foreach( $user_coupon as $row){?>
        <?php $cop=  $this->db->get_where('coupon',array('cop_id'=>$row['cop_id'])); $cop= $cop->row_array(); ?>
         <?php $st=  $this->db->get_where('store',array('st_id'=>$row['st_id'])); $st= $st->row_array(); ?>
        <tr>
            <!--<td><?php //echo $st['st_name']; ?></td>-->
            <td><?php echo $cop['cop_name']; ?></td>
             <td><?php echo $cop['cop_code']; ?></td>
             <td><?php echo $row['date']; ?></td>
             <!--  <td><?php //echo $row['type']; ?></td>-->

        </tr>
       	<?php } ?>
    </tbody>
    <!--Table body-->
</table>
                
                
                <!--/used coupons-->
            </div>
          </div>

        </div>
        <!---->
           <div role="tabpanel" class="tab-pane" id="refrence">
          <div class="clearfix"></div>
          <div class="list-store-outer">
            <div class="row">
                <!--used coupons-->
                <br>
                 <table class="table">
    <!--Table head-->
    <thead class="blue-grey darken-3">
        <tr>
           
          <!--  <th>Store</th>-->
            <th>User Name</th>
             <th>Date</th>
             <th>Status</th>
          <!--   <th>Type</th>-->
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
            <?php //echo $user['id']; ?>
             <?php  $r=$this->db->get_where('user_refrence',array('refer_id'=>$user['id'],'status'=>0)); $count= $r->num_rows(); ?>
            <?php  $q=$this->db->get_where('user_refrence',array('refer_id'=>$user['id'])); $user= $q->result_array();   ?>
        <?php foreach( $user as $row){?>
        <tr>
            <!--<td><?php //echo $st['st_name']; ?></td>-->
            <td><?php echo $row['user_name']; ?></td>
             <td><?php echo $row['date']; ?></td>
             <td><span class="badge"><?php if($row['status']==0){echo "avilable"; }else{echo "used";} ?><span></td>
            <!--  <td><?php //echo $row['type']; ?></td>-->

        </tr>
       	<?php } ?>
       	    	<?php if($count <50){ ?>
         <tr> <button type="button" class="btn btn-info frofile" data-toggle="collapse">You have completed <span style="color:yellow"><?php echo $count; ?></span> Refrence Regestration</button></tr>
                   	<?php }else { ?>
        <tr> <button type="button" onclick="message_user(<?php echo $mobile_no; ?>)" class="btn btn-info frofile" data-toggle="collapse"><span style="color:yellow">Congratulations !&nbsp;&nbsp;&nbsp;</span> claim now</button></tr>
           	<?php } ?>
    </tbody>
    <!--Table body-->
</table>
      <?php //echo  $mobile_no; ?>
      
                
                
                <!--/used coupons-->
            </div>
          </div>

        </div>
 
</section>


    <script>
       
               
            function message_user(x){
                 $.ajax({
                    url:"<?php echo base_url();?>user/message_user",
                    type:"POST",
                    datatype:"json",
                    data:{id:x},
                    success: function (response) {
                        if(response==1){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Congratulations!</strong> check Your message box.  </div>'); 
                             } 
                        if(response==2){
                             $('#msg').html('<div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail!</strong> somthing went wrong   </div>');
                          
                        } 
                    },
                    error: function () { alert("fail"); }
                })
        }
    
    /*____________________________________*/
    
    
            function update_profile(x){
             var p1 = $('#loc').val();
                 $.ajax({
                    url:"<?php echo base_url();?>user/update_profile",
                    type:"POST",
                    datatype:"json",
                    data:{p1:p1,id:x},
                    success: function (response) {
                        if(response==1){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Location Updated successfully  </div>'); 
                         window.location.replace("http://dcountnow.com/profile"); 
                        } 
                        if(response==2){
                             $('#msg').html('<div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail!</strong> somthing went wrong   </div>');
                          
                        } 
                    },
                    error: function () { alert("fail"); }
                })
        }
        
        /*_______________________________*/
               function update_refrence(x){
             var p1 = $('#r_mo').val();
        
                 $.ajax({
                    url:"<?php echo base_url();?>user/update_refrence",
                    type:"POST",
                    datatype:"json",
                    data:{p1:p1,id:x},
                    success: function (response) {
                            
                        if(response==1){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Refrence message has been sent </div>'); 
                    
                        } 
                        if(response==2){
                             $('#msg').html('<div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail!</strong> somthing went wrong   </div>');
                          
                        } 
                    },
                    error: function () { alert("fail"); }
                })
        }
        
    /*******************/

        function change_psss(x){
             var p1 = $('#p1').val();
             var p2 = $('#p2').val();
             $.ajax({
                    url:"<?php echo base_url();?>user/change_pass",
                    type:"POST",
                    datatype:"json",
                    data:{p1:p1,p2:p2,id:x},
                    success: function (response) {
                        if(response==1){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Password changed successfully  </div>'); 
                        } 
                        if(response==2){
                             $('#msg').html('<div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail!</strong> Password and Confermed Password are not equivalent   </div>');
                            
                        } 
                    },
                    error: function () { alert("fail"); }
                })
        }
        
             function verify_mobile(x){
             var p1 = $('#m1').val();
             var p2 = $('#m2').val();
             var p3 = $('#m').val();
              var p4 = $('#m_email').val();
            
             $.ajax({
                    url:"<?php echo base_url();?>user/verifymo",
                    type:"POST",
                    datatype:"json",
                    data:{p1:p1,p2:p2,p3:p3,p4:p4,id:x},
                    success: function (response) {
                        if(response==1){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> otp has been sent to your  mobile  </div>'); 
                        } 
                        if(response==3){
                             $('#msg').html('<div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail!</strong> incorrect  OTP  </div>');
                            
                        }
                                                if(response==2){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Your Mobile no Updated successfully </div>'); 
                            window.location.replace("http://dcountnow.com/profile");
                        }
                    },
                    error: function () { alert("fail"); }
                })
        }
        
        
        $(document).ready(function(){
             $("#m2").hide();
    $("#sub").click(function(){
        $("#m1").hide();
         $("#m2").show();
    });

});
    </script>
