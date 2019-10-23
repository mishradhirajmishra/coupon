
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Comment</a> </div>
    <h1>Update Comment <?php // print_r($cat_list) ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <?php // print_r($com_list['id']) ?>
      <div class="span5 offset2">
            <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Update comment</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal');
                                echo form_open('admin/update_comment', $attributes);?>
                            <div class="control-group">
                                <label class="control-label">Active</label>
                                <div class="controls">
                                    <select class="span11" name="ch_status" >
                                    <option value="1">Yes</option>
                                     <option value="0">No</option>
                                    </select>
                                </div>
                             <input type="hidden" class="span11" value="<?php echo $com_list['id'] ?>" name="id">
                            </div>
                            <div class="form-actions">
                                <button type="submit"  name="add" class="btn btn-success pull-right">Update Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>

    </div>
  </div>
</div>