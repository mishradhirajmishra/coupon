
<!--sidebar-menu-->


<!--close-left-menu-stats-sidebar-->

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Add Site</a>  </div>
        <h1>Category</h1>
    </div>
    <div class="container-fluid">

        <hr>
        <div class="row-fluid">

            <!--*****************-->
            <div class="span6 offset6">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Add Category</h5>
                    </div>
                    <div class="widget-content nopadding">
                                                                <?php $attributes = array('class' => 'form-horizontal');
                                                                echo form_open_multipart('admin/update_category', $attributes);?>

                                                                    <label class="control-label">Category Name :</label>
                                                                    <div class="controls">
                                                                        <input type="text" class="span11" value=" <?php echo $row ['cat_name'] ?>" name="cat_name">
                                                                    </div>


                                                                    <label class="control-label">Category Type :</label>
                                                                    <div class="controls">
                                                                        <input type="text" class="span11" placeholder="Last name" name="cat_type" value=" <?php echo $row ['cat_name'] ?>" >
                                                                    </div>


                                                                    <label class="control-label">Category Image</label>
                                                                    <div class="controls">
                                                                        <input type="file" class="span11" name="cat_image">
                                                                    </div>



                                                                    <label class="control-label">Description</label>
                                                                    <div class="controls">
                                                                        <textarea class="span11" name="cat_desc"><?php echo $row ['cat_name'] ?></textarea>
                                                                    </div>


                                                                    <button type="submit"  name="add" class="btn btn-success pull-right">Add Category</button>

                                                                </form>
                                                            </div>
                </div>


            </div>
              </div>

        </div>

    </div></div>
