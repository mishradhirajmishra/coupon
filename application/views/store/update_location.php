
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Location</a> </div>
    <h1>Update Location <?php // print_r($location_list) ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span5">

            </div>
      <div class="span5 offset2">
<div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Update Location</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal');
                                echo form_open_multipart('admin/update_location', $attributes);?>
                              <div class="control-group">
                                <label class="control-label">Location Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" value="<?php echo $location_list['locname']; ?>" name="location_name" required>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label">City :</label>
                                <div class="controls">
                                <input type="text" class="span11" value="<?php echo $location_list['city']; ?>" name="city" required>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label">Area:</label>
                                <div class="controls">
                                   <input type="text" class="span11" value="<?php echo $location_list['area']; ?>" name="area">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pin No:</label>
                                <div class="controls">
                                   <input type="text" class="span11" value="<?php echo $location_list['pin']; ?>" name="pin" required>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label">Sub Area:</label>
                                <div class="controls">
                                   <input type="text" class="span11" value="<?php echo $location_list['subarea']; ?>" name="subarea">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Sector:</label>
                                <div class="controls">
                                   <input type="text" class="span11" value="<?php echo $location_list['sector']; ?>" name="sector">
                                </div>
                            </div>
                            <input type="hidden" class="span11" value="<?php echo $location_list['loc_id']; ?>" name="loc_id">
                            <div class="form-actions">
                                <button type="submit"  name="add" class="btn btn-success pull-right">Update Location</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>

    </div>
  </div>
</div>