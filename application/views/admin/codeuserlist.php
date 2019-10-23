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
        <h1>Registered User</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <a href="<?php echo base_url(); ?>index.php/admin/code_reg_user_excel/" class="btn btn-info" role="button">Export As Excel</a>
        
        <?php //print_r($luser); ?>

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
                                <th>Password</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Location</th>
                                 <th>Date</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php //print_r($luser); ?>
                            <?php foreach ($luser as $row) {
                                if ($row['user_role'] == "user") { ?>
                                    <tr>
                                        <!--  <td class=" ">  <video> <source src="" type="video/mp4"></video> </td>-->
                                        <td class=" "><a href="<?php echo base_url(); ?>index.php/admin/rs_user/<?php echo $row['id'] ?>"> <?php echo $row['name'] ?></a> </td>
                                        <td class=" "> <?php echo $row['password'] ?> </td>
                                        <td class=" "> <?php echo $row['email'] ?> </td>
                                        <td class=" "> <?php echo $row['mo_no'] ?> </td>
                                          <td class=" "> <?php echo $row['u_location'] ?> </td>
                                        <td class=" "> <?php echo $row['date'] ?> </td>
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