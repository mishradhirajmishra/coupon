<script>
    $(document).ready(function () {
        $("#loc1").addClass("active");

    });
</script>
<!--sidebar-menu-->
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
            </div>
            <div class="span6 offset6">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Add Employee</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <?php $attributes = array('class' => 'form-horizontal',);
                        echo form_open('admin/add_admin', $attributes); ?>
                        <div class="control-group">
                            <label class="control-label">Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="form-name" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="form-pass" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="form-email"
                                       required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Mobile No :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Category name" name="form-mo" required>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Add Employee</button>
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
                                <th>Name</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Date</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php //print_r($luser); ?>
                            <?php foreach ($luser as $row) {
                                if ($row['user_role'] == "admin") { ?>
                                    <tr>
                                        <!--  <td class=" ">  <video> <source src="" type="video/mp4"></video> </td>-->
                                        <td class=" "> <?php echo $row['name'] ?> </td>
                                        <td class=" "> <?php echo $row['password'] ?> </td>
                                        <td class=" "> <?php echo $row['email'] ?> </td>
                                        <td class=" "> <?php echo $row['mo_no'] ?> </td>
                                        <td class=" "> <?php echo $row['date'] ?> </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>index.php/admin/edit_admin/<?php echo $row['id'] ?>"
                                               class="btn btn-primary ">Edit</a>
                                            <a href="<?php echo base_url(); ?>index.php/admin/delete_admin/<?php echo $row['id'] ?>"
                                               class="btn btn-danger " onClick="return doconfirm();">Delete</a>
                                        </td>
                                    </tr>

                                <?php }
                            } ?>
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