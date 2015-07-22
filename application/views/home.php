<?php require_once(APPPATH . 'views/header.php'); ?>


<div class="row-fluid">
     <div class="page-content"> 
    <div class="span12">
        
        <h1>
             <?php echo $this -> session -> userdata('station'); ?>
            Weather Station
            <small>
                <i class="icon-double-angle-right"></i>
                overview &amp; stats
            </small>
        </h1>
    </div><!--/.page-header-->

    <div class="row-fluid">
        <div class="span12">
            <!--PAGE CONTENT BEGINS-->
   

            <div class="space-6"></div>

            <div class="row-fluid">
                <div class="span12 infobox-container">
                    <div class="infobox infobox-green  ">
                        <div class="infobox-icon">
                            <i class="icon-comments"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">32</span>
                            <div class="infobox-content">comments + 2 reviews</div>
                        </div>
                        <div class="stat stat-success">8%</div>
                    </div>

                  

                 

                    <div class="infobox infobox-red  ">
                        <div class="infobox-icon">
                            <i class="icon-beaker"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">7</span>
                            <div class="infobox-content">Instruments Installed</div>
                        </div>
                    </div>

                    <div class="infobox infobox-orange2  ">
                        <div class="infobox-chart">
                            <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">6,251</span>
                            <div class="infobox-content">Data submitted</div>
                        </div>

                        <div class="badge badge-success">
                            7.2%
                            <i class="icon-arrow-up"></i>
                        </div>
                    </div>

                    <div class="infobox infobox-blue2  ">
                        <div class="infobox-progress">
                            <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                <span class="percent">42</span>
                                %
                            </div>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-text">Reports Generated</span>

                            <div class="infobox-content">
                                <span class="bigger-110">~</span>
                               25/78 remaining
                            </div>
                        </div>
                    </div>

                    <div class="space-6"></div>

                </div>

                <div class="vspace"></div>

      
            </div><!--/row-->

        
            <div class="hr hr32 hr-dotted"></div>
  

            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
<div

</div><!--/#ace-settings-container-->
</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_calendar.php'); ?>