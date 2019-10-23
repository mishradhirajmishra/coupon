
<style>
    .vertical-menu {

}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #002B5E;
    color: white;
}
.form-control{width:100% !important;}
.wrap-search {
    background-color: #002B5E;
    padding: 10px;
    margin: 0px 17px;
}
@media only screen and (max-width: 767px) {
   select#location,select#catgory {
    margin-bottom: 10px;
}

}
.intro{  display:none;}
@media only screen and (max-width: 767px) {
    span.mdisplay {
    display: block !important;
}
.formob {
    margin-top: -5px;
}
}
i.fa.fa-chevron-left.glych,i.fa.fa-chevron-right.glych {
    margin-top: 110%;
}
      .formob {
    display: none;
}
 @media screen and (max-width: 767px) {
      .heig{height:100px;}
      .fordesk {
    display: none;
}
      .formob {
    display: block;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
  $(".st:nth(0)").removeClass("intro");  
  $(".st:nth(1)").removeClass("intro");
  $(".st:nth(2)").removeClass("intro");
  $(".st:nth(3)").removeClass("intro");
  $(".st:nth(4)").removeClass("intro");
  $(".st:nth(5)").removeClass("intro");  
  $(".st:nth(6)").removeClass("intro");
  $(".st:nth(7)").removeClass("intro");
  $(".st:nth(8)").removeClass("intro");
  $(".st:nth(9)").removeClass("intro");
  $(".st:nth(10)").removeClass("intro");  
  $(".st:nth(11)").removeClass("intro");  
  $(".st:nth(12)").removeClass("intro");  
  $(".st:nth(13)").removeClass("intro"); 
  $(".st:nth(14)").removeClass("intro"); 
  $(".st:nth(15)").removeClass("intro"); 
  $(".st:nth(16)").removeClass("intro");  
  $(".st:nth(17)").removeClass("intro");  
  $(".st:nth(18)").removeClass("intro");  
  $(".st:nth(19)").removeClass("intro"); 
  $(".st:nth(20)").removeClass("intro"); 
  $(".st:nth(21)").removeClass("intro"); 
  $(".st:nth(22)").removeClass("intro");  
  $(".st:nth(23)").removeClass("intro");  
  $(".st:nth(24)").removeClass("intro");  
  $(".st:nth(25)").removeClass("intro"); 
  $(".st:nth(26)").removeClass("intro"); 
  $(".st:nth(27)").removeClass("intro"); 
 
     
});
$(document).ready(function(){
    $("#view_store").click(function(){
         $(".st").removeClass("intro");
          $("#view_store").hide();
    });
});


</script>
<!--slider-->
 <div class="inner-bg fordesk">

<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
     <li data-target="#carousel-example" data-slide-to="3"></li>
        <li data-target="#carousel-example" data-slide-to="4"></li>
     <li data-target="#carousel-example" data-slide-to="5"></li>
  </ol>

  <div class="carousel-inner">
      
    <div class="item active">
      <a href="<?php echo $cat_name['cimg1']; ?>"><img src="<?php echo base_url("uploads/".$cat_name['s_img1']) ?>" alt="st"></a>
      <div class="carousel-caption">
<!--					<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h2>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h3>-->
      </div>
    </div>

      <div class="item">
      <a href="<?php echo $cat_name['cimg2']; ?>"><img src="<?php echo base_url("uploads/".$cat_name['s_img2']) ?>" alt="st"></a>
      <div class="carousel-caption">
			<!--		<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h1>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h2>-->
      </div>
    </div>
    <div class="item">
      <a href="<?php echo $cat_name['cimg3']; ?>"><img src="<?php echo base_url("uploads/".$cat_name['s_img3']) ?>" alt="st"></a>
      <div class="carousel-caption">
			<!--		<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h3>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h3>-->
      </div>
    </div>
        <div class="item">
      <a href="<?php echo $cat_name['cimg4']; ?>"><img src="<?php echo base_url("uploads/".$cat_name['s_img4']) ?>" alt="st"></a>
      <div class="carousel-caption">
			<!--		<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h3>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h3>-->
      </div>
    </div>
        <div class="item">
      <a href="<?php echo $cat_name['cimg5']; ?>"><img src="<?php echo base_url("uploads/".$cat_name['s_img5']) ?>" alt="st"></a>
      <div class="carousel-caption">
			<!--		<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h3>
					<h3 class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Over 20 000+ deals. Grab one now!</h3>-->
      </div>
    </div>
        <div class="item">
      <a href="<?php echo $cat_name['cimg6']; ?>"><img src="<?php echo base_url("uploads/".$cat_name['s_img6']) ?>" alt="st"></a>
      <div class="carousel-caption">
			<!--		<h2 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Only the best coupons</h3>
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
</div



<!--/slider-->
        <!-- header bg -->
        <div class="inner-bg formob">
            <div class="container">
                <div class="inner-text">
                    <h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms"><?php print_r($cat_name['cat_name']); ?><span></span></h1>
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li>/</li>
                        <li><a href="#"><?php print_r($cat_name['cat_name']); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header bg end -->
        	</header>
	<?php  // print_r( $no); ?>
    <section class="coupons">
        <div class="container">
                <div class="wrap-search1">
           <div class="row">
             
           <div style="padding:0px 10px;     margin-top: 43px">
                <div class="col-lg-6 col-lg-offset-3">
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
            </div></div>
            </div>
            <!-- /search-box-coupons -->
            <div class="row">	
            <div class="col-md-12">
                 	<?php  // print_r( $store); ?>
					<!-- title -->
					<div class="tilte">
						<h2><?php print_r($cat_name['cat_name']); ?> <span></span></h2>
							

					</div>
					<!-- /title -->
				</div></div>
          <div class="col-md-9">
               <!---->
        <div class="row">
          <?php foreach( $store as $row){?>
            <div class="col-md-4 col-sm-6 intro st">
              <div class="thumbnail">
                <a href="<?php echo base_url();?>store/<?php echo $row['st_id'] ?>" >
                
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
          </div>
      <!---->
	  <div class="row">
            <div class="col-md-12 text-center">
              <div class="col-md-4 col-md-offset-4" style="margin-bottom: 50px;">
			 <button id="view_store" class=" btn chview ">View All Store</button>
			 </div>
            </div>
        </div>
		</div>
		  <div class="col-md-3">
		     <div class="vertical-menu">
		         
           <a href="#" class="active"> CATEGORY</a>
           <?php foreach( $category as $row){?>
           <a href="<?php echo base_url();?>category/<?php echo $row['cat_id'] ?>/<?php echo strtolower($row['cat_name']); ?>"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $row['cat_name'];?>&nbsp;(<?php $this->db->where('cat_id',$row['cat_id']);  echo $this->db->count_all_results('store'); ?>)</a>
          	<?php } ?>
   </div>
   <br>
      <div class="vertical-menu">

 <div class="fb-page" data-href="https://www.facebook.com/dcountnow" data-tabs="timeline" data-width="255" data-height="510" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dcountnow" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dcountnow">Dcount Now</a></blockquote></div>
                     </div>
		    </div>

		     </div>

        </div>
        <br><br>

    </section>
<?php //print_r($cat_name ); ?>

