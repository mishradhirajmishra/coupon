<script>
    $(document).ready(function(){
                 $("#ac").addClass("active");
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
	                        	<div class="alert alert-success "><h3 style="text-align:center"> success !</h3></div>
	                        	<?php } //print_r($s_des); ?>	
	                        	

              </div>
      <div class="span6 offset6">
      <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> </h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                echo form_open_multipart('dcount/update_ac', $attributes);?>
                              <div class="control-group">
                                <label class="control-label">User Name:</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Mobile No" name="name" value="<?php echo $s_des['mo_no'] ?>" readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password:</label>
                                <div class="controls">
                                    <input type="password" class="span11" placeholder="Password" name="pass" value="<?php echo $s_des['pass'] ?>"required>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit"  name="add" class="btn btn-success pull-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
