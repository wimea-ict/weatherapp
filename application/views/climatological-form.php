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
                <i class="icon-edit icon-2x green"></i>
                MONTHLY CLIMATOLOGICAL OBSERVATIONS 

            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

                <div class="form-group">


                    <span class="span3 ">Station : <select class="span6" id="station" name="station">
                            <option value="<?= $user->station ?>" /><?= $user->station ?>
                            <?php
                            if (is_array($stations) && count($stations)) {
                                foreach ($stations as $loop) {
                                    ?>                        
                                    <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                <?php }
                            } ?>
                        </select></span>

                 <input class="form-control"  id="number" readonly="" name="number" ></input>   
                 
                   
                </div>
                <div class="scroll well-large"> 
                    <label>Month/Year </label>

<?php $months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"); ?>

                    <div class="span12">

                        <select  name="month" id="month" >
                            <option value=""></option>
                            <?php
                            for ($m = 1; $m <= 12; $m++)
                                echo "<option value='$m'>" . $months[$m] . "</option>"
                                ?>
                        </select>
                        <select name="year" id="year" >
                            <option value=""></option>
                            <?php
                            for ($y = date('Y'); $y >= 1902; $y--)
                                echo "<option value='$y'>$y</option>"
                                ?>
                        </select>
                        <button type="button" class="btn btn-info btn-small" id="generate" >generate</button>
                        <input type="button" class="btn btn-info btn-small" onclick="ExportToExcel('datatable')" value="Export to Excel">
                   <input type="button" onclick="printDiv('printableArea')" value="print" />
                    </div>
                     <div id="printableArea">
                    <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span><br>
                </div>
                     </div>
                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->

        </div><!--/.main-container-->
    </div>
<?php require_once(APPPATH . 'views/footer_report.php'); ?>

    <script type="text/javascript">
        $('#Loading').hide();
        $('#Loading_daily').hide();

        $('#station').change(function () {
            var station = $('#station').val();
            if (station != "") {

                $.post("<?= base_url() ?>/index.php/station/get", {station: $("#station").val()}
                , function (station) {
                    var json = JSON.parse(station);
                    $('#number').empty();
                    $('#code').empty();
                    //   console.log(json[0].number);
                    $("#number").val(json[0].number);
                    $("#code").val(json[0].code);

                });


            } else {

                $('#number').empty();
                $('#code').empty();
            }
        }); //end change



        $("#generate").on("click", function (e) {

            var station = $("#station").val();
            var month = $("#month").val();
            var year = $("#year").val();

            $('#meta').hide();
            $('#Loading').show();
            $.post("<?php echo base_url() ?>index.php/Climatological/gets", {datenow: $("#datenow").val(), station: $("#station").val(), month: month, year: year}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading').hide();
                setTimeout(finishAjaxitem('Loading', escape(response)), 200);

            }); //end change

            function finishAjaxitem(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }
        });


    </script>
    <script type="text/javascript">
        function ExportToExcel(datatable) {
            var htmltable = document.getElementById('metar');
            var html = htmltable.outerHTML;
            window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
        }
         function printDiv(divName) {
                                var printContents = document.getElementById(divName).innerHTML;
                                var originalContents = document.body.innerHTML;

                                document.body.innerHTML = printContents;

                                window.print();

                                document.body.innerHTML = originalContents;
                            }
    </script>