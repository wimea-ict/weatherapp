
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
                <h3 class="content-header">Metar Book (hourly)Aviation Routine Weather Report</h3>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <form id="edit-form" name="edit-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/save'  method="post">            


                <div class="span12">
                    <div class="span3">
                        <label for="form-field-select-1">Station name</label>
                        <select class="span12" id="station"  name="station">
                            <option value="" />  
                            <option value="<?= $this->session->userdata('stationname'); ?>" ><?= $this->session->userdata('stationname'); ?></option>

                            <?php
                            if (is_array($stations) && count($stations)) {
                                foreach ($stations as $loop) {
                                    ?> 
                                    <option value="<?= $loop->name ?>" /><?= $loop->name ?>  
                                    <?php
                                }
                            }
                            ?>

                        </select>
                    </div>
                    <div class="span3">
                        <label >Station No  </label >
                        <input class="form-control"  id="number" readonly="" name="number" ></input>   
                    </div>
                    <div class="span3">
                        <label > Select the date</label>
                        <input class="form-control date-picker" id="datenow" value="<?php echo date('Y-m-d'); ?>"  name="datenow" type="text" data-date-format="yyyy-mm-dd" />
                        <span class="add-on">
                            <i class="icon-calendar"></i>
                        </span>
                    </div>
                </div>

                <div class="span12">
                    <label>
                        <a href="#"> METAR/SPECI</a>
                    </label>  
                    <select  id="type" name="type" class="span12" >
                        <option value="META"  />META
                        <option value="SPECI" />SPECI 
                    </select>

                    <label>  <a href="#">CCCC</a></label>
                    <input type="text" name="code" id="code" class="span12" /> 

                    <label> <a href="#">YYGGgg<span class="degree">z</span></a></label>
                    <input type="text" class="span12" id="datetime" name="datetime" value="<?php echo date('d') . date('H') . "00Z"; ?>"/>

                    <label><a href="#">Dddff/f<span class="foot-note">m</span>/f<span class="foot-note">m</span></a></label>
                    <input class="input-mask-phone span12" type="text" id="wind" name="wind" />   

                    <label> <a href="#">WW or CAVOK</a></label>
                    <input class="span12 input-mask-height" type="text" id="visibility" name="visibility" /> 




                    <label> <a href="#">W<span class="foot-note">1</span>W<span class="foot-note">1</span></a></label>
                    <select class="span12" id="present" name="present">
                        <option value="Fg" />
                        <option value="Fg" />Fg
                        <option value="Hz" />Hz 
                        <option value="RA" />RA
                        <option value="Ts" />Ts
                    </select>  


                    <label>   <a href="#">N<span class="foot-note">1</span>CCh<span class="foot-note">1</span>h<span class="foot-note">1</span>N<span class="foot-note">n</span>CChhhN<span class="foot-note">h</span>CChhh</a></label>
                    <input class="span12 input-medium " type="text" id="cloud" name="cloud" /> 
                    <label>
                        <a href="#">  Air temperature</a>
                    </label>
                    <input class="form-control span12" type="text" id="temperature" name="temperature"  />


                    <label><a href="#"> Relative humidity(%)</a></label>
                    <input type="text" id="humidity" name="humidity" class="span12"   />
                    <label><a href="#"> Dew point</a> </label>
                    <input  class="form-control span12 " type="text" id="dew" name="dew"  />
                    <label><a href="#">Wet bulb</a> </label>
                    <input type="text" id="wet" name="wet" class="span12"  />
                    <label> <a class="span12" href="#">TT/T<span class="foot-note">d</span>T<span class="foot-note">d:</span></a></label>
                    <input class="span6"  type="text"  name="temp1" id="temp1"  />/<input  class="span6" type="text" name="dew1" id="dew1" />
                    <br><label><a href="#">QNH(hpa)</a></label>
                    <input class="span12 input-mask-hpa" type="text" id="stationhpa" name="stationhpa" />
                    <label> <a href="#">QNH(in)</a></label>
                    <input class="span12" style="border: none;" type="text" id="stationinch" name="stationinch" /> 
                    <label><a href="#">QFE(hpa)</a>  </label>
                    <input class="span12 input-mask-hpa" type="text" id="seahapa" name="seahpa" />
                    <label> <a href="#">QFE(in)</a></label>
                    <input class="span12" style="border: none;" type="text" id="seainch" name="seainch" />
                    <label>  <a href="#">RE W1W1</a>  </label>                     
                    <input type="text"  class="span12 input-mask-re" name="recent" id="recent"/> 
                  
                </div>
                  <button  class=" btn">Submit</button> 
            </form> 


        </div> 
    </div>
</div>
<script src="<?php echo base_url(); ?>js/jQuery-2.1.4.min.js" type="text/javascript"></script>

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




    });
</script>
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


    $('#humidity').blur(function () {
        var temperature = parseInt($('#temperature').val());
        var humidity = parseInt($('#humidity').val());

        var dew = (humidity * temperature) / 100;

        var wet = Math.round(((dew * 2) + temperature) / 3);

        $('#dew').val(dew);
        $('#wet').val(wet);

        $('#temp1').val(temperature);
        $('#dew1').val(dew);



    }); //end change
    $('#stationhpa').blur(function () {
        var hpa = parseInt($('#stationhpa').val());


        var inch = Math.round((0.02952998751 * hpa));

        $('#stationinch').val(inch);

    }); //end change
     $("#generate").on ("click",function (e) {
         
            var station = $("#station").val();
            var month = $("#month").val();
            var year = $("#year").val();
             var day = $("#day").val();
        $('#meta').hide();
        $('#Loading').show();
        $.post("<?php echo base_url() ?>index.php/metar/get", {datenow: $("#datenow").val(),station:$("#code").val(),day:day,month:month,year:year}
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

    $('#daily').click(function (e) {
        e.preventDefault();
        var date = $('#dateyesterday').val();
        var max = $('#maxtemp').val();
        var min = $('#mintemp').val();
        var actual = $('#actualrain').val();
        var anemometer = $('#anemometer').val();
        var wind = $('#windrun').val();
      
        var station = $("#station").val();
        console.log(station);
        $('#Loading_daily').show();
        if (station != "") {

            $.post("<?php echo base_url() ?>index.php/metar/daily", {date: date, max: max, min: min, actual: actual, anemometer: anemometer, wind: wind, station: station, rain: $('#actualrain').val(), thunder: $('#thunder').val(), fog: $('#fog').val(), haze: $('#haze').val(), storm: $('#storm').val(), quake: $('#quake').val()}
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


</script>

<script type="text/javascript">
    function ExportToExcel(datatable) {
        var htmltable = document.getElementById('metar');
        var html = htmltable.outerHTML;
        window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
</script>
