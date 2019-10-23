<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>

          <?php if ($_SESSION['status'] == 0) { ?>
          <li id="dash"><a href="<?php echo base_url(); ?>index.php/admin/dashboard"><i class="fa fa-area-chart"
                                                                                      aria-hidden="true"></i></i><span>Dashboard</span></a>
        </li>
        <li id="cat"><a href="<?php echo base_url(); ?>index.php/admin/add_main_slider"><i class="fa fa-cc"
                                                                                        aria-hidden="true"></i> <span> Main Slider</span></a>
        </li>
        <li id="cat"><a href="<?php echo base_url(); ?>index.php/admin/add_category"><i class="fa fa-cc"
                                                                                        aria-hidden="true"></i> <span> Add Category</span></a>
        </li>
      
            <li id="loc1"> <a href="<?php echo base_url(); ?>index.php/admin/add_admin"><i class="fa fa-location-arrow"
                                                                                           aria-hidden="true"></i><span> Add Admin</span></a>
            </li>
        <li id="loc"><a href="<?php echo base_url(); ?>index.php/admin/add_location"><i class="fa fa-location-arrow"
                                                                                        aria-hidden="true"></i><span> Add Location</span></a>
        </li>
        <?php } ?>
        <li id="st"><a href="<?php echo base_url(); ?>index.php/admin/add_store"><i class="fa fa-window-restore"
                                                                                    aria-hidden="true"></i><span> Add Store</span></a>
        </li>
             <?php if ($_SESSION['status'] == 0) { ?>
       <li id="st_c"><a href="<?php echo base_url(); ?>index.php/admin/add_store_c"><i class="fa fa-window-restore"
                                                                                    aria-hidden="true"></i><span>Store Credentials</span></a>
        </li>
        
        
        <li id="cu"><a href="<?php echo base_url(); ?>index.php/admin/add_coupon"><i class="fa fa-signal"
                                                                                     aria-hidden="true"></i> <span> Add Coupon</span></a>
        </li>
         <?php } ?>
         <?php if ($_SESSION['status'] == 0) { ?>
        <li style="display:none" id="reg"><a href="<?php echo base_url(); ?>index.php/admin/reg_user"><i
                        class="fa fa-arrows" aria-hidden="true"></i> <span> Landing User</span></a></li>
        <li id="creg"><a href="<?php echo base_url(); ?>index.php/admin/code_reg_user"><i class="fa fa-users"
                                                                                          aria-hidden="true"></i><span> Registered User</span></a>
        </li>
        <li id="cont"><a href="<?php echo base_url(); ?>index.php/admin/contact_us"><i class="fa fa-cc"
                                                                                       aria-hidden="true"></i> <span> Contact Us</span></a>
        </li>
        <li id="com"><a href="<?php echo base_url(); ?>index.php/admin/store_comment"><i class="fa fa-pencil"
                                                                                         aria-hidden="true"></i> <span> Comment</span></a>
        </li>
                <li id="subs"><a href="<?php echo base_url(); ?>index.php/admin/subscriber_list"><i class="fa fa-pencil"
                                                                                         aria-hidden="true"></i> <span> Subscriber</span></a>
        </li>
        
         <?php } ?>
            <?php if ($_SESSION['status'] == 1) { ?>
                    </li>
                <li id="subs"><a href="<?php echo base_url(); ?>index.php/login/logout"><i class="fa fa-power-off"
                                                                                         aria-hidden="true"></i> <span>logout</span></a>
        </li>
             <?php } ?>

    </ul>
</div>

<!--sidebar-menu-->