<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Coupon</a></div>
        <h1>Update Coupon <?php // print_r($coupon_list) ?></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span5">

                <!--<img style="margin: 220px;" src="<?php echo base_url("uploads/" . $coupon_list['cop_image']) ?>"> -->
            </div>
            <div class="span5 offset2">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Update Coupon</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/update_coupon', $attributes); ?>
                        <div class="control-group">
                            <label class="control-label">Coupon Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="coupon_name"
                                       value="<?php echo $coupon_list['cop_name'] ?>" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Discount %:</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="discount" name="dis"
                                       value="<?php echo $coupon_list['dis'] ?>" required>
                            </div>
                        </div>
                        <?php //echo $coupon_list['st_id'] ?>
                        <div class="control-group">
                            <label class="control-label">Store Name:</label>
                            <div class="controls">
                                <select type="text" class="span11" name="store_name" required>
                                    <?php ?>
                                    <?php foreach ($store as $row) { ?>
                                        <option value="<?php echo $row['st_id'] ?> " <?php if ($coupon_list['st_id'] == $row['st_id']) {
                                            echo 'selected';
                                        } ?> ><?php echo $row['st_name'] ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Coupon Code :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="store Type" name="coupon_code"
                                       value="<?php echo $coupon_list['cop_code'] ?>">
                            </div>
                        </div>
                        <div class="control-group" style="display:none">
                            <div class="controls">
                                <span style="float:right;margin-right:35px;" class="alert alert-danger">Image Size 230 X 130 </span>
                            </div>
                        </div>
                        <div class="control-group" style="display:none">
                            <label class="control-label">Coupon Image</label>
                            <div class="controls">
                                <input type="file" class="span11" name="coupon_image">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Expiry Date</label>
                            <div class="controls">
                                <input type="date" class="span11" name="expiry_date" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <textarea class="span11"
                                          name="coupon_desc"><?php echo $coupon_list['cop_desc'] ?></textarea>
                            </div>
                        </div>
                        <?php echo $coupon_list['cop_d_day'] ?>
                        <div class="control-group">
                            <label class="control-label">Deal of the day :</label>
                            <div class="controls">
                                <select type="text" class="span11" name="deal">
                                    <option value="0" <?php if ($coupon_list['cop_d_day'] == 0) {
                                        echo 'selected';
                                    } ?>>No
                                    </option>
                                    <option value="1" <?php if ($coupon_list['cop_d_day'] == 1) {
                                        echo 'selected';
                                    } ?>>Yes
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Featured :</label>
                            <div class="controls">
                                <select type="text" class="span11" name="featured">
                                    <option value="0" <?php if ($coupon_list['cop_featured'] == 0) {
                                        echo 'selected';
                                    } ?>>No
                                    </option>
                                    <option value="1" <?php if ($coupon_list['cop_featured'] == 1) {
                                        echo 'selected';
                                    } ?>>Yes
                                    </option>
                                </select>
                            </div>
                        </div>
                        <? // print_r($coupon_list); ?>
                        <?php if ($_SESSION['status'] == 0) { ?>
                            <div class="control-group">
                            <label class="control-label">Status :</label>
                            <div class="controls">
                                <select type="text" class="span11" name="cop_status">
                                    <option value="0" <?php if ($coupon_list['cop_ststus'] == 0) {
                                        echo 'selected';
                                    } ?>>In Active
                                    </option>
                                    <option value="1" <?php if ($coupon_list['cop_ststus'] == 1) {
                                        echo 'selected';
                                    } ?>>Active
                                    </option>
                                </select>
                            </div>
                            </div><?php } ?>
                        <input type="hidden" class="span11" value="<?php echo $coupon_list['cop_id'] ?>" name="cop_id">

                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Update Coupon</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>