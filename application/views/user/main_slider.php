<script>
    $(document).ready(function () {
        $("#main_sl").addClass("active");

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
                    <div class="alert alert-danger "><h3 style="text-align:center"> Image <strong>size </strong>is not appropriate !</h3></div>
                <?php } ?>
            </div>
            <div class="span6 offset6">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Add Main Slider</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('dcount/add_main_slider', $attributes); ?>
                        <span style="float:right;margin-right:35px;"
                              class="alert alert-danger">Image Size 1600 X 600 </span>
                        <div class="control-group">
                            <label class="control-label">Desktop Image</label>

                            <div class="controls">
                                <input type="file" class="span11" name="img_dsk">

                            </div>
                        </div>
                        <span style="float:right;margin-right:35px;"
                              class="alert alert-danger">Image Size 600 X 600 </span>
                        <div class="control-group">
                            <label class="control-label">Mobile Image</label>

                            <div class="controls">
                                <input type="file" class="span11" name="img_mob">

                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Store Url</label>
                            <div class="controls">
                                  <input type="url" class="span11" name="url">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Add Slider</button>
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
                                <th>Desktop Image</th>
                                <th>Mobile Image</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            - <?php foreach ($slider as $row) { ?>
                                <tr>
                                    <td><img style="width:150px" src="<?php echo base_url("uploads/" . $row['img_dsk']) ?>"></td>
                                    <td><img style="width:150px" src="<?php echo base_url("uploads/" . $row['img_mob']) ?>"></td>
                                    <td> <?php echo $row['url'] ?> </td>
                                     <td>
                                        <a href="<?php echo base_url(); ?>index.php/dcount/edit_main_slider/<?php echo $row['id'] ?>"
                                           class="btn btn-primary ">Edit</a>
                                        <a   href="<?php echo base_url(); ?>index.php/dcount/delete_main_slider/<?php echo $row['id'] ?>"
                                                class="btn btn-danger " onClick="return doconfirm();">Delete</a>
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