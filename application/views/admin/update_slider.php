<style>
    a.btn.btn-primary {
        float: right;
    }
</style>
<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Slider</a></div>
        <h1>Update Slider <?php // print_r($cat_list) ?></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                        <h5>Image Size :<span style="color:red"> 1600 x 600 </span></h5>
                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>
                                    <?php if ($img1_msg == 0) { ?><?php } ?>
                                    <?php if ($img1_msg == 1) { ?>
                                        <div class="alert alert-success "><h3 style="text-align:center">Updated !</h3>
                                        </div><?php } ?>
                                    <?php if ($img1_msg == 2) { ?>
                                        <div class="alert alert-danger "><h3 style="text-align:center">Image Size must
                                                be 1600 x 600 </h3></div><?php } ?>
                                </th>
                                <th>
                                    <?php if ($img2_msg == 0) { ?><?php } ?>
                                    <?php if ($img2_msg == 1) { ?>
                                        <div class="alert alert-success "><h3 style="text-align:center">Updated !</h3>
                                        </div><?php } ?>
                                    <?php if ($img2_msg == 2) { ?>
                                        <div class="alert alert-danger "><h3 style="text-align:center">Image Size must
                                                be 1600 x 600 </h3></div><?php } ?>
                                </th>
                                <th>
                                    <?php if ($img3_msg == 0) { ?><?php } ?>
                                    <?php if ($img3_msg == 1) { ?>
                                        <div class="alert alert-success "><h3 style="text-align:center">Updated !</h3>
                                        </div><?php } ?>
                                    <?php if ($img3_msg == 2) { ?>
                                        <div class="alert alert-danger "><h3 style="text-align:center">Image Size must
                                                be 1600 x 600 </h3></div><?php } ?>
                                </th>
                            </tr>
                            <tr>
                                <th>First Slider Immage</th>
                                <th>Second Slider Immage</th>
                                <th>Third Slider Immage</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img class="s_img1" src="<?php echo base_url("uploads/" . $cat_list['s_img1']) ?>">
                                </td>
                                <td><img class="s_img2" src="<?php echo base_url("uploads/" . $cat_list['s_img2']) ?>">
                                </td>
                                <td><img class="s_img3" src="<?php echo base_url("uploads/" . $cat_list['s_img3']) ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url(); ?>index.php/admin/update_slider1/<?php echo $cat_list['cat_id'] ?>"
                                       class="btn btn-primary ">Change Immage</a></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>index.php/admin/update_slider2/<?php echo $cat_list['cat_id'] ?>"
                                       class="btn btn-primary ">Change Immage</a></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>index.php/admin/update_slider3/<?php echo $cat_list['cat_id'] ?>"
                                       class="btn btn-primary ">Change Immage</a></td>
                            </tr>


                            </tbody>
                            <thead>
                            <tr>
                                <th>
                                    <?php if ($img4_msg == 0) { ?><?php } ?>
                                    <?php if ($img4_msg == 1) { ?>
                                        <div class="alert alert-success "><h3 style="text-align:center">Updated !</h3>
                                        </div><?php } ?>
                                    <?php if ($img4_msg == 2) { ?>
                                        <div class="alert alert-danger "><h3 style="text-align:center">Image Size must
                                                be 1600 x 600 </h3></div><?php } ?>
                                </th>
                                <th>
                                    <?php if ($img5_msg == 0) { ?><?php } ?>
                                    <?php if ($img5_msg == 1) { ?>
                                        <div class="alert alert-success "><h3 style="text-align:center">Updated !</h3>
                                        </div><?php } ?>
                                    <?php if ($img5_msg == 2) { ?>
                                        <div class="alert alert-danger "><h3 style="text-align:center">Image Size must
                                                be 1600 x 600 </h3></div><?php } ?>
                                </th>
                                <th>
                                    <?php if ($img6_msg == 0) { ?><?php } ?>
                                    <?php if ($img6_msg == 1) { ?>
                                        <div class="alert alert-success "><h3 style="text-align:center">Updated !</h3>
                                        </div><?php } ?>
                                    <?php if ($img6_msg == 2) { ?>
                                        <div class="alert alert-danger "><h3 style="text-align:center">Image Size must
                                                be 1600 x 600 </h3></div><?php } ?>
                                </th>
                            </tr>
                            <tr>

                                <th>Forth Slider Immage</th>
                                <th>Fifth Slider Immage</th>
                                <th>Sixth Slider Immage</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td><img class="slimg" src="<?php echo base_url("uploads/" . $cat_list['s_img4']) ?>">
                                </td>
                                <td><img class="slimg" src="<?php echo base_url("uploads/" . $cat_list['s_img5']) ?>">
                                </td>
                                <td><img class="slimg" src="<?php echo base_url("uploads/" . $cat_list['s_img6']) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url(); ?>index.php/admin/update_slider4/<?php echo $cat_list['cat_id'] ?>"
                                       class="btn btn-primary ">Change Immage</a></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>index.php/admin/update_slider5/<?php echo $cat_list['cat_id'] ?>"
                                       class="btn btn-primary ">Change Immage</a></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>index.php/admin/update_slider6/<?php echo $cat_list['cat_id'] ?>"
                                       class="btn btn-primary ">Change Immage</a></td>
                            </tr>

                            </tbody>
                        </table>

                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>