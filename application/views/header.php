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

        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
        <link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
        <link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
      <?php 
    
    function allowed ($sessdata,$action){
    
        return (strpos($sessdata,$action) ==TRUE);    
   }
     $see = $this -> session -> userdata('views');
    
    ?>
        
        
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
                        <li class="">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                              
                                <h4>  <?php echo $this -> session -> userdata('role'); ?> :  <?php echo $this -> session -> userdata('username'); ?>                        
  </h4>
                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
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
        </div>
          <?php  if (allowed ($see,'data entry')) {  ?>
          <a  href="<?php echo base_url(). "index.php/welcome/start"; ?>" target="myframe"><button class="btn btn-small btn-info"> Home </button></a>
          
           <a  href="<?php echo base_url() . "index.php/metar/everyday"; ?>" target="myframe"><button class="btn btn-small btn-info">Weather </button></a>
                         
                      <a target="myframe" href="<?php echo base_url() . "index.php/metar/rainfall"; ?>"><button class="btn btn-small btn-info">Rainfall </button></a>
                         
            <a target="myframe" href="<?php echo base_url() . "index.php/metar"; ?>">  <button class="btn btn-small btn-info">
                            Metar Book
                        </button></a>
                      
                      
                   
                                <a target="myframe" href="<?php echo base_url() . "index.php/synoptic/"; ?>"><button class="btn btn-small btn-info">synoptic tabular form </button></a>
                           
                                <a target="myframe" href="<?php echo base_url() . "index.php/synoptic/tab"; ?>"><button class="btn btn-small btn-info">Synoptic view</button></a>
                         

        
        
          
            
            <?php } ?>
                     <?php  if (allowed ($see,'manage')) {  ?>
              <div class="btn-group">
                        <button data-toggle="dropdown" class=" btn btn-small btn-default dropdown-toggle">
                            Daily
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu">
                            <li >
                              <a  href="<?php echo base_url(). "index.php/welcome/start"; ?>" target="myframe"> Home</a>
                            </li>
                            <li>
                                 <a  href="<?php echo base_url() . "index.php/metar/everyday"; ?>" target="myframe">Daily weather</a>
                            </li>
                             <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/metar/rainfall"; ?>">Periodic Rainfall</a>
                            </li>
<!--                              <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/angular/"; ?>">Angular</a>
                            </li>-->

                            <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/metar/"; ?>">Metar</a>
                            </li>                            

                        </ul>
              </div>
           
              <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-small btn-default dropdown-toggle">
                            Reports
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu">
                             <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/welcome/reports/"; ?>">All</a>
                            </li>
                            <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/dekadal/"; ?>">Dekadal</a>
                            </li>
<!--                            <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/rainfall/"; ?>">Rainfall</a>
                            </li>-->
                             <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/monthly/"; ?>">Monthly</a>
                            </li>

                        </ul>    
              </div>

                     <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-small btn-default dropdown-toggle">
                           Synoptic Register
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu">
                             <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/synoptic/"; ?>">Tabular</a>
                            </li>
                            <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/synoptic/tab"; ?>">Tabbed</a>
                            </li>


                        </ul>
                    </div><!--/btn-group-->
                
                
                
                

                    <a target="myframe" href="<?php echo base_url() . "index.php/metar"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-group"> Metar Book</i>
                        </button></a>

                    <a target="myframe" href="<?php echo base_url() . "index.php/Welcome/schedule"; ?>">   <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Calendar And Schedules  </i>
                        </button></a>

<!--                    <a href="<?php echo base_url() . "index.php/Welcome/form"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Forms(Register) </i>
                        </button></a>-->

                 
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-small btn-default dropdown-toggle">
                            Stations
                            <i class="icon-angle-down icon-on-right"></i>
                        </button>

                        <ul class="dropdown-menu">
                             <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/station"; ?>">Stations</a>
                            </li>
                            <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/user/"; ?>">User</a>
                            </li>

                            <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/role/"; ?>">Roles</a>
                            </li>
                             <li>
                                <a target="myframe" href="<?php echo base_url() . "index.php/logs/"; ?>">Logs</a>
                            </li>

                        </ul>
                    </div><!--/btn-group-->
                    
                   

                    <a target="myframe" href="<?php echo base_url() . "index.php/element/"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Elements  </i>
                        </button></a>
                    <a target="myframe" href="<?php echo base_url() . "index.php/instrument"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Instrument </i>
                        </button></a>
                    <a target="myframe" href="<?php echo base_url() . "index.php/archive"; ?>">  <button class="btn btn-small btn-default">
                            <i class="icon-cogs">Archive </i>
                        </button></a>

           
   <?php } ?>
               
							

			

  


