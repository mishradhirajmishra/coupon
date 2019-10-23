<script>
    $(document).ready(function () {
        $("#reg").addClass("active");

    });
</script>
<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current"> Registered User</a></div>
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
                                <th>videos</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php // print_r($luser); ?>
                            <?php foreach ($luser as $row) { ?>
                                <tr>
                                    <!--  <td class=" ">  <video> <source src="" type="video/mp4"></video> </td>-->
                                    <td>
                                        <video width="320" height="240"
                                               poster="<?php echo base_url("assets/download.jpg") ?>" controls="">
                                            download
                                            <source src="<?php echo base_url("uploads/" . $row['vidios']) ?>"
                                                    type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </td>
                                    <td class=" "><img style="width:70px;"
                                                       src="<?php echo base_url("uploads/" . $row['image']) ?>"</td>
                                    <td class=" "> <?php echo $row['name'] ?> </td>
                                    <td class=" "> <?php echo $row['email'] ?> </td>
                                    <td class=" "> <?php echo $row['mobile'] ?> </td>
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