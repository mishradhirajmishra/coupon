
<style>
.vertical-menu {
    margin-top: 33px;
}
p.c_head {
    text-align: center;
}
.thumbnail{
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.thumbnail:hover {
    box-shadow: 0 80px 160px 0 rgba(0,0,0,0.2);
}
p.c_head {
    height: 52px;
}
/*^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^*/
	.popular-hover {
    text-align: center;
}

.popular-image {
    background-color: gray;
}



.popular-image {
    text-align: left!important;
        padding: 0px!important;
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
/*.form-control{width:80% !important;}*/
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



});
$(document).ready(function(){
    $("#view_store").click(function(){
         $(".st").removeClass("intro");
          $("#view_store").hide();
    });
});
</script>
        <!-- header bg -->
        <div class="inner-bg">
            <div class="container">
                <div class="inner-text">
                    <h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">sto<span>res</span></h1>
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li>/</li>
                        <li><a href="#">stores</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header bg end -->
        	</header>
	<?php  // print_r( $no); ?>
	<br>
    <section class="coupons">
        <div class="container ">
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
						<h2>ALL <span>STORES</span></h2>
							<?php //print_r($store); ?>

					</div>
					<!-- /title -->
				</div></div>
         <div class="col-md-9">
             <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: blue">	<?php print_r($store_no); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;result found .....</h6>
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
              <div class="col-md-4 col-md-offset-4 " style="margin-bottom: 50px;">
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
          	
          	<br>
 
            </div>
            	     <div class="vertical-menu">

 <div class="fb-page" data-href="https://www.facebook.com/dcountnow" data-tabs="timeline" data-width="255" data-height="510" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dcountnow" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dcountnow">Dcount Now</a></blockquote></div>
                     </div>
		    </div>
        </div>
        <br>
        <br>
    </section>

       