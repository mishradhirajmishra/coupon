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
    background-color: rgba(0, 43, 94, 0.9);
    .site-info{ color:white;}
.site-info {
    text-align: center;  border-top:1px solid #35BEEA;
        padding: 32px 0px;
.site-info {
   
}
}
span {
   
}
/*__________________________*/

/*  _________________login_reg_______________*/
body {
    padding-top: 90px;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
/******************************/
/*input#login-submit{
    background: -webkit-linear-gradient(left top, orange,red);
    background: -o-linear-gradient(bottom right,orange,red);
    background: -moz-linear-gradient(bottom right,orange,red);
    background: linear-gradient(to bottom right, orange,red);
}
input#register-submit,input#login-submit {
    background-color: red !important;
}*/

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

  <!---->
      	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<?php $attributes = array('style' => 'display: block;', 'id' => 'login-form'); echo form_open('User/sign_in',$attributes);?>			
									
									<div class="form-group">
										<input type="text" name="form-name" id="form-name" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="form-pass" id="form-pass" tabindex="2" class="form-control" placeholder="Password">
									</div>
										<div class="form-group">
										<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control" value="Log In">
								
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="<?php echo base_url();?>user/recovery" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								
								<!--******************************************************************-->
									<?php $attributes = array('style' => 'display: none;', 'id' => 'register-form'); echo form_open('User/signup_user',$attributes);?>
															
									<div class="form-group">
										<input type="text" name="form-name" id="form-name" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="form-email" id="form-email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group"style="display:none">
										<input type="number" name="form-mo" id="form-mo" tabindex="2" class="form-control" placeholder="Mobile No">
									</div>
									<div class="form-group">
										
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control" value="Register Now">
										
									</div>
								</form>
								<!--*****************************************************************-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
   <div class="container" style=" background-color: rgba(0, 43, 94, 0.9);">
        <div class="site-info"style=" text-align: center;  padding-bottom: 20px; color: yellow;">
				   	© All rights are reserved to DCOUNT NOW 2017-18 : <span style=" color: white;"> Powered by : Irebel Webtech</span><br><br>
					
					<a href="https://www.facebook.com/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/fb1.png"></a>
					<a href="https://www.instagram.com/dcount_now/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/in1.png"></a>
					<a href="https://in.pinterest.com/DcountNow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/pi1.png"></a>
					<a href="https://twitter.com/Dcount_Now"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/tw1.png"></a>
					<a href="https://www.linkedin.com/in/dcountnow/"><img style="width: 50px;" class="imgch" src="http://dcountnow.com/assets/li1.png"></a>
				</div>
       </div>
       <script>
           $(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
       </script>
</body>
</html>
