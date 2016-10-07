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
           FORM 10 WEATHER MONTHLY SUMMARY

            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

          <div class="form-group">
     
                    Station : <select id="station" name="station">
                                                              <option value="<?=$user->station?>" /><?=$user->station?>
                                                            <?php
                                        if (is_array($stations) && count($stations)) {
                                            foreach ($stations as $loop) {
                                                ?>                        
                                                            <option value="<?=$loop->name?>" /><?=$loop->name?>
                                                    

                                        <?php }}?>
                                                </select>


                   <input class="form-control"  id="number" readonly="" name="number" ></input>   
                   
                  
                </div>

     
                  <div class="scroll row-fluid">   
                      <label>Month/Year </label>
 
                                                                    <?php $months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"); ?>

                                                                    <div class="span12">
                                                      <select  name="month" id="month" >
                                                                             <option value=""></option>
                                                                            <?php for ($m = 1; $m <= 12; $m++)
                                                                                echo "<option value='$m'>" . $months[$m] . "</option>"
                                                                                ?>
                                                                        </select>
                                                                        <select name="year" id="year" >
                                                                             <option value=""></option>
                                                                            <?php for ($y = date('Y'); $y >= 1902; $y--)
                                                                                echo "<option value='$y'>$y</option>"
                                                                                ?>
                                                                        </select>
                                                                        <button type="button" class="btn btn-info btn-small" id="generate" >generate</button>
                                                                        <input type="button" class="btn btn-info btn-small" onclick="ExportToExcel('datatable')" value="Export to Excel">
   <input type="button" onclick="printDiv('printableArea')" value="print" />
                                                                        <div id="printableArea">
     <span id="loading"  name ="loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span><br>
    </div>
<!--                    <table id="sampletable"  class="table table-striped table-bordered table-hover">
                    
                    <tbody>
                        <tr>
                             <th>
                                <label>
                                  
                                </label>
                            </th>
                            <th colspan="3" >
                                <label>
                                  
                                </label>
                            </th>
                            <th colspan="9" >
                                <label>
                                    <h3>  Time of Observation 0600Z</h3>
                                </label>
                            </th>
                             <th colspan="9" >
                                <label>
                                    <h3>  Time of Observation 1200Z   </h3>
                                </label>
                            </th>
                              <th colspan="2" >
                                <label>
                                  
                                </label>
                            </th>
                            <th colspan="6" >
                                 <h3>  DAYS WITH  </h3>
                            </th>
                        </tr>
               
                             <tr bgcolor="#F7ECF2">
                             <td class="center">
                               DATE
                            </td>

                            <td class="center" >
                               MAX
                            </td>
                              <td class="center">
                                <a href="#">MIN</a>
                            </td>
                               <td class="center">
                                <a href="#">SUNSHINE</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">DB</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">WB</a>
                            </td>
                            <td class="center">
                                <a href="#">DP</a>
                            </td>
                             <td class="center">
                                VP
                            </td>
                             <td class="center">
                                RH
                            </td>
                             <td class="center">
                                CLP
                            </td>
                             <td class="center">
                                GPM
                            </td>
                             <td class="center">
                                WIND DIR
                            </td>
                             <td class="center">
                                FF
                            </td>
                            
                            
                            
                              <td class="center">
                                <a href="#">DB</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">WB</a>
                            </td>
                            <td class="center">
                                <a href="#">DP</a>
                            </td>
                             <td class="center">
                                VP
                            </td>
                             <td class="center">
                                RH
                            </td>
                             <td class="center">
                                CLP
                            </td>
                             <td class="center">
                                GPM
                            </td>
                             <td class="center">
                                WIND DIR
                            </td>
                             <td class="center">
                                FF
                            </td>
                            
                            
                         
                              <td class="center">
                                <a href="#">WIND RUN</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">R/F</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">R/DAY</a>
                            </td>
                             <td class="center">
                                <a href="#">TS</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">FG</a>
                            </td>
                          
                              <td class="center">
                                <a href="#">HZ</a>
                            </td>
                           
                              <td class="center">
                                <a href="#">HAIL</a>
                            </td>
                         
                              <td class="center">
                                <a href="#">EARTH QUAKE</a>
                            </td>  
                           
                        </tr> 
                         
                                           <?php
                               
                               $cr=1;
                              
                         
                          if (is_array($monthly) && count($monthly)) { 
                               //var_dump($metas);
                           foreach ($monthly as $loop) { 
                               ?>
                                  <tr>
                                <td class="small" ><?php echo $cr++; ?></td>
                             <td class="small" ><?=$loop->max?>  </td>
                            <td class="small">  <?=$loop->min?></td>
                            <td class="small"></td>
                             <td class="small"> <?=$loop->air9;?></td>
                            <td class="small" > <?=$loop->wet9;?></td>
                            <td class="small" > <?=$loop->dew9;?> </td>
                               <td class="small"></td>
                             <td class="small" > <?=$loop->humid9;?></td>
                                <td class="small"></td>
                                   <td class="small"></td>
                              <td class="small"> <?=$loop->wind9;?></td>
                             <td class="small"> <?=$loop->speed9;?></td>
                           
                              
                              
                               <td class="small"> <?=$loop->air15;?></td>
                            <td class="small" > <?=$loop->wet15;?></td>
                            <td class="small" > <?=$loop->dew15;?> </td>
                             <td class="small"></td>
                          <td class="small" > <?=$loop->humid15;?></td>
                              <td class="small"></td>
                               <td class="small"></td>
                             <td class="small"> <?=$loop->wind15;?></td>
                             <td class="small"> <?=$loop->speed15;?></td>
                              <td class="small"> </td>
                              <td class="small"> </td>
                              <td class="small" > <input class="ace-checkbox-3" enabled  <?php echo ($loop->rain == 'true') ? "checked" : "null"; ?> type="checkbox" /></td>
                              <td class="small"> <input class="ace-checkbox-3"  <?php echo ($loop->thunder == 'true') ? "checked" : "null"; ?> type="checkbox" /></td>
                              <td class="small"><input class="ace-checkbox-3" name="rain" id="rain"  <?php echo ($loop->fog == 'true') ? "checked" : "null"; ?> type="checkbox" /> </td>
                              <td class="small"><input class="ace-checkbox-3" name="rain" id="rain"  <?php echo ($loop->haze == 'true') ? "checked" : "null"; ?> type="checkbox" /> </td>
                              <td class="small"><input class="ace-checkbox-3" name="rain" id="rain"  <?php echo ($loop->storm == 'true') ? "checked" : "null"; ?> type="checkbox" /> </td>
                              <td class="small"><input class="ace-checkbox-3"  name="rain" id="rain"  <?php echo ($loop->quake == 'true') ? "checked" : "null"; ?> type="checkbox" /> </td>
                                  </tr>
                              <?php                                
                          } } ?> 
                    
                       
                    
                    </tbody>
                </table>    -->
                     </div>
                  
                </span>
 </div>

                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->

        </div><!--/.main-container-->

        <?php require_once(APPPATH . 'views/footer_report.php'); ?>

<script type="text/javascript">
    $('#loading').hide();
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


  
     $("#generate").on ("click",function (e) {
         
            var station = $("#station").val();
            var month = $("#month").val();
            var year = $("#year").val();
            
        $('#meta').hide();
        $('#Loading').show();
        $.post("<?php echo base_url() ?>index.php/monthly/gets", {datenow: $("#datenow").val(),station:$("#station").val(),month:month,year:year}
        , function (response) {
            //#emailInfo is a span which will show you message
            $('#loading').hide();
            setTimeout(finishAjaxitem('loading', escape(response)), 200);

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