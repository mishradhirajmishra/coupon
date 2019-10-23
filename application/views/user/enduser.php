   <style>
       .uhead{
background-color: #002b5e;
text-align: center;
padding: 19px;
color: white;
}
       .uhead_b{
margin-bottom:50px;

}
   </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- header bg -->
        <div class="inner-bg">

            <div class="container">
                <div class="inner-text">
                    <h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms"><?php echo $_SESSION['username'] ?></h1>
<!--                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li>/</li>
                        <li><a href="#">stores</a></li>
                    </ul>-->
                </div>
            </div>
        </div>
        <!-- header bg end -->
        	</header>
        <section>
<div class="col-md-8 col-md-offset-2">
              <div id="msg"></div>
          <?php  if(!$user['mo_no']){ ?>
              <div class="alert alert-danger">
  <strong>Thanks !</strong>&nbsp;&nbsp;&nbsp; for subscribing with us
</div>
	<?php //echo $_SESSION['status']; ?>
<?php  } ?>
                 <h3 class="uhead"><?php echo $_SESSION['username'] ?></h3>
                <?php if($_SESSION['user_img']=="") {?>
                 <div class="col-md-4 ">
                     <img style="margin: 0 auto;" src="<?php echo base_url("assets/user1.jpg") ?>" class="img-responsive img-circle" alt="Cinque Terre" style="width:204px;height:auto;">
                 </div>
                 <?php } else {?>
                 <div class="col-md-4 ">
                     <img style="margin: 0 auto;" src="<?php echo $_SESSION['user_img'] ?>" class="img-responsive img-circle" alt="Cinque Terre" style="width:204px;height:auto;">
                 </div>
                 
                 <?php } ?>
                 
                  <div class="col-md-4 col-md-offset-4 uhead_b">
                  <ul>
                    
                <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $user['email']; ?></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $user['date']; ?></li>
                <?php  if($user['mo_no']){ ?>
             
                <li><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo $user['mo_no']; ?></li>
                <!--**********************************-->
                                   <li>            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">Change Mobile No.. </button></li>

                                                  <div id="demo1" class="collapse">       <br>
            				                    	<div class="form-group">
                                                      <input type="hidden" name="id" value="<?php echo $_SESSION['username'] ?>" >
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                        	<input type="text" id="m1" name="pass" placeholder="Mobile No" class="form-first-name form-control" maxlength="10">
            				                        </div>
            				                        <div class="form-group">
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                    		<input type="hidden" id="m" name="repass" placeholder="Enter OTP" class="form-first-name form-control" value="<?php echo rand(1111,9999); ?>" >
            				                        	<input type="text" id="m2" name="repass" placeholder="Enter OTP" class="form-first-name form-control" >
            				                        </div>
            				                    <button id="sub"type="button" class="btn btnch4" onclick="verify_mobile(<?php echo $user['id']; ?>)" >Verify</button>

                  </div>
                  <br>
                  <!--**********************************-->
                   <?php } else {?>
                   <li>            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Verify Mobile No.. </button></li>

                         <div id="demo2" class="collapse">       <br>
            				                    	<div class="form-group">
                                                      <input type="hidden" name="id" value="<?php echo $_SESSION['username'] ?>" >
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                        	<input type="text" id="m1" name="pass" placeholder="Mobile No" class="form-first-name form-control" maxlength="10">
            				                        </div>
            				                        <div class="form-group">
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                    		<input type="hidden" id="m" name="repass" placeholder="Enter OTP" class="form-first-name form-control" value="<?php echo rand(1111,9999); ?>" >
            				                        	<input type="text" id="m2" name="repass" placeholder="Enter OTP" class="form-first-name form-control" >
            				                        </div>
            				                    <button id="sub"type="button" class="btn btnch4" onclick="verify_mobile(<?php echo $user['id']; ?>)" >Verify</button>

                  </div>
                   
                   <br>
                   <?php } //echo $_SESSION['status'] ;?>
                   
             <?php if( $_SESSION['status']!="fb" && $_SESSION['status']!="g"){  ?>           
                    <li>            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">Change Password </button></li>
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
            				                    <button type="button" class="btn btnch4" onclick="change_psss(<?php echo $user['id']; ?>)" >Submit</button>

                  </div>
                 </ul>
                

                 </div>
          </div>
          </section>
</div>
         <hr>
	<?php  //print_r( $user_coupon); ?>
   <section class="list-store">
   <?php // print_r($user_coupon) ?>
              <div class="col-md-10 col-md-offset-1">
            <table class="table">
    <!--Table head-->
    <thead class="blue-grey darken-3">
        <tr>
           
            <th>Store</th>
            <th>Coupon</th>
            <th>Coupon Code</th>
             <th>Date</th>
             <th>Type</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <?php foreach( $user_coupon as $row){?>
        <?php $cop=  $this->db->get_where('coupon',array('cop_id'=>$row['cop_id'])); $cop= $cop->row_array(); ?>
         <?php $st=  $this->db->get_where('store',array('st_id'=>$row['st_id'])); $st= $st->row_array(); ?>
        <tr>
            <td><?php echo $st['st_name']; ?></td>
            <td><?php echo $cop['cop_name']; ?></td>
             <td><?php echo $cop['cop_code']; ?></td>
             <td><?php echo $row['date']; ?></td>
               <td><?php echo $row['type']; ?></td>

        </tr>
       	<?php } ?>
    </tbody>
    <!--Table body-->
</table>
          </div>
          
</section>
    <script>

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
             $.ajax({
                    url:"<?php echo base_url();?>user/verifymo",
                    type:"POST",
                    datatype:"json",
                    data:{p1:p1,p2:p2,p3:p3,id:x},
                    success: function (response) {
                        if(response==1){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> otp has been sent to your  mobile  </div>'); 
                        } 
                        if(response==3){
                             $('#msg').html('<div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail!</strong> incorrect  OTP  </div>');
                            
                        }
                                                if(response==2){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Your Mobile no Updated successfully </div>'); 
                            
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
    
                                       
                                   

       