<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Employee</a></div>
        <h1>Update Employee <?php // print_r($cat_list) ?></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span5">

                <?php // print_r($admin_list); ?>
            </div>
            <div class="span5 offset2">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Update Employee</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!--                                <?php if ($message == 1) { ?>
	                        	<div class="alert alert-success "> One <strong>record </strong>Updated!</div>
	                        	<?php } ?>-->
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/update_admin', $attributes); ?>
                        <div class="control-group">
                            <label class="control-label">Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="form-name"
                                       value="<?php echo $admin_list['name'] ?>" name="form-name"  readonly>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="form-pass"
                                       value="<?php echo $admin_list['password'] ?>" name="form-pass"required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="form-email"
                                       value="<?php echo $admin_list['email'] ?>" name="form-email">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Mobile No :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="form-mo"
                                       value="<?php echo $admin_list['mo_no'] ?>" name="form-mo">
                            </div>
                        </div>

                        <div class="control-group">
                            <input type="hidden" class="span11" value="<?php echo $admin_list['id'] ?>" name="add_id">
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Update Employee</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>