
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />


<div class=" container">
 <h4> Daily periodical rainfall</h4>
 <div class="row">
<div class="span3">


    <div class="span3 ">
        <label>Station</label>
        <select id="station" name="station">
            <option value="" />
            <?php
            if (is_array($stations) && count($stations)) {
                foreach ($stations as $loop) {
                    ?>                        
                    <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                <?php }
            } ?>
        </select>
    </div>

    <div class="span4 " >
        <label>  Station number</label>
        <input class="form-control"  id="number" readonly="" name="number" ></input>   
    </div>
    
         
        <input type="hidden" class="form-control span3 date-picker" id="datenow" value="<?php echo date('Y-m-d'); ?>"  name="datenow" type="text"  />
      
 


</div>

<div class="form-group  span3">

    <form id="edit-form" name="edit-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/rainfall'  method="post">            
       
        <div class="span3 ">
              <label>Rainfall(mm) </label>
            <input class="form-control"  id="rain_now"  name="rain_now" ></div>

        <div class="span3" >  <label>Duration(Hrs)  </label>
            <input class="form-control"  id="duration_now"  name="duration_now" ></input>   
        </div>
   
       
    </form> 
</div>
    <div class="span3">
        
             <div class="span3 input-append bootstrap-timepicker">
            <label for="timepicker1">Time Picker</label>
            <input id="timepicker1" type="text" class="input-small" />
           
        </div>
        <div class="span3 ">
            <label>  Select the date  </label>
            <input class="form-control span3 date-picker" id="daterain" value="<?php echo date('Y-m-d'); ?>"  name="daterain" type="text"  />
           
        </div>
         <button onclick="" name="rainy" id="rainy" class="span3 btn btn-small"> Submit  </button>
    </div>
 </div>
    <span id="Loading_rainy" class="span6" name ="Loading_rainy"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span><br>


<span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span>

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
            <th>Station</th>
            <th class="hidden-480">Amount(mm)</th>

            <th class="hidden-phone">Time started </th>

            <th>Duration(Hrs.)</th>
            <th>Date of submission </th>
            <th>Submitted by</th>

            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
        if (is_array($rain) && count($rain)) {
            foreach ($rain as $loop) {
                ?>  

                <tr>
                    <td class="center">
                        <label>
                            <input type="checkbox" />
                            <span class="lbl"></span>
                        </label>
                    </td>

                    <td>
                        <a href="#"><?= $loop->date ?></a>
                    </td>

                    <td class="hidden-480"><?= $loop->station ?></td>
                    <td class="hidden-phone"><?= $loop->rain ?></td>

                    <td class="hidden-480">
                        <span class="label label-success"><?= $loop->time ?></span>
                    </td>                                           
                    <td><?= $loop->duration ?></td>                                           
                    <td><?= $loop->submitted ?></td>
                    <td><?= $loop->user ?></td>


                    <td class="td-actions">

                        <a href="<?php echo base_url() . "index.php/metar/rain/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                            <span class="red">
                                <i class="icon-trash bigger-120"></i>
                            </span>
                        </a>
                    </td>
                </tr>
            <?php }
        }
        ?>



    </tbody>
</table>                                                    
</div>

<?php require_once(APPPATH . 'views/footers.php'); ?>


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
