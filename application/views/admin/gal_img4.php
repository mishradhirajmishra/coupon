<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Slider</a></div>
        <h1>Update Gallery <?php // print_r($cat_list) ?></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span4">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                        <h5>Image Size :<span style="color:red"> 980 x 380 </span></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/update_gallery4_img', $attributes); ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>

                            <tr>
                                <th>Gallery Immage</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img class="s_img1" src="<?php echo base_url("uploads/" . $store_list['gal4']) ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><input type="file" class="span11" name="gal4"></td>
                                <input type="hidden" class="span11" value="<?php echo $store_list['st_id'] ?>"
                                       name="st_id">
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" name="add" class="btn btn-success pull-right">Update</button>
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