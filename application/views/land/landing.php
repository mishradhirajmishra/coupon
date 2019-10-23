<!DOCTYPE html>
<html >
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/Crossway/bootstrap.css" />

<link rel="stylesheet" href="<?php echo base_url();?>assets/Crossway/style.css" />
<style>

    body {  font-family: Times;
            /*background: radial-gradient(  rgb(0, 0, 255) 0%, rgb(0, 0, 155) 47%, rgb(0, 0, 55) 100%);  Standard  );*/
                 background-image: url("<?php echo base_url();?>assets/img.jpg");
    }
    .textbelow {
        text-align:justify;
    color: white;
    margin-top: 10px;
    margin-bottom: 40px;
    padding: 14px;
    font-family: Times;
    
}
p{font-size:20px;   font-family: Times;}
span.chp {
    font-size: 15px;   font-family: Times;
}
label{   color: #357ebd; font-family: Times;}

span.call {
    float: right;
    margin-top: 21px;
    color: white;
    font-size: 23px;
    margin-right: 10px;
}
.callch{color: #EC2F15;}
.site-info{ color:white;}
.site-info {
    text-align: center;
    border-top:1px solid #35BEEA;
        padding: 32px 0px;

}
p.{     font-family: 'Open Sans', sans-serif;  }
img.imgch {
    width: 44px;
}
img.imgch {
    margin: 0px 20px;
}
</style>
</head>

<body style="overflow: visible;">

<section id="intro" class="intro-parallax" >
    <div class="container-fluid ">
       
              
         
        <div class="row ch1">
            <div class="col-md-5 col-md-offset-1" >
                <div class="row">
                <img style="height: 75px; margin-top: 10px; margin-left: 10px;" src="<?php echo base_url("assets/img/Dcount.png") ?>">
                <span class="call">Call:<span  class="callch"> 73-7940-4444 </span></span>
                </div>
                <div class="video-block ch2" style="margin-top:48px" >
               
                    <iframe class="if" style=" border: 5px solid #ddd; border-radius: 4px; padding: 3px;" src="https://www.youtube.com/embed/P8YfGEW6X6E" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                </div>



            </div>
            <div class="col-md-4 col-md-offset-1 col-xs-12" style="margin-top:37px;">
                <div class="form_register fch" style=" background: radial-gradient(  rgb(96%, 93%, 66%) 0%, rgb(96%, 93%, 66%) 47%, rgb(96%, 93%, 66%) 100%);">
                    <h2 style="color:#EC2F15;font-family: Times;"> Register Now! </h2>
                    <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                    echo form_open_multipart('landing/land');?>


                        <div id="input_name" class="col-md-12">
                            <input  id="lname"  class="form-control" type="text" name="lname" placeholder="Name" required>
                        </div>

                        <div id="input_email" class="col-md-12">
                            <input id="email" class="form-control" type="text" name="email" placeholder="Email" required>
                        </div>

                        <div id="input_phone" class="col-md-12">
                            <input id="phone" class="form-control" type="text" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div id="input_phone" class="col-md-12">
                            <label style=" color: blue;">Upload  image</label>
                            <input id="image" class="form-control" type="file" name="image" >
                        </div>
                        <div id="input_phone" class="col-md-12">
                            <label style=" color: blue;">Upload  video</label>
                            <input id="vidios" class="form-control" type="file" name="vidios" >
                        </div>
                        <!-- Submit Button -->
                        <div id="form_register_btn" class="text-center" >
                            <input style="    font-size: 41px;    letter-spacing: 11px; padding: 0; background: linear-gradient(orange, red );width: 91%;font-family: Times;" class="btn btn-primary btn-lg" type="submit" value="Register" id="submit">
                        </div>

                    </form>

                </div>
            </div>


        </div>	<!-- End row -->
               <div class="row ch1">
                   <div class="col-md-10 col-md-offset-1 col-xs-12" style="margin-top:40px;">
                       
                       
                                                          <div class="textbelow">
                      <p> We, here at <span class="chp">DCOUNT NOW  </span> are inviting you with great enthusiasm and happiness to be a big part in our online drive. 

                    All we ask for is a selfie/video with a hashtag <span class="chp"> DCOUNT NOW (#DCOUNTNOW) </span>. Post it on your social media accounts and we take that for a ride!

                      To show our gratitude, in return, we are giving out a lucky few  <span class="chp">DCOUNT  </span> goodies and a voucher worth 1000/-, redeemable on any of our stores near you. Grab it before it's gone!!</p>
                        
                    </div>
                  
                    
               </div>
             
    </div>	  <!-- End container -->

</section>  <!-- END INTRO -->
   <div class="container-fluid " style="width:100%">
        <div class="site-info">
					© All rights are reserved to DCOUNT NOW 2017-18 : <span> Powered by : Irebel Webtech</span><br><br>
					
					<a href="https://www.facebook.com/dcountnow/"><img class="imgch" src="<?php echo base_url();?>assets/fb.png"></a>
					<a href="https://www.instagram.com/dcount_now/"><img class="imgch" src="<?php echo base_url();?>assets/in.png"></a>
					<a href="https://twitter.com/Dcount_Now"><img class="imgch" src="<?php echo base_url();?>assets/tw.png"></a>
				</div>
       </div>


</body>
</html>