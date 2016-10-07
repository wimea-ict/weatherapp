<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

<div class="main-container container-fluid">

    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                <i class="icon-cloud icon-2x blue"></i>
                Rainfall
                <small>
                    <i class="icon-double-angle-right"></i>

                </small>
            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

                <div class="row-fluid">
                    <div class="span9">
                        <div class="space"></div>

                        <div id="calendar"></div>
                    </div>

                    <div class="span3">
                        <div class="widget-box transparent">
                            <div class="widget-header">
                                <h4>Select by:</h4>
                            </div>

                            <div class="widget-main">
                                <div class="form-group">
                                    <label>Region</label>


                                    <select id="form-field-select-1">
                                        <option value="Masaka" />East
                                        <option value="Mulago" />Central


                                    </select>
                                    <label>District</label>


                                    <select id="form-field-select-1">
                                        <option value="Masaka" />Tororo
                                        <option value="Mulago" />Masaka


                                    </select>

                                    <label>Station</label>


                                    <select id="form-field-select-1">

                                        <?php
                                        if (is_array($stations) && count($stations)) {
                                            foreach ($stations as $loop) {
                                                ?>                        
                                                <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                            <?php }
                                        } ?>


                                    </select>
                                    <label for="form-field-select-1">Station No.</label>
                                    <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>
                                    <label> Month/Year </label>
                                    <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--PAGE CONTENT ENDS-->
            </div><!--/.span-->
        </div><!--/.row-fluid-->
    </div><!--/.page-content-->



</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_report.php'); ?>


