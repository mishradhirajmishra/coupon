<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Store</a></div>
        <h1>Update Store <?php // print_r($store_list) ?></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span5">

                <img style="margin: 120px;" src="<?php echo base_url("uploads/" . $store_list['st_image2']) ?>">
            </div>
            <div class="span5 offset2">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Update Store</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/update_store_image', $attributes); ?>

                        <div class="control-group">
                            <div class="controls">
                                <span style="float:right;margin-right:35px;" class="alert alert-danger">Image Size 750 X 400 </span>

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Stote Image</label>
                            <div class="controls">
                                <input type="file" class="span11" name="store_image2">
                            </div>
                        </div>
                        <input type="hidden" class="span11" value="<?php echo $store_list['st_id'] ?>" name="st_id">
                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Update Store</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>