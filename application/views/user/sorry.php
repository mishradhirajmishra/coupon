<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      .container {
    background-color: #002B5E;
    .site-info{ color:white;}
.site-info {
    text-align: center;  border-top:1px solid #35BEEA;
        padding: 32px 0px;

}


  </style>
</head>
<body>
    <div class="container" >
                   <img style="height: 75px; margin-top: 10px; margin-left: 10px;" src="<?php echo base_url("assets/img/Dcount.png") ?>">

    </div>
<div class="container"style="text-align: center;margin-top: 100px;">
    <div class="row">
        <div class="jumbotron text-xs-center">
  <h1 class="display-3">Sorry!1</h1>
     <?php if($name!=0){
      echo '<p class="lead"><strong>User Name</strong> already exist !</p>';
     } ?>
     
     <?php if($email!=0){
      echo '<p class="lead"><strong>Email</strong> already exist !</p>';
     } ?>
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
        <div class="site-info"style=" text-align: center;  padding-bottom: 20px; color: yellow;">
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
