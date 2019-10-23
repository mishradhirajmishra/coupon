<script>
    $(document).ready(function () {
        $("#cat").addClass("active");

    });
</script>
<style>
    #hid {
        display: none;
    }

    #show:hover {
        display: block;
    }
</style>
<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Category</a></div>
        <h1>Category </h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span6 offset3">
                <?php if ($message == 1) { ?>
                    <div class="alert alert-success "><h3 style="text-align:center"> One <strong>record </strong>inserted
                            !</h3></div>
                <?php } ?>
                <?php if ($message == 2) { ?>
                    <div class="alert alert-success "><h3 style="text-align:center">One <strong>record </strong>updated
                            !</h3></div>
                <?php } ?>
                <?php if ($message == 3) { ?>
                    <div class="alert alert-danger "><h3 style="text-align:center"> One <strong>record </strong>deleted
                            !</h3></div>
                <?php } ?>
                <?php if ($message == 4) { ?>
                    <div class="alert alert-danger "><h3 style="text-align:center"> Image <strong>size </strong>must be
                            480 x 300 !</h3></div>
                <?php } ?>
            </div>
            <div class="span6 offset6">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Add Category</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/add_category', $attributes); ?>
                        <div class="control-group">
                            <label class="control-label">Category Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="cat_name" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Category Type :</label>
                            <div class="controls">
                                <input type="text" class="span11" id"show" placeholder="Category " name="cat_type"
                                required >
                            </div>
                        </div>
                        <span style="float:right;margin-right:35px;"
                              class="alert alert-danger">Image Size 480 X 300 </span>
                        <div class="control-group">
                            <label class="control-label">Category Image</label>

                            <div class="controls">
                                <input type="file" class="span11" name="cat_image">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <textarea class="span11" name="cat_desc"></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Add Category</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="span12">

                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Data table</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Featured</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            - <?php foreach ($category as $row) { ?>
                                <tr>
                                    <td><img style="width:150px"
                                             src="<?php echo base_url("uploads/" . $row['cat_image']) ?>"></td>
                                    <td> <?php echo $row['cat_name'] ?> </td>
                                    <td> <?php echo $row['cat_type'] ?> </td>
                                    <td> <?php echo $row['cat_date'] ?> </td>
                                    <td> <?php if ($row['cat_status'] == 0) {
                                            echo '<button class="btn btn-info">No</button> ';
                                        } else {
                                            echo '<button class="btn btn-success">Yes</button> ';
                                        } ?> </td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/edit_category/<?php echo $row['cat_id'] ?>"
                                           class="btn btn-primary ">Edit</a>
                                        <?php if ($_SESSION['status'] == 0) { ?>  <a
                                                href="<?php echo base_url(); ?>index.php/admin/delete_category/<?php echo $row['cat_id'] ?>"
                                                class="btn btn-danger " onClick="return doconfirm();">Delete</a>
                                        <?php } ?>
                                        <a href="<?php echo base_url(); ?>index.php/admin/edit_slider/<?php echo $row['cat_id'] ?>"
                                           class="btn btn-primary ">Slider</a>
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
    function doconfirm() {
        job = confirm("Are you sure to delete permanently?");
        if (job != true) {
            return false;
        }
    }
</script>