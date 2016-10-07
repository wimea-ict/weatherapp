<div class=" container-fluid">
    <div class="page-content">
        <div class="row-fluid">

            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
            <link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
            <?php require_once(APPPATH . 'views/permission.php'); ?> 


            <div class="scroll row-fluid span12 ">
                <h4>Form No.6a(Rev.12/2012)</h4>

                <?php echo $this->session->flashdata('msg'); ?>


                <form id="edit-form" name="edit-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/save'  method="post">            


                    <div class="span12">
                        <div class="span3">
                            <label for="form-field-select-1">Station name</label>
                            <select class="span12" id="station"  name="station">
                                <option value="" />  
                                <option value="<?= $this->session->userdata('stationname'); ?>" ><?= $this->session->userdata('stationname'); ?></option>

                                <?php
                                if (allowed($see, 'manage')) {
                                    if (is_array($stations) && count($stations)) {
                                        foreach ($stations as $loop) {
                                            ?> 
                                            <option value="<?= $loop->name ?>" /><?= $loop->name ?>                      




                                            <?php
                                        }
                                    }
                                }
                                ?>

                            </select>
                        </div>
                        <div class="span2">
                            <label >Station No  </label >
                            <input class="form-control"  id="number" readonly="" name="number" ></input>   
                        </div>

                    </div>

                </form> 
                <label>Year </label>


                <div class="span12">

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
                    <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="loading.............." /></span><br>
                </div>
            </div>    
        </div>   

    </div> 
</div> 





<?php require_once(APPPATH . 'views/footer_instrument.php'); ?>


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

    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

    $("#generate").on("click", function (e) {

        var station = $("#station").val();
        var year = $("#year").val();

        $('#meta').hide();
        $('#Loading').show();
        $.post("<?php echo base_url() ?>index.php/rainfall/gets", {datenow: $("#datenow").val(), station: $("#station").val(), year: year}
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
</script>
