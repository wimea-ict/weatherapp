<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />


        <div class="page-header position-relative">
            <h3>AAXX SYNOPTIC REGISTER   </h3>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->
  <form id="edit-form" name="edit-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/synoptic/save'  method="post">            

                <div class="form-group well alert-info">


                    <span class="span3 ">Station : <select id="station" name="station">
                            <option value="<?= $user->station ?>" /><?= $user->station ?>
                            <?php
                            if (is_array($stations) && count($stations)) {
                                foreach ($stations as $loop) {
                                    ?>                        
                                    <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                <?php
                                }
                            }
                            ?>
                        </select></span>

                    <span for="form-field-select-1">Station No:<input class="form-control"  id="number" readonly="" name="number" ></input>   
                    </span>
                    <span> Select the date:<input class="span3 date-picker" id="datenow" value="<?php echo date('Y-m-d') ?>"  name="datenow" type="text" data-date-format="yyyy-mm-dd" />
                        <span class="add-on">
                            <i class="icon-calendar"></i>
                        </span>
                    </span>
                </div>
       <?php echo $this->session->flashdata('msg');?>
                 <?php
                          // var_dump($metas);
              $datetime= date('d'). date('H')."00Z";
                            if (is_array($metas) && count($metas)) {
                                foreach ($metas as $loop) {
                                 // echo  '<br>here'.$loop->datetime;
                                  if ($loop->datetime==$datetime){
                                   $wind = $loop->wind_speed;
                                   $direction = $loop->wind_direction;
                                   $pressure = $loop->station_pressure_hpa;
                                   $temperature = $loop->air_temperature;
                                   $dew = $loop->dew_temperature;
                                   $wet = $loop->wet_bulb;
                                   $humidity = $loop->humidity;
                                   $vap = $wet*$dew;                                   
                                }                                   
                                }
                                }
                                    ?>   
             
      <div class="success">
                    <h4>AAXX Info</h4>
                    Block Number:<?=$loop->station?>
                    Station:<?=$loop->station?>
                    Date:<?=  date('Y-m-d')?>
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                 <td >Time</td> 
                                <td >Inclusion or omission of precipitation</td>                               
                                
                                <td >Type of station/present & past weather</td>
                                <td > Height of lowest cloud cover </td>
                               
                                <td> Horizontal visibility</td>
                                <td > Total cloud cover </td>
                                <td >Wind speed(KT) </td>
                                <td > Wind direction  </td >
                            </tr>
                        </thead>
                         <tr>                                
                               

                                <td> GGG </td>
                           
                                <td class="hidden-phone"><a href="#">i<span class="foot-note">R</span></a></td>

                                <td class="hidden-480"><a href="#">i<span class="foot-note">X</span></a> </td>


                                <td>h</td>
                               
                                <td> VV</td>
                                <td>N</td>
                                <td>dd</td>
                                <td> ff</td>
                                

                            </tr>

                        <tbody>
                            <?php
                          //  var_dump($metas);
                             
                            if (is_array($metas) && count($metas)) {
                                foreach ($metas as $loop) {
                                     if ($loop->datetime!=$datetime){
                                  
                                ?> 
                            <tr>

                              

                                <td><?=$loop->datetime?>  </td>
                                <td><?=$loop->ir?></td>
                               
                                <td ><span class="center"><?=$loop->ix?></span>  </td>


                                <td> <?=$loop->h?></td>
                                <td><?=$loop->vv?> </td>
                               
                                <td><?=$loop->n?> </td>
                                <td> <?=$loop->wind_speed; ?></td>
                                <td> <?=$loop->wind_direction; ?></td>

                            </tr>
                                <?php   } } }  ?>  
                            <tr>

                                <td><input type="text" id="time" name="time" class="input-minis" style="border: none;" value="<?php echo date('d'). date('H')."00Z";?>"  /></td>

                                <td><input type="text"  id="ir" name="ir" class="input-minis" />  </td>
                                <td><input type="text" id="ix" name="ix" class="input-minis"  /></td>
                                
                                <td class="hidden-480">
                                    <span class="center"><input type="text" id="h" name="h" class="input-minis"  /></span>
                                </td>
                               
                                <td> <input type="text" id="vv" name="vv" class="input-minis"  /></td>
                                <td> <input type="text" id="n" name="n" class="input-minis"  /></td>
                                <td> <input type="text" id="dd" name="dd" class="input-minis" value="<?= $wind;?>"  /></td>
                                <td> <input type="text" id="ff" name="ff" class="input-minis"  value="<?= $direction;?>" /></td>
                               

                            </tr>


                        </tbody>
                    </table>
                                     <h4>Section one</h4>
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                        <thead>
                                <tr>
                            <td >
                               Air temperature
                            </td>
                            <td>Dew point temperature</td>
                            <td >Pressure at station level</td>
                            <td >Group Indicator Standard isobaric surface</td>

                            <td class="hidden-phone"> Geopotential of standard Isobaric surface  </td>
                            <td class="hidden-480">Amount of precipitation</td>

                            <td>Duration period of precipitation</td>
                            <td class="hidden-phone"> Present weather </td>
                            <td class="hidden-phone"> Past weather</td>
                            <td class="hidden-phone"> Amount of clouds(Cl) </td>
                            <td class="hidden-phone"> Clouds (Sc,St,Cu,Cb)</td>
                            <td class="hidden-phone">Clouds (Ac,As,Ns) </td>
                            <td class="hidden-phone">Clouds (C,Cc,Cs) </td>
                            <td class="hidden-phone"></td>
                        </tr>
                         
                        </thead>
                     


                        <tbody>
                            <tr>                                
                                <td> TTT</td>

                                <td>  <a href="#">T <span class="foot-note">d</span>T<span class="foot-note">d</span>T<span class="foot-note">d</span></a>
                                </td>
                                <td> <a href="#">P<span class="foot-note">0</span>P<span class="foot-note">0</span>P<span class="foot-note">0</span>P<span class="foot-note">0</span></a>
                                </td>
                                <td class="hidden-480"><span>4</span> <span>8</span></span></td>
                                <td class="hidden-phone">hhh</td>

                                <td class="hidden-480">RRR     </td>


                                <td>T<span class="foot-note">r</span></td>
                                <td> WWW</td>
                                <td> W<span class="foot-note">1</span>W<span class="foot-note">1</span></td>
                                <td>N<span class="foot-note">h</span> </td>
                                <td>C<span class="foot-note">L</span> </td>
                                <td> C<span class="foot-note">m</span></td>
                                <td>C<span class="foot-note">h</span></td>
                                <td> </td>
                                <td> </td>

                            </tr>
                            
                             <?php
                           // var_dump($metas);
                             
                            if (is_array($metas) && count($metas)) {
                                foreach ($metas as $loop) {
                                   if ($loop->datetime!=$datetime){
                                ?> 
                             <tr>

                                <td> <?=$loop->air_temperature?> </td>

                                <td><?=$loop->dew_temperature?>  </td>
                                <td><?=$loop->station_pressure_hpa?></td>
                                <td><?=$loop->gisis?></td>
                                <td ><?=$loop->hhh?></td>
                                <td ><span class="center"><?=$loop->rrr?></span> </td>
                                <td><?=$loop->tr?></td>
                                <td><?=$loop->present?> </td>
                                <td><?=$loop->past?> </td>
                                <td> <?=$loop->nh?></td>
                                <td><?=$loop->cl?> </td>
                                <td><?=$loop->cm?></td>
                                <td> <?=$loop->ch?></td>
                                <td><?=$loop->tq?> </td>

                            </tr>
                            
                            
                            
                                   <?php }}} ?>
                            <tr>

                                <td> <input type="text" id="T" name="T" class="input-minis" value="<?php echo $temperature; ?>"  /> </td>

                                <td><input type="text" id="Td" name="Td" class="input-minis" value="<?php echo $dew; ?>" />  </td>
                                <td><input type="text" id="Po" name="Po" class="input-minis" value="<?php echo  $pressure; ?>"  /></td>
                                <td class="hidden-480"><input type="text" id="gisis" name="gisis" class="input-minis"  /></td>

                                <td class="hidden-480">
                                    <span class="center"><input type="text" id="rrr" name="rrr" class="input-minis"  /></span>
                                </td>


                                <td><input type="text" id="Tr" name="Tr" class="input-minis"  /> </td>
                                <td> <input type="text" id="present" name="present" class="input-minis"  /></td>
                                <td> <input type="text" id="past" name="past" class="input-minis"  /></td>
                                <td> <input type="text" id="Nh" name="Nh" class="input-minis"  /></td>
                                <td> <input type="text" id="Cl" name="Cl" class="input-minis"  /></td>
                                <td> <input type="text" id="Cm" name="Cm" class="input-minis"  /></td>
                                <td> <input type="text" id="Ch" name="Ch" class="input-minis"  /></td>
                                <td> <input type="text" id="maxtemp" name="maxtemp" class="input-minis"  /></td>

                            </tr>



                        </tbody>
                    </table>
                                         <h4>Section indicator 333</h4>
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                      
                            
                                            <tr>
                                                <td >   <div><span>Grass minimum temperature</span></div></td>
                                                <td > <div><span>Character & intensity of precipitation</span></div></td>
                                                <td ><div><span>Beginning or end of precipitation</span></div></td>
                                                <td ><div><span>Maximum temperature</span></div></td>
                                                <td > <div><span>Minimum temperature</span></div> </td>
                                                <td ><div><span>Amount of evaporation</span></div></td>

                                                <td ><div><span>Indicator of  type of instrument</span></div></td>
                                                <td ><div><span> Duration of sunshine</span></div></td>
                                                <td><div><span>Sign of pressure change</span></div></td>
                                                <td > <div><span>Pressure change in 24 hours </span></div></td>
                                                <td ><div><span> Amount of precipitation</span></div></td>
                                                
<td ><div><span> Duration period of precipitation</span></div></td>
                                                <td ><div><span>Amount of individual cloud layer</span></div> </td>
                                                <td ><div><span>Genus of cloud </span></div> </td>
                                                <td ><div><span>Height of base cloud layer or mass</span></div></td>

                                                <td ><div><span>Amount of individual cloud layer</span></div> </td>
                                                <td ><div><span>Genus of cloud</span></div>  </td>
                                                <td ><div><span>Height of base cloud layer or mass</span></div></td>

                                                <td ><div><span>Amount of individual cloud layer</span></div> </td>
                                                <td ><div><span>Genus of cloud</span></div>  </td>
                                                            <td ><div><span>Height of base cloud layer or mass</span></div></td>
                                                                                  
                                                            <td ><div ><span><br><br> <br>Supplementary information<br>9 11 ff highest gust <br>9 12 ff highest mean wind speed<br>9 43CL DP movement of C clouds</span></div></td>

                                                           

                                                            </tr>
                                                            <tbody>
                                                                <tr>                                
                                                                    <td class="span1">T <span class="foot-note">Q</span>T<span class="foot-note">Q</span></td>
                                                                    <td><label class="">R <span class="foot-note">0</span></label>  </td>
                                                                    <td>R <span class="foot-note">1</span>   </td>
                                                                    <td>T <span class="foot-note">x</span>T<span class="foot-note">x</span>T<span class="foot-note">x</span></td>
                                                <td class="hidden-phone">T <span class="foot-note">m</span>T<span class="foot-note">m</span>T<span class="foot-note">m</span></td>

                                                <td class="hidden-480">EE </td>


                                                <td>E</td>
                                                <td> SSS</td>
                                                <td> 9<br>8</td>
                                                <td>P<span class="foot-note">24</span>P<span class="foot-note">24</span>P<span class="foot-note">24</span> </td>
                                                <td>RRR</td>
                                                <td> t<span class="foot-note">R</span></td>
                                                <td>N<span class="foot-note">s</span></td>
                                                <td>C </td>
                                                <td> h<span class="foot-note">s</span> h<span class="foot-note">s</span></td>
                                                 <td>N<span class="foot-note">s</span></td>
                                                <td>C </td>
                                                <td> h<span class="foot-note">s</span> h<span class="foot-note">s</span></td>
                                                <td>N<span class="foot-note">s</span></td>
                                                <td>C </td>
                                                <td> h<span class="foot-note">s</span> h<span class="foot-note">s</span></td>
                                                
                                                <td > </td>
                                              
                                            </tr>
                         <?php
                           // var_dump($metas);
                             
                            if (is_array($metas) && count($metas)) {
                                foreach ($metas as $loop) {
                                   if ($loop->datetime!=$datetime){
                                ?> 
                                        <tr>

                                                <td><?=$loop->Tq?>  </td>
                                                <td> <?=$loop->Ro?> </td>
                                                <td><?=$loop->R1?>  </td>
                                                <td><?=$loop->Tx?>  </td>
                                                <td><?=$loop->Tm?> </td>
                                                <td><?=$loop->EE?>  </td>
                                                <td> <?=$loop->E?> </td>
                                                <td> <?=$loop->sss?> </td>
                                                <td> <?=$loop->pchange?></td>
                                                <td><?=$loop->p24?>  </td>
                                                <td> <?=$loop->rr?></td>
                                                <td><?=$loop->tr1?> </td>
                                                <td><?=$loop->ns?></td>
                                                <td ><?=$loop->c?></td>
                                                <td ><?=$loop->hs?></td>
                                                <td >  <span class="center"><?=$loop->ns1?></span> </td>
                                                <td> <?=$loop->c1?></td>
                                                <td><?=$loop->hs1?> </td>
                                                <td> <?=$loop->ns2?></td>
                                                <td> <?=$loop->c2?></td>
                                                <td><?=$loop->hs2?></td>
                                                <td><?=$loop->supplementary?> </td>
                                            </tr>      
                                            
                                   <?php } }}?>
                                            <tr>

                                                <td> <input type="text" id="Tq" name="Tq" class="input-minis"  /> </td>
                                                <td><input type="text" id="Ro" name="Ro" class="input-minis" />  </td>
                                                <td><input type="text" id="R1" name="R1" class="input-minis" />  </td>
                                                <td><input type="text" id="Tx" name="Tx" class="input-minis" />  </td>
                                                <td><input type="text" id="Tm" name="Tm" class="input-minis" />  </td>
                                                <td><input type="text" id="EE" name="EE" class="input-minis" />  </td>
                                                <td><input type="text" id="E" name="E" class="input-minis" />  </td>
                                                <td><input type="text" id="sss" name="sss" class="input-minis" />  </td>
                                                <td><input type="text" id="pchange" name="pchange" class="input-minis" />  </td>
                                                <td><input type="text" id="p24" name="p24" class="input-minis" />  </td>
                                                <td><input type="text" id="rr" name="rr" class="input-minis" />  </td>

                                                <td><input type="text" id="tr1" name="tr1" class="input-minis" />  </td>
                                                <td><input type="text" id="ns" name="ns" class="input-minis"  /></td>
                                                <td class="hidden-480"><input type="text" id="c" name="c" class="input-minis"  /></td>
                                                <td class="hidden-phone"><input type="text" id="hs" name="hs" class="input-minis"  /></td>

                                                <td class="hidden-480">
                                                    <span class="center"><input type="text" id="ns1" name="ns1" class="input-minis"  /></span>
                                                </td>


                                                <td><input type="text" id="c1" name="c1" class="input-minis"  /> </td>
                                                <td> <input type="text" id="hs1" name="hs1" class="input-minis"  /></td>
                                                <td> <input type="text" id="ns2" name="ns2" class="input-minis"  /></td>
                                                <td> <input type="text" id="c2" name="c2" class="input-minis"  /></td>
                                                <td> <input type="text" id="hs2" name="hs2" class="input-minis"  /></td>
                                                <td > <input type="text" id="supplementary" name="supplementary"   /></td>
                                            </tr>



                                            </tbody>
                                            </table>
                                            <h4>Section 555</h4>
                                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                                   
                                                    <tr>
                                                        <td>      <span >Wet bulb Temperature</span>  </td>
                                                        
                                                        <td><span>Relative Humidity(RH)</span></td>
                                                      
                                                        <td>Vapour Pressure(VAP)</td>
                                                        <td></td>
                                                        
                                                    </tr>                                                    
                                                     <?php
                           // var_dump($metas);
                             
                            if (is_array($metas) && count($metas)) {
                                foreach ($metas as $loop) {
                                     if ($loop->datetime!=$datetime){
                            ?>   
                                                    <tr>
                                                        
                                                     
                                                        <td><?=$loop->wet_bulb?></td>
                                                    
                                                        <td><?=$loop->humidity?></td>
                                                     
                                                        <td></td>
                                                        
                                     </tr><?php } }}?>
                                                     <tr>
                                                     
                                                         <td><input type="text" id="wb" name="wb" value="<?=$wet?>" class="input-minis"  /></td>
                                                    
                                                         <td><input type="text" id="rh" name="rh" value="<?=$humidity?>"class="input-minis"  /></td>
                                                     
                                                         <td><input type="text" id="vap" name="vap" value="<?=$vap?>" class="input-minis"  /></td>
                                                        
                                                    </tr>
                                                    <tr> </tr>
                                                </table>



                </div>
<button  class="width-65 pull-right btn btn-small btn-yellow"  style="width: 10% !important; margin-bottom: 5px;" >
                                                        Submit 

                                                    </button>
            </form>                              <!--PAGE CONTENT ENDS-->

                                            </div><!--/.page-content-->

                                            </div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_calendar.php'); ?>

 <script type="text/javascript">
            $("table").each(function () {
                var $this = $(this);
                var newrows = [];
                $this.find("tr").each(function () {
                    var i = 0;
                    $(this).find("td").each(function () {
                        i++;
                        if (newrows[i] === undefined) {
                            newrows[i] = $("<tr></tr>");
                        }
                        newrows[i].append($(this));
                    });
                });
                $this.find("tr").remove();
                $.each(newrows, function () {
                    $this.append(this);
                });
            });
        </script>
