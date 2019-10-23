<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dcount Now Admin</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uniform.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css"/>
    <!--<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />-->
    <!-- fonts awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/user/font/css/font-awesome.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<!--    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>-->
<style>.form-horizontal .controls {

    margin-right: 80px;

}

</style>
</head>
<body style="background-color: #002b5e!important;">

    <div class="container-fluid">
   <br>
       <h1 style="text-align:center"> <img style="    margin-top: 30px; border-bottom: 1px solid;
    border-top: 1px solid; height: 75px; margin-left: 30px;" src="<?php echo base_url("assets/img/Dcount.png") ?>"></h1>
    
        <div class="row-fluid">
            
            <div class="span6 offset3">
                <br>
                <div class="widget-box">
                    <div class="widget-content nopadding">
                               <h2 style="text-align:center;    color: #002b5e;"> Store login </h2>
                               <br>

                        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                        echo form_open_multipart('dcount/getslogin', $attributes); ?>
                        <div class="control-group">
                            <label class="control-label">Store :</label>
                            <div class="controls">
                                  <?php       $st=  $this->db->get('store');   $st= $st->result_array();?>
                                 <select  name="store" class="span11">
                                <?php foreach ( $st as $st1 ){?>
                                <option value="<?php echo $st1['st_id']; ?>"><?php echo $st1['st_name']; ?></option>
                                <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Mobile No :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Mobile No"name="sname" >
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Password :</label>
                            <div class="controls">
                                <input type="password" class="span11" placeholder="password" name="password">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" name="add" class="btn btn-success pull-right">Login</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
