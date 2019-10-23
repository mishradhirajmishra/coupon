<?php $query = $this->db->get_where('user', array('name' => $_SESSION['username']));
$res = $query->row_array();
$mono = $res['mo_no']; ?>
<style>


    p.timer {
        font-size: 24px !important;
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

    .heig2 {
        height: 0px;
    }

    @media screen and (max-width: 1024px) and (min-width: 768px) {
        h3.wow.slideInUp {
            font-size: 25px;
        }

        h2.wow.slideInDown {
            font-size: 35px;
        }

    }

    .formob {
        display: none;
    }

    @media screen and (min-width: 768px) {
        ul.nav.navbar-nav {
            float: right;
        }

    }

    @media screen and (max-width: 767px) {
        .heig {
            height: 100px;
        }

        .fordesk {
            display: none;
        }

        .formob {
            display: block;
        }

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
            height: 188px !important;
        }

        .innersl {
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

            .formob {
                margin-top: -5px;
            }

        }

</style>

<script>
$(document).ready(function(){
    $(".item:first").addClass("active");
});
</script>
<script>
    $(document).ready(function () {
        $("#all_recent ").hide();
        $("#load_recent").click(function () {
            $("#recent_view").removeAttr("style");
            $("#load_recent").hide();
            $("#all_recent ").show();
        });

        /*****************/

        $("#all_deal ").hide();
        $("#load_deal").click(function () {
            $("#deal_view").removeAttr("style");
            $("#load_deal").hide();
            $("#all_deal ").show();
        });

        /*****************/

        $("#all_fea ").hide();
        $("#load_fea").click(function () {
            $("#fea_view").removeAttr("style");
            $("#load_fea").hide();
            $("#all_fea ").show();
        });

    });
</script>

<div class="heig2"></div>
<!--background-->
                                                                                    <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                                                                                                 
                                                                                    <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++-->    
                        
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                   <?php $cou=0; foreach ($slider as $row) { ?> 
                   <li data-target="#carousel-example" data-slide-to=" <?php echo $cou++ ?>"></li> 
                   <?php } ?>
            </ol>
        <div class="carousel-inner">
                        <?php foreach ($slider as $row) { ?> 
            <div class="item">
                <a href="<?php echo $row["url"]; ?>">
                    <span class="fordesk"><img src="<?php echo base_url("uploads/" . $row['img_dsk']) ?>" alt="st"></a></span>
                    <span class="formob"><img src="<?php echo base_url("uploads/" . $row['img_mob']) ?>" alt="st"></a></span>
            </div>
           <?php } ?>  
        </div>

        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <span><i class="fa fa-chevron-left glych" aria-hidden="true"></i></span>
        </a>
        <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <span><i class="fa fa-chevron-right glych" aria-hidden="true"></i></span>
        </a>
    </div>

                                                                                     <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++===-->

</header>
<div class="fordesk">
    <div class="header-box-outer">
        <div class="container">
            <div class="row">
                <div class="text-center col-xs-3">
                    <p class="timer" data-to="<?php $q = $this->db->get('coupon');
                    echo $q->num_rows(); ?>" data-speed="10000"></p>
                    <span style="font-size: 20px;">COUPONS</span>

                </div>
                <div class="text-center  col-xs-3">
                    <p class="timer" data-to="<?php $q = $this->db->get('store');
                    echo $q->num_rows(); ?>" data-speed="10000"></p>
                    <span style="font-size: 20px;">STORE</span>

                </div>

                <div class="text-center  col-xs-3">
                    <p class="timer" data-to="<?php $q = $this->db->get('category');
                    echo $q->num_rows(); ?>" data-speed="10000"></p>
                    <span style="font-size: 20px;">CATEGORIES</span>

                </div>
                <div class="text-center  col-xs-3">
                    <p class="timer" data-to="<?php $q = $this->db->get('user');
                    echo $q->num_rows() + 200000; ?>" data-speed="10000"></p>
                    <span style="font-size: 20px;">USERS</span>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="formob">
    <div class="header-box-outer">
        <div class="container">
            <div class="row">
                <div class="text-center col-xs-4">
                    <p style="font-size: 15px;" class="timer" data-to="<?php $q = $this->db->get('coupon');
                    echo $q->num_rows(); ?>" data-speed="10000"></p>
                    <span style="font-size: 15px;">COUPONS</span>

                </div>
                <div class="text-center  col-xs-4">
                    <p style="font-size: 15px;" class="timer" data-to="<?php $q = $this->db->get('store');
                    echo $q->num_rows(); ?>" data-speed="10000"></p>
                    <span style="font-size: 15px;">STORE</span>

                </div>
                <!--				<div class="text-center col-md-3 col-sm-6 col-xs-3">
					<p class="timer" data-to="<?php $q = $this->db->get('category');
                echo $q->num_rows(); ?>" data-speed="10000">$nbsp;</p>
					<span>CATEGORIES</span>
			
				</div>-->
                <div class="text-center  col-xs-4">
                    <p style="font-size: 15px;" class="timer" data-to="<?php $q = $this->db->get('user');
                    echo $q->num_rows() + 200000; ?>" data-speed="10000"></p>
                    <span style="font-size: 15px;">USERS</span>

                </div>
            </div>
        </div>
    </div>
</div>
<!---->

<br><br><br><br>
<section class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- title -->
                <div class="tilte">
                    <?php //echo $mono;?>
                    <h2>RECENT<span> COUPONS</span></h2>


                </div>
                <!-- /title -->
            </div>
            <!---->
            <?php foreach (array_slice($coupon, 0, 4) as $row) { ?>
                <div class="col-md-3 col-sm-4 col-xs-12 intro st">
                    <!-- featured-coupons-box -->
                    <div class="featured-coupons-box">
                        <!-- featured-coupons-images -->
                        <div class="featured-coupons-images1">
                            <a href="<?php echo base_url(); ?>store/<?php echo $row['st_id'] ?>">
                                <!--	<img style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/" . $row['cop_image']) ?>" alt="feature-logo">-->
                                <img style="height: 75px; " src="<?php echo base_url("assets/img/Dcount.png") ?>"
                                     alt="logo">
                                <span class="rate5 animated rollIn"><?php if ($row['dis'] <= 9) {
                                        echo sprintf("%02d", $row['dis']);
                                    } else {
                                        echo $row['dis'];
                                    } ?>%  off</span>
                            </a>
                        </div>
                        <!-- /featured-coupons-images -->
                        <!-- featured-coupons-text -->
                        <div class="featured-coupons-text">
                            <?php ?>
                            <div class="star">
                                <!--avg rating-->
                                <?php $this->db->select_avg('rating');
                                $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                $avg_r = $cat->row_array();
                                $avg_r = round($avg_r['rating']); ?>
                                <?php if ($avg_r == 0) {
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                }
                                if ($avg_r == 1) {
                                    echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                }
                                if ($avg_r == 2) {

                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                }
                                if ($avg_r == 3) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                }
                                if ($avg_r == 4) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                }
                                if ($avg_r == 5) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                }
                                if ($avg_r == 6) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                }
                                if ($avg_r == 7) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                }
                                if ($avg_r == 8) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                }
                                if ($avg_r == 9) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                }
                                if ($avg_r == 10) {
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                }
                                ?>
                                <!--end avg rating--> <span class="rate3"> <a style=" float: right;"
                                                                              href="<?php echo base_url(); ?>user/viewsinglecoupon/<?php echo $row['cop_id']; ?>"
                                                                              alt="cupon-icon"> Rate This</a>
						</span></div>
                            <h6> <?php echo $row['cop_name'] ?></h6>
                            <p><?php echo substr($row['cop_desc'], 0, 50) ?></p>

                            <!--*******************-->
                            <?php if ($_SESSION['user_role'] == "user" && $mono) { ?>

                                <a href="#"
                                   onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")'
                                   data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id']; ?>">
                                    <img src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                         alt="cupon-icon"> Show Code</a>


                            <?php } elseif ($_SESSION['user_role'] == "user" && !$mono) { ?>
                                <a href="<?php echo base_url(); ?>user/listusercoupon"> <img
                                            src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                            alt="cupon-icon"> Show Code</a>


                            <?php } else { ?>

                                <a href="<?php echo base_url(); ?>user/loginreg"> <img
                                            src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                            alt="cupon-icon"> Show Code</a>

                            <?php } ?>

                            <!---->

                            <div class="modal fade" id="myModalr<?php echo $row['cop_id']; ?>" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <!--body-->
                                            <!--                                     <?php $attributes = array('class' => 'form-inline');
                                            echo form_open('user/usre_sms', $attributes) ?>
                                        <div class="form-group">
                                          <input type="number" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
                                        </div>
                                        <button type="submit" class="btn btn-default chbt">Submit</button>
                                   
                                      </form>-->
                                            <h5 class="white_center">coupon code has been sent to your mobile</h5>
                                                 <p style="height: 15px;" class="white_center"><a href="<?php echo base_url();?>user/listusercoupon" ><span style="color:yellow">Click here !</span></a> <span style="color:white" >to get code instantly </span></p>

                                            <!--body-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div class="star1">
                                <?php $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                $avg_r = $cat->num_rows(); ?>
                                <div class="date">Expire :</span><?php echo $row['cop_exp_date'] ?></div>
                                <div class="comment"><i class="fa fa-comment-o fa-x"
                                                        aria-hidden="true"></i>&nbsp; <?php echo $avg_r; ?></div>

                            </div>
                        </div>
                    </div>

                    <!-- /featured-coupons-text -->
                    <!-- featured-coupons-box -->
                </div>
            <?php } ?>
            <!---->
            <div id="recent_view" style="display: none;">
                <?php foreach (array_slice($coupon, 4, 4) as $row) { ?>
                    <div class="col-md-3 col-sm-4 col-xs-12 intro st">
                        <!-- featured-coupons-box -->
                        <div class="featured-coupons-box">
                            <!-- featured-coupons-images -->
                            <div class="featured-coupons-images1">
                                <a href="<?php echo base_url(); ?>store/<?php echo $row['st_id'] ?>">
                                    <!--	<img style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/" . $row['cop_image']) ?>" alt="feature-logo">-->
                                    <img style="height: 75px; " src="<?php echo base_url("assets/img/Dcount.png") ?>"
                                         alt="logo">
                                    <span class="rate5 animated rollIn"><?php if ($row['dis'] <= 9) {
                                            echo sprintf("%02d", $row['dis']);
                                        } else {
                                            echo $row['dis'];
                                        } ?>%  off</span>
                                </a>
                            </div>
                            <!-- /featured-coupons-images -->
                            <!-- featured-coupons-text -->
                            <div class="featured-coupons-text">
                                <?php ?>
                                <div class="star">
                                    <!--avg rating-->
                                    <?php $this->db->select_avg('rating');
                                    $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                    $avg_r = $cat->row_array();
                                    $avg_r = round($avg_r['rating']); ?>
                                    <?php if ($avg_r == 0) {
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    }
                                    if ($avg_r == 1) {
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 2) {

                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 3) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 4) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 5) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 6) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 7) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 8) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 9) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 10) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    }
                                    ?>
                                    <!--end avg rating--> <span class="rate3"> <a style=" float: right;"
                                                                                  href="<?php echo base_url(); ?>user/viewsinglecoupon/<?php echo $row['cop_id']; ?>"
                                                                                  alt="cupon-icon"> Rate This</a>
						</span></div>
                                <h6> <?php echo $row['cop_name'] ?></h6>
                                <p><?php echo substr($row['cop_desc'], 0, 50) ?></p>

                                <!--*******************-->
                                <?php if ($_SESSION['user_role'] == "user" && $mono) { ?>

                                    <a href="#"
                                       onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")'
                                       data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id']; ?>">
                                        <img src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                             alt="cupon-icon"> Show Code</a>


                                <?php } elseif ($_SESSION['user_role'] == "user" && !$mono) { ?>
                                    <a href="<?php echo base_url(); ?>user/listusercoupon"> <img
                                                src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                alt="cupon-icon"> Show Code</a>


                                <?php } else { ?>

                                    <a href="<?php echo base_url(); ?>user/loginreg"> <img
                                                src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                alt="cupon-icon"> Show Code</a>

                                <?php } ?>

                                <!---->

                                <div class="modal fade" id="myModalr<?php echo $row['cop_id']; ?>" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <!--body-->
                                                <!--                                     <?php $attributes = array('class' => 'form-inline');
                                                echo form_open('user/usre_sms', $attributes) ?>
                                        <div class="form-group">
                                          <input type="number" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
                                        </div>
                                        <button type="submit" class="btn btn-default chbt">Submit</button>
                                   
                                      </form>-->
                                                <h5 class="white_center">coupon code has been sent to your mobile</h5>
                                                     <p style="height: 15px;" class="white_center"><a href="<?php echo base_url();?>user/listusercoupon" ><span style="color:yellow">Click here !</span></a> <span style="color:white" >to get code instantly </span></p>

                                                <!--body-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                <div class="star1">
                                    <?php $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                    $avg_r = $cat->num_rows(); ?>
                                    <div class="date">Expire :</span><?php echo $row['cop_exp_date'] ?></div>
                                    <div class="comment"><i class="fa fa-comment-o fa-x"
                                                            aria-hidden="true"></i>&nbsp; <?php echo $avg_r; ?></div>

                                </div>
                            </div>
                        </div>

                        <!-- /featured-coupons-text -->
                        <!-- featured-coupons-box -->
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
                <a class=" btn chview " id="load_recent">More Recent Coupons </a>
            </div>
            <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
                <a class=" btn chview " id="all_recent" href="<?php echo base_url('recent'); ?>">View All
                    Coupons </a>
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
            <?php foreach (array_slice($coupon_d, 0, 4) as $row) { ?>
                <?php if ($row['cop_d_day'] == 1) { ?>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <!-- featured-coupons-box -->
                        <div class="featured-coupons-box">
                            <!-- featured-coupons-images -->
                            <div class="featured-coupons-images1">
                                <a href="<?php echo base_url(); ?>store/<?php echo $row['st_id'] ?>">
                                    <!--	<img style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/" . $row['cop_image']) ?>" alt="feature-logo">-->
                                    <img style="height: 75px; " src="<?php echo base_url("assets/img/Dcount.png") ?>"
                                         alt="logo">
                                    <span class="rate5 animated rollIn"><?php if ($row['dis'] <= 9) {
                                            echo sprintf("%02d", $row['dis']);
                                        } else {
                                            echo $row['dis'];
                                        } ?>%  off</span>
                                </a>
                            </div>
                            <!-- /featured-coupons-images -->
                            <!-- featured-coupons-text -->
                            <div class="featured-coupons-text">
                                <?php ?>
                                <div class="star">
                                    <!--avg rating-->
                                    <?php $this->db->select_avg('rating');
                                    $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                    $avg_r = $cat->row_array();
                                    $avg_r = round($avg_r['rating']); ?>
                                    <?php if ($avg_r == 0) {
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    }
                                    if ($avg_r == 1) {
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 2) {

                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 3) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 4) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 5) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 6) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 7) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 8) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 9) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 10) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    }
                                    ?>
                                    <!--end avg rating--> <span class="rate3"> <a style=" float: right;"
                                                                                  href="<?php echo base_url(); ?>user/viewsinglecoupon/<?php echo $row['cop_id']; ?>"
                                                                                  alt="cupon-icon"> Rate This</a>
						</span></div>
                                <h6> <?php echo $row['cop_name'] ?></h6>
                                <p><?php echo substr($row['cop_desc'], 0, 50) ?></p>

                                <!--*******************-->
                                <?php if ($_SESSION['user_role'] == "user" && $mono) { ?>

                                    <a href="#"
                                       onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")'
                                       data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id']; ?>">
                                        <img src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                             alt="cupon-icon"> Show Code</a>


                                <?php } elseif ($_SESSION['user_role'] == "user" && !$mono) { ?>
                                    <a href="<?php echo base_url(); ?>user/listusercoupon"> <img
                                                src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                alt="cupon-icon"> Show Code</a>


                                <?php } else { ?>

                                    <a href="<?php echo base_url(); ?>user/loginreg"> <img
                                                src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                alt="cupon-icon"> Show Code</a>

                                <?php } ?>

                                <!---->

                                <div class="modal fade" id="myModalr<?php echo $row['cop_id']; ?>" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <!--body-->
                                                <h5 class="white_center">coupon code has been sent to your mobile</h5>
                                                     <p style="height: 15px;" class="white_center"><a href="<?php echo base_url();?>user/listusercoupon" ><span style="color:yellow">Click here !</span></a> <span style="color:white" >to get code instantly </span></p>

                                                <!--body-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                <div class="star1">
                                    <?php $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                    $avg_r = $cat->num_rows(); ?>
                                    <div class="date">Expire :</span><?php echo $row['cop_exp_date'] ?></div>
                                    <div class="comment"><i class="fa fa-comment-o fa-x"
                                                            aria-hidden="true"></i>&nbsp; <?php echo $avg_r; ?></div>

                                </div>
                            </div>
                        </div>

                        <!-- /featured-coupons-text -->
                        <!-- featured-coupons-box -->
                    </div>
                <?php }
            } ?>
            <div id="deal_view" style="display: none;">
                <?php foreach (array_slice($coupon_d, 4, 4) as $row) { ?>
                    <?php if ($row['cop_d_day'] == 1) { ?>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <!-- featured-coupons-box -->
                            <div class="featured-coupons-box">
                                <!-- featured-coupons-images -->
                                <div class="featured-coupons-images1">
                                    <a href="<?php echo base_url(); ?>store/<?php echo $row['st_id'] ?>">
                                        <!--	<img style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/" . $row['cop_image']) ?>" alt="feature-logo">-->
                                        <img style="height: 75px; "
                                             src="<?php echo base_url("assets/img/Dcount.png") ?>" alt="logo">
                                        <span class="rate5 animated rollIn"><?php if ($row['dis'] <= 9) {
                                                echo sprintf("%02d", $row['dis']);
                                            } else {
                                                echo $row['dis'];
                                            } ?>%  off</span>
                                    </a>
                                </div>
                                <!-- /featured-coupons-images -->
                                <!-- featured-coupons-text -->
                                <div class="featured-coupons-text">
                                    <?php ?>
                                    <div class="star">
                                        <!--avg rating-->
                                        <?php $this->db->select_avg('rating');
                                        $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                        $avg_r = $cat->row_array();
                                        $avg_r = round($avg_r['rating']); ?>
                                        <?php if ($avg_r == 0) {
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        }
                                        if ($avg_r == 1) {
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 2) {

                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 3) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 4) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 5) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                        }
                                        if ($avg_r == 6) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                        }
                                        if ($avg_r == 7) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 8) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                        }
                                        if ($avg_r == 9) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                        }
                                        if ($avg_r == 10) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                        ?>
                                        <!--end avg rating--> <span class="rate3"> <a style=" float: right;"
                                                                                      href="<?php echo base_url(); ?>user/viewsinglecoupon/<?php echo $row['cop_id']; ?>"
                                                                                      alt="cupon-icon"> Rate This</a>
						</span></div>
                                    <h6> <?php echo $row['cop_name'] ?></h6>
                                    <p><?php echo substr($row['cop_desc'], 0, 50) ?></p>

                                    <!--*******************-->
                                    <?php if ($_SESSION['user_role'] == "user" && $mono) { ?>

                                        <a href="#"
                                           onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")'
                                           data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id']; ?>">
                                            <img src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                 alt="cupon-icon"> Show Code</a>


                                    <?php } elseif ($_SESSION['user_role'] == "user" && !$mono) { ?>
                                        <a href="<?php echo base_url(); ?>user/listusercoupon"> <img
                                                    src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                    alt="cupon-icon"> Show Code</a>


                                    <?php } else { ?>

                                        <a href="<?php echo base_url(); ?>user/loginreg"> <img
                                                    src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                    alt="cupon-icon"> Show Code</a>

                                    <?php } ?>

                                    <!---->

                                    <div class="modal fade" id="myModalr<?php echo $row['cop_id']; ?>" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <!--body-->
                                                    <!--                                     <?php $attributes = array('class' => 'form-inline');
                                                    echo form_open('user/usre_sms', $attributes) ?>
                                        <div class="form-group">
                                          <input type="number" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
                                        </div>
                                        <button type="submit" class="btn btn-default chbt">Submit</button>
                                   
                                      </form>-->
                                                    <h5 class="white_center">coupon code has been sent to your mobile</h5>
                                                         <p style="height: 15px;" class="white_center"><a href="<?php echo base_url();?>user/listusercoupon" ><span style="color:yellow">Click here !</span></a> <span style="color:white" >to get code instantly </span></p>

                                                    <!--body-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="star1">
                                        <?php $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                        $avg_r = $cat->num_rows(); ?>
                                        <div class="date">Expire :</span><?php echo $row['cop_exp_date'] ?></div>
                                        <div class="comment"><i class="fa fa-comment-o fa-x" aria-hidden="true"></i>&nbsp; <?php echo $avg_r; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- /featured-coupons-text -->
                            <!-- featured-coupons-box -->
                        </div>
                    <?php }
                } ?>
            </div>
            <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
                <a id="load_deal" class=" btn chview ">More Deal Coupons </a>
            </div>

            <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
                <a id="all_deal" class=" btn chview " href="<?php echo base_url('deal'); ?>">View All
                    Coupons </a>
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
            <!---->
            <?php foreach (array_slice($coupon_f, 4, 4) as $row) { ?>
                <?php if ($row['cop_featured'] == 1) { ?>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <!-- featured-coupons-box -->
                        <div class="featured-coupons-box">
                            <!-- featured-coupons-images -->
                            <div class="featured-coupons-images1">
                                <a href="<?php echo base_url(); ?>store/<?php echo $row['st_id'] ?>">
                                    <!--	<img style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/" . $row['cop_image']) ?>" alt="feature-logo">-->
                                    <img style="height: 75px; " src="<?php echo base_url("assets/img/Dcount.png") ?>"
                                         alt="logo">
                                    <span class="rate5 animated rollIn"><?php if ($row['dis'] <= 9) {
                                            echo sprintf("%02d", $row['dis']);
                                        } else {
                                            echo $row['dis'];
                                        } ?>%  off</span>
                                </a>
                            </div>
                            <!-- /featured-coupons-images -->
                            <!-- featured-coupons-text -->
                            <div class="featured-coupons-text">
                                <?php ?>
                                <div class="star">
                                    <!--avg rating-->
                                    <?php $this->db->select_avg('rating');
                                    $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                    $avg_r = $cat->row_array();
                                    $avg_r = round($avg_r['rating']); ?>
                                    <?php if ($avg_r == 0) {
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                    }
                                    if ($avg_r == 1) {
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 2) {

                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 3) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 4) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 5) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 6) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 7) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                    }
                                    if ($avg_r == 8) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 9) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                    }
                                    if ($avg_r == 10) {
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                    }
                                    ?>
                                    <!--end avg rating--> <span class="rate3"> <a style=" float: right;"
                                                                                  href="<?php echo base_url(); ?>user/viewsinglecoupon/<?php echo $row['cop_id']; ?>"
                                                                                  alt="cupon-icon"> Rate This</a>
						</span></div>
                                <h6> <?php echo $row['cop_name'] ?></h6>
                                <p><?php echo substr($row['cop_desc'], 0, 50) ?></p>

                                <!--*******************-->
                                <?php if ($_SESSION['user_role'] == "user" && $mono) { ?>

                                    <a href="#"
                                       onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")'
                                       data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id']; ?>">
                                        <img src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                             alt="cupon-icon"> Show Code</a>


                                <?php } elseif ($_SESSION['user_role'] == "user" && !$mono) { ?>
                                    <a href="<?php echo base_url(); ?>user/listusercoupon"> <img
                                                src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                alt="cupon-icon"> Show Code</a>


                                <?php } else { ?>

                                    <a href="<?php echo base_url(); ?>user/loginreg"> <img
                                                src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                alt="cupon-icon"> Show Code</a>

                                <?php } ?>

                                <!---->

                                <div class="modal fade" id="myModalr<?php echo $row['cop_id']; ?>" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <!--body-->

                                                <h5 class="white_center">coupon code has been sent to your mobile</h5>
                                                     <p style="height: 15px;" class="white_center"><a href="<?php echo base_url();?>user/listusercoupon" ><span style="color:yellow">Click here !</span></a> <span style="color:white" >to get code instantly </span></p>

                                                <!--body-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---->
                                <div class="star1">
                                    <?php $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                    $avg_r = $cat->num_rows(); ?>
                                    <div class="date">Expire :</span><?php echo $row['cop_exp_date'] ?></div>
                                    <div class="comment"><i class="fa fa-comment-o fa-x"
                                                            aria-hidden="true"></i>&nbsp; <?php echo $avg_r; ?></div>

                                </div>
                            </div>
                        </div>

                        <!-- /featured-coupons-text -->
                        <!-- featured-coupons-box -->
                    </div>
                <?php }
            } ?>
            <!---->
            <div id="fea_view" style="display: none;">
                <?php foreach (array_slice($coupon_f, 4, 4) as $row) { ?>
                    <?php if ($row['cop_featured'] == 1) { ?>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <!-- featured-coupons-box -->
                            <div class="featured-coupons-box">
                                <!-- featured-coupons-images -->
                                <div class="featured-coupons-images1">
                                    <a href="<?php echo base_url(); ?>store/<?php echo $row['st_id'] ?>">
                                        <!--	<img style="width:100%" class="img-responsive" src="<?php echo base_url("uploads/" . $row['cop_image']) ?>" alt="feature-logo">-->
                                        <img style="height: 75px; "
                                             src="<?php echo base_url("assets/img/Dcount.png") ?>" alt="logo">
                                        <span class="rate5 animated rollIn"><?php if ($row['dis'] <= 9) {
                                                echo sprintf("%02d", $row['dis']);
                                            } else {
                                                echo $row['dis'];
                                            } ?>%  off</span>
                                    </a>
                                </div>
                                <!-- /featured-coupons-images -->
                                <!-- featured-coupons-text -->
                                <div class="featured-coupons-text">
                                    <?php ?>
                                    <div class="star">
                                        <!--avg rating-->
                                        <?php $this->db->select_avg('rating');
                                        $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                        $avg_r = $cat->row_array();
                                        $avg_r = round($avg_r['rating']); ?>
                                        <?php if ($avg_r == 0) {
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        }
                                        if ($avg_r == 1) {
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 2) {

                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 3) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 4) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 5) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                        }
                                        if ($avg_r == 6) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                        }
                                        if ($avg_r == 7) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';


                                        }
                                        if ($avg_r == 8) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                        }
                                        if ($avg_r == 9) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';

                                        }
                                        if ($avg_r == 10) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                        ?>
                                        <!--end avg rating--> <span class="rate3"> <a style=" float: right;"
                                                                                      href="<?php echo base_url(); ?>user/viewsinglecoupon/<?php echo $row['cop_id']; ?>"
                                                                                      alt="cupon-icon"> Rate This</a>
						</span></div>
                                    <h6> <?php echo $row['cop_name'] ?></h6>
                                    <p><?php echo substr($row['cop_desc'], 0, 50) ?></p>

                                    <!--*******************-->
                                    <?php if ($_SESSION['user_role'] == "user" && $mono) { ?>

                                        <a href="#"
                                           onclick='insert("<?php echo $mono ?>","<?php echo $_SESSION['username'] ?>","<?php echo $row['st_id'] ?>","<?php echo $row['cop_id'] ?>")'
                                           data-toggle="modal" data-target="#myModalr<?php echo $row['cop_id']; ?>">
                                            <img src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                 alt="cupon-icon"> Show Code</a>


                                    <?php } elseif ($_SESSION['user_role'] == "user" && !$mono) { ?>
                                        <a href="<?php echo base_url(); ?>user/listusercoupon"> <img
                                                    src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                    alt="cupon-icon"> Show Code</a>


                                    <?php } else { ?>

                                        <a href="<?php echo base_url(); ?>user/loginreg"> <img
                                                    src="<?php echo base_url(); ?>assets/user/images/cupon-icon.png"
                                                    alt="cupon-icon"> Show Code</a>

                                    <?php } ?>

                                    <!---->

                                    <div class="modal fade" id="myModalr<?php echo $row['cop_id']; ?>" role="dialog">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <!--body-->
                                                    <!--                                     <?php $attributes = array('class' => 'form-inline');
                                                    echo form_open('user/usre_sms', $attributes) ?>
                                        <div class="form-group">
                                          <input type="number" class="form-control" id="mobile" placeholder="Mobile No" name="mobile">
                                        </div>
                                        <button type="submit" class="btn btn-default chbt">Submit</button>
                                   
                                      </form>-->
                                                    <h5 class="white_center">coupon code has been sent to your
                                                        mobile</h5>
                                                    <!--body-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <div class="star1">
                                        <?php $cat = $this->db->get_where('rating', array('cop_id' => $row['cop_id']));
                                        $avg_r = $cat->num_rows(); ?>
                                        <div class="date">Expire :</span><?php echo $row['cop_exp_date'] ?></div>
                                        <div class="comment"><i class="fa fa-comment-o fa-x" aria-hidden="true"></i>&nbsp; <?php echo $avg_r; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- /featured-coupons-text -->
                            <!-- featured-coupons-box -->
                        </div>
                    <?php }
                } ?>
            </div>
            <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
                <a id="load_fea" class=" btn chview ">More Featured Coupons </a>
            </div>
            <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
                <a id="all_fea" class=" btn chview " href="<?php echo base_url('featured'); ?>">View All
                    Coupons </a>
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
            <?php //print_r($storef ) ?>

            <?php foreach (array_slice($storef, 0, 8) as $row) { ?>
                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <a href="<?php echo base_url(); ?>store/<?php echo $row['st_id'] ?>">

                            <img style="width:100%" src="<?php echo base_url("uploads/" . $row['st_image2']) ?>" alt="gh">
                            <div class="caption">
                                <p class="c_head"><span style=""></i></span> <?php echo $row['st_name'] ?></p>
                                <hr>
                                <p style="color:darkred;    font-weight: 600;"><span style="color:#0000ff"><i
                                                class="fa fa-location-arrow"
                                                aria-hidden="true"></i></span> <?php $cat = $this->db->get_where('location', array('loc_id' => $row['st_location']));
                                    $cat = $cat->row_array();
                                    echo $cat['locname'] ?>
                                    <span style="float:right"><span class="c_cop"><i class="fa fa-contao"
                                                                                     aria-hidden="true"></i></span>&nbsp;&nbsp; <?php $cat = $this->db->get_where('coupon', array('st_id' => $row['st_id']));
                                        $cat = $cat->num_rows();
                                        echo $cat; ?></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

            <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
                <a class=" btn chview " href="<?php echo base_url('user/viewallstore'); ?>">View All Store</a>
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
            <?php foreach ($category as $row) { ?>
                <?php if ($row['cat_status'] == 1) { ?>
                    <div class="col-md-3 col-sm-6 ch">
                        <!-- featured-img -->
                        <div class="featured-img">
                            <img class="img-responsive" src="<?php echo base_url("uploads/" . $row['cat_image']) ?>"
                                 alt="fcat"/>
                            <a href="<?php echo base_url(); ?>category/<?php echo $row['cat_id'] ?>/<?php echo strtolower($row['cat_name']) ?>"
                               class="featured-text">

                                <?php echo $row['cat_name']; ?>
                            </a>
                        </div>
                        <!-- featured-img -->
                    </div>
                <?php }
            } ?>


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
                        <img src="<?php echo base_url(); ?>assets/user/images/events-img.jpg" alt="events-img"/>
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
                                    <img src="<?php echo base_url(); ?>assets/user/images/music-icon.png"
                                         alt="welcom-img5"/>
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
                        <img src="<?php echo base_url(); ?>assets/user/images/events-img2.jpg" alt="events-img2"/>
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
                                    <img src="<?php echo base_url(); ?>assets/user/images/music-icon.png"
                                         alt="welcom-img5"/>
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
                        <img src="<?php echo base_url(); ?>assets/user/images/events-img3.jpg" alt="events-img3"/>
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
                                    <img src="<?php echo base_url(); ?>assets/user/images/music-icon.png"
                                         alt="welcom-img5"/>
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
                        <img src="<?php echo base_url(); ?>assets/user/images/news-img1.jpg" alt="events-img"/>
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
                        <img src="<?php echo base_url(); ?>assets/user/images/news-img2.jpg" alt="events-img2"/>
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
                        <img src="<?php echo base_url(); ?>assets/user/images/news-img3.jpg" alt="events-img3"/>
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
                    url:"<?php echo base_url(); ?>admin/s_block",
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
    
    

