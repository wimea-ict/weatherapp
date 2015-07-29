<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>AWS</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--basic styles-->

        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!--page specific plugin styles-->

        <!--fonts-->

        <!--ace styles-->

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
        <link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a href="#" class="brand">
                        <small>
                            <img src="<?= base_url() ?>images/logo.fw.png" height="100px" width="80px"/>
                            Weather information management system
                        </small>
                    </a><!--/.brand-->

                    <ul class="nav ace-nav pull-right">
          
                 

                        <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-envelope-alt"></i>
                                    5 Messages
                                </li>

                                <li>
                                    <a href="#">
                                          <span class="msg-body">
                                            <span class="msg-title">
                                                <span class="blue">Alex:</span>
                                                Ciao sociis natoque penatibus et auctor ...
                                            </span>

                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        See all messages
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <span class="user-info">
                                    <small>Welcome,</small>
                                   <?php echo $this -> session -> userdata('name'); ?>
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?php echo base_url() . "index.php/welcome/logout"; ?>">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!--/.ace-nav-->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                     <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-small btn-default dropdown-toggle">
                            Daily
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url() . "index.php/welcome/login"; ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() . "index.php/metar/everyday"; ?>">Weather</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url() . "index.php/metar/rainfall"; ?>">Rainfall</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url() . "index.php/metar/"; ?>">Metar</a>
                            </li>
                             

                        </ul>
                    </div><!--/btn-group-->
                      <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-small btn-default dropdown-toggle">
                            Reports
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu">
                             <li>
                                <a href="<?php echo base_url() . "index.php/welcome/reports/"; ?>">All</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() . "index.php/dekadal/"; ?>">Dekadal</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() . "index.php/rainfall/"; ?>">Rainfall</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url() . "index.php/monthly/"; ?>">Monthly</a>
                            </li>

                        </ul>
                    </div><!--/btn-group-->
                    
                  

                    <a href="<?php echo base_url() . "index.php/synoptic/"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-pencil">  Synoptic Register</i>
                        </button></a>

                    <a href="<?php echo base_url() . "index.php/metar"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-group"> Metar Book</i>
                        </button></a>

                    <a href="<?php echo base_url() . "index.php/Welcome/schedule"; ?>">   <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Calendar And Schedules  </i>
                        </button></a>

<!--                    <a href="<?php echo base_url() . "index.php/Welcome/form"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Forms(Register) </i>
                        </button></a>-->

                 
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-small btn-default dropdown-toggle">
                            Users
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url() . "index.php/user/"; ?>">User</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url() . "index.php/role/"; ?>">Roles</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url() . "index.php/logs/"; ?>">Logs</a>
                            </li>

                        </ul>
                    </div><!--/btn-group-->
                    


                   

                    <a href="<?php echo base_url() . "index.php/station"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Stations </i>
                        </button></a>

                    <a href="<?php echo base_url() . "index.php/element/"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Elements  </i>
                        </button></a>
                    <a href="<?php echo base_url() . "index.php/instrument"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Instrument </i>
                        </button></a>
                    <a href="<?php echo base_url() . "index.php/archive"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Archive </i>
                        </button></a>

                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>



            </div><!--#sidebar-shortcuts-->
        </div>
       

        <div class="main-container container-fluid">
            <a class="menu-toggler" id="menu-toggler" href="#">
                <span class="menu-text"></span>
            </a>



