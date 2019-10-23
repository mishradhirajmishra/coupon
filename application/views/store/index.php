<script>
    $(document).ready(function(){
                 $("#dash").addClass("active");
    });
</script>
<style>
    div.container-fluid > div.row-fluid > div > div.widget-content {
height: 434px;
}
.shead {
        margin-top: 105px;
    background-color: blue;
    text-align: center;
    color: white;
    font-size: 27px;
    padding: 23px;
}
.smap {
    overflow: hidden;
    height: 367px;
}
</style>

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <?php //echo $user ?>
        <div class="quick-actions_homepage">
            <ul class="quick-actions">

                   <li class="bg_lg"> <a href="<?php echo base_url();?>index.php/store/add_coupon"> <i class="icon-dashboard"></i> <span class="label label-important"><?php  $q=  $this->db->get_where('coupon',array('st_id'=>$_SESSION['st_id'])); echo $q->num_rows();   ?></span>Coupons </a> </li>
                   <li class="bg_lr"> <a href="<?php echo base_url();?>index.php/store/code_reg_user"> <i class="icon-pencil"></i><span class="label label-danger"><?php $this->db->distinct();$q=  $this->db->get_where('user_coupon',array('st_id'=>$_SESSION['st_id'])); echo $q->num_rows();   ?></span> Uesrs </a> </li>

            </ul>
          
                <div class="shead"><?php echo $s_des['st_name']  ?></div><br>
                <br>
                  <?php if( $s_des['verify_mo'] ==0) {?>
                <div class="alert alert-danger"><h5>  Your Mobile no is not Verifyed yet  Please verify to proceed</h5></div>
                  <?php } ?>
                                    <?php if( $s_des['verify_email'] ==0) {?>
                <div class="alert alert-warning"><h5>  Your Email no is not Verifyed yet  Please verify to proceed</h5></div>
                  <?php } ?>
                </div>
                <div id="msg"></div>
        <!--End-Action boxes-->

        <!--Chart-box-->
        <div class="row-fluid">
                  <div class="span4 offset1">

                        <div class="widget-box">

                <div class="widget-content" >
                    <div class="row-fluid">
                                    <div class="alert alert-danger"><h6>Mobile Verification</h6></div>
                    <!---->
                                                                     
            				                    	<div class="form-group">
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                        	<input type="text" id="mobile_no" name="pass" placeholder="Mobile No"  maxlength="10" value="<?php echo $s_des['mo_no'] ; ?>">
            				                        </div>
            				                        <div class="form-group">
            				                    		<label class="sr-only" for="form-first-name">Password</label>
            				                    		<input type="hidden" id="send_otp" name="repass" placeholder="Enter OTP"  value="<?php echo rand(1111,9999); ?>" >
            				                        	<input type="text" id="recived_otp" name="repass" placeholder="Enter OTP"  >
            				                        </div>
            				                    <button  id="sub"type="button" class="btn btnch4 frofile" onclick="verify_mobile(<?php echo $s_des['st_id'] ; ?>)" >Verify</button>
                    <!---->

                    </div>
                </div>
            </div>
            </div>
            <!---->
                            
     <?php // print_r($s_des); ?>
</div>

<!--end-main-container-part-->
<script>
             function verify_mobile(x){
             var mobile_no = $('#mobile_no').val();
             var recived_otp = $('#recived_otp').val();
             var send_otp = $('#send_otp').val();

            
             $.ajax({
                    url:"<?php echo base_url();?>dcount/verifymo",
                    type:"POST",
                    datatype:"json",
                    data:{mobile_no:mobile_no,recived_otp:recived_otp,send_otp:send_otp,id:x},
                    success: function (response) {
                       
                        if(response==1){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> otp has been sent to your  mobile  </div>'); 
                        } 
                        if(response==3){
                             $('#msg').html('<div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail!</strong> incorrect  OTP  </div>');
                            
                        }
                                                if(response==2){
                            $('#msg').html('<div class="alert alert-success alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Your Mobile no verified successfully </div>'); 
                            window.location.replace("http://dcountnow.com/dcount");
                        }
                    },
                    error: function () { alert("fail"); }
                })
        }
        
        
        $(document).ready(function(){
             $("#recived_otp").hide();
    $("#sub").click(function(){
        $("#mobile_no").hide();
         $("#recived_otp").show();
    });
       /*_____________________________________*/


});
        $(document).ready(function(){
             $("#recived_otp_e").hide();
    $("#sub_e").click(function(){
        $("#email").hide();
         $("#recived_otp_e").show();
    });
       /*_____________________________________*/


});
    </script>


