<script>
    $(document).ready(function(){
                 $("#cu").addClass("active");
  
    });
</script>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Coupon</a> </div>
    <h1>Coupon</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <?php // print_r($size) ?>
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
	                        	<?php if($message==4){?>
	                        	<div class="alert alert-danger "><h3 style="text-align:center"> Image  <strong>size </strong>must be 230 x 130 !</h3></div>
	                        	<?php } ?>
              </div>
      <div class="span6 offset6">
      <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> <?php echo $_SESSION['st_id'] ?></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                echo form_open_multipart('dcount/add_coupon', $attributes);?>
                              <div class="control-group">
                                <label class="control-label">Coupon Name :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="coupon name" name="coupon_name" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Discount %:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="dis" name="dis" required>
                                </div>
                            </div>
           
                           
                              <div class="control-group">
                                <label class="control-label">Coupon Code  :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="store Type" name="coupon_code">
                                </div>
                            </div>
<!--                       		<div class="control-group">
                                <div class="controls">
                                <span style="float:right;margin-right:35px;" class="alert alert-danger" >Image Size 230 X 130 </span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Coupon Image</label>
                                <div class="controls">
                                    <input type="file" class="span11" name="coupon_image" >
                                </div>
                            </div>-->
                               <div class="control-group">
                                <label class="control-label">Expiry Date</label>
                                <div class="controls">
                                    <input type="date" class="span11" name="expiry_date" required>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea class="span11" name="coupon_desc"></textarea>
                                </div>
                            </div>
                                 <div class="control-group">
                                <label class="control-label">Deal of the day :</label>
                                <div class="controls">
                                     <select type="text" class="span11" name="deal">
                                    <option value="0">No</option>
                                      <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                                   <div class="control-group">
                                <label class="control-label">Featured :</label>
                                <div class="controls">
                                     <select type="text" class="span11" name="featured">
                                    <option value="0">No</option>
                                      <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                        
                            
                            <div class="form-actions">
                                <button type="submit"  name="add" class="btn btn-success pull-right">Add Coupon</button>
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
                               <!--     <th>Image</th>-->
                                    <th >Coupon</th>
                                    <th >Store</th>
                                    <th > colsCode</th>
                                    <th > colsDate</th>
                                    <th >Exp. Date</th>
                                    <th>description</th>
                                    <th>Deal of Day</th>
                                    <th>Featured</th>
                                    <th>Action</th>
                         
                </tr>
              </thead>
              <tbody>
                                    <?php // print_r($coupon); ?>
                                <?php foreach( $coupon as $row){ if($row['st_id']==$_SESSION['st_id']){?>
                                <tr >
                                    <!--<td > <img style="width:70px;" src="<?php echo base_url("uploads/".$row['cop_image']) ?>" </td>-->
                                    <td style="width:70px;" > <?php echo $row['cop_name'] ?> </td>
                                    <td > <?php $q=  $this->db->get_where('store',array('st_id'=>$row['st_id'])); $q=$q->row_array(); echo $q['st_name'] ; ?></td>
                                    <td > <?php echo $row['cop_code'] ?> </td>
                                    <td > <?php echo $row['cop_date']?> </td>
                                     <td > <?php echo $row['cop_exp_date']?> </td> 
                                     <td style="width:120px;"> <?php echo $row['cop_desc']?> </td> 
                                     <td style="width:50px;"> <?php if($row['cop_d_day']==1){echo '<span class="label label-success">yes</span>';}else{echo '<span class="label label-warning">No</span>';}?> </td>
                                      <td style="width:50px;"> <?php if($row['cop_featured']==1){echo '<span class="label label-success">yes</span>';}else{echo '<span class="label label-warning">No</span>';}?> </td>
                                    <td style="width:170px;"> 
                                      <a href="<?php echo base_url();?>index.php/dcount/edit_coupon/<?php echo $row['cop_id'] ?>" class="btn btn-primary ">Edit</a>
                                      <a href="<?php echo base_url();?>index.php/dcount/delete_coupon/<?php echo $row['cop_id'] ?>" class="btn btn-danger " onClick="return doconfirm();">Delete</a>
                                    
                                    </td>
                                </tr>
                                <?php }} ?>
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