
<style>
.vertical-menu {
    margin-top: 9px;
}
input.btn.btn-primary.ser {
    padding: 6px;
    margin-bottom: 3px;
    font-size: 26px;
}
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
.intro{  /*display:none;*/}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
/*
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
});*/
</script>
        <!-- header bg -->
        <div class="inner-bg">
            <div class="container">
                <div class="inner-text">
                    <h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">sea<span>rch</span></h1>
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li>/</li>
                        <li><a href="#">Search</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header bg end -->
        	</header>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section class="coupons">
        <div class="container">
            <div class="wrap-search">
             <div class="row">
           <div class="col-md-6 col-md-offset-3">
           	<?php // print_r( $location); ?>
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
            <!-- /search-box-coupons -->
            <div class="row">	
            <div class="col-md-12">
                 	<?php  // print_r( $store); ?>
					<!-- title -->
					<div class="tilte">
						<h2>Search<span>Results...</span></h2>
							<?php //print_r($store); ?>

					</div>
					<!-- /title -->
				</div></div>
         <div class="col-md-9">
         <div class="row">
             <?php  if($store_no==0 && $loc_no==0) { ?>
             <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: blue">no</span>&nbsp;&nbsp;&nbsp;&nbsp;result found .....</h6>
              <?php }?>
              <?php if($store_no){?>
			   <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: blue"><?php echo $store_no ?></span>&nbsp;&nbsp;&nbsp;&nbsp;result found in store.....</h6>
				 <?php } ?>
				<?php foreach( $store as $row){?>
			
				            <div class="col-md-4 col-sm-6  intro st">
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
			</div>
					       <?php if($loc_no){?>
			   <h6>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: blue"><?php echo $loc_no ?></span>&nbsp;&nbsp;&nbsp;&nbsp;result found in location.....</h6>
				 <?php } ?>
		<?php foreach( $loc as $row){?>
	                   
		  <div class="row">

		        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['locname']; ?></h6>
				 <?php // print_r($store ) ?>
		<?php $st=  $this->db->get_where('store',array('st_location'=>$row['loc_id'])); $st=$st->result_array();?>
	    <?php foreach( $st as $col){?>
			
			
			 <div class="col-md-4 col-sm-6 intro st">
              <div class="thumbnail">
                <a href="<?php echo base_url();?>user/store/<?php echo $col['st_id'] ?>" >
                
        		  	<img style="width:100%" src="<?php echo base_url("uploads/".$col['st_image2']) ?>" />
                  <div class="caption">
                    <p class="c_head"><span style=""></i></span> <?php echo $col['st_name']?></p><hr>
                    <p style="color:darkred;    font-weight: 600;"><span style="color:#0000ff"><i class="fa fa-location-arrow" aria-hidden="true"></i></span> <?php    $cat=  $this->db->get_where('location',array('loc_id'=> $col['st_location']));
           $cat= $cat->row_array(); echo $cat['locname'] ?>
              <span style="float:right"><span class="c_cop"><i class="fa fa-contao" aria-hidden="true"></i></span>&nbsp;&nbsp;   <?php  $cat=  $this->db->get_where('coupon',array('st_id'=>$col['st_id']));  $cat=$cat->num_rows(); echo $cat; ?></span></p>
                  </div>
                </a>
              </div>
            </div> 
				<?php } ?>
			</div>
			
	     <?php }  ?>
		</div>
		 <div class="col-md-3"><br>
		     <div class="vertical-menu">
             <a href="#" class="active"> CATEGORY</a>
            <?php foreach( $category as $row){?>
            <a href="<?php echo base_url();?>category/<?php echo $row['cat_id'] ?>/<?php echo strtolower($row['cat_name']); ?>"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $row['cat_name'];?>&nbsp;(<?php $this->db->where('cat_id',$row['cat_id']);  echo $this->db->count_all_results('store'); ?>)</a>
          	<?php } ?>
            </div>
            <br><br>
                        	     <div class="vertical-menu">

 <div class="fb-page" data-href="https://www.facebook.com/dcountnow" data-tabs="timeline" data-width="255" data-height="510" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dcountnow" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dcountnow">Dcount Now</a></blockquote></div>
                     </div>
		    </div>
		    </div>
        </div>
           <div class="col-md-9">
<!--        <div class="row">
            <div class="col-md-12 text-center">
              <div class="col-md-2 col-md-offset-5 col-xs-6 col-xs-offset-3" style="margin-bottom: 50px;">
			 <button id="view_store" class=" btn chview ">View All Store</button>
			 </div>
             
            </div>
        </div>-->
        	</div>
		 <div class="col-md-3">
		     </div>
		     <br><br>
    </section>

       