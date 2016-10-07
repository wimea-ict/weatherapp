
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
<?php require_once(APPPATH . 'views/permission.php'); ?> 

<div class=" container-fluid">
    <h4> AWS weather information</h4>

    <div class="scroll span12"> 

        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="center">
                        <label>
                            <input type="checkbox" />
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>Date</th>
                    <th>Time</th>
                    <th >TZ</th>
                    <th >UT</th>
                    <th >Latitude</th>
                    <th >Longitude</th>
                    <th >TXT</th>
                    <th >PS</th>
                    <th >V MCU</th>
                    <th >Temperature(T SHT2X)</th>
                    <td >Humidity(RH SHT2X)</td>
                    <th >AH</th>
                    <th >T DEW</th>
                    <th >T HEAT IDX</th>

                    <th >SEQ</th>
                    <th >TTL</th>
                    <th >RSSI</th>
                    <th >LQI</th>
                    <th >DRP</th>
                    <th>E64</th>
                    <th >Temperature(T)</th>
                    <th >V IN</th>
                    <th >V A3</th>
                    <th>P MS5611</th>
                    <th >Soil temperature(T1)</th>
                    <th >P0 T</th>
                    <th >PS</th>
                    <th >Wind(V A2)</th>
                    <th >Soil moisture(V A1)</th>                   
                    <th >ACTION</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (is_array($aws) && count($aws)) {
                    foreach ($aws as $loop) {
                        ?>  

                        <tr>
                            <td class="center">
                                <label>
                                    <input type="checkbox" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td><?= $loop->day ?> </td>
                            <td>  <?= $loop->times ?> </td>
                            <td ><?= $loop->TZ ?></td>
                            <td ><?= $loop->UT ?></td>
                            <td ><?= $loop->GW_LAT ?></td>
                            <td ><?= $loop->GW_LON ?></td>
                            <td ><?= $loop->TXT ?></td>
                            <td ><?= $loop->PS ?></td>
                            <td ><?= $loop->V_MCU ?></td>
                            <td ><?= $loop->T_SHT2X ?></td>
                            <td ><?= $loop->RH_SHT2X ?></td>
                            <td ><?= $loop->AH ?></td>
                            <td ><?= $loop->T_DEW ?></td>
                            <td ><?= $loop->T_HEAT_IDX ?></td>
                            <td ><?= $loop->SEQ ?></td>
                            <td ><?= $loop->TTL ?></td>
                            <td ><?= $loop->RSSI ?></td>
                            <td ><?= $loop->LQI ?></td>
                            <td ><?= $loop->DRP ?></td>
                            <td ><?= $loop->E64 ?></td>
                            <td ><?= $loop->T ?></td>
                            <td ><?= $loop->V_IN ?></td>
                            <td ><?= $loop->V_A3 ?></td>
                            <td ><?= $loop->P_MS5611 ?></td>
                            <td ><?= $loop->T1 ?></td>
                            <td ><?= $loop->P0_T ?></td>
                            <td ><?= $loop->PS ?></td>
                            <td ><?= $loop->V_A2 ?></td>
                            <td ><?= $loop->V_A1 ?></td>

                            <td class="td-actions">

                                <a href="<?php echo base_url() . "index.php/aws/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                    <span class="red">
                                        <i class="icon-trash bigger-120"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>



            </tbody>
        </table>                                                    
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
		<script src="<?= base_url(); ?>js/2.0.3-jquery.min.js"></script>
              
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?= base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>

 <script src="<?= base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>

    <script src="<?php echo base_url(); ?>js/moment-with-locales.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

    <script type="text/javascript">
        $(function () {


            $('#timepicker1').timepicker({
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            })
            $('#datenow').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $('#daterain').datetimepicker({
                format: 'YYYY-MM-DD'
            });


        });
    </script>
    <script type="text/javascript">
        $('#Loading').hide();
        $('#Loading_daily').hide();
        $('#Loading_rainy').hide();

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





        $('#rainy').click(function (e) {
            e.preventDefault();
            var date = $('#daterain').val();
            var rain = $('#rain_now').val();
            var time = $('#timepicker1').val();
            var duration = $('#duration_now').val();
            var station = $('#number').val();


            //  console.log(station);
            // $('#Loading_daily').show(); 
            if (station != "") {

                $.post("<?php echo base_url() ?>index.php/metar/rain", {station: station, date: date, rain: rain, time: time, duration: duration}
                , function (response) {
                    //#emailInfo is a span which will show you message
                    $('#Loading_rainy').hide();
                    setTimeout(finishAjaxitem('Loading_rainy', escape(response)), 200);

                }); //end change

                function finishAjaxitem(id, response) {
                    $('#' + id).html(unescape(response));
                    $('#' + id).fadeIn();
                }

            } else {
                alert("Please select a station");
                $('#Loading_rainy').hide();

            }



        }); //end change


    </script>




    <script src="<?= base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>

    <script src="<?php echo base_url(); ?>js/moment-with-locales.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

    <script type="text/javascript">
        $(function () {


            $('#timepicker1').timepicker({
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            })
            $('#datenow').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $('#daterain').datetimepicker({
                format: 'YYYY-MM-DD'
            });


        });
    </script>
    <script type="text/javascript">
        $('#Loading').hide();
        $('#Loading_daily').hide();
        $('#Loading_rainy').hide();

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





        $('#rainy').click(function (e) {
            e.preventDefault();
            var date = $('#daterain').val();
            var rain = $('#rain_now').val();
            var time = $('#timepicker1').val();
            var duration = $('#duration_now').val();
            var station = $('#number').val();


            //  console.log(station);
            // $('#Loading_daily').show(); 
            if (station != "") {

                $.post("<?php echo base_url() ?>index.php/metar/rain", {station: station, date: date, rain: rain, time: time, duration: duration}
                , function (response) {
                    //#emailInfo is a span which will show you message
                    $('#Loading_rainy').hide();
                    setTimeout(finishAjaxitem('Loading_rainy', escape(response)), 200);

                }); //end change

                function finishAjaxitem(id, response) {
                    $('#' + id).html(unescape(response));
                    $('#' + id).fadeIn();
                }

            } else {
                alert("Please select a station");
                $('#Loading_rainy').hide();

            }



        }); //end change


    </script>
