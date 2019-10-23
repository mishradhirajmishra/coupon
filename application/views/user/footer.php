	<footer>
	    
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<h2>SUPPORT </h2>
						<ul>
							<li><a href="<?php echo base_url();?>termsandcondition">Terms and Conditions</a></li>
							<li><a href="<?php echo base_url();?>aboutus">About</a></li>
							<li><a href="<?php echo base_url();?>howitwork">How  it work </a></li>
							<li><a href="<?php echo base_url();?>contactus">Contact us</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<h2>PAGES </h2>
						<ul>
							<li><a href="<?php echo base_url();?>user/viewallrecent">Recent Page</a></li>
							<li><a href="<?php echo base_url();?>user/viewalldeal">Deal of Day</a></li>
							<li><a href="<?php echo base_url();?>user/viewallfeatured">Featured Page</a></li>
							<li><a href="<?php echo base_url();?>user/viewallstore">Store</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<h2>CONTACT</h2>
						<ul>
							<li>
								<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
								<div class="ftext">7379404444
									<br/> 0522-4231084</div>
							</li>
							<li>
								<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
								<div class="ftext">dcountnow&#064;gmail&#046;com</div>
							</li>
							<li>
								<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
								<div class="ftext">1/108, Gomti Nagar Bypass Rd, Vijay Khand, Vishal Khand 1, Vishal Khand, Gomti Nagar, Lucknow, Uttar Pradesh 226010.
								</div>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<h2>SUBSCRIBE</h2>
						<p>Subscribe Us to receive latest updates of coupons of various type of store located in lucknow. </p>
						<p>We will send , best suited offer to you . </p>
						<p id="subsmsg" style="color:yellow"></p>
						<div class="subscribe">
						<input type="email" name="email" id="email" placeholder="Email" / required> <a id="subs" onclick="subs()" >GO</a>
						
						</div>
					</div>
				</div>
				<!-- copayright -->
				<div class="copayright">
					<div class="copayright-left">© All rights are reserved to Dcount now <?php  $x=Date('y');  $y=$x-1; echo '20'.$y.'-'.'20'.$x; ?> : <span> Powered by : Irebel Webtech</div>
					<div class="copayright-right">
						<ul class="socail-icon">
							<li><a href="https://www.facebook.com/dcountnow/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://twitter.com/Dcount_Now"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<!--<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
							<li><a href="https://in.pinterest.com/DcountNow/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/dcount_now/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://www.linkedin.com/in/dcountnow/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /copayright -->
			</div>
		</div>
		<!-- /footer -->
     <h1 id="name"></h1> <h1 id="email"></h1> <h1 id="id"></h1>
	</footer>
	<a href="#top123">
	<div class="scroll-to-top scroll-to-target" data-target=".hide-bg"><span class="icon fa fa-angle-up"></span></div></a>
	<!-- jQuery -->
	<script src="<?php echo base_url();?>assets/user/js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url();?>assets/user/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/bootstrap-dropdownhover.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="<?php echo base_url();?>assets/user/js/jquery.easing.min.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/jquery.fittext.js"></script>
	<script src="<?php echo base_url();?>assets/user/js/wow.min.js"></script>
	<!--  countTo JavaScript  -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/jquery.countTo.js"></script>
	<!--  Custom Theme JavaScript  -->
	<script src="<?php echo base_url();?>assets/user/js/custom.js"></script>
	<!-- owl carousel -->
	<script src="<?php echo base_url();?>assets/user/owl-carousel/owl.carousel.js"></script>
	<!-- slider-->
	    	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>

        function name(x){
             $.ajax({
                    url:"<?php echo base_url();?>user/c_name",
                    type:"POST",
                    datatype:"json",
                    data:{name:x},
                    success: function (response) {
                      $('#na').html(response);
                    },
                    error: function () { alert("fail"); }
                })
        }
        function email(x){
             $.ajax({
                    url:"<?php echo base_url();?>user/c_email",
                    type:"POST",
                    datatype:"json",
                    data:{email:x},
                    success: function (response) {
                      $('#em').html(response);
                    },
                    error: function () { alert("fail"); }
                })
        }
       function mobile(x){
             $.ajax({
                    url:"<?php echo base_url();?>user/c_mobile",
                    type:"POST",
                    datatype:"json",
                    data:{mobile:x},
                    success: function (response) {
                     $('#mo').html(response);
                    },
                    error: function () { alert("fail"); }
                })
        }
        
    </script>

        <script>

        function insert(role,uname,st,cop){
              
             $.ajax({
                    url:"<?php echo base_url();?>user/track_user_coupon",
                    type:"POST",
                    datatype:"json",
                    data:{role:role,uname:uname,st:st,cop:cop},
                    success: function (response) {
                    },
                    error: function () { alert("fail"); }
                })
        }
    </script>
    
            <script>

        function subs(){
               var x=  $("#email").val();
             /*alert(x);*/
             $.ajax({
                    url:"<?php echo base_url();?>user/subscriber",
                    type:"POST",
                    datatype:"json",
                    data:{email:x},
                    success: function (response) {
                        
                         $('#subsmsg').html(response);
                    },
                    error: function () { alert("fail"); }
                })
        }
    </script>

		
<!--facebook login-->
<script>

 function logIn(){
FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me?fields=id,name,email', function(response) {

         var name = response.name;
         var email = response.email;
         var id = response.id;
       var im = "http://graph.facebook.com/" + response.id + "/picture?type=normal";
        
      
         console.log('Good to see you, ' + response.name + '.');
                  console.log('Good to see you, ' + response.email + '.');
                           console.log('Good to see you, ' + response.id + '.');
         
                     $.ajax({
                    url:"<?php echo base_url();?>user/fb_login",
                    type:"POST",
                    datatype:"json",
                    data:{id:id,name:name,email:email,im:im},
                    success: function (response) {
                     
                        window.location.replace("http://dcountnow.com/profile");
                    },
                    error: function () { alert("fail"); }
                });

     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }
}),{scope:'public_profile,email'};
 }
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '1238618159605046',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.12'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

     <!--google login-->
    
     <script>
      function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        var name = profile.getName();
        var email = profile.getEmail();
        var img = profile.getImageUrl();
        var id = profile.getId();
/*        
        
        
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + );
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());*/
        
               $.ajax({
                    url:"<?php echo base_url();?>user/g_login",
                    type:"POST",
                    datatype:"json",
                    data:{id:id,name:name,email:email,im:img},
                    success: function (response) {
                         window.location.replace("http://dcountnow.com/profile"); signOut();
                            var xgg = localStorage.getItem("glogin");
                               if(xgg == "yes"){
                 /* window.location.replace("http://dcountnow.com/user/list_user_coupon"); signOut();*/
                               }
                    },
                    error: function () { alert("fail");
                    }
                })

      }

    </script>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>

<script>
 function g_login(){ 
    localStorage.setItem("glogin", "yes");
 }
  function g_logout(){  localStorage.setItem("glogin", "no");}
</script>

<?php //print_r($_SESSION['type'] ); ?>
</body>

</html>