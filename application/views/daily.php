

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
<link href="<?= base_url(); ?>css/app.css" rel="stylesheet" />

<div class=" container-fluid">
    <div class="page-content">
        <div class="row-fluid"  data-ng-app="dailyApp">


            <div class="page-header position-relative">

                <h4>Daily weather records </h4>
            </div><!--/.page-header-->


            <div class="span12">   
                <form id="edit-form"  name="edit-form"  enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/save'  method="post">            

                    <div class=" span12 padding-5">

                        <label for="form-field-select-1">Station name</label>
                        <select id="station" class="span6 form-control" name="station">
                            <option value="" />
                            <?php
                            if (is_array($stations) && count($stations)) {
                                foreach ($stations as $loop) {
                                    ?>                        
                                    <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                <?php }
                            }
                            ?>
                        </select>
                        <div class="form-group">
                            <label for="form-field-select-1">Station number</label>
                            <input class="span6"  id="number" readonly="" name="number" />

                        </div>
                        <div class="row-fluid input-prepend">
                            <label>Select the date</label>
                            <span class="add-on">
                                <i class="icon-calendar"></i>
                            </span> 
                            <input class="span5 date-picker" id="datenow" value="<?php echo date('Y-m-d'); ?>"  name="datenow" type="text" data-date-format="YYYY-MM-DD" />   
                        </div>
                        <h4>Temperature</h4>
                        <label>Max temperature:</label>
                        <input class="span6" type="text" id="maxtemp" name="maxtemp"  />
                        <label>Min temperature:</label>
                        <input  class="span6"type="text" id="mintemp" name="mintemp"  />
                        <label> Sunshine(Hrs):</label>
                        <input class="span6" type="text" id="sunshine" name="sunshine"  />
                        <label> GPM:</label><input class="span6" type="text" id="gpm" name="gpm"  />

                        <h4>Evap.pans</h4>
                        <label> Type:</label><input class="span6" type="text" id="evaptype1" name="evaptype1"  />
                        <label> EVAP(mm):</label><input class="span6" type="text" id="evap1" name="evap1"  />
                        <label> Type:</label><input class="span6" type="text" id="evaptype2" name="evaptype2"  />
                        <label> EVAP(mm):</label><input class="span6" type="text" id="evap2" name="evap2"  />
                        <h4>Rainfall</h4>
                        <label>  Rainfall(mm): </label>
                            <input class="span6" type="text" id="actualrain" name="actualrain" />
                            <label>  Duration(Hrs):</label>
                            <input class="span6" type="text" id="duration" name="duration" />
                            <h4>Radiation</h4>
                            <label> Type:</label>
                            <input class="span6" type="text" id="type" name="type"/>
                            <label> Radiation:</label>
                            <input class="span6" type="text" id="radiation" name="radiation" />
                            <h4>Anemometer reading </h4>
                            <label>Wind run(KM):</label>
                            <input class="span6" type="text" id="anemometer" name="anemometer" />
                            <label> Height:</label>
                            <input class="span6" type="text" id="height" name="height"/>

                            <div class="span12 well">  
                                <label class="control-label">Did  we have </label>
                                <input name="rain" id="rain" value="true" type="checkbox"/>
                                <span class="lbl"> Rain</span>
                                <input name="thunder" id="thunder" value="true"  type="checkbox"/>
                                <span class="lbl">Thunder storm (Ts)</span>
                                <input name="fog" id="fog"  value="true" class="ace-checkbox-2" type="checkbox" />
                                <span class="lbl">Fog(Fg)</span>
                                <input name="haze" id="haze"  value="true" class="ace-checkbox-2" type="checkbox" />
                                <span class="lbl">Haze(Hz)</span>
                                <input name="storm" id="storm"  value="true" class="ace-checkbox-2" type="checkbox" />
                                <span class="lbl">Hail Storm(HS)</span>
                                <input name="quake" id="quake"  value="true" class="ace-checkbox-2" type="checkbox" />
                                <span class="lbl">Earth Quake(EQ)</span>
                            </div>
                            <button  onclick="" name="daily" id="daily" class="span3 btn btn-info " > Submit  </button>

                            </form>

                            <span id="Loading_daily"  name ="Loading_daily"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="loading" /></span><br>

                            <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="loading" /></span><br>
   </div>
                            </div>
                            </div>
                            </div>
                            <script src="<?php echo base_url(); ?>js/jQuery-2.1.4.min.js" type="text/javascript"></script>


                            <script src="<?php echo base_url(); ?>js/moment-with-locales.js"></script>
                            <script src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

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



                                $('#daily').click(function (e) {
                                    e.preventDefault();
                                    var date = $('#datenow').val();
                                    var max = $('#maxtemp').val();
                                    var min = $('#mintemp').val();
                                    var actual = $('#actualrain').val();
                                    var anemometer = $('#anemometer').val();
                                    var wind = $('#windrun').val();
                                    var maxi = $('#maxtemp2').val();
                                    var station = $("#station").val();


                                    console.log(station);
                                    $('#Loading_daily').show();
                                    if (station != "") {

                                        $.post("<?php echo base_url() ?>index.php/metar/daily", {date: date, max: max, min: min, actual: actual, anemometer: anemometer, wind: wind, maxi: maxi, station: station, rain: $('#rain').val(), thunder: $('#thunder').val(), fog: $('#fog').val(), haze: $('#haze').val(), storm: $('#storm').val(), quake: $('#quake').val(), height: $('#height').val(), duration: $('#duration').val(), sunshine: $('#sunshine').val(), type: $('#type').val(), radiation: $('#radiation').val(), evaptype1: $('#evaptype1').val(), evaptype2: $('#evaptype2').val(), evap1: $('#evap1').val(), evap2: $('#evap2').val()}
                                        , function (response) {
                                            //#emailInfo is a span which will show you message
                                            $('#Loading_daily').hide();
                                            setTimeout(finishAjaxitem('Loading_daily', escape(response)), 200);

                                        }); //end change

                                        function finishAjaxitem(id, response) {
                                            $('#' + id).html(unescape(response));
                                            $('#' + id).fadeIn();
                                        }

                                    } else {
                                        alert("Please select a station");
                                        $('#Loading_daily').hide();

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

                                $('#datenow').datetimepicker({
                                    format: 'YYYY-MM-DD'
                                });
                                $('#dateyesterday').datetimepicker({
                                    format: 'YYYY-MM-DD'
                                });


                            </script>
                            </body>