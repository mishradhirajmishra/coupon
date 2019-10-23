<script>
    $(document).ready(function () {
        $("#com").addClass("active");

    });
</script>
<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Comment</a></div>
        <h1>Comment </h1>
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


            <div class="span12">

                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Data table</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>Store</th>
                                <th>User</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            - <?php foreach ($comment as $row) { ?>
                                <?php //print_r($row) ?>

                                <tr>

                                    <td> <?php echo $row['st_id'] ?> </td>
                                    <td> <?php echo $row['user'] ?> </td>
                                    <td style="width:400px"> <?php echo $row['comment'] ?> </td>
                                    <td> <?php echo $row['date'] ?> </td>
                                    <td> <?php if ($row['status'] == 0) {
                                            echo '<button class="btn btn-info">INACTIVE</button> ';
                                        } else {
                                            echo '<button class="btn btn-success">ACTIVE</button> ';
                                        } ?> </td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/edit_comment/<?php echo $row['id'] ?>"
                                           class="btn btn-primary ">Edit</a>
                                        <a href="<?php echo base_url(); ?>index.php/admin/delete_comment/<?php echo $row['id'] ?>"
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