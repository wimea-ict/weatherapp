

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
 <?php require_once(APPPATH . 'views/permission.php'); ?> 

<div class="container-fluid">
    <div class="page-content">
        <div class="row-fluid"  data-ng-app="dailyApp">
                <h4>Daily weather records:<?= $this -> session -> userdata('stationname');?> </h4>
            <div class="span12">   
                 <span id="Loading_daily"  name ="Loading_daily"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="loading" /></span><br>
 
                <form id="edit-form"  name="edit-form"  enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/save'  method="post">            

                    <div class="row-fluid  span12 ">
                        <div class="span3 well-large padding-5">
                            <div class=" input-prepend">
                            <label for="form-field-select-1">Select the date</label>
                            <span class="add-on">
                                <i class="icon-calendar"></i>
                            </span> 
                            <input class="span12 form-control date-picker" id="datenow" value="<?php echo date('Y-m-d'); ?>"  name="datenow" type="text" data-date-format="YYYY-MM-DD" />   
                        </div>
                        <label for="form-field-select-1">Station name</label>
                        <select class="span12" id="station"  name="station">
                            <option value="" />  
                            <option value="<?= $this -> session -> userdata('stationname');?>" ><?= $this -> session -> userdata('stationname');?></option>
                          
                            <?php
                            if (allowed ($see,'manage')) { 
                            if (is_array($stations) && count($stations)) {
                                foreach ($stations as $loop) {
                                    ?> 
                <option value="<?= $loop->name ?>" /><?= $loop->name ?>                      
 
                
              

                            <?php }}
                            }
                            ?>
                
                        </select>
                          <label for="form-field-select-1">Station number</label>
                            <input class="span12" id="number" readonly="" name="number" />
                            
                           
                        <label for="form-field-select-1"> Temperature:</label>                         
                        
                        <input class="span4" type="text" id="maxtemp" name="maxtemp" placeholder="max"  />
                              <input class="span4" type="text" id="mintemp" name="mintemp" placeholder="min"  />
                        
                      
                        </div>
                   
                    <div class="span3 well-large padding-5">
                      
                        <label>  Rainfall(mm): </label>
                            <input class="span12"  type="text" id="actualrain" name="actualrain" />
                            <label>  Duration(Hrs):</label>
                            <input class="span12"  type="text" id="duration" name="duration" />
                            
                            <label>Radiation type:</label>
                            <input class="span12"  type="text" id="type" name="type"/>
                            <label> Radiation:</label>
                            <input  class="span12" type="text" id="radiation" name="radiation" />
                        
                    </div>
                        
                       
                        
                         <div class="span3 well-large padding-5">
                              <label>Wind run(KM):</label>
                            <input class="span12"  type="text" id="anemometer" name="anemometer" />
                            <label>Anemometer Height:</label>
                            <input class="span12" type="text" id="height" name="height"/>
                        <label> Sunshine(Hrs):</label>
                        <input class="span12" type="text" id="sunshine" name="sunshine"  />
                         <label> GPM:</label>
                        <input  class="span12" type="text" id="gpm" name="gpm"  />
                        
                          
                         </div>     
                        <div class="span3 well-large padding-5">
                           
                        <label> Evaporation Type:</label><input class="span12"  type="text" id="evaptype1" name="evaptype1"  />
                        <label> EVAP(mm):</label><input class="span12" type="text" id="evap1" name="evap1"  />
                        <label> Type:</label><input class="span12" type="text" id="evaptype2" name="evaptype2"  />
                        <label> EVAP(mm):</label><input class="span12"  type="text" id="evap2" name="evap2"  />
                             
                        </div>
                      

                            <div class="span12 padding-5">  
                               Did  we have :
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
                            <button  onclick="" name="daily" id="daily" class="span2 btn btn-info " > Submit  </button>

                          <br>
                            <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="loading" /></span><br>
   <hr>
     <table id="sample-table-2" class=" scroll span12 table table-striped table-bordered table-hover" >

            <tbody>  

                <tr>
                     <td class="center-head">
                        <label>
                        Date
                        </label>
                    </td>
                    <td class="center-head">
                        <label>
                        Max temp
                        </label>
                    </td>

                    <td class="center">
                        <a href="#">Min temp</a>
                    </td>


                    <td class="center">
                        <a href="#">Rainfall</a>
                    </td>
                    <td class="center">
                        <a href="#">Duration(Hrs)</a>
                    </td>

                    <td class="center">
                        <a href="#">Anemometer</a>
                    </td>


                    <td class="center">
                        <a href="#">Wind</a>
                    </td>
                    <td class="center-head">
                        <label>
                            <a href="#">Rain</a>

                        </label>
                    </td>
                    <td>thunder</td>
                     <td>fog</td>
                      <td>haze</td>
                       <td>storm</td>
                        <td>quake </td>
                    

                    <td class="center" >
                        <a href="#">Sunshine</a>
                    </td>
                    <td class="center" >
                        <a href="#">Radiation</a>
                    </td>

                    <td class="center" >
                        <a href="#">Radiation type</a>
                    </td>
                    <td class="center" >
                        <a href="#">Evaporation</a>
                    </td>
                      <td class="center" >
                        <a href="#">Evap.type </a>
                    </td>

                    <td class="center">
                        <a href="#">Evaporation2</a>
                    </td>
                  <td class="center" >
                        <a href="#">Evap2.type</a>
                    </td>
                   
                </tr>   
                <?php
                if (is_array($daily) && count($daily)) {
                    foreach ($daily as $loop) {
                        $id = $loop->id;
                        $max = $loop->max; $min = $loop->min;$actual = $loop->actual;
                        $duration = $loop->duration; $anemometer = $loop->anemometer;                       
                        $wind = $loop->wind;  $rain = $loop->rain;$thunder = $loop->thunder;     
                        $fog=$loop->fog; $haze=$loop->haze; $storm=$loop->storm; $quake=$loop->quake; $sunshine=$loop->sunshine; $radiation=$loop->radiation; $radiationtype=$loop->radiationtype; $evap1=$loop->evap1; $evaptype1=$loop->evaptype1; $evap2=$loop->evap2; $evaptype2=$loop->evaptype2;
                        ?>  
                          <tr id="<?php echo $id; ?>" class="edit_tr">
                                <td class="edit_td"><?= $loop->date ?></td>
                                <td class="edit_td">
                             <span id="max_<?php echo $id; ?>" class="text"><?php echo $max; ?></span>
                            <input type="text" value="<?php echo $max; ?>" class="editbox" id="max_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="min_<?php echo $id; ?>" class="text"><?php echo $min; ?></span>
                            <input type="text" value="<?php echo $min; ?>" class="editbox" id="min_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="actual_<?php echo $id; ?>" class="text"><?php echo $actual; ?></span>
                            <input type="text" value="<?php echo $actual; ?>" class="editbox" id="actual_input_<?php echo $id; ?>"
                              </td>
                             <td class="edit_td">
                             <span id="duration_<?php echo $id; ?>" class="text"><?php echo $duration; ?></span>
                            <input type="text" value="<?php echo $duration; ?>" class="editbox" id="duration_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="anemometer_<?php echo $id; ?>" class="text"><?php echo $anemometer; ?></span>
                            <input type="text" value="<?php echo $anemometer; ?>" class="editbox" id="anemometer_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="wind_<?php echo $id; ?>" class="text"><?php echo $wind; ?></span>
                            <input type="text" value="<?php echo $wind; ?>" class="editbox" id="wind_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="rain_<?php echo $id; ?>" class="text"><?php echo $rain; ?></span>
                            <input type="text" value="<?php echo $rain; ?>" class="editbox" id="rain_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="thunder_<?php echo $id; ?>" class="text"><?php echo $thunder; ?></span>
                            <input type="text" value="<?php echo $thunder; ?>" class="editbox" id="thunder_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="fog_<?php echo $id; ?>" class="text"><?php echo $fog; ?></span>
                            <input type="text" value="<?php echo $fog; ?>" class="editbox" id="fog_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="haze_<?php echo $id; ?>" class="text"><?php echo $haze; ?></span>
                            <input type="text" value="<?php echo $haze; ?>" class="editbox" id="haze_input_<?php echo $id; ?>"
                              </td>
                               <td class="edit_td">
                             <span id="storm_<?php echo $id; ?>" class="text"><?php echo $storm; ?></span>
                            <input type="text" value="<?php echo $storm; ?>" class="editbox" id="storm_input_<?php echo $id; ?>"
                              </td>
                               <td class="edit_td">
                             <span id="quake_<?php echo $id; ?>" class="text"><?php echo $quake; ?></span>
                            <input type="text" value="<?php echo $quake; ?>" class="editbox" id="quake_input_<?php echo $id; ?>"
                              </td>      
                                <td class="edit_td">
                             <span id="sunshine_<?php echo $id; ?>" class="text"><?php echo $sunshine; ?></span>
                            <input type="text" value="<?php echo $sunshine; ?>" class="editbox" id="sunshine_input_<?php echo $id; ?>"
                              </td>
                                <td class="edit_td">
                             <span id="radiation_<?php echo $id; ?>" class="text"><?php echo $radiation; ?></span>
                            <input type="text" value="<?php echo $radiation; ?>" class="editbox" id="radiation_input_<?php echo $id; ?>"
                              </td>   
                                  <td class="edit_td">
                             <span id="radiationtype_<?php echo $id; ?>" class="text"><?php echo $radiationtype; ?></span>
                            <input type="text" value="<?php echo $radiationtype; ?>" class="editbox" id="radiationtype_input_<?php echo $id; ?>"
                              </td>
                            <td class="edit_td">
                             <span id="evap1_<?php echo $id; ?>" class="text"><?php echo $evap1; ?></span>
                            <input type="text" value="<?php echo $evap1; ?>" class="editbox" id="evap1_input_<?php echo $id; ?>"
                              </td>  
                              <td class="edit_td">
                             <span id="evaptype1_<?php echo $id; ?>" class="text"><?php echo $evaptype1; ?></span>
                            <input type="text" value="<?php echo $evaptype1; ?>" class="editbox" id="evaptype1_input_<?php echo $id; ?>"
                              </td>   
                              <td class="edit_td">
                             <span id="evap2_<?php echo $id; ?>" class="text"><?php echo $evap2; ?></span>
                            <input type="text" value="<?php echo $evap2; ?>" class="editbox" id="evap2_input_<?php echo $id; ?>"
                              </td> 
                                <td class="edit_td">
                             <span id="evaptype2_<?php echo $id; ?>" class="text"><?php echo $evaptype2; ?></span>
                            <input type="text" value="<?php echo $evaptype2; ?>" class="editbox" id="evaptype2_input_<?php echo $id; ?>"
                              </td>
                         
                          

                        </tr>

                        <?php
                    }
                }
                ?>

            </tbody>
        </table>
                  
                            </div> 
                </form>
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
                            
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(".editbox").hide();

        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#max" + ID).hide();
            $("#max_input_" + ID).show();

            $("#min" + ID).hide();
            $("#min_input_" + ID).show();
            $("#actual" + ID).hide();
            $("#actual_input_" + ID).show();
            $("#duration" + ID).hide();
            $("#duration_input_" + ID).show();
            $("#anemometer" + ID).hide();
            $("#anemometer_input_" + ID).show();
            $("#wind" + ID).hide();
            $("#wind_input_" + ID).show();
            $("#rain" + ID).hide();
            $("#rain_input_" + ID).show();
            $("#thunder" + ID).hide();
            $("#thunder_input_" + ID).show();
            $("#fog" + ID).hide();
            $("#fog_input_" + ID).show();
            $("#haze" + ID).hide();
            $("#haze_input_" + ID).show();
            $("#storm" + ID).hide();
            $("#storm_input_" + ID).show();
            $("#quake" + ID).hide();
            $("#quake_input_" + ID).show();
            $("#sunshine" + ID).hide();
            $("#sunshine_input_" + ID).show();
            $("#radiation" + ID).hide();
            $("#radiation_input_" + ID).show();
            $("#radiationtype" + ID).hide();
            $("#radiationtype_input_" + ID).show();
            $("#evap1" + ID).hide();
            $("#evap1_input_" + ID).show();
            $("#evaptype1" + ID).hide();
            $("#evaptype1_input_" + ID).show();            
            $("#evap2" + ID).hide();
            $("#evap2_input_" + ID).show();
            $("#evaptype2" + ID).hide();
            $("#evaptype2_input_" + ID).show();


        }).change(function ()
        {
           var ID = $(this).attr('id');
           var max = $("#max_input_" + ID).val();
           var min = $("#min_input_" + ID).val();
           var actual = $("#actual_input_" + ID).val();
           var duration = $("#duration_input_" + ID).val();
           var anemometer = $("#anemometer_input_" + ID).val();
           var wind = $("#wind_input_" + ID).val();
           var rain = $("#rain_input_" + ID).val();
          var thunder = $("#thunder_input_" + ID).val();
          var fog = $("#fog_input_" + ID).val();
          var haze = $("#haze_input_" + ID).val();
          var storm = $("#storm_input_" + ID).val();
          var quake = $("#quake_input_" + ID).val();
          var sunshine = $("#sunshine_input_" + ID).val();
          var radiation = $("#radiation_input_" + ID).val();
           var radiationtype = $("#radiationtype_input_" + ID).val();
            var evap1 = $("#evap1_input_" + ID).val();
            var evap2 = $("#evap2_input_" + ID).val();
             var evaptype2 = $("#evaptype2_input_" + ID).val();
               var evaptype1 = $("#evaptype1_input_" + ID).val();
          


            var dataString = 'id=' + ID + '&max=' + max + '&min=' + min+ '&actual=' + actual+ '&duration=' + duration+ '&anemometer=' + anemometer+ '&wind=' + wind+ '&rain=' + rain+ '&thunder=' + thunder+ '&fog=' + fog+ '&haze=' + haze+ '&storm=' + storm+ '&quake=' + quake+ '&sunshine=' + sunshine+ '&radiation=' + radiation+ '&radiationtype=' + radiationtype+ '&evap1=' + evap1+ '&evaptype1=' + evaptype1+ '&evap2=' + evap2+ '&evaptype2=' + evaptype2 ;
            $("#max_" + ID).html('<img src="<?= base_url(); ?>images/ajax-loader.gif" />'); // Loading image
            $("#min_" + ID).html('<img src="<?= base_url(); ?>images/ajax-loader.gif" />'); // Loading image
           
            if (max.length > 0 )
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . "index.php/metar/update_daily/"; ?>",
                    data: dataString,
                    cache: false,
                    success: function (html)
                    {
                        $("#min_" + ID).html(min);
                        $("#max_" + ID).html(max);
                         $("#actual_" + ID).html(actual);
                          $("#duration_" + ID).html(duration);
                           $("#anemometer_" + ID).html(anemometer);
                            $("#wind_" + ID).html(wind);
                             $("#rain_" + ID).html(rain);
                              $("#thunder_" + ID).html(thunder);
                               $("#fog_" + ID).html(fog);
                                $("#haze_" + ID).html(haze);
                                 $("#storm_" + ID).html(storm);
                                  $("#quake_" + ID).html(quake);
                                   $("#sunshine_" + ID).html(sunshine);
                                    $("#radiation_" + ID).html(radiation);
                                     $("#radiationtype_" + ID).html(radiationtype);
                                      $("#evap1_" + ID).html(evap1);
                                       $("#evaptype1_" + ID).html(evaptype1);
                                         $("#evap2_" + ID).html(evap2);
                                       $("#evaptype2_" + ID).html(evaptype2);
                    

                    }
                });
            }
            else
            {
                alert('Enter something.');
            }

        });

        // Edit input box click action
        $(".editbox").mouseup(function ()
        {
            return false
        });

        // Outside click action
        $(document).mouseup(function ()
        {
            $(".editbox").hide();
            $(".text").show();
        });

    });
</script>

                            </body>