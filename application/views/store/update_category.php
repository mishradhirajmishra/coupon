
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Category</a> </div>
    <h1>Update Category <?php // print_r($cat_list) ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span5">
            
            <img style="margin: 100px;" src="<?php echo base_url("uploads/". $cat_list['cat_image']) ?>"> 
            </div>
      <div class="span5 offset2">
            <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Update Category</h5>
                    </div>
                    <div class="widget-content nopadding">
<!--                                <?php if($message==1){?>
	                        	<div class="alert alert-success "> One <strong>record </strong>Updated!</div>
	                        	<?php } ?>-->
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                echo form_open_multipart('admin/update_category', $attributes);?>
                              <div class="control-group">
                                <label class="control-label">Category Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" value="<?php echo $cat_list['cat_name'] ?>" name="cat_name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Category Type :</label>
                                <div class="controls">
                                    <input type="text" class="span11" value="<?php echo $cat_list['cat_type'] ?>" " name="cat_type"  >
                                </div>
                            </div>
                            <div class="control-group">
                            
                                <div class="controls">
                                <span style="float:right;margin-right:28px;" class="alert alert-danger" >Image Size 480 X 300 </span>

                                </div>
                            </div>
                             
                            <div class="control-group">
                              <label class="control-label">Category Image</label>
                                <div class="controls">
                                    <input type="file" class="span11" name="cat_image">
                                </div>
                            </div>
                           
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea class="span11" name="cat_desc"><?php echo $cat_list['cat_desc'] ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Featured ?</label>
                                <div class="controls">
                                    <select class="span11" name="ch_status" >
                                    <option value="1">Yes</option>
                                     <option value="0">No</option>
                                    </select>
                                </div>
                             <input type="hidden" class="span11" value="<?php echo $cat_list['cat_id'] ?>" name="cat_id">
                            </div>
                            <div class="form-actions">
                                <button type="submit"  name="add" class="btn btn-success pull-right">Update Category</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>

    </div>
  </div>
</div>