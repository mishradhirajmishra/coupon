<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Store</a></div>
        <h1>Update Store <?php // print_r($store_list) ?></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span5">

                <img style="margin: 110px;" src="<?php echo base_url("uploads/" . $store_list['st_image2']) ?>">
            </div>
            <div class="span5 offset2">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Update Store</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/update_store', $attributes); ?>
                        <div class="control-group">
                            <label class="control-label">Store Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="store name" name="store_name"
                                       value="<?php echo $store_list['st_name'] ?>" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Category Name :</label>
                            <div class="controls">
                                <select type="text" class="span11" name="cat_name" required>
                                    <?php ?>
                                    <?php foreach ($category as $row) { ?>
                                        <option value="<?php echo $row['cat_id'] ?>"<?php if ($store_list['cat_id'] == $row['cat_id']) {
                                            echo 'selected';
                                        } ?>><?php echo $row['cat_name'] ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Featured :</label>
                            <div class="controls">

                                <select class="span11" name="store_type" required>
                                    <option value="0"<?php if ($store_list['st_type'] == 0) {
                                        echo 'selected';
                                    } ?>>NO
                                    </option>
                                    <option value="1"<?php if ($store_list['st_type'] == 1) {
                                        echo 'selected';
                                    } ?>>Yes
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <span style="float:right;margin-right:35px;" class="alert alert-danger">Image Size 750 X 400 </span>

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Store Image</label>
                            <div class="controls">
                                <input type="file" class="span11" name="store_image">
                            </div>
                        </div>
                        <!--                            <div class="control-group">
                                                       <div class="controls">
                                                             <span style="float:right;margin-right:35px;" class="alert alert-danger" >Image Size 750 X 400 </span>

                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Stote Image</label>
                                                        <div class="controls">
                                                            <input type="file" class="span11" name="store_image2" >
                                                        </div>
                                                    </div>-->

                        <div class="control-group">
                            <label class="control-label">Search keyword</label>
                            <div class="controls">
                                <textarea class="span11"
                                          name="store_desc"><?php echo $store_list['st_desc'] ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Store location :</label>
                            <div class="controls">
                                <select type="text" class="span11" name="store_loc" required>
                                    <?php ?>
                                    <?php foreach ($location as $row) { ?>
                                        <option value="<?php echo $row['loc_id'] ?>" <?php if ($store_list['st_location'] == $row['loc_id']) {
                                            echo 'selected';
                                        } ?>><?php echo $row['locname'] ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Store Address</label>
                            <div class="controls">
                                <textarea class="span11" name="store_add"
                                          required><?php echo $store_list['st_address'] ?></textarea>
                            </div>
                        </div>
                        <!---->
                        <div class="control-group">
                            <label class="control-label">Telephone number :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Telephone number" name="mo_no"
                                       value="<?php echo $store_list['mo_no'] ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email:</label>
                            <div class="controls">
                                <input type="email" class="span11" placeholder="Email" name="email"
                                       value="<?php echo $store_list['email'] ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Store Map :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Map Iframe" name="map">
                            </div>
                        </div>
                        <!---->
                        <?php if ($_SESSION['status'] == 0) { ?>
                            <div class="control-group">
                                <label class="control-label">Change Status</label>
                                <div class="controls">
                                    <select class="span11" name="ch_status">
                                        <option value="1" <?php if ($store_list['st_status'] == 1) {
                                            echo 'selected';
                                        } ?>>Active
                                        </option>
                                        <option value="0" <?php if ($store_list['st_status'] == 0) {
                                            echo 'selected';
                                        } ?>>In Active
                                        </option>
                                    </select>
                                </div>
                            </div>
                        <?php } ?>
                        <input type="hidden" class="span11" value="<?php echo $store_list['st_id'] ?>" name="st_id">

                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Update Store</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>