<script>
    $(document).ready(function () {
        $("#st").addClass("active");

    });
</script>
<!--sidebar-menu-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"><a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
                    href="#" class="current">Store</a></div>
        <h1>Store</h1>
        <?PHP //print_r( $_SESSION) ?>
                  
         

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
                    <div class="alert alert-danger "><h3 style="text-align:center"> Image <strong>size </strong> must be
                            750 x 400 !</h3></div>
                <?php } ?>
                                <?php if ($message == 6) { ?>
                    <div class="alert alert-danger "><h3 style="text-align:center"> <strong>Mobile </strong>number already exist !</h3></div>
                <?php } ?>
            </div>
            <div class="span6 offset6">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Add Store</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/add_store', $attributes); ?>
                        <div class="control-group">
                            <label class="control-label">Store Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="store name" name="store_name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Category Name :</label>
                            <div class="controls">
                                <select type="text" class="span11" name="cat_name">
                                    <?php ?>
                                    <?php foreach ($category as $row) { ?>
                                        <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <!--    <div class="control-group">
                              <label class="control-label">Store Type :</label>
                              <div class="controls">-->
                        <input type="hidden" class="span11" placeholder="store Type" name="store_type">
                        <!--          </div>
                              </div>-->
                        <div class="control-group">
                            <div class="controls">
                                <span style="float:right;margin-right:35px;" class="alert alert-danger">Image Size 750 X 400 </span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Stote Image</label>
                            <div class="controls">
                                <input type="file" class="span11" name="store_image">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Search keyword</label>
                            <div class="controls">
                                <textarea class="span11" name="store_desc"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Store location :</label>
                            <div class="controls">
                                <select type="text" class="span11" name="store_loc">
                                    <?php ?>
                                    <?php foreach ($location as $row) { ?>
                                        <option value="<?php echo $row['loc_id'] ?>"><?php echo $row['locname'] ?></option>
                                    <?php } ?>

                                </select>

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Store Address</label>
                            <div class="controls">
                                <textarea class="span11" name="store_add"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Telephone number :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Telephone number" name="mo_no">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email:</label>
                            <div class="controls">
                                <input type="email" class="span11" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Store Map :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Map Iframe" name="map">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Add Store</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="span12">

                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Total Store :  <?php $x=0; foreach ($store as $row) { if($row['emp_user']== $_SESSION ['username']){    $x++;}  }echo $x;?></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!--admin-->
                        <?php if ($_SESSION['status'] == 0) { ?>
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Store</th>
                                <th>Category ID</th>
                                <th>FEATURED</th>
                                <th style="width:70px;">Email</th>
                                <th>Location ID</th>
                                <th>Telephone</th>
                                <th>Date</th>
                                <th>Status</th>
                                 <th>Added By</th>
                                <th>Action</th>
  
  
                            </tr>
                            </thead>
                            <tbody>
                            <?php // echo "<pre>"; print_r($location); ?>
                            <?php foreach ($store as $row) { ?>
                                <tr>
                                    <td class=" "><img style="width:70px;"
                                                       src="<?php echo base_url("uploads/" . $row['st_image2']) ?>"</td>
                                    <td class=" "><a
                                                href="<?php echo base_url(); ?>index.php/admin/s_user/<?php echo $row['st_id'] ?>"><?php echo $row['st_name'] ?></a>
                                    </td>
                                    <td class=" "> <?php $cat = $this->db->get_where('category', array('cat_id' => $row['cat_id']));
                                        $x = $cat->row_array();
                                        echo $x['cat_name']; ?> </td>

                                    <td class=" ">
                                        <?php if ($row['st_type'] == 0) {
                                            echo '<button class="btn btn-info">NO</button> ';
                                        } else {
                                            echo '<button class="btn btn-success">YES</button> ';
                                        } ?> </td>
                                    <td class=" "> <?php echo $row['email'] ?> </td>
                                    <td class=" "><?php $cat = $this->db->get_where('location', array('loc_id' => $row['st_location']));
                                        $cat = $cat->row_array();
                                        echo $cat['locname'] ?></td>
                                    <td class=" "> <?php echo $row['mo_no'] ?> </td>
                                    <td class=" "> <?php echo $row['st_date'] ?> </td>
                                    <td class=" ">
                                        <?php if ($row['st_status'] == 0) {
                                            echo '<button class="btn btn-info">INACTIVE</button> ';
                                        } else {
                                            echo '<button class="btn btn-success">ACTIVE</button> ';
                                        } ?>
                                    </td>
                                    <td class=" ">
                                        <?php if ($row['emp_user'] == "") {
                                            echo '<button class="btn btn-info">Admin</button> ';
                                        } else {
                                            echo '<button class="btn btn-success">'.$row['emp_user'].'</button> ';
                                        } ?>
                                    </td>
                                    <td>
                                           <?php if ($_SESSION['status'] == 0) { ?>
                                        <a href="<?php echo base_url(); ?>index.php/admin/edit_store/<?php echo $row['st_id'] ?>"
                                           class="btn btn-primary " style="width: 42px;margin-bottom: 2px;">Edit</a>
                                           <?php } ?>
                                        <a href="<?php echo base_url(); ?>index.php/admin/edit_store_gal/<?php echo $row['st_id'] ?>"
                                           class="btn btn-primary " style="width: 42px;margin-bottom: 2px;">gallery</a>
                                        <?php if ($_SESSION['status'] == 0) { ?>  <a
                                                href="<?php echo base_url(); ?>index.php/admin/delete_store/<?php echo $row['st_id'] ?>"
                                                class="btn btn-danger " onClick="return doconfirm();">Delete</a>
                                        <?php } ?>
                                    </td>
                                </tr>

                            <?php } ?>
                            </tbody>
                        </table>
                           <?php } ?>
                         <!--/admin-->
                      
                          <!--employee-->
                          <?php if ($_SESSION['status'] == 1) { ?>
                          <!---->
                          <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Store</th>
                                <th>Category ID</th>
                                <th>FEATURED</th>
                                <th style="width:70px;">Email</th>
                                <th>Location ID</th>
                                <th>Telephone</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
  
  
                            </tr>
                            </thead>
                            <tbody>
                            <?php // echo "<pre>"; print_r($location); ?>
                            <?php foreach ($store as $row) { if($row['emp_user']== $_SESSION ['username']){ ?>
                                <tr>
                                    <td class=" "><img style="width:70px;"
                                                       src="<?php echo base_url("uploads/" . $row['st_image2']) ?>"</td>
                                    <td class=" "><a
                                                href="<?php echo base_url(); ?>index.php/admin/s_user/<?php echo $row['st_id'] ?>"><?php echo $row['st_name'] ?></a>
                                    </td>
                                    <td class=" "> <?php $cat = $this->db->get_where('category', array('cat_id' => $row['cat_id']));
                                        $x = $cat->row_array();
                                        echo $x['cat_name']; ?> </td>

                                    <td class=" ">
                                        <?php if ($row['st_type'] == 0) {
                                            echo '<button class="btn btn-info">NO</button> ';
                                        } else {
                                            echo '<button class="btn btn-success">YES</button> ';
                                        } ?> </td>
                                    <td class=" "> <?php echo $row['email'] ?> </td>
                                    <td class=" "><?php $cat = $this->db->get_where('location', array('loc_id' => $row['st_location']));
                                        $cat = $cat->row_array();
                                        echo $cat['locname'] ?></td>
                                    <td class=" "> <?php echo $row['mo_no'] ?> </td>
                                    <td class=" "> <?php echo $row['st_date'] ?> </td>
                                    <td class=" ">
                                        <?php if ($row['st_status'] == 0) {
                                            echo '<button class="btn btn-info">INACTIVE</button> ';
                                        } else {
                                            echo '<button class="btn btn-success">ACTIVE</button> ';
                                        } ?>
                                    </td>
                                    <td>
                                         
                                        <a href="<?php echo base_url(); ?>index.php/admin/edit_store/<?php echo $row['st_id'] ?>"
                                           class="btn btn-primary " style="width: 42px;margin-bottom: 2px;">Edit</a>
                                          <?php if ($_SESSION['status'] == 0) { ?> 
                                        <a href="<?php echo base_url(); ?>index.php/admin/edit_store_gal/<?php echo $row['st_id'] ?>"
                                           class="btn btn-primary " style="width: 42px;margin-bottom: 2px;">gallery</a>
                                         <a
                                                href="<?php echo base_url(); ?>index.php/admin/delete_store/<?php echo $row['st_id'] ?>"
                                                class="btn btn-danger " onClick="return doconfirm();">Delete</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php }} ?>
                            </tbody>
                        </table>
                          
                          
                          
                          <!---->
                          
                             <?php } ?>
                          
                           <!--employee-->
                          
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