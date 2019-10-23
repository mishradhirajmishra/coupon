<script>
    $(document).ready(function () {
        $("#st_c").addClass("active");

    });
</script>
<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Store</a></div>
        <h1>Store</h1>
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
                                <th>Image</th>
                                <th>Store</th>
                                <th>USER</th>
                                <th>PASSWORD</th>


                            </tr>
                            </thead>
                            <tbody>
                            <?php  // print_r($store); ?>
                            <?php foreach ($store as $row) { ?>
                                <tr>
                                    <td class=" "><img style="width:70px;"
                                                       src="<?php echo base_url("uploads/" . $row['st_image2']) ?>"</td>
                                    <td class=" "><a
                                                href="<?php echo base_url(); ?>index.php/admin/s_user/<?php echo $row['st_id'] ?>"><?php echo $row['st_name'] ?></a>
                                    </td>
                                   <td> <?php echo  $row['mo_no'] ?></td>
                                    <td> <?php echo  $row['pass'] ?></td>

                                 
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