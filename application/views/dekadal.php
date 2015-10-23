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

          <div class="form-group well alert-info">
     

                    <span class="span3 ">Station : <select class="span6" id="station" name="station">
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
                            
                           <td class="center">
                                                          </td>
                            
                             <td class="center" >
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
                             <td class="center">
                               
                            </td>
                               <td class="center">
                               
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
                          
                               $cr=1;
                              
                         
                          if (is_array($dekadal) && count($dekadal)) { 
                           
                           foreach ($dekadal as $loop) { 
                                 ?>                              
                               
                                  <tr>
                                        <td class="small" ><?php echo $cr++; ?></td>
                                <td class="small" ><?php echo $loop->date; ?></td>
                            <td class="small" ><?=$loop->max?>  </td>
                            <td class="small">  <?=$loop->min?></td>
                            <td class="small"> <?=$loop->air9;?></td>
                            <td class="small" > <?=$loop->wet9;?></td>
                            <td class="small" > <?=$loop->dew9;?> </td>
                             <td class="small" > <?=$loop->humid9;?></td>
                             <td class="small"> <?=$loop->wind9;?></td>
                             <td class="small"> <?=$loop->speed9;?></td>
                              <td class="small"> <?=$loop->rain;?></td>
                             
                              
                              
                                   <td class="small"> <?=$loop->air15;?></td>
                            <td class="small" > <?=$loop->wet15;?></td>
                            <td class="small" > <?=$loop->dew15;?> </td>
                             <td class="small" > <?=$loop->humid15;?></td>
                             <td class="small"> <?=$loop->wind15;?></td>
                             <td class="small"> <?=$loop->speed15;?></td>
                              <td class="small"> <?=$loop->rain15;?></td>
                                  </tr>
                              <?php                                
                          } } ?> 
                    
                       
                    
                    </tbody>
                </table>     
                   
                </span>
          
              


                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->

        </div><!--/.main-container-->
    </div>
        <?php require_once(APPPATH . 'views/footer_report.php'); ?>


<script type="text/javascript">
function ExportToExcel(datatable){
       var htmltable= document.getElementById('datatable');
       var html = htmltable.outerHTML;
       window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
</script>