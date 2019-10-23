<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>

        <li id="st"> <a href="<?php echo base_url();?>index.php/dcount/st_update"><i class="fa fa-window-restore" aria-hidden="true"></i><span> Store</span></a> </li>
        <li id="cu"> <a href="<?php echo base_url();?>index.php/dcount/add_coupon"><i class="fa fa-signal" aria-hidden="true"></i> <span> Add Coupon</span></a> </li>
        <li id="creg"> <a href="<?php echo base_url();?>index.php/dcount/code_reg_user"><i class="fa fa-users" aria-hidden="true"></i><span> Registered User</span></a> </li>
        <li id="ac"> <a href="<?php echo base_url();?>index.php/dcount/manage_ac"><i class="fa fa-users" aria-hidden="true"></i><span> Manage Account</span></a> </li>
        <li id="ac"> <a href="<?php echo base_url();?>index.php/dcount/edit_store_gal/<?php echo $_SESSION['st_id'] ?>"><i class="fa fa-users" aria-hidden="true"></i><span> Manage Gallery</span></a> </li>
        

    </ul>

</div>

<!--sidebar-menu-->