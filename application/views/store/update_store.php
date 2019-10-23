
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Store</a> </div>
    <h1><?php echo $store_list['st_name'] ?><?php  // print_r($store_list) ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span5">
            <?php //print_r($store_list); ?>
            <img style="margin: 32px auto;" src="<?php  echo base_url("uploads/". $store_list['st_image2']) ?>"> 
            </div>
      <div class="span5 offset2">
<div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> <?php echo $store_list['st_name'] ?></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                echo form_open_multipart('dcount/update_store', $attributes);?>

<!--                             <div class="control-group">
                            
                                <div class="controls">
                                     <span style="float:right;margin-right:35px;" class="alert alert-danger" >Image Size 750 X 400 </span>
                                   
                                </div>
                            </div>-->
                            <div class="control-group">
                                <label class="control-label">Store Image</label>
                                <div class="controls">
                                    <input type="file" class="span11" name="store_image" >
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">Search Keyword</label>
                                <div class="controls">
                                    <textarea class="span11" name="store_desc"><?php echo $store_list['st_desc'] ?></textarea>
                                </div>
                            </div>
                  
                            <div class="control-group">
                                <label class="control-label">Store Address</label>
                                <div class="controls">
                                    <textarea class="span11" name="store_add" required><?php echo $store_list['st_address'] ?></textarea>
                                </div>
                            </div>
                            <!---->
<!--                            <div class="control-group">
                                <label class="control-label">Telephone number :</label>
                                <div class="controls">
                                    <input type="text" class="span11" placeholder="Telephone number" name="mo_no" value="<?php echo $store_list['mo_no'] ?>" required>
                                </div>
                             </div>
                             <div class="control-group">
                                <label class="control-label">Email:</label>
                                <div class="controls">
                                    <input type="email" class="span11" placeholder="Email" name="email"value="<?php echo $store_list['email'] ?>">
                                </div>
                             </div>-->

                            
                            <div class="form-actions">
                                <button type="submit"  name="add" class="btn btn-success pull-right">Update Store</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
       <div class="span12">
                <table class="table table-bordered" style="    width: 95%; margin:auto;">
                <tr><th><h4>Store Name</h4></th><td><h5><?php echo $store_list['st_name']; ?></h5>  </td></tr>
               <tr><th><h4>Search Keyword</h4></th><td><h5><?php echo $store_list['st_desc']; ?> </h5> </td></tr>
               <tr><th><h4>Store Address</h4></th><td><h5><?php echo $store_list['st_address']; ?></h5>  </td></tr>
               <tr><th><h4>Mobile No</th></h4><td><h5><?php echo $store_list['mo_no']; ?></h5>  </td></tr>
               <tr><th><h4>Joining Date</th></h4><td><h5><?php echo $store_list['st_date']; ?></h5>  </td></tr>
               <tr><th><h4>Status</h4></th><td></h3><h5><?php echo $store_list['st_status']; ?></h5>  </td></tr>
            </table>
       </div>

    </div>
  </div>
</div>