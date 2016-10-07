
<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="<?= base_url(); ?>css/admin.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugins/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
<div class="container clear_both padding_fix">
    <div class="row">
        <div class="col-md-12">   
            <div class="header">
                <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                <h3 class="content-header">Daily weather records:<?= $this->session->userdata('stationname'); ?></h3>
            </div>

            <form   parsley-validate novalidate  enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/save'  method="post">            
<div class="col-md-6">   
                <div class="form-group">
                    <label for="form-field-select-1">Select the date</label>
                   
                    <input class="span12 form-control date-picker" id="datenow" value="<?php echo date('Y-m-d'); ?>"  name="datenow" type="text" data-date-format="YYYY-MM-DD" />   
                </div><!--/form-group-->
                <div class="form-group">
                    <label for="form-field-select-1">Station name</label>
                    <select  id="station"  name="station">
                        <option ></option>  
                        <option value="<?= $this->session->userdata('stationname'); ?>" ><?= $this->session->userdata('stationname'); ?></option>

                        <?php
                      
                            if (is_array($stations) && count($stations)) {
                                foreach ($stations as $loop) {
                                    ?> 
                        <option value="<?= $loop->name ?>" ><?= $loop->name ?></option>
                                    <?php
                                }
                            }
                      
                        ?>

                    </select>  
                    <label >Station number</label>
                    <input id="number" readonly="" name="number" >
                </div><!--/form-group-->
                <div class="form-group">                      
                    <label > Temperature:</label> 
                    <input  type="text" class="span12" id="maxtemp" name="maxtemp" placeholder="max"  />
                    <input  type="text" class="span12" id="mintemp" name="mintemp" placeholder="min"  />
                </div><!--/form-group-->
                
                <div class="form-group">
                    
                </div><!--/form-group-->
                
                <div class="form-group">
                    <label>  Rainfall(mm): </label>
                    <input  class="span12"  type="text" id="actualrain" name="actualrain" />
                </div>
                <div class="form-group">
                    <label>  Duration(Hrs):</label>
                    <input class="span12"  type="text" id="duration" name="duration" />
                </div>
                <div class="form-group">
                    <label>Radiation type:</label>
                    <input  class="span12" type="text" id="type" name="type"/>
                </div>
                <div class="form-group">
                    <label> Radiation:</label>
                    <input  class="span12"  type="text" id="radiation" name="radiation" />
                </div>                        

</div>
<div class="col-md-6">  
                <div class="form-group">
                    <label>Wind run(KM):</label>
                    <input class="span12"  type="text" id="anemometer" name="anemometer" />
                </div>
                <div class="form-group">
                    <label>Anemometer Height:</label>
                    <input class="span12" type="text" id="height" name="height"/>
                </div>
                <div class="form-group">
                    <label> Sunshine(Hrs):</label>
                    <input class="span12" type="text" id="sunshine" name="sunshine"  />
                </div>
                <div class="form-group">
                    <label> GPM:</label>
                    <input  class="span12" type="text" id="gpm" name="gpm"  />
                </div>     
                <div class="form-group">
                    <label> Evaporation Type:</label>
                    <input class="span12"  type="text" id="evaptype1" name="evaptype1"  />
                </div>
                <div class="form-group"> 
                    <label> EVAP(mm):</label>
                    <input class="span12" type="text" id="evap1" name="evap1"  />
                </div>
                <div class="form-group">
                    <label> Type:</label>
                    <input class="span12" type="text" id="evaptype2" name="evaptype2"  />
                    <label> EVAP(mm):</label><input class="span12"  type="text" id="evap2" name="evap2"  />
                </div>   
     </div>
                <label>Did  we have :</label>
 <div class="col-md-12">  

              
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

                <button class="btn" type="submit">Submit</button>
                <button class="btn">Cancel</button>
            </form>          

        </div> 
    </div>
</div>
  <script src="<?php echo base_url(); ?>js/jQuery-2.1.4.min.js" type="text/javascript"></script>

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
                                    var wind = $('#anemometer').val();                                  
                                    var station = $("#station").val();


                                    console.log(station);
                                    $('#Loading_daily').show();
                                    if (station != "") {

                                        $.post("<?php echo base_url() ?>index.php/metar/daily", {date: date, max: max, min: min, actual: actual, anemometer: anemometer, wind: wind,station: station, rain: $('#rain').val(), thunder: $('#thunder').val(), fog: $('#fog').val(), haze: $('#haze').val(), storm: $('#storm').val(), quake: $('#quake').val(), height: $('#height').val(), duration: $('#duration').val(), sunshine: $('#sunshine').val(), type: $('#type').val(), radiation: $('#radiation').val(), evaptype1: $('#evaptype1').val(), evaptype2: $('#evaptype2').val(), evap1: $('#evap1').val(), evap2: $('#evap2').val()}
                                        , function (response) {
                                            //#emailInfo is a span which will show you message
                                              
                                            $('#Loading_daily').hide();
                                            setTimeout(finishAjaxitem('Loading_daily', escape(response)), 200);

                                        }); //end change

                                        function finishAjaxitem(id, response) {
                                            $('#' + id).html(unescape(response));
                                            $('#' + id).fadeIn();
                                            location.reload();
                                       
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