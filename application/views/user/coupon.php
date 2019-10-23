             <?php    $query = $this->db->get_where('user',array('name'=>$_SESSION['username'])); $res=$query->row_array(); $mono=$res['mo_no']; ?>
<style>
.featured_rating {
    background: #002b5e;
    color: rgb(255, 255, 255);
    display: inherit;
    margin: 20px auto;
    padding: 10px;
    text-align: center;
    text-transform: uppercase;
    width: 70%;
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
                    <h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">cou<span>pon</span></h1>
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li>/</li>
                        <li><a href="#">coupon</a></li>
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
             
           <div style="padding:0px 10px;">
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
					<div class="tilte">
						<h2>cou<span>pon</span></h2>
					</div>
					<!-- /title -->
			</div>
			</div>
         <?php $avg_r=$avg_rating['rating']; ?>
         <div class="col-md-9">
                  <?php $row=$cop_sing ?>
         <div class="row">
             <!---->
             <div class="col-md-5">
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
<!--end avg rating-->  	</div>
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
														<div class="star">
							    <!--rating -->
							    	 <?php if( $_SESSION['user_role']=="user" ){ ?>
                                	<?php $attributes = array('class' => '','id'=>'rating form'); echo form_open('User/add_rating',$attributes);?>
                                    <div class="form-group"> 
                                	   <input name="cop_id" value="<?php echo $row['cop_id'] ?>"  type="hidden">
                                     
                                      <input name="user" value="<?php echo $_SESSION['username'] ?>"  type="hidden">	
                                      <select  class="form-control" id="rate1" name="rate">
                                        <option value="1">1</option> 
                                		 <option value="2">2</option> 
                                		  <option value="3">3</option> 
                                		   <option value="4">4</option> 
                                		    <option value="5">5</option> 
                                		<option value="6">6</option> 
                                		 <option value="7">7</option> 
                                		  <option value="8">8</option> 
                                		   <option value="9">9</option> 
                                		    <option value="10">10</option>
                                        
                                      </select>
                                    </div>
                                
                                    <button type="submit" class="btn btn-primary" >Rate</button>
                                  </form>
                                  <?php } ?>
							    <!-- end rating-->
							</div>
						</div>
					</div>
				
					<!-- /featured-coupons-text -->
					<!-- featured-coupons-box -->
					  <div class="featured-coupons-box">
					      <h5 class="featured_rating"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Rating</h5>
					      <div class="featured-coupons-text">
			         <?php foreach($all_rating as $allr) { ?>
			         <!--rating individual-->
			         	<div class="star"style=" color: orange;">
<!--avg rating-->
							    <?php $avg_r=$allr['rating']; ?>
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
								<span style="float:right; color: black;">By:<span style="color: blue;">&nbsp &nbsp<?php echo $allr['user']; ?></span>	</span>	
									 
<!--end avg rating-->
							</div>
			         <!--end rating individyual-->
			         
			         <?php } ?>
			         </div>
			     </div>
					<!-- featured-coupons-box -->
				</div>
			
			 <div class="col-md-6 ">
                <div class="featured-coupons-box">
                     <div class="featured-coupons-text">
			         <p><?php echo $row['cop_desc']?></p>
			         </div>
			     </div>
			 </div>
             <!---->
             </div>
		   </div>
		 <div class="col-md-3">
		     <div class="vertical-menu">
             <a href="#" class="active"> CATEGORY</a>
            <?php foreach( $category as $row){?>
            <a href="<?php echo base_url();?>category/<?php echo $row['cat_id'] ?>/<?php echo strtolower($row['cat_name']); ?>"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $row['cat_name'];?>&nbsp;(<?php $this->db->where('cat_id',$row['cat_id']);  echo $this->db->count_all_results('store'); ?>)</a>
          	<?php } ?>
            </div>

        </div>
        </div>
        <br><br>
    </section>

       