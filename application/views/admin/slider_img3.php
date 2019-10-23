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
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/update_slider3_img', $attributes); ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>

                            <tr>
                                <th>First Slider Immage</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img class="s_img2" src="<?php echo base_url("uploads/" . $cat_list['s_img3']) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><input type="file" class="span11" name="s_img3"></td>
                                <input type="hidden" class="span11" value="<?php echo $cat_list['cat_id'] ?>"
                                       name="cat_id">
                            </tr>
                            <tr>
                                  <td>Store Url &nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="url" class="span11" name="s_url" value="<?php echo $cat_list['cimg3'] ?>"></td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" name="add" class="btn btn-success pull-right">Update Slider
                                    </button>
                                </td>
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