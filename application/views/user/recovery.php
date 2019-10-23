<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      .container {
    background-color: #8888;
    .site-info{ color:white;}
.site-info {
    text-align: center;  border-top:1px solid #35BEEA;
        padding: 32px 0px;

}
span {
   
}

  </style>
</head>
<body>
  <?php  //print_r($d['name'])  ?>
    <div class="container">
                   <img style="height: 75px; margin-top: 10px; margin-left: 10px;" src="<?php echo base_url("assets/img/Dcount.png") ?>">

    </div>
<div class="container"style="text-align: center;margin-top: 100px;">
    <div class="row">
        <div class="jumbotron text-xs-center">
  <h1 class="display-3">Forgot password !</h1>
  <hr>
  <!---->
       <?php $attributes = array('class' => 'form-inline'); echo form_open('User/reset_pass',$attributes);?>
  
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email">
    </div>
    <input type="submit" class="btn btn-default"value="Send">
  </form>
  <!---->
  
  <hr>
  <p>
    Having trouble? <a href="<?php echo base_url();?>user/contact_us">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm"href="<?php echo base_url();?>user" role="button">Continue to homepage</a>
  </p>
</div>
    </div>
</div> 
   <div class="container">
        <div class="site-info"style=" text-align: center;  padding-bottom: 20px;">
				   	© All rights are reserved to DCOUNT NOW 2017-18 : <span style=" color: white;"> Powered by : Irebel Webtech</span><br><br>
					<a href="https://www.facebook.com/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/fb1.png"></a>
					<a href="https://www.instagram.com/dcount_now/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/in1.png"></a>
					<a href="https://in.pinterest.com/DcountNow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/pi1.png"></a>
					<a href="https://twitter.com/Dcount_Now"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/tw1.png"></a>
					<a href="https://www.linkedin.com/in/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/li1.png"></a>
				</div>
       </div>
</body>
</html>
