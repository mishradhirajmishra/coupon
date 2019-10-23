             <?php    $query = $this->db->get_where('user',array('name'=>$_SESSION['username'])); $res=$query->row_array(); $mono=$res['mo_no']; ?>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
 
        <script src=" <?php echo base_url();?>assets/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
 <style>
@import url(http://fonts.googleapis.com/css?family=Anaheim);

*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
    box-sizing: border-box;
}
*:before,
*:after{
	box-sizing: border-box;
}
html,
body{
	min-height: 100%;
}
body{
	/*background-image: radial-gradient(mintcream 0%, lightgray 100%);*/
}
h1{
	display: table;
	margin: 5% auto 0;
	text-transform: uppercase;
	font-family: 'Anaheim', sans-serif;
	font-size: 4em;
	font-weight: 400;
	text-shadow: 0 1px white, 0 2px black;
}
.container_ch{
	margin: 4% auto;
	width: 210px;
	height: 140px;
	position: relative;
	perspective: 1000px;
}
#carousel{
	width: 100%;
	height: 100%;
	position: absolute;
	transform-style: preserve-3d;
	animation: rotation 20s infinite linear;
}
#carousel:hover{
	animation-play-state: paused;
}
#carousel figure{
	display: block;
	position: absolute;
	width: 90%;
	height: 50%px;
	left: 10px;
	top: 10px;
	background: black;
	overflow: hidden;
	border: solid 5px black;
}
#carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
#carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
#carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
#carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
#carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
#carousel figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
#carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
#carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
#carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}

.img1{
	-webkit-filter: grayscale(1);
	cursor: pointer;
	transition: all .5s ease;
}
.img1:hover{
	-webkit-filter: grayscale(0);
  transform: scale(1.2,1.2);
}

@keyframes rotation{
	from{
		transform: rotateY(0deg);
	}
	to{
		transform: rotateY(360deg);
	}
}
 /*******************************/
 .deal-box3{
    border: 1px solid gray;
    /* height: 300px; */
    overflow: hidden;
}
.popular-image {
    background-color: white;}
.head1 {
    margin-top: 2px;
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: center;
    color: white;
}
.deal-box1 {
    border: 1px solid gray;
    height: 227px;
    overflow: hidden;
}
.wrap-search {
    background-color: #002B5E;
    padding: 10px;
    margin: 0px 17px;
}
.comm{display:none;}
.intro{  display:none;}
.intro1{  display:none;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
/*comment section*/
$(document).ready(function(){
   $(".st1:nth(0)").removeClass("intro1");
  $(".st1:nth(1)").removeClass("intro1");
  $(".st1:nth(2)").removeClass("intro1");
     
});
$(document).ready(function(){
    $("#view_comm").click(function(){
         $(".st1").removeClass("intro1");
          $("#view_comm").hide();
    });
});
/*coupon section*/

$(document).ready(function(){
  $(".st:nth(0)").removeClass("intro");
  $(".st:nth(1)").removeClass("intro");
  $(".st:nth(2)").removeClass("intro");
  $(".st:nth(3)").removeClass("intro");
  $(".st:nth(4)").removeClass("intro");
     
});
$(document).ready(function(){
    $("#view_store").click(function(){
         $(".st").removeClass("intro");
          $("#view_store").hide();
    });
});
</script>
  <!-- header bg -->
        <div class="inner-bg"style="    margin-top: -5px">
            <div class="container">
                <div class="inner-text">
                    <h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">sto<span>re</span></h1>
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li>/</li>
                        <li><a href="#">store</a></li>
                    </ul>
                </div>
            </div>
        </div>
      <!-- header bg end -->
      </header>
<section class="coupons">
 <div class="container style="">
         <div class="row">
              <div class="wrap-search"style="margin-bottom:50px; margin-top: 15px;">
                          <div class="row">
                       
           <div class="col-md-6 col-md-offset-3" >
           	<?php  //print_r( $location); ?>
                    <?php $attributes = array('class' => 'form-inline');
                                echo form_open('user/view_all_store', $attributes);?>
                <div class="form-group">
                 <select class="form-control" id="location"  name="location">
                     <option value="">SELECT LOCATION</option>
                     <?php foreach( $location as $row){?>
                    <option value="<?php echo $row['loc_id']; ?>"><?php echo $row['locname'];?> </option>
                    	<?php } ?>
                    </select>
                 
                </div>
           
                <div class="form-group">
                 <select class="form-control" id="catgory"  name="catgory">
                     <option value="">SELECT CATEGORY</option>
                         <?php foreach( $category as $row){?>
                    
                    <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name'];?> </option>
                    	<?php } ?>
                 </select>
                </div>
                 <div class="form-group">
                <button type="submit" class="btn btn-default form-control btnch4">LIST STORE</button>
                </div>
              </form>
            </div>
           
            </div>
            </div>
         </div>
                       
  </div>

 <div class="container">
            <!-- /search-box-coupons -->

            <div class="row">
                <!-- list-store-left -->
                <div class="col-sm-12 col-md-8 col-xs-12">
                    <!-- our-details-outer -->
                    <div class="our-details-outer">
                       <h2 class="head1"style="background-color: #002B5E;"><?php echo $store['st_name'] ?></h2>
                     
                       <div>

            <!--         <div class="tilte"><h2>GALL<span> ERY</span></h2></div>-->
                    
                        <br>
                      <div class="col-sm-12 ">
                      
  <!---->
      <div id="jssor_1" style="position:relative;    margin-left: -14px;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" / alt="Cinque Terre">
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal1']) ?>" alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal1']) ?>" alt="Cinque Terre" />
            </div>
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal2']) ?>"  alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal2']) ?>" alt="Cinque Terre" />
            </div>
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal3']) ?>" alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal3']) ?>" alt="Cinque Terre" />
            </div>
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal4']) ?>" alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal4']) ?>" alt="Cinque Terre" />
            </div>
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal5']) ?>" alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal5']) ?>" alt="Cinque Terre" />
            </div>
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal6']) ?>" alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal6']) ?>" alt="Cinque Terre" />
            </div>
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal7']) ?>" alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal7']) ?>" alt="Cinque Terre" />
            </div>
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal8']) ?>" alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal8']) ?>" alt="Cinque Terre" />
            </div>
            <div data-p="170.00">
               <img data-u="image" src="<?php echo base_url("uploads/".$store['gal9']) ?>" alt="Cinque Terre" />
                <img data-u="thumb" src="<?php echo base_url("uploads/".$store['gal9']) ?>" alt="Cinque Terre" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <br>
<!--   <div><img style="width: 100%;" src="<?php echo base_url("uploads/".$store['st_image2']) ?>" alt="Cinque Terre"></div>-->
    <script type="text/javascript">jssor_1_slider_init();</script>
  <!---->

                    </div>
                        
                        
                         
                         <!--**********************************-->
                       
                       
                       <!--***********************************************************-->
                       
                       </div>
<!--                        <div class="our-details-text"> <span class="our-detail-heading">About This Store</span>
                            <p><?php //echo $store['st_desc'] ?> </p>
                        </div>-->
                    </div>
                    <!-- our-details-outer -->
                </div>
                
                <!-- end col-sm-12 col-md-8 col-xs-12 -->
             
               
<div class="col-sm-12 col-md-4 col-xs-12 right-side">
<!-- deal weight -->
  <div class="weight">
  <div class="deal-box3"style="    background-color: #002B5E">
  <h4 style="    text-align: center;color:white";>Other Similar Store</h4>
 </div>
                        <div class="deal-box3">
  <div class="formob1">
  
<div id="carousel-example" class="carousel slide" data-ride="carousel">


  <div class="carousel-inner style= " position: relative; text-align: center;color:white">
     
    <div class="item active">
      <a href="#"><img src="<?php echo base_url("assets/store_cat.png") ?>" alt="st"></a>
                         <div class="deal-box3"style="    background-color: #002B5E">
               <h6 style="    text-align: center;color:white";>&nbsp;</h6>
               </div>
      <div class="carousel-caption">
					<!--<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Other Similar Store</h2>-->
				
      </div>
    </div>
  
     <?php foreach($store_of_type as $row){?>
    <div class="item">
 <!--   <h4  style="color: Yellow; position: absolute; top: 30%; left: 40%; transform: translate(-30%, -30%);"><?php //echo $row['st_name']; ?></h4>-->
    <a href="http://dcountnow.com/user/store/<?php echo $row['st_id']; ?>"><img src="<?php echo base_url("uploads/".$row['st_image2']) ?>" alt="st"></a>
                   <div class="deal-box3"style="    background-color: #002B5E">
               <h6 style="    text-align: center;color:white";><?php echo $row['st_name']; ?></h6>
               </div>
    </div>
    <?php } ?>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span style="    position: absolute;top: 45%;" ><i class="fa fa-chevron-left glych" aria-hidden="true"></i></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span style="    position: absolute;top: 45%;" ><i class="fa fa-chevron-right glych" aria-hidden="true"></i></span>
  </a>
</div>
</div>
</div>
<br>
                       <div class="deal-box1">
                            <?php echo $store['map'] ?>
                        </div>
                    </div>
                    <div class="weight">
                        <div class="deal-box2">
                               <h4 style="text-align:center">Contact Us</h4>
                                <?php   $cat = $this->db->get_where('location',array('loc_id'=>$store['st_location'])); $add = $cat->row_array();  ?>
                            	<p><i class="fa fa-map-marker" aria-hidden="true"></i>  Address :<?php echo $store['st_address'] ?>, Distt. <?php echo $add['city'] ?>- <?php echo $add['pin'] ?> (U.P.)</p>
                            	<p><i class="fa fa-phone" aria-hidden="true"></i>   <?php echo $store['mo_no'] ?></p>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $store['email'] ?></p>
                              <div>
                          
                        </div>
                    </div>

                </div>
                <!-- list-store-right end -->
            </div>
        </div>  
 </div>

  <div class="container">
      			<div class="row">
				<div class="col-md-12">
					<!-- title -->
					<div class="tilte">
						<h2>COU<span> PONS</span></h2>
						
					</div>
					<!-- /title -->
				</div>
				          
                              
				 <?php foreach($coupon as $row){?>
				 <!--************************************************-->
	<div class="col-md-3 col-sm-4 col-xs-12 intro st">
					<!-- featured-coupons-box -->
					<div class="featured-coupons-box">
						<!-- featured-coupons-images -->
						<div class="featured-coupons-images1">
						    <a href="<?php echo base_url();?>user/store/<?php echo $row['st_id'] ?>" >
						<!--	<img style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/".$row['cop_image']) ?>" alt="feature-logo">-->
							<img style="height: 75px; " src="<?php echo base_url("assets/img/Dcount.png") ?>" alt="logo">
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
      <p style="height: 15px;" class="white_center"><a href="<?php echo base_url();?>user/list_user_coupon" ><span style="color:yellow">Click here !</span></a> <span style="color:white" >to get code instantly </span></p>
                                         
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
				 <!--*************************************************-->
	
					  <?php } ?>

			</div>
 </div>

 <div class="container">
     <?php  if( $coupon_count > 4){?>
  <div class="row">
            <div class="col-md-12 text-center">
             <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2" style="margin-bottom: 50px;">
			 <button id="view_store" class=" btn chview ">View All Coupons</button>
	
             
            </div>
            </div>
        </div>
        <?php } ?>
 </div>

     
</section>
<section>
 <div class="container">
       <div class="col-md-8 col-md-offset-2" >
             <div class="row">
                   <h4> comments :</h4>
              </div> 
              <?php if($comment_list_count >0) { ?>
               <?php foreach( $comment_list as $row){?>
             <div class="row ">
                 <div class="intro1 st1">
                 <div class="col-xs-3">
                     <img style="margin: 0 auto;" src="<?php echo base_url("assets/user1.jpg") ?>" class="" alt="Cinque Terre" style="width:204px;height:auto;">
                 </div>
                 <div class="col-xs-9">
                     		  <h4><?php echo $row['user'] ?>.</h4>
                             <p><?php echo $row['comment'] ?></p> <span><?php echo $row['date'] ?></span> 
                 </div>
               </div>
             </div>
             <?php } } ?>
              <?php if($comment_list_count >3) { ?>
                <div class="row">
              <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2" style="margin-bottom: 50px;">
			   <button id="view_comm" class=" btn chview ">View All Comment</button>
              </div>  
                </div>
                <?php  } ?>
             <div class="row">
                              <div id="comments" class="comments-area">
                            <div id="respond" class="comment-respond">
                                                                <?php $attributes = array('class' => 'comment-form','id'=>'commentform'); echo form_open('User/store_comment',$attributes);?>
                                    <h4>leave a comment</h4>
                                    <div class="row">
                                        <div class="col-md-6 comm">
                                            <p class="comment-form-author">
                                                <input id="author" name="author" value="" size="30" type="text" placeholder="your name">
                                            </p>
                                        </div>
                                        <div class="col-md-6 comm">
                                            <p class="comment-form-email">
                                                <input id="email" name="email" value="" size="30" type="text" placeholder="email">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <input name="st_id" value="<?php echo $store['st_id'] ?>"  type="hidden">
                                            <input name="user" value="<?php echo $_SESSION['username'] ?>"  type="hidden">
                                            <p class="comment-form-comment">
                                                <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="comment"></textarea>
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-submit">
                                                <input name="submit" id="submit" class="btn btn-secondary" value="post a comment" type="submit">
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
            </div>
       </div> 
</div>
    
</section>
    