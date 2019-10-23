<script>
    $(document).ready(function () {
        $("#creg").addClass("active");

    });
</script>
<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current"> Registered User</a></div>
       
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
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
                                <th>Email</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                  <?php foreach( $ref as $row){?>
        <tr>
            <!--<td><?php //echo $st['st_name']; ?></td>-->
            <td><?php echo $row['user_name']; ?></td>
             <td><?php echo $row['email']; ?></td>
             <td><?php echo $row['date']; ?></td>
             <td><span class="badge"><?php if($row['status']==0){echo "avilable"; }else{echo "used";} ?><span></td>
             <td><a href="<?php echo base_url(); ?>index.php/admin/edit_rs_user/<?php echo $row['id'] ?>" class="btn btn-primary " style="width: 42px;margin-bottom: 2px;">Edit</a></td>
            <!--  <td><?php //echo $row['type']; ?></td>-->

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