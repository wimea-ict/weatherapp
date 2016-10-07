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
                TEN DAY (DEKADAL) FORM

            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->



<!--                    <span> Select the date:<input class="span2 date-picker" id="datenow" value="<?php echo date('Y-m-d'); ?>"  name="datenow" type="text" data-date-format="yyyy-mm-dd" />
     <span class="add-on">
         <i class="icon-calendar"></i>
     </span>
 </span>-->

                <div class="scroll well-large"> 
                    <label> Station  </label><select class="col-sm-3" id="station" name="station">
                        <option value="<?= $user->station ?>"  /><?= $user->station ?>
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

                    <label> Station No </label><input class="form-control"  id="number" readonly="" name="number" ></input>   


                    <?php $months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"); ?>

                    <div class="span12">
                        <label>Start Date </label>
                        <select class=" col-md-2 no"  name="startdate" id="startdate">
                            <option value=""></option>
                            <?php
                            for ($d = 1; $d <= 31; $d++)
                                echo "<option value='$d'>$d</option>"
                                ?>
                        </select>
                        <label>End Date </label>
                        <select class=" col-md-2 no"  name="enddate" id="enddate">
                            <option value=""></option>
                            <?php
                            for ($d = 1; $d <= 31; $d++)
                                echo "<option value='$d'>$d</option>"
                                ?>
                        </select>
                        <label>Month/Year </label>
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
                        <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Loading................" /></span><br>
                    </div>
                    <!--        <div class="scroll row-fluid">           
                     <table id="datatable" class="table table-striped table-bordered table-hover">
                     
                     <tbody>
                         <tr>
                             <th colspan="2" >
                                
                             </th>
                             <th colspan="9" >
                                 <label>
                                     <h3>  Time of Observation 9:00am</h3>
                                 </label>
                             </th>
                              <th colspan="7" >
                                 <label>
                                     <h3>  Time of Observation 3:00pm   </h3>
                                 </label>
                             </th>
                         </tr>
                         <tr>
                       
                             
                              <td class="center" colspan="2" >
                                DATE
                             </td>
                             <td class="center" colspan="5">
                                 <a href="#">TEMPERATURES</a>
                             </td>
                          
                             
                               <td class="center">
                                 <a href="#">RELATIVE HUMIDITY</a>
                             </td>
                        
                              <td class="center" colspan="2">
                                 <a href="#">WIND</a>
                             </td>
                         
                            
                               <td class="center">
                                 
                             </td>
                              
 
                             <td class="center" colspan="3">
                                 <a href="#">TEMPERATURES</a>
                             </td>
                          
                             
                               <td class="center">
                                 <a href="#">RELATIVE HUMIDITY</a>
                             </td>
                        
                              <td class="center" colspan="2">
                                 <a href="#">WIND</a>
                             </td>
                             
                         </tr>
                              <tr>
                              <td class="center" colspan="2">
                                
                             </td>
                             
 
                             <td class="center">
                                 <a href="#">MAX</a>
                             </td>
                               <td class="center">
                                 <a href="#">MIN</a>
                             </td>
                             
                               <td class="center">
                                 <a href="#">DRY BULB</a>
                             </td>
                             
                               <td class="center">
                                 <a href="#">WET BULB</a>
                             </td>
                             <td class="center">
                                 <a href="#">DEW POINT</a>
                             </td>
                              <td class="center">
                                 
                             </td>
                             
                             
                          
                               <td class="center">
                                 <a href="#">DIRECTION</a>
                             </td>
                             
                               <td class="center">
                                 <a href="#">SPEED</a>
                             </td>
                             
                               <td class="center">
                                 <a href="#">RAIN FALL</a>
                             </td>
                              <td class="center">
                                 <a href="#">DRY BULB</a>
                             </td>
                             
                               <td class="center">
                                 <a href="#">WET BULB</a>
                             </td>
                           
                               <td class="center">
                                 <a href="#">DEW POINT</a>
                             </td>
                            
                               <td class="center">
                                 <a href="#"></a>
                             </td>
                          
                               <td class="center">
                                 <a href="#">DIRECTION(C)</a>
                             </td>
                             
                             
                               <td class="center">
                                 <a href="#">SPEED(KT)</a>
                             </td>
                             
                               <td class="center">
                                 <a href="#">RAIN FALL</a>
                             </td>
                            
                         </tr> 
                          
                    <?php
                    $cr = 1;

                    if (is_array($dekadal) && count($dekadal)) {

                        foreach ($dekadal as $loop) {
                            $pieces = explode("-", $loop->date);
                            ?>                              
                                                                                        
                                                                                           <tr>
                                                                                     <td class="small" ><a><?php echo $cr++; ?></a></td>
                                                                                     <td class="small" ><?php echo $loop->date; ?></td>
                                                                                     <td class="small" ><?= $loop->max ?>  </td>
                                                                                     <td class="small">  <?= $loop->min ?></td>
                                                                                     <td class="small"> <?= $loop->air9; ?></td>
                                                                                     <td class="small" > <?= $loop->wet9; ?></td>
                                                                                     <td class="small" > <?= $loop->dew9; ?> </td>
                                                                                     <td class="small" > <?= $loop->humid9; ?></td>
                                                                                     <td class="small"> <?= $loop->wind9; ?></td>
                                                                                     <td class="small"> <?= $loop->speed9; ?></td>
                                                                                     <td class="small"> <?= $loop->rain; ?></td>
                                                                                     <td class="small"> <?= $loop->air15; ?></td>
                                                                                     <td class="small" > <?= $loop->wet15; ?></td>
                                                                                     <td class="small" > <?= $loop->dew15; ?> </td>
                                                                                     <td class="small" > <?= $loop->humid15; ?></td>
                                                                                     <td class="small"> <?= $loop->wind15; ?></td>
                                                                                     <td class="small"> <?= $loop->speed15; ?></td>
                                                                                     <td class="small"> <?= $loop->rain15; ?></td>
                                                                                         </tr>
                            <?php
                        }
                    }
                    ?> 
                     
                        
                     
                     </tbody>
                 </table>     
               </div>     -->
                </div>




                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->

        </div><!--/.main-container-->
    </div>
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>

    <!--basic scripts-->

    <!--[if !IE]>-->

    <script src="<?= base_url(); ?>js/2.0.3-jquery.min.js"></script>


    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>



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
                                var month = $("#month").val();
                                var year = $("#year").val();
                                var startdate = $("#startdate").val();
                                var enddate = $("#enddate").val();

                                $('#meta').hide();
                                $('#Loading').show();
                                $.post("<?php echo base_url() ?>index.php/dekadal/gets", {datenow: $("#datenow").val(), station: $("#station").val(), month: month, year: year, startdate: startdate, enddate: enddate}
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

