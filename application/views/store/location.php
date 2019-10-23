<script>
    $(document).ready(function(){
                 $("#loc").addClass("active");
  
    });
</script>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Location</a> </div>
    <h1>Location</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
                 <div class="span6 offset3">
                                <?php if($message==1){?>
	                        	<div class="alert alert-success "><h3 style="text-align:center"> One <strong>record </strong>inserted !</h3></div>
	                        	<?php } ?>								
								<?php if($message==2){?>
	                        	<div class="alert alert-success "> <h3 style="text-align:center">One <strong>record </strong>updated !</h3></div>
	                        	<?php } ?>
	                        	<?php if($message==3){?>
	                        	<div class="alert alert-danger "><h3 style="text-align:center"> One <strong>record </strong>deleted !</h3></div>
	                        	<?php } ?>
              </div>
      <div class="span6 offset6">
<div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Add Location</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal');
                                echo form_open_multipart('admin/add_location', $attributes);?>
                              <div class="control-group">
                                <label class="control-label">Location Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Location name" name="location_name" required>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label">City :</label>
                                <div class="controls">
                                <input type="text" class="span11" placeholder="City" name="city" required>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label">Area:</label>
                                <div class="controls">
                                   <input type="text" class="span11" placeholder="Area" name="area">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pin No:</label>
                                <div class="controls">
                                   <input type="text" class="span11" placeholder="Pin No" name="pin" required>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label">Sub Area:</label>
                                <div class="controls">
                                   <input type="text" class="span11" placeholder="Sub Area" name="subarea">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Sector:</label>
                                <div class="controls">
                                   <input type="text" class="span11" placeholder="Sector" name="sector">
                                </div>
                            </div>
                           
                            <div class="form-actions">
                                <button type="submit"  name="add" class="btn btn-success pull-right">Add Location</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
      <div class="span12">
  
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                                    <th>Location</th>
                                    <th>City</th>
                                    <th>Area</th>
                                    <th>Pin No</th>
                                    <th>Sub Area</th>
                                    <th>Sector</th>
                                    <th>Action</th>
                         
                </tr>
              </thead>
              <tbody>
                              <?php  foreach( $location as $row){?>
                                     <tr >
                                    <td class=" "> <?php echo $row['locname'] ?> </td>
                                    <td class=" "> <?php echo $row['city'] ?> </td>
                                    <td class=" "> <?php echo $row['area'] ?> </td>
                                     <td class=" "> <?php echo $row['pin'] ?> </td>
                                    <td class=" "> <?php echo $row['subarea'] ?> </td>
                                    <td class=" "> <?php echo $row['sector']?> </td>
                                    <td>
                                    <a href="<?php echo base_url();?>index.php/admin/edit_location/<?php echo $row['loc_id'] ?>" class="btn btn-primary ">Edit</a>
                                    <a href="<?php echo base_url();?>index.php/admin/delete_location/<?php echo $row['loc_id'] ?>" class="btn btn-danger " onClick="return doconfirm();">Delete</a>
                                    </td>
									</tr>
                                
                                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>