             <?php    $query = $this->db->get_where('user',array('name'=>$_SESSION['username'])); $res=$query->row_array();  $mono=$res['mo_no']; ?>

<style>
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
                    <h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">COU<span>PONS</span></h1>
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li>/</li>
                        <li><a href="#">COUPONS</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- header bg end -->
        	</header>

    <section class="coupons">
        <div class="container">

     	<div class="row">
				<div class="col-md-12">
					<!-- title -->
					<div class="tilte">
						<h2>Recent<span> coupons</span></h2>
							<h2><?php //echo $mono; ?></h2>
                         
					</div>
					<!-- /title -->
				</div>
				
		    	 <?php foreach( $coupon as $row){?>
		    
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
					  <?php } ?>
			</div>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">
               <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2" style="margin-bottom: 50px;">
			 <button id="view_store" class=" btn chview ">View All Coupons</button>
			 </div>
             
            </div>
        </div>
    </section>

       