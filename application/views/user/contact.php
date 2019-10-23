<!-- header bg -->
		<div class="inner-bg">
			<div class="container">
				<div class="inner-text">
					<h1 class="wow slideInDown" data-wow-delay="300ms" data-wow-duration="1500ms">Contact <span>Us</span></h1>
					<ul>
						<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
						<li>/</li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- header bg end -->
	</header>
	<section class="list-store">
		<!-- list-store -->
		<div class="container">
			<div class="row">
				<!-- mapt -->
				<div class="col-sm-12 col-md-12">
					<div class="map">
						<!--  map  -->
						<!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
						<div id="map"style="position: relative; overflow: hidden;">						    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.4882054644927!2d80.98318231463467!3d26.856225983151965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be2ef9d070a45%3A0x8897302348519c56!2sDcountNow!5e0!3m2!1sen!2sin!4v1515672522739" width="1170" height="580" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</iframe></div>
						<!-- /map end -->
					</div>
				</div>
				<!-- map end -->
				<div class="col-sm-8 col-md-8">
					<div class="row">
					      <?php $attributes = array('class' => 'contact-form', 'id' => 'contact-form2');echo form_open_multipart('user/contactus', $attributes);?>
						<!--	<input name="_redirect" id="name" value="http://zcube.in/wrapbootstrap/creations//thankyou.html" type="hidden">-->
							<div class="col-md-12">
								<h2>SEND MESSAGE</h2>
								<?php if($message==1){?>
								<div class="alert alert-success intro st"> Your <strong>Message </strong>has Been Submited Successfully!</div>
								<?php } ?>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<input class="form-control" id="name2" name="name" placeholder="Your name" value="" required type="text">
								</div>
								<!-- /Form-name -->
							</div>

							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<input class="form-control" id="email" name="email" placeholder="Your email" value="" required type="email">
								</div>
								<!-- /Form-email -->
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<input class="form-control" id="phone" name="phone" placeholder="phone" value="" required type="text">
								</div>
								<!-- /Form-subject -->
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="form-group">
									<input class="form-control" id="subject" name="subject" placeholder="Your subject" value="" required type="text">
								</div>
								<!-- /Form-subject -->
							</div>
							<div class="col-sm-12 col-md-12">
								<div class="form-group">
									<textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
								</div>
								<!-- /Form Msg -->
							</div>
							<div class="col-md-12">
								<div class="text-center">
									<button type="submit" class="btn btn-custom" id="send">Submit</button>
								</div>
								<!-- /col -->
							</div>
							<!-- /row -->
						</form>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- contact-info -->
					<div class="contact-info">
						<h4>additional info</h4>
						<p>Our team of experts strive to work with not only big popular brands but also the unorganized / local market structure and provide you with discount coupons for all possible amenities, daily commodities, entertainment, services and much more.</p>
						<h4>street address</h4>
						<p>1/108, Gomti Nagar Bypass Rd, Vijay Khand, Vishal Khand 1, Vishal Khand, Gomti Nagar, Lucknow, Uttar Pradesh 226010.
							</p>
						<h4>contact</h4>
						<ul>
							<li><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp; 7379404444 </li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> 0522-4231084</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> dcountnow&#064;gmail&#046;com</li>
							
						</ul>
					</div>
					<div itemscope itemtype="http://schema.org/Product" style="display:none">
    <span itemprop="brand">dcount now</span> - 
    <span itemprop="name">coupon</span><br>
    <img itemprop="image" src="http://dcountnow.com/assets/img/Dcount.png"><br>
    <span itemprop="description">dcount coupon  in lucknow</span><br>
    Product number: <span itemprop="productID" content="upc:"></span><br>
    <div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
        From <span itemprop="lowPrice">0.00</span><br>
        Condition: <span itemprop="itemCondition" content="new">new</span>
    </div>
</div>
					<!-- /contact-info -->
				</div>
			</div>
		</div>
  
	</section>
