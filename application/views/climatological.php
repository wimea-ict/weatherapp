<?php require_once(APPPATH . 'views/header.php'); ?>


<div class="main-container container-fluid">

    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                <i class="icon-edit icon-2x green"></i>
           MONTHLY CLIMATOLOGICAL OBSERVATIONS
            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

<div class="form-group">
    <label>Station</label>
                           

                                                    <select id="form-field-select-1">
                                                         <option value="Masaka" />Mulago
                                                        <option value="Mulago" />Masaka
                                                       
                                                        
                                                    </select>
                             <label for="form-field-select-1">Station No.</label>
                             <label> Dekad </label>
                            <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>
<label> Month/Year </label>
                            <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>


                                                  
                        </div>
                
                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    
                    <tbody>
                        <tr>
                            <th colspan="5" >
                               
                                 Anemometer
                                
                            </th>
                            <th colspan="8" >
                               
                               RAINFALL
                               
                            </th>
                            <th colspan="4" rowspan="2"> Sunshine Hrs. </th>
                             <th colspan="4" >  Radiometer</th>
                             <th colspan="9" > EVAP.PANS   </th>
                             <th colspan="9" >
                               
                                    1200Z<br>TEMPERATURES <span class="degree">o</span>C
                            
                            </th>
                              <th colspan="3" >
                              
                             1200z Relative Humidity %
                               
                            </th>
                             <th  colspan="4" >                               
                            </th>

                    
                        </tr>
                          <tr>
                            <td class="center-head">
                               
                                   Height
                                
                            </td>

                            <td class="center" colspan="4" >
                                <a href="#">Wind run km.</a>
                            </td>
                              <td class="center" colspan="4">
                                <a href="#">Amount mm.</a>
                            </td>
                       
                             <td class="center" colspan="4">
                                <a href="#">Duration Hr.</a>
                            </td>
                              <td class="center" colspan="4">
                                <a href="#"></a>
                            </td>
                             <td class="center-head">  TYPE </td>

                            <td class="center" colspan="3">
                                <a href="#">EVAP. mm.</a>
                            </td>
                         
                            
                              <td class="center">
                                <a href="#">TYPE</a>
                            </td>
                       
                             <td class="center" colspan="3">
                                <a href="#">EVAP. mm.</a>
                            </td>
                              <td class="center">
                                <a href="#">TYPE</a>
                            </td>
                            
                              <td class="center" colspan="3">
                                <a href="#">EVAP. mm.</a>
                            </td>
                            <td class="center" colspan="3">
                                <a href="#">DRY BULB</a>
                            </td>
                             <td class="center" colspan="3">
                                <a href="#">WET BULB</a>
                            </td>
                             <td class="center" colspan="3">
                                <a href="#">DEW POINT</a>
                            </td>
                            <td class="center" >
                                
                            </td>
                            
                        </tr>
                       
                         <?php 
                        for($d=1;$d<32; $d++){
                        ?>
                         <tr>
                             
                             <td class="small" ><input type="text" class="input-mini" /></td>
                             <td class="small" ><input type="text" class="input-mini" /></td>
                              <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small"> <input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /></td>
                              <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small"> <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /></td>
                              <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small"> <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                              <td class="small" ><input type="text" class="input-mini" /></td>
                              <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small"> <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small"> <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /> </td>
                             <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small"> <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /> </td>
                             <td class="small" ><input type="text" class="input-mini" /></td>
                             <td class="small"><input type="text" class="input-mini" /></td>
                             <td class="small"><input type="text" class="input-mini" /></td>
                              <td class="small"><input type="text" class="input-mini" /></td>
                              <td class="small"> <input type="text" class="input-mini" /></td>

                            <td class="small">  <input type="text" class="input-mini" /> </td>
                            <td class="small" > <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /> </td>

                             <td class="small" ><input type="text" class="input-mini" /></td>

                             <td  class="small"><input type="text" class="input-mini" /></td>

                             <td  class="small"><input type="text" class="input-mini" /></td>
                              <td  class="small"><input type="text" class="input-mini" /></td>
                        </tr>
                        <?php
                        } 
                        ?>
                  
                        <tr>
                            <td class="small" colspan="20" >  <button onclick="return false;" class="width-65 pull-right btn btn-small btn-success"  style="width: 10% !important;" >
                                                           Submit

                                                        </button></td>  
                             
                        </tr>
                     
                    </tbody>
                </table>


                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->

        </div><!--/.main-container-->

        <?php require_once(APPPATH . 'views/footer.php'); ?>


