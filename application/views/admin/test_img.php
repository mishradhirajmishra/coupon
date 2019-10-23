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

            <div class="span6 offset6">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5> Add Category</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('admin/img_test', $attributes); ?>

                        <span style="float:right;margin-right:35px;"
                              class="alert alert-danger">Image Size 480 X 300 </span>
                        <div class="control-group">
                            <label class="control-label"> Image</label>

                            <div class="controls">
                                <input type="file" class="span11" name="cat_image"></div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Add Category</button>
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
                        <?php // echo "<pre>";print_r($data) ?>
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>image1</th>
                                <th>image2</th>
                                <th>Originaml/th>

                            </tr>
                            </thead>
                            <tbody>
                            - <?php foreach ($img as $row) { ?>
                                <tr>
                                    <td> <?php echo $row['id'] ?> </td>
                                    <td><img style="width:150px"
                                             src="<?php echo base_url("uploads2/" . $row['img1']) ?>"></td>
                                    <td><img style="width:150px"
                                             src="<?php echo base_url("uploads2/" . $row['img2']) ?>"></td>
                                    <td><img style="width:150px"
                                             src="<?php echo base_url("uploads2/" . $row['org']) ?>"></td>

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
