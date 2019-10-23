<h1>test</h1>
<?php  $q=$this->db->get_where('user_refrence',array('id'=>$this->uri->segment(3))); $user= $q->row_array();   ?>

<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Refrence User</a></div>
      
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span5">
                   <?php // print_r($user); ?>
            
            </div>
            <div class="span5 offset2">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Refrence User</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!--                                <?php if ($message == 1) { ?>
	                        	<div class="alert alert-success "> One <strong>record </strong>Updated!</div>
	                        	<?php } ?>-->
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open('admin/edit_rs_user/'.$this->uri->segment(3), $attributes); ?>

                            <div class="control-group">
                                <label class="control-label">Change Status</label>
                                <div class="controls">
                                    <select class="span11" name="status">
                                        <option value="1" <?php if ($user['status'] == 1) {
                                            echo 'selected';
                                        } ?>>Used
                                        </option>
                                        <option value="0" <?php if ($user['status'] == 0) {
                                            echo 'selected';
                                        } ?>>avilable
                                        </option>
                                    </select>
                                </div>
                            </div>
                        <input type="hidden" class="span11" value="<?php echo $this->uri->segment(3); ?>" name="id">
                        <input type="hidden" class="span11" value="<?php echo $user['refer_id']; ?>" name="refer_id">

                        <div class="form-actions">
                            <a href="http://dcountnow.com/index.php/admin/rs_user/<?php echo $user['refer_id']; ?>" class="btn btn-success " > << back</a>
                            <button  type="submit" name="add" class="btn btn-success pull-right">Shange Status</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


