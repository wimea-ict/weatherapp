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

        <span class="well-large"> 
         <input type="button" class="btn-default" onclick="ExportToExcel('datatable')" value="Export to Excel">
              
                    <table id="sampletable"  class="table table-striped table-bordered table-hover">
                    
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
                </table>     
                  
                </span>
 </div>

                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->

        </div><!--/.main-container-->

        <?php require_once(APPPATH . 'views/footer_report.php'); ?>

<script type="text/javascript">
function ExportToExcel(datatable){
       var htmltable= document.getElementById('sampletable');
       var html = htmltable.outerHTML;
       window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
</script>
