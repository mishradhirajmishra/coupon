<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Main Slider</a></div>
        <h1>Update Category <?php //print_r($message) ?></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span5">
                <img style="margin: 10px; width:300px" src="<?php echo base_url("uploads/" . $slider['img_dsk']) ?>">
               <img style="margin: 10px;width:200px" src="<?php echo base_url("uploads/" . $slider['img_mob']) ?>">
            </div>
            <div class="span5 offset2">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Update Main Slider</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/update_main_slider', $attributes); ?>
                        <span style="float:right;margin-right:35px;"
                              class="alert alert-danger">Image Size 1600 X 600 </span>
                        <div class="control-group">
                            <label class="control-label">Desktop Image</label>

                            <div class="controls">
                                <input type="file" class="span11" name="img_dsk" >

                            </div>
                        </div>
                        <span style="float:right;margin-right:35px;"
                              class="alert alert-danger">Image Size 600 X 600 </span>
                        <div class="control-group">
                            <label class="control-label">Mobile Image</label>

                            <div class="controls">
                                <input type="file" class="span11" name="img_mob">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Store Url</label>
                            <div class="controls">
                                  <input type="url" class="span11" name="url" value="<?php echo $slider['url']; ?>">
                            </div>
                        </div>
                         <input type="hidden" class="span11" name="id" value="<?php echo $slider['id']; ?>">
                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Update Slider</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>