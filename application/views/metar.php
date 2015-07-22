<?php require_once(APPPATH . 'views/header.php'); ?>
<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/colorpicker.css" />


<div class="main-container container-fluid">

    <div class="page-content">
        <div class="page-header position-relative">
             
            <h1>
              Metar Book (Observed every hour)Aviation Routine Weather Report

            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <form id="edit-form" name="edit-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/save'  method="post">            

  
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->
               <div class="form-group well alert-info">
     

                    <span class="span3 ">Station : <select id="station" name="station">
                                                              <option value="<?=$user->station?>" /><?=$user->station?>
                                                            <?php
                                        if (is_array($stations) && count($stations)) {
                                            foreach ($stations as $loop) {
                                                ?>                        
                                                            <option value="<?=$loop->name?>" /><?=$loop->name?>
                                                    

                                        <?php }}?>
                                                </select></span>

                    <span for="form-field-select-1">Station No:<input class="form-control"  id="number" readonly="" name="number" ></input>   
                    </span>
                    <span> Select the date:<input class="span3 date-picker" id="datenow" value="<?php echo date('Y-m-d');?>"  name="datenow" type="text" data-date-format="yyyy-mm-dd" />
                        <span class="add-on">
                            <i class="icon-calendar"></i>
                        </span>
                    </span>
                </div>
                   <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span><br>
                                                         
      
       
   <div class="success">
 
                                                  <?php echo $this->session->flashdata('msg');?>
                 <table >

                    <tbody>  
                          <h3>SUBMIT NEW METAR DATA</h3>
                    <label><h4>Temperature</h4></label>
                          <tr>
                              <td>Air</td>
                              <td><input type="text" id="temperature" name="temperature" class="input-mini" /> </td>
                              
                              <td>Dew point</td>
                              <td><input type="text" id="dew" name="dew" class="input-mini" /></td>
                            
                              <td>Wet bulb </td>
                            <td >   <input type="text" id="wet" name="wet" class="input-mini" />      </td>
                            <td>Relative humidity</td>
                              <td><input type="text" id="humidity" name="humidity" class="input-mini" /></td>
                          
                            <td ></td>
                                    
                        </tr>
               
                  
                    </tbody>
                </table>

                <table id="sample-table-2" class="table table-striped table-bordered table-hover">

                    <tbody>  
                          
                        <tr bgcolor="#F7ECF2">
                            <td class="center-head">
                                <label>
                                    METAR/SPECI
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">CCCC</a>
                            </td>


                            <td class="center">
                                <a href="#">YYGGgg<span class="degree">z</span></a>
                            </td>

                            <td class="center">
                                <a href="#">Dddff/f<span class="foot-note">m</span>/f<span class="foot-note">m</span></a>
                            </td>


                            <td class="center">
                                <a href="#">WW or CAVOK</a>
                            </td>
                            <td class="center-head">
                                <label>
                                    <a href="#">W<span class="foot-note">1</span>W<span class="foot-note">1</span></a>

                                </label>
                            </td>

                            <td class="center" >
                                <a href="#">N<span class="foot-note">1</span>CCh<span class="foot-note">1</span>h<span class="foot-note">1</span>N<span class="foot-note">n</span>CChhhN<span class="foot-note">h</span>CChhh</a>
                            </td>


                            <td class="center">
                                <a href="#">TT/T<span class="foot-note">d</span>T<span class="foot-note">d</span></a>
                            </td>

                            <td class="center" >
                                <a href="#">QNH(hpa)</a>
                            </td>
                            <td class="center">
                                <a href="#">QNH(in)</a>
                            </td>
                            <td class="center-head">
                                <a href="#">QFE(hpa)</a>
                            </td>

                            <td class="center">
                                <a href="#">QFE(in)</a>
                            </td>
                            <td class="center">
                                <a href="#">RE W1W1</a>
                            </td>
                        </tr>          
                        <tr>
                            <td class="small" >    <select class="input-mini" id="type" name="type">
                                    <option value="META" />META
                                    <option value="SPECI" />SPECI 
                                </select>  </td>
                            <td class="small" > <input type="text" name="code" id="code" class="input-mini" />      </td>
                            <td class="small"> <input type="text" class="input-mini" id="datetime" name="datetime" value="<?php echo date('d'). date('H')."00Z";?>"/></td>
                            <td class="small"> <input class="input-mini input-mask-phone" type="text" id="wind" name="wind" />
                                                   </td>
                                                   <td class="small" ><input class="input-mini input-mask-height" type="text" id="visibility" name="visibility" />
                                              </td>
                                              <td class="small" > <select class="input-mini" id="present" name="present">
                                    <option value="Fg" />Fg
                                    <option value="Hz" />Hz 
                                    <option value="RA" />RA
                                    <option value="Ts" />Ts
                                </select> </td>
                                <td class="small" ><input class="input-medium input-mask-product" type="text" id="cloud" name="cloud" />
                                              </td>
                                              <td class="small"><span><input style="width: 25px !important; border: none"  type="text" class="input-mini" name="temp1" id="temp1"  />/<input class="input-mini " style="width: 27px !important;border: none;" type="text" name="dew1" id="dew1" /></span>
                                            </td>
                                            <td class="small"><input class="input-mini input-mask-hpa" type="text" id="stationhpa" name="stationhpa" />
                                     </td>
                                     <td class="small"><input class="input-mini" style="border: none;" type="text" id="stationinch" name="stationinch" />
                                     <td class="small"> <input class="input-mini input-mask-hpa" type="text" id="seahapa" name="seahpa" />
                                    </td>

                                    <td class="small"> <input class="input-mini " style="border: none;" type="text" id="seainch" name="seainch" />
                                     </td>
                                     <td class="small" > <input type="text"  class="input-mini input-mask-re" name="recent" id="recent"/></td>

                        </tr>

                        <tr>
                            <td class="small" colspan="13" > <br>
                                <button  class="width-65 pull-right btn btn-small btn-success"  style="width: 10% !important; margin-bottom: 5px;" >
                                    Submit 

                                </button><br></td>  

                        </tr>

                    </tbody>
                </table>

   </div>
                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->
            </form>
            
        </div><!--/.main-container-->
        <h3>TODAY'S METAR</h3>
        <div class="well well-large" id="meta" >
                                                <div class="widget-body">
                                         
   <table id="sample-table-2" class="table table-striped table-bordered table-hover">

                    <tbody>  
                          
                        <tr>
                            <td class="center-head">
                                <label>
                                    METAR/SPECI
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">CCCC</a>
                            </td>


                            <td class="center">
                                <a href="#">YYGGgg<span class="degree">z</span></a>
                            </td>

                            <td class="center">
                                <a href="#">Dddff/f<span class="foot-note">m</span>/f<span class="foot-note">m</span></a>
                            </td>


                            <td class="center">
                                <a href="#">WW or CAVOK</a>
                            </td>
                            <td class="center-head">
                                <label>
                                    <a href="#">W<span class="foot-note">1</span>W<span class="foot-note">1</span></a>

                                </label>
                            </td>

                            <td class="center" >
                                <a href="#">N<span class="foot-note">1</span>CCh<span class="foot-note">1</span>h<span class="foot-note">1</span>N<span class="foot-note">n</span>CChhhN<span class="foot-note">h</span>CChhh</a>
                            </td>
  <td class="center" >
                                <a href="#">A/temperature</a>
                            </td>
                           
                            <td class="center" >
                                <a href="#">Dew point</a>
                            </td>
                            <td class="center" >
                                <a href="#">Wet Bulb</a>
                            </td>

                            <td class="center">
                                <a href="#">TT/T<span class="foot-note">d</span>T<span class="foot-note">d</span></a>
                            </td>

                            <td class="center" >
                                <a href="#">QNH(hpa)</a>
                            </td>
                            <td class="center">
                                <a href="#">QNH(in)</a>
                            </td>
                            <td class="center-head">
                                <a href="#">QFE(hpa)</a>
                            </td>

                            <td class="center">
                                <a href="#">QFE(in)</a>
                            </td>
                            <td class="center">
                                <a href="#">RE W1W1</a>
                            </td>
                        </tr>   
                        <?php
                                        if (is_array($metas) && count($metas)) {
                                            foreach ($metas as $loop) {
                                                ?>  
                        <tr>
                            <td class="small" ><?=$loop->type ?></td>
                            <td class="small" ><?=$loop->station ?> </td>
                            <td class="small"> <?=$loop->datetime ?></td>
                            <td class="small"><?=$loop->wind_direction.' '.$loop->wind_speed.' '.$loop->unit ?>     </td>
                     <td class="small" > <?=$loop->visibility ?>  </td>
                      <td class="small" ><?=$loop->present_weather ?> </td>
                                <td class="small"><?=$loop->cloud ?>  </td>
                                              <td class="small"><?=$loop->air_temperature ?>  </td>
                                           
                                            <td class="small"><?=$loop->dew_temperature ?></td>
                                     <td class="small"><?=$loop->wet_bulb ?>  </td>

                                    <td class="small"><?=$loop->air_temperature.'/'.$loop->dew_temperature ?> </td>
                                     <td class="small" ><?=$loop->station_pressure_hpa ?>  </td>
                                      <td class="small"> <?php 
                                      if($loop->station_pressure_hpa !="")
                                          echo  round(0.02952998751*$loop->station_pressure_hpa,2);
                                      ?></td>
                                     <td class="small" ><?=$loop->sea_pressure_hpa ?>  </td>
                                      <td class="small"> </td>
                                     <td class="small" ><?=$loop->recent_weather ?> </td>

                        </tr>

                                        <?php }}?>

                    </tbody>
                </table>


                                                </div><!--/widget-body-->
                                            </div><!--/signup-box-->

        <?php require_once(APPPATH . 'views/footer_instrument.php'); ?>

      <script type="text/javascript">
            $(function () {
                $('#id-disable-check').on('click', function () {
                    var inp = $('#form-input-readonly').get(0);
                    if (inp.hasAttribute('disabled')) {
                        inp.setAttribute('readonly', 'true');
                        inp.removeAttribute('disabled');
                        inp.value = "This text field is readonly!";
                    }
                    else {
                        inp.setAttribute('disabled', 'disabled');
                        inp.removeAttribute('readonly');
                        inp.value = "This text field is disabled!";
                    }
                });


                $(".chzn-select").chosen();

                $('[data-rel=tooltip]').tooltip({container: 'body'});
                $('[data-rel=popover]').popover({container: 'body'});

                $('textarea[class*=autosize]').autosize({append: "\n"});
                $('textarea[class*=limited]').each(function () {
                    var limit = parseInt($(this).attr('data-maxlength')) || 100;
                    $(this).inputlimiter({
                        "limit": limit,
                        remText: '%n character%s remaining...',
                        limitText: 'max allowed : %n.'
                    });
                });

                $.mask.definitions['~'] = '[+-]';
                $('.input-mask-date').mask('99/99/9999');
                $('.input-mask-oblique').mask('99/99');
                $('.input-mask-phone').mask('999 99 KT');
                $('.input-mask-re').mask('****');
                $('.input-mask-hpa').mask('999.9');
                $('.input-mask-height').mask('9999');
                $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                $(".input-mask-product").mask('a**999 a**999aa* a**999 a**999');



                $("#input-size-slider").css('width', '200px').slider({
                    value: 1,
                    range: "min",
                    min: 1,
                    max: 6,
                    step: 1,
                    slide: function (event, ui) {
                        var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                        var val = parseInt(ui.value);
                        $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
                    }
                });

                $("#input-span-slider").slider({
                    value: 1,
                    range: "min",
                    min: 1,
                    max: 11,
                    step: 1,
                    slide: function (event, ui) {
                        var val = parseInt(ui.value);
                        $('#form-field-5').attr('class', 'span' + val).val('.span' + val).next().attr('class', 'span' + (12 - val)).val('.span' + (12 - val));
                    }
                });


                $("#slider-range").css('height', '200px').slider({
                    orientation: "vertical",
                    range: true,
                    min: 0,
                    max: 100,
                    values: [17, 67],
                    slide: function (event, ui) {
                        var val = ui.values[$(ui.handle).index() - 1] + "";

                        if (!ui.handle.firstChild) {
                            $(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                        }
                        $(ui.handle.firstChild).show().children().eq(1).text(val);
                    }
                }).find('a').on('blur', function () {
                    $(this.firstChild).hide();
                });

                $("#slider-range-max").slider({
                    range: "max",
                    min: 1,
                    max: 10,
                    value: 2
                });

                $("#eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
                    // read initial values from markup and remove that
                    var value = parseInt($(this).text(), 10);
                    $(this).empty().slider({
                        value: value,
                        range: "min",
                        animate: true

                    });
                });


                $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                    no_file: 'No File ...',
                    btn_choose: 'Choose',
                    btn_change: 'Change',
                    droppable: false,
                    onchange: null,
                    thumbnail: false //| true | large
                            //whitelist:'gif|png|jpg|jpeg'
                            //blacklist:'exe|php'
                            //onchange:''
                            //
                });

                $('#id-input-file-3').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'icon-cloud-upload',
                    droppable: true,
                    thumbnail: 'small'
                            //,icon_remove:null//set null, to hide remove/reset button
                            /**,before_change:function(files, dropped) {
                             //Check an example below
                             //or examples/file-upload.html
                             return true;
                             }*/
                            /**,before_remove : function() {
                             return true;
                             }*/
                    ,
                    preview_error: function (filename, error_code) {
                        //name of the file that failed
                        //error_code values
                        //1 = 'FILE_LOAD_FAILED',
                        //2 = 'IMAGE_LOAD_FAILED',
                        //3 = 'THUMBNAIL_FAILED'
                        //alert(error_code);
                    }

                }).on('change', function () {
                    //console.log($(this).data('ace_input_files'));
                    //console.log($(this).data('ace_input_method'));
                });


                //dynamically change allowed formats by changing before_change callback function
                $('#id-file-format').removeAttr('checked').on('change', function () {
                    var before_change
                    var btn_choose
                    var no_icon
                    if (this.checked) {
                        btn_choose = "Drop images here or click to choose";
                        no_icon = "icon-picture";
                        before_change = function (files, dropped) {
                            var allowed_files = [];
                            for (var i = 0; i < files.length; i++) {
                                var file = files[i];
                                if (typeof file === "string") {
                                    //IE8 and browsers that don't support File Object
                                    if (!(/\.(jpe?g|png|gif|bmp)$/i).test(file))
                                        return false;
                                }
                                else {
                                    var type = $.trim(file.type);
                                    if ((type.length > 0 && !(/^image\/(jpe?g|png|gif|bmp)$/i).test(type))
                                            || (type.length == 0 && !(/\.(jpe?g|png|gif|bmp)$/i).test(file.name))//for android's default browser which gives an empty string for file.type
                                            )
                                        continue;//not an image so don't keep this file
                                }

                                allowed_files.push(file);
                            }
                            if (allowed_files.length == 0)
                                return false;

                            return allowed_files;
                        }
                    }
                    else {
                        btn_choose = "Drop files here or click to choose";
                        no_icon = "icon-cloud-upload";
                        before_change = function (files, dropped) {
                            return files;
                        }
                    }
                    var file_input = $('#id-input-file-3');
                    file_input.ace_file_input('update_settings', {'before_change': before_change, 'btn_choose': btn_choose, 'no_icon': no_icon})
                    file_input.ace_file_input('reset_input');
                });




                $('#spinner1').ace_spinner({value: 0, min: 0, max: 200, step: 10, btn_up_class: 'btn-info', btn_down_class: 'btn-info'})
                        .on('change', function () {
                            //alert(this.value)
                        });
                $('#spinner2').ace_spinner({value: 0, min: 0, max: 10000, step: 100, icon_up: 'icon-caret-up', icon_down: 'icon-caret-down'});
                $('#spinner3').ace_spinner({value: 0, min: -100, max: 100, step: 10, icon_up: 'icon-plus', icon_down: 'icon-minus', btn_up_class: 'btn-success', btn_down_class: 'btn-danger'});



                $('.date-picker').datepicker().next().on(ace.click_event, function () {
                    $(this).prev().focus();
                });
                $('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function () {
                    $(this).next().focus();
                });

                $('#timepicker1').timepicker({
                    minuteStep: 1,
                    showSeconds: true,
                    showMeridian: false
                })

                $('#colorpicker1').colorpicker();
                $('#simple-colorpicker-1').ace_colorpicker();


                $(".knob").knob();


                //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
                var tag_input = $('#form-field-tags');
                if (!(/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())))
                    tag_input.tag({placeholder: tag_input.attr('placeholder')});
                else {
                    //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                    tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
                    //$('#form-field-tags').autosize({append: "\n"});
                }


                /////////
                $('#modal-form input[type=file]').ace_file_input({
                    style: 'well',
                    btn_choose: 'Drop files here or click to choose',
                    btn_change: null,
                    no_icon: 'icon-cloud-upload',
                    droppable: true,
                    thumbnail: 'large'
                })

                //chosen plugin inside a modal will have a zero width because the select element is originally hidden
                //and its width cannot be determined.
                //so we set the width after modal is show
                $('#modal-form').on('show', function () {
                    $(this).find('.chzn-container').each(function () {
                        $(this).find('a:first-child').css('width', '200px');
                        $(this).find('.chzn-drop').css('width', '210px');
                        $(this).find('.chzn-search input').css('width', '200px');
                    });
                })
                /**
                 //or you can activate the chosen plugin after modal is shown
                 //this way select element has a width now and chosen works as expected
                 $('#modal-form').on('shown', function () {
                 $(this).find('.modal-chosen').chosen();
                 })
                 */

            });
        </script>
         <script type="text/javascript">
$('#Loading').hide();
 $('#Loading_daily').hide();  
           
            $('#station').change(function(){
                var station = $('#station').val();
                if (station != ""){
                    
                    $.post("<?= base_url()?>/index.php/station/get", {station: $("#station").val()}
            , function (station) {
                var json = JSON.parse(station);
                            $('#number').empty();
                             $('#code').empty();
                         //   console.log(json[0].number);
                            $("#number").val(json[0].number);
                              $("#code").val(json[0].code);

            });
                    
                  
                } else{
                    
                            $('#number').empty();
                             $('#code').empty();
                }
            }); //end change
            
            
            $('#humidity').blur(function(){
                var temperature = parseInt($('#temperature').val());
                var humidity   = parseInt( $('#humidity').val());
                
                var dew = (humidity * temperature)/100;
                
                var wet =Math.round(((dew * 2) + temperature)/3);
               
                $('#dew').val(dew);
                $('#wet').val(wet);                
                            
                $('#temp1').val(temperature);
                 $('#dew1').val(dew);
                
             
                
            }); //end change
            $('#stationhpa').blur(function(){
                var hpa = parseInt($('#stationhpa').val());
               
                
                var inch = Math.round((0.02952998751 * hpa));  
                            
                $('#stationinch').val(inch);
                
            }); //end change
             $('#datenow').blur(function(){
                 $('#meta').hide();
                  $('#Loading').show();
            $.post("<?php echo base_url() ?>index.php/metar/get", {date: $("#datenow").val()}
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
        
         $('#daily').click(function(e){
             e.preventDefault();
                var date = $('#dateyesterday').val();
                var max = $('#maxtemp').val();
                 var min = $('#mintemp').val();
                  var actual = $('#actualrain').val();
                   var anemometer = $('#anemometer').val();
                    var wind = $('#windrun').val();
                     var maxi = $('#maxtemp2').val();
                     var station = $("#station").val();
                     console.log(station);
                  $('#Loading_daily').show(); 
                if (station != ""){
                    
            $.post("<?php echo base_url() ?>index.php/metar/daily", {date:date,max:max,min:min,actual:actual,anemometer:anemometer,wind:wind,maxi:maxi,station:station,rain:$('#rain').val(),thunder:$('#thunder').val(),fog:$('#fog').val(),haze:$('#haze').val(),storm:$('#storm').val(),quake:$('#quake').val()}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_daily').hide();            
                setTimeout(finishAjaxitem('Loading_daily', escape(response)), 200);
             
            }); //end change
            
             function finishAjaxitem(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }

            }else{
                alert("Please select a station");
                $('#Loading_daily').hide();
                
            }
                    
                  
                
            }); //end change
            

        </script>
