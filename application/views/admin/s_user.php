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
        <h1><?php print_r($st_name['st_name']); ?></h1>
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
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Coupon</th>
                                <th>Coupon Code</th>
                                <th>date</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php //print_r($luser['st_id']); ?>
                            <?php foreach ($luser as $row) { ?>
                                <tr>
                                    <td class=" "> <?php echo $row['name'] ?> </td>
                                    <td class=" "> <?php $cat = $this->db->get_where('user', array('name' => $row['name']));
                                        $cat = $cat->row_array();
                                        echo $cat['mo_no']; ?> </td>
                                    <td class=" "> <?php $cat = $this->db->get_where('user', array('name' => $row['name']));
                                        $cat = $cat->row_array();
                                        echo $cat['email']; ?> </td>

                                    <td class=" "> <?php $cat = $this->db->get_where('coupon', array('cop_id' => $row['cop_id']));
                                        $cat = $cat->row_array();
                                        echo $cat['cop_name']; ?> </td>
                                    <td class=" "> <?php $cat = $this->db->get_where('coupon', array('cop_id' => $row['cop_id']));
                                        $cat = $cat->row_array();
                                        echo $cat['cop_code']; ?> </td>
                                    <td class=" "> <?php echo $row['date'] ?> </td>

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