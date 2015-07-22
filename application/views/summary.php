<?php require_once(APPPATH . 'views/header.php'); ?>


<div class="main-container container-fluid">

    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                <i class="icon-edit icon-2x green"></i>
        Form 10 (Rev.2003) Weather summary

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
                            
                            <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>
<label> Month/Year </label>
                            <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>


                                                  
                        </div>


            
                </div>
                
                <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                    
                    <tbody>
                        <tr>
                            <th >
                                
                            </th>
                            <th colspan="3"  >
                               
                            </th>
                            <th colspan="9" >
                                <label>
                                   0600Z
                                </label>
                            </th>
                            <th colspan="9" >
                                <label>
                                  1200Z
                                </label>
                            </th>
                             <th colspan="2" >
                                <label>
                                 
                                </label>
                            </th>
                             <th colspan="6" >
                                <label>
                                 DAYS WITH
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <td class="center-head">
                                <label>
                                   DATE
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">MAX <span class="degree">o</span>C</a>
                            </td>
                             <td class="center">
                                <a href="#">MIN <span class="degree">o</span>C</a>
                            </td>
                         
                            
                              <td class="center">
                                <a href="#">SUNSHINE <span class="degree">o</span>C</a>
                            </td>
                       
                             <td class="center" >
                                <a href="#">DB</a>
                            </td>
                              <td class="center" >
                                <a href="#">WB</a>
                            </td>
                              <td class="center" >
                                <a href="#">DP</a>
                            </td>
                        
                           
                              <td class="center">
                                <a href="#">VP</a>
                            </td>
                          

                            <td class="center" >
                                <a href="#">RH</a>
                            </td>
                         
                            
                              <td class="center">
                                <a href="#">CLP</a>
                            </td>
                       
                             <td class="center" >
                                <a href="#">GPM</a>
                            </td>
                        
                           
                              <td class="center">
                                <a href="#">WIND DIR</a>
                            </td>
                             <td class="center">
                                <a href="#">FF</a>
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
                                <a href="#">VP</a>
                            </td>
                             <td class="center">
                                <a href="#">RH</a>
                            </td>
                             <td class="center">
                                <a href="#">CLP</a>
                            </td>
                             <td class="center">
                                <a href="#">GPM</a>
                            </td>
                             <td class="center">
                                <a href="#">WIND DIR</a>
                            </td>
                             <td class="center">
                                <a href="#">FF</a>
                            </td>
                            <td class="center">
                                <a href="#">WIND RUN</a>
                            </td>
                            <td class="center">
                                <a href="#">R/F</a>
                            </td>
                            <td class="center">
                                <a href="#">R/DAY</a>
                            </td><td class="center">
                                <a href="#">T<span class="foot-note">s</span></a>
                            </td>
                            <td class="center">
                                <a href="#">F<span class="foot-note">g</span></a>
                            </td>
                             <td class="center">
                                <a href="#">H<span class="foot-note">z</span></a>
                            </td>
                             <td class="center">
                                <a href="#">HAIL</a>
                            </td>
                             <td class="center">
                                <a href="#">EARTH</a>
                            </td>
                            
                        </tr>
                        <?php 
                        for($d=1;$d<32; $d++){
                        ?>
                           <tr>
                            <td class="small" >  <input type="text" class="input-mini" value="<?= $d;?>" />  </td>
                            <td class="small" >  <input type="text" class="input-mini" />  </td>
                            <td class="small"> <input type="text" class="input-mini" id ="d_<?= $d;?>" name="s_<?= $d;?>" /></td>
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
                               <td class="small"> <input type="text" class="input-mini" /></td>

                            <td class="small">  <input type="text" class="input-mini" /> </td>
                            <td class="small" > <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /> </td>

                             <td class="small" ><input type="text" class="input-mini" /></td>
                             <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /> </td>

                             <td class="small" ><input type="text" class="input-mini" /></td>

                           
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


