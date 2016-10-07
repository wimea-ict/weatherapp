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
        <link rel="stylesheet" href="<?= base_url(); ?>/css/mine.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body class="login-layout">
        <div class="main-container container-fluid">
            <div class="main-content">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="login-container">
                            <div class="row-fluid">
                                <div class="center">
                                    <h1><span class="red">Weather Data Information System</span></h1>  

                                    <h4 class="blue">&copy; AWS</h4>
                                </div>
                            </div>

                            <div class="space-6"></div>

                            <div class="row-fluid">
                                <div class="position-relative">
                                    <div id="login-box" class="login-box visible widget-box no-border">
                                        <div class="widget-body">
                                            <img src="<?= base_url() ?>images/WIMEA LOGO.png" height="100px" width="100px"/>
                                            <img src="<?= base_url() ?>images/new-mak.png" height="100px" width="100px"/>

                                            <img src="<?= base_url() ?>images/noradlogosort_.gif" height="100px" width="100px"/>

                                            <div class="widget-main">
                                                <form id="user-form" name="user-form" enctype="multipart/form-data" class="form-horizontal"  action='<?= base_url(); ?>index.php/welcome/login' method="post">

                                                    <h4 class="header blue lighter bigger">Enter your login credentials to continue </h4>

                                                    <div class="space-6"></div>


                                                    <fieldset>
                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" class="span12" id="email" name="email" placeholder="E-mail" />
                                                                <i class="icon-user"></i>
                                                            </span>
                                                        </label>

                                                        <label>
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="password" class="span12" id="password" name="password" placeholder="Password" />
                                                                <i class="icon-lock"></i>
                                                            </span>
                                                        </label>

                                                        <div class="space"></div>

                                                        <div class="clearfix">
                                                            <?php echo $this->session->flashdata('msg'); ?> 
                                                            <button type="submit" class="width-35 pull-right btn btn-small btn-primary">
                                                                <i class="icon-key"></i>
                                                                Login
                                                            </button>
                                                        </div>

                                                        <div class="space-4"></div>
                                                    </fieldset>
                                                </form>
                                                <b>In partnership<b><br>
                                                        <img src="<?= base_url() ?>images/logo.fw.png" height="80px" width="80px"/>
                                                        <img src="<?= base_url() ?>images/bergen.gif" height="220px" width="220px"/>


                                                        </div><!--/widget-main-->

                                                        <div class="toolbar clearfix">
                                                            <div>
                                                                <a href="#" onclick="show_box('forgot-box');
                                                            return false;" class="forgot-password-link">
                                                                    <i class="icon-arrow-left"></i>
                                                                    Forgot my password
                                                                </a>
                                                            </div>


                                                            <div>

                                                                <!--                                                    <a href="#" onclick="show_box('signup-box');
                                                                                                                                                                                return false;" class="user-signup-link">
                                                                                                                    Register
                                                                                                                        <i class="icon-arrow-right"></i>
                                                                                                                    </a>-->
                                                            </div>

                                                        </div>

                                                        </div><!--/widget-body-->
                                                        </div><!--/login-box-->


                                                        <div id="forgot-box" class="forgot-box widget-box no-border">
                                                            <div class="widget-body">
                                                                <div class="widget-main">
                                                                    <h4 class="header red lighter bigger">
                                                                        <i class="icon-key"></i>
                                                                        Retrieve Password
                                                                    </h4>

                                                                    <div class="space-6"></div>
                                                                    <p>
                                                                        Enter your email to receive a new password!
                                                                    </p>

                                                                    <form />
                                                                    <fieldset>
                                                                        <label>
                                                                            <span class="block input-icon input-icon-right">
                                                                                <input type="email" class="span12" placeholder="Email" />
                                                                                <i class="icon-envelope"></i>
                                                                            </span>
                                                                        </label>

                                                                        <div class="clearfix">
                                                                            <button onclick="return false;" class="width-35 pull-right btn btn-small btn-danger">
                                                                                <i class="icon-lightbulb"></i>
                                                                                Send Me!
                                                                            </button>
                                                                        </div>
                                                                    </fieldset>
                                                                    </form>
                                                                </div><!--/widget-main-->

                                                                <div class="toolbar center">
                                                                    <a href="#" onclick="show_box('login-box');
                                                        return false;" class="back-to-login-link">
                                                                        Back to login
                                                                        <i class="icon-arrow-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div><!--/widget-body-->
                                                        </div><!--/forgot-box-->

                                                        <div id="signup-box" class="signup-box widget-box no-border">
                                                            <div class="widget-body">
                                                                <div class="widget-main">
                                                                    <h4 class="header green lighter bigger">

                                                                        User registration
                                                                    </h4>

                                                                    <div class="space-6"></div>
                                                                    <p> Enter your details to begin: </p>


                                                                    <form id="user-form" name="user-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/User/save'  method="post">            

                                                                        <fieldset>
                                                                            <label>

                                                                                <span class="block input-icon input-icon-right">
                                                                                    <input type="email" name="email" id="email" class="span12" placeholder="Email" />
                                                                                    <span id="Loading_email" name ="Loading_email"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span>

                                                                                </span>
                                                                            </label>

                                                                            <label>
                                                                                <span class="block input-icon input-icon-right">
                                                                                    <input type="text" name="name" id="name" class="span12" placeholder="name" />
                                                                                    <span id="Loading_name" name ="Loading_name"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span>

                                                                                </span>
                                                                            </label>
                                                                            <label>
                                                                                <span class="block input-icon input-icon-right">
                                                                                    <input type="text" name="contact" id="contact" class="span12" placeholder="Contact" />

                                                                                </span>
                                                                                <span class="block input-icon input-icon-right">
                                                                                    <input type="text" id="contact2" name="contact2" class="span12" placeholder="Contact 2" />
                                                                                    <input type="hidden" id="front" name="front" class="span12" value="front" />

                                                                                </span>
                                                                            </label>

                                                                            <label>
                                                                                <span class="block input-icon input-icon-right">
                                                                                    <input type="password" name="password" id="password" class="span12" placeholder="Password" />

                                                                                </span>
                                                                            </label>

                                                                            <label>
                                                                                <span class="block input-icon input-icon-right">
                                                                                    <input type="password" name="password2" id="password2" class="span12" placeholder="Repeat password" />

                                                                                </span>
                                                                            </label>
                                                                            <label>
                                                                                <span class="block input-icon input-icon-right">
                                                                                    Select the user role
                                                                                    <select id="role" name="role">
                                                                                        <?php
                                                                                        if (is_array($roles) && count($roles)) {
                                                                                            foreach ($roles as $loop) {
                                                                                                ?>                        
                                                                                                <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                                                                                <?php
                                                                                            }
                                                                                        }
                                                                                        ?>
                                                                                    </select></span>

                                                                                <span class="block input-icon input-icon-right">
                                                                                    Select the station if it applies   <select id="station" name="station">
                                                                                        <?php
                                                                                        if (is_array($stations) && count($stations)) {
                                                                                            foreach ($stations as $loop) {
                                                                                                ?>                        
                                                                                                <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                                                                                <?php
                                                                                            }
                                                                                        }
                                                                                        ?>
                                                                                    </select></span>
                                                                            </label>
                                                                            <div class="clearfix">
                                                                                <button type="reset" class="width-10 pull-right btn btn-small btn-success" >
                                                                                    <i class="icon-refresh"></i>  Reset </button>

                                                                                <button class="width-10 btn btn-small"  >Submit  </button>
                                                                            </div>
                                                                        </fieldset>
                                                                    </form>
                                                                </div>

                                                                <div class="toolbar center">
                                                                    <a href="#" onclick="show_box('login-box');
                                                        return false;" class="back-to-login-link">
                                                                        <i class="icon-arrow-left"></i>
                                                                        Back to login
                                                                    </a>
                                                                </div>

                                                            </div><!--/widget-body-->

                                                        </div><!--/signup-box-->

                                                        </div><!--/position-relative-->

                                                        </div>

                                                        </div>
                                                        </div><!--/.span-->
                                                        </div><!--/.row-fluid-->
                                                        </div>

                                                        </div><!--/.main-container-->

                                                        <!--basic scripts-->

                                                        <!--[if !IE]>-->

                                                        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

                                                        <!--<![endif]-->

                                                        <!--[if IE]>
                                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                                                <![endif]-->

                                                        <!--[if !IE]>-->

                                                        <script type="text/javascript">
                                                                                                    window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
                                                        </script>

                                                        <!--<![endif]-->

                                                        <!--[if IE]>
                                                <script type="text/javascript">
                                                window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
                                                </script>
                                                <![endif]-->

                                                        <script type="text/javascript">
                                                            if ("ontouchend" in document)
                                                                document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
                                                        </script>
                                                        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

                                                        <!--page specific plugin scripts-->

                                                        <!--ace scripts-->

                                                        <script src="<?= base_url(); ?>assets/js/ace-elements.min.js"></script>
                                                        <script src="<?= base_url(); ?>assets/js/ace.min.js"></script>

                                                        <!--inline scripts related to this page-->

                                                        <script type="text/javascript">
                                                            function show_box(id) {
                                                                $('.widget-box.visible').removeClass('visible');
                                                                $('#' + id).addClass('visible');
                                                            }
                                                        </script>
                                                        </body>
                                                        </html>
                                                        <script type="text/javascript">
                                                            $('#Loading_name').hide();
                                                            $("#name").blur(function (e) {

                                                                var name = $("#name").val();

                                                                if (name != null) {           // show loader 

                                                                    $('#Loading_name').show();
                                                                    $.post("<?php echo base_url() ?>index.php/User/check", {
                                                                        name: name
                                                                    }, function (response) {
                                                                        //#emailInfo is a span which will show you message
                                                                        $('#Loading_name').hide();
                                                                        setTimeout(finishAjax('Loading_name', escape(response)), 400);
                                                                    });
                                                                }
                                                                function finishAjax(id, response) {
                                                                    $('#' + id).html(unescape(response));
                                                                    $('#' + id).fadeIn();
                                                                }
                                                            }

                                                            );
                                                            $('#Loading_email').hide();
                                                            $("#email").blur(function (e) {

                                                                var email = $("#email").val();

                                                                if (email != null) {           // show loader 

                                                                    $('#Loading_email').show();
                                                                    $.post("<?php echo base_url() ?>index.php/User/check_email", {
                                                                        email: email
                                                                    }, function (response) {
                                                                        //#emailInfo is a span which will show you message
                                                                        $('#Loading_email').hide();
                                                                        setTimeout(finishAjax('Loading_email', escape(response)), 400);
                                                                    });
                                                                }
                                                                function finishAjax(id, response) {
                                                                    $('#' + id).html(unescape(response));
                                                                    $('#' + id).fadeIn();
                                                                }
                                                            }

                                                            );
                                                        </script>