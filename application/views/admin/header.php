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
    <style>
        .table-bordered th, .table-bordered td {
            vertical-align: middle;
        }
    </style>
    <style>
        #tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        #tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        #tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>
</head>
<body>

<!--Header-part-->
<div id="header">
    <img style="height: 75px; margin-left: 30px;" src="<?php echo base_url("assets/img/Dcount.png") ?>">
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
                                                      data-target="#profile-messages" class="dropdown-toggle"><i
                        class="icon icon-user"></i> <span
                        class="text">Welcome <?php echo $_SESSION ['username']; ?></span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
            </ul>
        </li>

        <li class=""><a title="" href="<?php echo base_url(); ?>index.php/login/logout"><i
                        class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>

<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 
