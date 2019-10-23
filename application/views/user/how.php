
<style>
.howtxt{font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;text-align: justify;}
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

</style>


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
    <section class="coupons">
        <div class="container">
                   <!--<div class="wrap-search1">
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
            </div>-->
            <!-- /search-box-coupons -->
            <div class="row">	
            <div class="col-md-12">
                 	<?php  // print_r( $store); ?>
					<!-- title -->
					<div class="tilte">
						<h2>HOW IT <span>WORK</span></h2>
							<?php //print_r($store); ?>

					</div>
					<!-- /title -->
				</div></div>
         <div class="col-md-12">
                <div class="col-md-3">
					<!-- featured-coupons-box -->
					<div class="featured-coupons-box">
						<!-- featured-coupons-images -->
						<div class="featured-coupons-images2">
							<img style="width:100%" class="img-responsive" src="http://dcountnow.com/assets/search123.png" alt="feature-logo">
							<br>
						    <h4  style="text-align: center;"> Search </h4>
						    <hr>
						</div>
						<!-- /featured-coupons-images -->
						<!-- featured-coupons-text -->
						<div class="featured-coupons-text">
						    <p class="howtxt" >Search for amazing deals and discounts in fashion, restaurants, salons, gyms and many more essentials and services .</p>
						    <br>
						</div>
					</div>
				
					<!-- /featured-coupons-text -->
					<!-- featured-coupons-box -->
				</div>
				<div class="col-md-3">
					<!-- featured-coupons-box -->
					<div class="featured-coupons-box">
						<!-- featured-coupons-images -->
						<div class="featured-coupons-images2">
							<img style="width:100%" class="img-responsive" src="http://dcountnow.com/assets/buy123.png" alt="feature-logo">
							<br>
						    <h4  style="text-align: center;">Buy The Coupon</h4>
						    <hr>
						</div>
						<!-- /featured-coupons-images -->
						<!-- featured-coupons-text -->
						<div class="featured-coupons-text">
						       <p class="howtxt" >
Buy our Dcount Now coupon(s) using credit or debit card, wallets or net- banking. (Don't worry its completely secure and safe!!!!)</p> 
<br>
						</div>
					</div>
				
					<!-- /featured-coupons-text -->
					<!-- featured-coupons-box -->
				</div>
				<div class="col-md-3">
					<!-- featured-coupons-box -->
					<div class="featured-coupons-box">
						<!-- featured-coupons-images -->
						<div class="featured-coupons-images2">
							<img style="width:100%" class="img-responsive" src="http://dcountnow.com/assets/avail123.png" alt="feature-logo">
							<br>
						 <h4  style="text-align: center;"> Avail The Coupon </h4>
						 <hr>
						</div>
						<!-- /featured-coupons-images -->
						<!-- featured-coupons-text -->
						<div class="featured-coupons-text">
						        <p class="howtxt" >Avail your Dcount Now coupon(s) at the store/ retailer /service provider. </p> 
						        <br>
						</div>
					</div>
				
					<!-- /featured-coupons-text -->
					<!-- featured-coupons-box -->
				</div>
				<div class="col-md-3">
					<!-- featured-coupons-box -->
					<div class="featured-coupons-box">
						<!-- featured-coupons-images -->
						<div class="featured-coupons-images2">
							<img style="width:100%" class="img-responsive" src="http://dcountnow.com/assets/enjoy123.png" alt="feature-logo">
							<br>
						    <h4  style="text-align: center;"> ENJOY </h4>
						
						    <hr>
						</div>
						<!-- /featured-coupons-images -->
						<!-- featured-coupons-text -->
						<div class="featured-coupons-text">
						       <p class="howtxt" >Enjoy great discounts on the services availed by you or during your shopping spree !!!!
</p>                            <br>
						</div>
					</div>
				
					<!-- /featured-coupons-text -->
					<!-- featured-coupons-box -->
				</div>
             
         </div>

        </div>
        <br>
        <br>
    </section>

       