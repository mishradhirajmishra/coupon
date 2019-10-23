             <?php    $query = $this->db->get_where('user',array('name'=>$_SESSION['username'])); $res=$query->row_array(); $mono=$res['mo_no']; ?>     
             <style>
#slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img{
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}

.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}

</style>
<style>
.rate5{

 background: radial-gradient(#002b5e, #337ab7,#002b5e, #337ab7);

    /*border: 2px solid black;*/
    border-radius: 50px;
    padding: 26px 12px;
    float: right;
    color: white;
    /* margin: auto; */
    margin-top: 1%;
    margin-right: 1%;}
.featured-coupons-images1 {

    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(to right,  #002b5e, #337ab7); /* Standard syntax (must be last) */
}
.featured-coupons-images1 {
    border-bottom: 1px solid #dddddd;
    float: left;
    /*background-color: #002b5e;*/
    margin-bottom: 15px;
    text-align: center;
    width: 100%;
}
p.timer {
    font-size: 24px!important;
}
/*.popular-image {
    height: 144px;
    overflow: hidden;
}*/
       h3.wow.slideInUp {
         font-size: 35px;
        }
    h2.wow.slideInDown {
        font-size: 50px;
    }
.glych {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
}
.carousel-caption {
    position: absolute;
    bottom: 38% !important;
}
 .heig2{height:70px;}
 @media screen and (max-width: 1024px) and (min-width: 768px) {
       h3.wow.slideInUp {
         font-size: 25px;
        }
    h2.wow.slideInDown {
        font-size: 35px;
    }
}
 @media screen and (max-width: 767px) {
      .heig{height:120px;}
 }
     @media screen and (max-width: 768px) {
         .carousel-caption {
    position: absolute;
    bottom: 10% !important;
}
      
       h3.wow.slideInUp {
         font-size: 11px;
        }
    h2.wow.slideInDown {
        font-size: 16px;
    }
     }
   section.upcoming {
    display: none;
   }
@media only screen and (max-width: 767px) {
.ism-slider {
    height: 188px!important;
}

.innersl{
    font-family: "Montserrat", sans-serif !important;
    font-size: 36px !important;
    font-weight: 700 !important;
    letter-spacing: 5px !important;
    margin-bottom: 30px;
    text-transform: uppercase !important;
}
.spancl {
    font-weight: 300 !important;
}
span.mdisplay {
    display: none !important;
}
@media only screen and (max-width: 767px) {
    span.mdisplay {
    display: block !important;
}
}


</style>
<div class="heig2"></div>
<!--background-->
<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
     <li data-target="#carousel-example" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
      
    <div class="item active">
      <a href="http://dcountnow.com/user/store/53"><img src="<?php echo base_url("assets/a.jpg") ?>" alt="st"></a>
      <div class="carousel-caption">
<!--					<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h2>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h3>-->
      </div>
    </div>
 <!--   <div class="item">
    <a href="http://dcountnow.com/user/store/53"><img src="<?php echo base_url("assets/a.jpg") ?>" alt="st"></a>
      <div class="carousel-caption">

      </div>
    </div>-->
      <div class="item">
      <a href="http://dcountnow.com/user/store/51"><img src="<?php echo base_url("assets/can.jpg") ?>"alt="st"></a>
      <div class="carousel-caption">
			<!--		<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h1>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h2>-->
      </div>
    </div>
    <div class="item">
      <a href="http://dcountnow.com/user/store/8"><img src="<?php echo base_url("assets/f.jpg") ?>"alt="st"></a>
      <div class="carousel-caption">
			<!--		<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h3>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h3>-->
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="<?php echo base_url("assets/d.jpg") ?>"alt="st"></a>
      <div class="carousel-caption">
				<!--	<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h2>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h3>-->
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span ><i class="fa fa-chevron-left glych" aria-hidden="true"></i></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span><i class="fa fa-chevron-right glych" aria-hidden="true"></i></span>
  </a>
</div>

</header>
<div class="header-box-outer">
	<div class="container">
			<div class="row">
				<div class="text-center col-xs-4">
					<p class="timer" data-to="<?php  $q=  $this->db->get('coupon'); echo $q->num_rows();   ?>" data-speed="10000"></p>
					<span>COUPONS</span>
				
				</div>
				<div class="text-center  col-xs-4">
					<p class="timer" data-to="<?php  $q=  $this->db->get('store'); echo $q->num_rows();   ?>" data-speed="10000"></p>
					<span>STORE</span>
			
				</div>
<!--				<div class="text-center col-md-3 col-sm-6 col-xs-3">
					<p class="timer" data-to="<?php  $q=  $this->db->get('category'); echo $q->num_rows();   ?>" data-speed="10000">$nbsp;</p>
					<span>CATEGORIES</span>
			
				</div>-->
				<div class="text-center  col-xs-4">
					<p class="timer" data-to="<?php  $q=  $this->db->get('user'); echo $q->num_rows() + 6432;   ?>" data-speed="10000"></p>
					<span>USERS</span>
				
				</div>
			</div>
		</div>
			</div>
<!---->




	<section class="welcome">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
 
 

<!--Item slider text-->
<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>NEW COLLECTION</h2>
    </div>
  </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://s12.postimg.org/655583bx9/item_1_180x200.png" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL SUKNJA</h4>
              <h5 class="text-center">4000,00 RSD</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://s12.postimg.org/41uq0fc4d/item_2_180x200.png" class="img-responsive center-block"></a>
              <h4 class="text-center">MAYORAL KOŠULJA</h4>
              <h5 class="text-center">4000,00 RSD</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://s12.postimg.org/dawwajl0d/item_3_180x200.png" class="img-responsive center-block"></a>
              <span class="badge">10%</span>
              <h4 class="text-center">PANTALONE TERI 2</h4>
              <h5 class="text-center">4000,00 RSD</h5>
              <h6 class="text-center">5000,00 RSD</h6>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://s12.postimg.org/5w7ki5z4t/item_4_180x200.png" class="img-responsive center-block"></a>
              <h4 class="text-center">CVETNA HALJINA</h4>
              <h5 class="text-center">4000,00 RSD</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://s12.postimg.org/e2zk9qp7h/item_5_180x200.png" class="img-responsive center-block"></a>
              <h4 class="text-center">MAJICA FOTO</h4>
              <h5 class="text-center">4000,00 RSD</h5>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="#"><img src="https://s12.postimg.org/46yha3jfh/item_6_180x200.png" class="img-responsive center-block"></a>
              <h4 class="text-center">MAJICA MAYORAL</h4>
              <h5 class="text-center">4000,00 RSD</h5>
            </div>
          </div>

        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://s12.postimg.org/uj3ffq90d/arrow_left.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="https://s12.postimg.org/djuh0gxst/arrow_right.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->



		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- title -->
					<div class="tilte">
					    <?php  //echo $mono;?>
						<h2>RECENT<span> COUPONS</span></h2>
					
						 
					</div>
					<!-- /title -->
				</div>
		     
            
				 <?php foreach(array_slice ($coupon, 0, 8) as $row){?>
				
				<div class="col-md-3 col-sm-4 col-xs-12">
					<!-- featured-coupons-box -->
					<div class="featured-coupons-box">
						<!-- featured-coupons-images -->
						<div class="featured-coupons-images1">
						    <a href="<?php echo base_url();?>user/store/<?php echo $row['st_id'] ?>" >
						<!--	<img style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/".$row['cop_image']) ?>" alt="feature-logo">-->
							<img style="height: 75px;" src="<?php echo base_url("assets/img/Dcount.png") ?>" alt="logo">
							<span class="rate5 animated rollIn"><?php if($row['dis']<=9){echo sprintf("%02d", $row['dis']);}else{ echo $row['dis'];}?>%  off</span>
						    </a>
						</div>
						<!-- /featured-coupons-images -->
						<!-- featured-coupons-text -->
						<div class="featured-coupons-text">
						     <?php ?>
						<div class="star">
<!--avg rating-->
<?php   $this->db->select_avg('rating');$cat=  $this->db->get_where('rating',array('cop_id'=>$row['cop_id']));$avg_r= $cat->row_array();  $avg_r=round($avg_r['rating']); ?>
							    <?php  if($avg_r==0){
									    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										}
								      if($avg_r==1){ 
									  	echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  
									  }
									  if($avg_r==2){
										  
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


									  }
									  if($avg_r==3){ 
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
								  
									  
									  }
									  if($avg_r == 4){
									     echo '<i class="fa fa-star" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										

									  }
									  if($avg_r==5){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==6){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==7){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										

									  }
									  if($avg_r==8){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==9){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										
									  }
									  if($avg_r==10){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
									  }									  
									  ?>
<!--end avg rating-->     <span class="rate3"> <a style=" float: right;" href="<?php echo base_url();?>user/view_single_coupon/<?php echo $row['cop_id'] ;?>" alt="cupon-icon"> Rate This</a>
						</span>	</div>
							<h6> <?php echo $row['cop_name'] ?></h6>
							<p><?php echo substr($row['cop_desc'],0,50) ?></p>

                            <!--*******************-->
                          <?php if($_SESSION['user_role']=="user" && $mono){ ?>
                            
                           	<a href="#"  onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")' data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id'] ;?>">
							    <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                            
                            
                          <?php  }elseif($_SESSION['user_role']=="user" && !$mono){ ?>
      	<a href="<?php echo base_url();?>user/list_user_coupon" > <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                          
                          
                          <?php }else{ ?>
                          
                       <a href="<?php echo base_url();?>user/login_reg" > <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                          
                          <?php } ?>

							<!---->
						
                              <div class="modal fade" id="myModalr<?php echo $row['cop_id'] ;?>" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                    <!--body-->
<!--                                     <?php $attributes = array('class' => 'form-inline'); echo form_open('user/usre_sms',$attributes)?>
                                        <div class="form-group">
                                          <input type="number" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
                                        </div>
                                        <button type="submit" class="btn btn-default chbt">Submit</button>
                                   
                                      </form>-->
                                          <h5 class="white_center">coupon code has been sent to your mobile</h5>            
                                          <!--body-->
                                    </div>
                                  </div>      
                                </div>
                              </div>
							<!---->
							<div class="star1">
                         	<?php  $cat=  $this->db->get_where('rating',array('cop_id'=>$row['cop_id']));$avg_r= $cat->num_rows();  ?>
							<div class="date">Expire :</span><?php echo $row['cop_exp_date']?></div>
							<div class="comment"><i class="fa fa-comment-o fa-x" aria-hidden="true"></i>&nbsp; <?php echo $avg_r ; ?></div>
						
							</div>
						</div>
					</div>
				
					<!-- /featured-coupons-text -->
					<!-- featured-coupons-box -->
				</div>
					  <?php } ?>
                 <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
			 <a class=" btn chview " href="<?php echo base_url('user/view_all_recent'); ?>">View All Coupons</a>
			 </div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- title -->
					<div class="tilte">
						<h2>DEAL OF <span> THE DAY</span></h2>

					</div>
					<!-- /title -->
				</div>
				 <?php foreach( array_slice ($coupon_d , 0, 8) as $row){?>
				 <?php if( $row['cop_d_day'] == 1){ ?>
				<div class="col-md-3 col-sm-4">
					<!-- featured-coupons-box -->
					<div class="featured-coupons-box">
						<!-- featured-coupons-images -->
						<div class="featured-coupons-images">
						    <a href="<?php echo base_url();?>user/store/<?php echo $row['st_id'] ?>" >
							<img  style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/".$row['cop_image']) ?>" alt="feature-logo">
							</a>
						</div>
						<!-- /featured-coupons-images -->
						<!-- featured-coupons-text -->
						<div class="featured-coupons-text">
								<div class="star">
<!--avg rating-->
<?php   $this->db->select_avg('rating');$cat=  $this->db->get_where('rating',array('cop_id'=>$row['cop_id']));$avg_r= $cat->row_array();  $avg_r=round($avg_r['rating']); ?>
							    <?php  if($avg_r==0){
									    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										}
								      if($avg_r==1){ 
									  	echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  
									  }
									  if($avg_r==2){
										  
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


									  }
									  if($avg_r==3){ 
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
								  
									  
									  }
									  if($avg_r == 4){
									     echo '<i class="fa fa-star" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										

									  }
									  if($avg_r==5){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==6){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==7){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										

									  }
									  if($avg_r==8){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==9){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										
									  }
									  if($avg_r==10){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
									  }									  
									  ?>
<!--end avg rating-->
							</div>
							<h6> <?php echo $row['cop_name'] ?></h6>
							<p><?php echo substr($row['cop_desc'],0,50) ?></p>
						
                            <!--*******************-->
                          <?php if($_SESSION['user_role']=="user" && $mono){ ?>
                            
                           	<a href="#"  onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")' data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id'] ;?>">
							    <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                            
                            
                          <?php  }elseif($_SESSION['user_role']=="user" && !$mono){ ?>
      	<a href="<?php echo base_url();?>user/list_user_coupon" > <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                          
                          
                          <?php }else{ ?>
                          
                       <a href="<?php echo base_url();?>user/login_reg" > <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                          
                          <?php } ?>

							<!---->
						
                              <div class="modal fade" id="myModalr<?php echo $row['cop_id'] ;?>" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                    <!--body-->
<!--                                     <?php $attributes = array('class' => 'form-inline'); echo form_open('user/usre_sms',$attributes)?>
                                        <div class="form-group">
                                          <input type="number" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
                                        </div>
                                        <button type="submit" class="btn btn-default chbt">Submit</button>
                                   
                                      </form>-->
                                          <h5 class="white_center">coupon code has been sent to your mobile</h5>            
                                          <!--body-->
                                    </div>
                                  </div>      
                                </div>
                              </div>
							<!---->
							<!---->
							<div class="star">
                         	<?php  $cat=  $this->db->get_where('rating',array('cop_id'=>$row['cop_id']));$avg_r= $cat->num_rows();  ?>
							<div class="date"><i class="fa fa-comment-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $avg_r ; ?></div>
							<div class="comment"><span style="color:red">Expire :</span><?php echo $row['cop_exp_date']?></div>
							</div>
							<div class="star">
							<div class="date"><span style="color:red"><i class="fa fa-tags fa-2x" aria-hidden="true"></i> </span>&nbsp;&nbsp;<?php echo $row['dis']?>%</div>
							<div class="comment"><a href="<?php echo base_url();?>user/view_single_coupon/<?php echo $row['cop_id'] ;?>" class="btn btn-primary" role="button">Rate This..</a></div>
							</div>
						</div>
					</div>
				
					<!-- /featured-coupons-text -->
					<!-- featured-coupons-box -->
				</div>
					  <?php }} ?>
					                      <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
			 <a class=" btn chview " href="<?php echo base_url('user/view_all_deal'); ?>">View All Coupons</a>
			 </div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- title -->
					<div class="tilte">
						<h2>Featured<span> coupons</span></h2>

					</div>
					<!-- /title -->
				</div>
				
		    	 <?php foreach(array_slice ( $coupon_f , 0, 8) as $row){?>
		    	 <?php if( $row['cop_featured']  == 1){ ?>
				<div class="col-md-3 col-sm-4">
					<!-- featured-coupons-box -->
					<div class="featured-coupons-box">
						<!-- featured-coupons-images -->
						<div class="featured-coupons-images">
						    <a href="<?php echo base_url();?>user/store/<?php echo $row['st_id'] ?>" >
							<img  style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/".$row['cop_image']) ?>" alt="feature-logo">
							</a>
						</div>
						<!-- /featured-coupons-images -->
						<!-- featured-coupons-text -->
						<div class="featured-coupons-text">
								<div class="star">
<!--avg rating-->
<?php   $this->db->select_avg('rating');$cat=  $this->db->get_where('rating',array('cop_id'=>$row['cop_id']));$avg_r= $cat->row_array();  $avg_r=round($avg_r['rating']); ?>
							    <?php  if($avg_r==0){
									    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										}
								      if($avg_r==1){ 
									  	echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  
									  }
									  if($avg_r==2){
										  
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


									  }
									  if($avg_r==3){ 
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
								  
									  
									  }
									  if($avg_r == 4){
									     echo '<i class="fa fa-star" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										 echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										

									  }
									  if($avg_r==5){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==6){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==7){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										

									  }
									  if($avg_r==8){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

									  }
									  if($avg_r==9){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
										echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
										
									  }
									  if($avg_r==10){
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
									    echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
										echo '<i class="fa fa-star" aria-hidden="true"></i>';
									  }									  
									  ?>
<!--end avg rating-->
							</div>
							<h6> <?php echo $row['cop_name'] ?></h6>
							<p><?php echo substr($row['cop_desc'],0,50) ?></p>
						
                            <!--*******************-->
                          <?php if($_SESSION['user_role']=="user" && $mono){ ?>
                            
                           	<a href="#"  onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")' data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id'] ;?>">
							    <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                            
                            
                          <?php  }elseif($_SESSION['user_role']=="user" && !$mono){ ?>
      	<a href="<?php echo base_url();?>user/list_user_coupon" > <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                          
                          
                          <?php }else{ ?>
                          
                       <a href="<?php echo base_url();?>user/login_reg" > <img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon"> Show Code</a>
                          
                          <?php } ?>

							<!---->
						
                              <div class="modal fade" id="myModalr<?php echo $row['cop_id'] ;?>" role="dialog">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                    <!--body-->
<!--                                     <?php $attributes = array('class' => 'form-inline'); echo form_open('user/usre_sms',$attributes)?>
                                        <div class="form-group">
                                          <input type="number" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
                                        </div>
                                        <button type="submit" class="btn btn-default chbt">Submit</button>
                                   
                                      </form>-->
                                          <h5 class="white_center">coupon code has been sent to your mobile</h5>            
                                          <!--body-->
                                    </div>
                                  </div>      
                                </div>
                              </div>
							<!---->
							<div class="star">
                         	<?php  $cat=  $this->db->get_where('rating',array('cop_id'=>$row['cop_id']));$avg_r= $cat->num_rows();  ?>
							<div class="date"><i class="fa fa-comment-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $avg_r ; ?></div>
							<div class="comment"><span style="color:red">Expire :</span><?php echo $row['cop_exp_date']?></div>
							</div>
							<div class="star">
							<div class="date"><span style="color:red"><i class="fa fa-tags fa-2x" aria-hidden="true"></i> </span>&nbsp;&nbsp;<?php echo $row['dis']?>%</div>
							<div class="comment"><a href="<?php echo base_url();?>user/view_single_coupon/<?php echo $row['cop_id'] ;?>" class="btn btn-primary" role="button">Rate This..</a></div>
							</div>
						</div>
					</div>
				
					<!-- /featured-coupons-text -->
					<!-- featured-coupons-box -->
				</div>
					  <?php } } ?>
					  									                   <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
			 <a class=" btn chview " href="<?php echo base_url('user/view_all_featured'); ?>">View All Coupons</a>
			 </div>
			</div>

		</div>
	</section>
	<section class="welcome">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- title -->
					<div class="tilte">
						<h2>popular <span>STORES</span></h2>
							<?php //print_r($store); ?>
						
					</div>
					<!-- /title -->
				</div>
				 <?php  //print_r($storef ) ?>
			
       		<?php foreach( array_slice ($storef, 0, 8) as $row){ ?>
            <div class="col-md-3 col-sm-6 intro st">
              <div class="thumbnail">
                <a href="<?php echo base_url();?>user/store/<?php echo $row['st_id'] ?>" >
                
        		  	<img style="width:100%" src="<?php echo base_url("uploads/".$row['st_image2']) ?>" />
                  <div class="caption">
                    <p class="c_head"><span style=""></i></span> <?php echo $row['st_name']?></p><hr>
                    <p style="color:darkred;    font-weight: 600;"><span style="color:#0000ff"><i class="fa fa-location-arrow" aria-hidden="true"></i></span> <?php    $cat=  $this->db->get_where('location',array('loc_id'=> $row['st_location']));
           $cat= $cat->row_array(); echo $cat['locname'] ?>
              <span style="float:right"><span class="c_cop"><i class="fa fa-contao" aria-hidden="true"></i></span>&nbsp;&nbsp;   <?php  $cat=  $this->db->get_where('coupon',array('st_id'=>$row['st_id']));  $cat=$cat->num_rows(); echo $cat; ?></span></p>
                  </div>
                </a>
              </div>
            </div> 
        	<?php } ?>  
              
		     <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
			 <a class=" btn chview " href="<?php echo base_url('user/view_all_store'); ?>">View All Store</a>
			 </div>
			</div>
		</div>
		   
	</section>
	<section class="featured" id="featured">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- title -->
					<div class="tilte">
						<h2>featured <span>categories</span></h2>
						<?php //print_r($category); ?>
					</div>
					<!-- /title -->
				</div>
                	 <?php foreach( $category as $row){?>
                   <?php  if($row['cat_status']==1){ ?>
				<div class="col-md-3 col-sm-6 ch">
					<!-- featured-img -->
					<div class="featured-img">
						<img class="img-responsive" src="<?php echo base_url("uploads/".$row['cat_image']) ?>" alt="fcat"/>
						<a href="<?php echo base_url();?>category/<?php echo $row['cat_id'] ?>" class="featured-text">
					
      				<?php echo $row['cat_name']; ?>
      			</a>
					</div>
					<!-- featured-img -->
				</div>
				<?php } } ?>


			</div>
		</div>
	</section>
	<!--******************************************************************* -->
	<section class="upcoming">
		<div class="container">
			<!-- title -->
			<div class="tilte">
				<h2>UPCOMING <span>EVENTS</span></h2>
			</div>
			<!-- /title -->
			<div class="row">
				<div class="col-md-4">
					<!-- upcoming-box -->
					<div class="upcoming-box">
						<!-- upcoming-image -->
						<div class="upcoming-image">
							<img src="<?php echo base_url();?>assets/user/images/events-img.jpg" alt="events-img" />
							<!-- ranking-clock -->
							<div class="ranking-clock">
								<!-- event-date -->
								<div class="event-date">
									apr 22
								</div>
								<!-- /event-date -->
								<!-- hart-icon -->
								<div class="hart-icon">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
								</div>
								<!-- /hart-icon -->
								<!-- rating-bg -->
								<div class="rating-bg">
									<div class="star">
										<img src="<?php echo base_url();?>assets/user/images/music-icon.png" alt="welcom-img5" />
									</div>
									<div class="price">
										$100 - $150
									</div>
								</div>
								<!-- /rating-bg -->
							</div>
							<!-- /ranking-clock -->
						</div>
						<!-- /upcoming-image -->
						<!-- upcoming-text -->
						<div class="upcoming-text">
							<div class="row">
								<div class="col-md-8">
									<strong>The Rose & Party</strong>
									<p>party</p>
								</div>
								<div class="col-md-4">
									<a href="#">
      								Buy Ticket
      							</a>
								</div>
							</div>
						</div>
						<!-- /upcoming-text -->
					</div>
					<!-- /upcoming-box -->
				</div>
				<div class="col-md-4">
					<!-- upcoming-box -->
					<div class="upcoming-box">
						<!-- upcoming-image -->
						<div class="upcoming-image">
							<img src="<?php echo base_url();?>assets/user/images/events-img2.jpg" alt="events-img2" />
							<!-- ranking-clock -->
							<div class="ranking-clock">
								<!-- event-date -->
								<div class="event-date">
									apr 22
								</div>
								<!-- /event-date -->
								<!-- hart-icon -->
								<div class="hart-icon">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
								</div>
								<!-- /hart-icon -->
								<!-- rating-bg -->
								<div class="rating-bg">
									<div class="star">
										<img src="<?php echo base_url();?>assets/user/images/music-icon.png" alt="welcom-img5" />
									</div>
									<div class="price">
										$100 - $150
									</div>
								</div>
								<!-- /rating-bg -->
							</div>
							<!-- /ranking-clock -->
						</div>
						<!-- /upcoming-image -->
						<!-- upcoming-text -->
						<div class="upcoming-text">
							<div class="row">
								<div class="col-md-8">
									<strong>The Rose & Party</strong>
									<p>party</p>
								</div>
								<div class="col-md-4">
									<a href="#">
      								Buy Ticket
      							</a>
								</div>
							</div>
						</div>
						<!-- /upcoming-text -->
					</div>
					<!-- /upcoming-box -->
				</div>
				<div class="col-md-4">
					<!-- upcoming-box -->
					<div class="upcoming-box">
						<!-- upcoming-image -->
						<div class="upcoming-image">
							<img src="<?php echo base_url();?>assets/user/images/events-img3.jpg" alt="events-img3" />
							<!-- ranking-clock -->
							<div class="ranking-clock">
								<!-- event-date -->
								<div class="event-date">
									apr 22
								</div>
								<!-- /event-date -->
								<!-- hart-icon -->
								<div class="hart-icon">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
								</div>
								<!-- /hart-icon -->
								<!-- rating-bg -->
								<div class="rating-bg">
									<div class="star">
										<img src="<?php echo base_url();?>assets/user/images/music-icon.png" alt="welcom-img5" />
									</div>
									<div class="price">
										$100 - $150
									</div>
								</div>
								<!-- /rating-bg -->
							</div>
							<!-- /ranking-clock -->
						</div>
						<!-- /upcoming-image -->
						<!-- upcoming-text -->
						<div class="upcoming-text">
							<div class="row">
								<div class="col-md-8">
									<strong>The Rose & Party</strong>
									<p>party</p>
								</div>
								<div class="col-md-4">
									<a href="#">
      								Buy Ticket
      							</a>
								</div>
							</div>
						</div>
						<!-- /upcoming-text -->
					</div>
					<!-- /upcoming-box -->
				</div>
			</div>
			<div>
			</div>
		</div>
	</section>
	<!--*******************************************************************  -->

	<section class="featured-coupons">
		<div class="container">
		<!--	<div class="row">
				<div class="col-md-12">
					&lt;!&ndash; title &ndash;&gt;
					<div class="tilte">
						<h2>RECENT <span>COUPONS</span></h2>
					</div>
					&lt;!&ndash; /title &ndash;&gt;
				</div>
				<div class="col-md-3">
					&lt;!&ndash; featured-coupons-box &ndash;&gt;
					<div class="featured-coupons-box">
						&lt;!&ndash; featured-coupons-images &ndash;&gt;
						<div class="featured-coupons-images">
							<img src="<?php echo base_url();?>assets/user/images/recent-logo.jpg" alt="feature-logo" />
						</div>
						&lt;!&ndash; /featured-coupons-images &ndash;&gt;
						&lt;!&ndash; featured-coupons-text &ndash;&gt;
						<div class="featured-coupons-text">
							<div class="star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<h6>Save 5s Next from Brand 2016</h6>
							<p>This is another awesome coupon code in 2016 from Brand.</p>
							<a href="#"><img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon" /> Show Code</a>
							<div class="date">Expire : 15/07/2016</div>
							<div class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</div>
						</div>
					</div>
					&lt;!&ndash; /featured-coupons-text &ndash;&gt;
					&lt;!&ndash; featured-coupons-box &ndash;&gt;
				</div>
				<div class="col-md-3">
					&lt;!&ndash; featured-coupons-box &ndash;&gt;
					<div class="featured-coupons-box">
						&lt;!&ndash; featured-coupons-images &ndash;&gt;
						<div class="featured-coupons-images">
							<img src="<?php echo base_url();?>assets/user/images/recent-logo2.jpg" alt="feature-logo" />
						</div>
						&lt;!&ndash; /featured-coupons-images &ndash;&gt;
						&lt;!&ndash; featured-coupons-text &ndash;&gt;
						<div class="featured-coupons-text">
							<div class="star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<h6>Save 5s Next from Brand 2016</h6>
							<p>This is another awesome coupon code in 2016 from Brand.</p>
							<a href="#"><img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon" /> Show Code</a>
							<div class="date">Expire : 15/07/2016</div>
							<div class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</div>
						</div>
					</div>
					&lt;!&ndash; /featured-coupons-text &ndash;&gt;
					&lt;!&ndash; featured-coupons-box &ndash;&gt;
				</div>
				<div class="col-md-3">
					&lt;!&ndash; featured-coupons-box &ndash;&gt;
					<div class="featured-coupons-box">
						&lt;!&ndash; featured-coupons-images &ndash;&gt;
						<div class="featured-coupons-images">
							<img src="<?php echo base_url();?>assets/user/images/recent-logo3.jpg" alt="feature-logo" />
						</div>
						&lt;!&ndash; /featured-coupons-images &ndash;&gt;
						&lt;!&ndash; featured-coupons-text &ndash;&gt;
						<div class="featured-coupons-text">
							<div class="star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<h6>Save 5s Next from Brand 2016</h6>
							<p>This is another awesome coupon code in 2016 from Brand.</p>
							<a href="#"><img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon" /> Show Code</a>
							<div class="date">Expire : 15/07/2016</div>
							<div class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</div>
						</div>
					</div>
					&lt;!&ndash; /featured-coupons-text &ndash;&gt;
					&lt;!&ndash; featured-coupons-box &ndash;&gt;
				</div>
				<div class="col-md-3">
					&lt;!&ndash; featured-coupons-box &ndash;&gt;
					<div class="featured-coupons-box">
						&lt;!&ndash; featured-coupons-images &ndash;&gt;
						<div class="featured-coupons-images">
							<img src="<?php echo base_url();?>assets/user/images/recent-logo4.jpg" alt="feature-logo" />
						</div>
						&lt;!&ndash; /featured-coupons-images &ndash;&gt;
						&lt;!&ndash; featured-coupons-text &ndash;&gt;
						<div class="featured-coupons-text">
							<div class="star">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
							</div>
							<h6>Save 5s Next from Brand 2016</h6>
							<p>This is another awesome coupon code in 2016 from Brand.</p>
							<a href="#"><img src="<?php echo base_url();?>assets/user/images/cupon-icon.png" alt="cupon-icon" /> Show Code</a>
							<div class="date">Expire : 15/07/2016</div>
							<div class="comment"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</div>
						</div>
					</div>
					&lt;!&ndash; /featured-coupons-text &ndash;&gt;
					&lt;!&ndash; featured-coupons-box &ndash;&gt;
				</div>
			</div>-->
		</div>
	</section>
	<section class="upcoming">
		<div class="container">
			<!-- title -->
			<div class="tilte">
				<h2>LATEST <span>NEWS</span></h2>
			</div>
			<!-- /title -->
			<div class="row">
				<div class="col-md-4">
					<!-- upcoming-box -->
					<div class="upcoming-box wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<!-- upcoming-image -->
						<div class="upcoming-image">
							<img src="<?php echo base_url();?>assets/user/images/news-img1.jpg" alt="events-img" />
							<!-- ranking-clock -->
							<div class="ranking-clock">
								<!-- rating-bg -->
								<div class="rating-bg">
									<div class="star">
										<i class="fa fa-comment-o" aria-hidden="true"></i> 12
									</div>
									<div class="price">
										Lifestyle
									</div>
								</div>
								<!-- /rating-bg -->
							</div>
							<!-- /ranking-clock -->
						</div>
						<!-- /upcoming-image -->
						<!-- upcoming-text -->
						<div class="upcoming-text">
							<div class="row">
								<div class="col-md-8">
									<strong>The Rose & Party</strong>
									<p>party</p>
								</div>
								<div class="col-md-4">
									<a href="#">
      								Read more
      							</a>
								</div>
							</div>
						</div>
						<!-- /upcoming-text -->
					</div>
					<!-- /upcoming-box -->
				</div>
				<div class="col-md-4">
					<!-- upcoming-box -->
					<div class="upcoming-box wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<!-- upcoming-image -->
						<div class="upcoming-image">
							<img src="<?php echo base_url();?>assets/user/images/news-img2.jpg" alt="events-img2" />
							<!-- ranking-clock -->
							<div class="ranking-clock">
								<!-- rating-bg -->
								<div class="rating-bg">
									<div class="star">
										<i class="fa fa-comment-o" aria-hidden="true"></i> 12
									</div>
									<div class="price">
										Lifestyle
									</div>
								</div>
								<!-- /rating-bg -->
							</div>
							<!-- /ranking-clock -->
						</div>
						<!-- /upcoming-image -->
						<!-- upcoming-text -->
						<div class="upcoming-text">
							<div class="row">
								<div class="col-md-8">
									<strong>The Rose & Party</strong>
									<p>party</p>
								</div>
								<div class="col-md-4">
									<a href="#">
      								Read more
      							</a>
								</div>
							</div>
						</div>
						<!-- /upcoming-text -->
					</div>
					<!-- /upcoming-box -->
				</div>
				<div class="col-md-4">
					<!-- upcoming-box -->
					<div class="upcoming-box wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
						<!-- upcoming-image -->
						<div class="upcoming-image">
							<img src="<?php echo base_url();?>assets/user/images/news-img3.jpg" alt="events-img3" />
							<!-- ranking-clock -->
							<div class="ranking-clock">
								<!-- rating-bg -->
								<div class="rating-bg">
									<div class="star">
										<i class="fa fa-comment-o" aria-hidden="true"></i> 12
									</div>
									<div class="price">
										Lifestyle
									</div>
								</div>
								<!-- /rating-bg -->
							</div>
							<!-- /ranking-clock -->
						</div>
						<!-- /upcoming-image -->
						<!-- upcoming-text -->
						<div class="upcoming-text">
							<div class="row">
								<div class="col-md-8">
									<strong>The Rose & Party</strong>
									<p>party</p>
								</div>
								<div class="col-md-4">
									<a href="#">
      								Read more
      							</a>
								</div>
							</div>
						</div>
						<!-- /upcoming-text -->
					</div>
					<!-- /upcoming-box -->
				</div>
			</div>
			<div>
			</div>
		</div>
	</section>
<!--	<section class="prallax-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="prallax-text">
						<h4>LOREM IS ALWAYS WITH YOU</h4>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.r sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. At, consectetuer adipiscing elit. Aenean commodo lig</p>
						<a href="#"><i class="fa fa-android" aria-hidden="true"></i> GOOGLE PLAY</a>
						<a href="#"><i class="fa fa-apple" aria-hidden="true"></i> APP STROEY</a>
					</div>
				</div>
			</div>
		</div>
	</section>-->


<!--    $(document).ready(function () {
         $('#s_name').change(function () {
                 var s = $('#s_name').val()
                $.ajax({
                    url:"<?php echo base_url();?>admin/s_block",
                    type:"POST",
                    datatype:"json",
                    data:{site:s},
                    success: function (response) {
                        var obj = JSON.parse(response);
                        var z ="";
                        for(x in obj){
                          z +="<option value='" + obj[x]['block_id'] + "'>" + obj[x]['block_name'] + "</option>";
                        }
                        $('#b_name').html(z);
                    },
                    error: function () { alert("fail"); }
                })
         });
    });-->
    
    

