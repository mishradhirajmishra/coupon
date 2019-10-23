<!DOCTYPE html>
<html lang="en">

<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css"/>
    <link href="<?php echo base_url(); ?> assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-login.css"/>


</head>
<body>
<div id="loginbox">
    <?php echo form_open('login/getlogin') ?>
    <div class="control-group normal_text"><h3><img style="height: 75px;margin-left: 10px;"
                                                    src="http://dcountnow.com/assets/img/Dcount.png" alt="logo"></h3>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="user_name"
                                                                                   placeholder="Username"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password"
                                                                                  placeholder="Password"/>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <!--  <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>-->
        <span style="    margin-right: 18px;" class="pull-right"><input type="submit" value="Login"
                                                                        class="btn btn-success"/></span>
    </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a
            password.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text"
                                                                                      placeholder="E-mail address"/>
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success"
                                       id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
        </div>
    </form>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/matrix.login.js"></script>
</body>

</html>
