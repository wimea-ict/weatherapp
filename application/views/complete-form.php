
<div class=" container-fluid">
      <div class="page-content">
           <div class="row-fluid">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />   

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

       
             AAXX SYNOPTIC REGISTER
              <a href="<?php echo base_url() . "index.php/synoptic/vertical"; ?>">  View vertical form</a>
              <a href="<?php echo base_url() . "index.php/synoptic/full"; ?>">  complete vertical form</a>
            
        </div><!--/.page-header-->

       
     <form id="edit-form" name="edit-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/synoptic/save'  method="post">            

              
     
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
                   
      <div class="well ">
                  
                      Block Number:<?=$loop->station?>
                    Station:<?=$loop->station?>
                    Date:<?=  date('Y-m-d')?>
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr >
                                 <td  ><div><span> Time</span></div></td> 
                                <td   ><div><span> Inclusion or omission of precipitation</span></div></td>                               
                                
                                <td ><div><span> Type of station/present & past weather</span></div></td>
                                <td><div><span>  Height of lowest cloud cover</span></div> </td>
                               
                                <td ><div><span>  Horizontal visibility</span></div></td>
                                <td ><div><span>  Total cloud cover</span></div> </td>
                                <td ><div><span> Wind speed(KT)</span></div> </td>
                                <td ><div><span>  Wind direction</span></div>  </td >
                                 <td ><div><span> Air temperature</span></div> </td>
                            <td ><div><span><label>Dew point temperature</label></span></div></td>
                            <td ><div><span><label>Pressure at station level</label></span></div></td>
                            <td ><div><span>Group Indicator Standard isobaric surface</span></div></td>

                            <td ><div><span> Geopotential of standard Isobaric surface</span></div>  </td>
                            <td ><div><span>Amount of precipitation</span></div></td>

                            <td ><div><span>Duration period of precipitation</span></div></td>
                            <td ><div><span> Present weather </span></div></td>
                            <td ><div><span> Past weather</span></div></td>
                            <td ><div><span> Amount of clouds(Cl)</span></div> </td>
                            <td ><div><span> Clouds (Sc,St,Cu,Cb)</span></div></td>
                            <td ><div><span>Clouds (Ac,As,Ns) </span></div></td>
                            <td ><div><span>Clouds (C,Cc,Cs) </span></div></td>
                            <td ></td>
                                            <td >   <div><span>Grass minimum temperature</span></div></td>
                                                <td > <div><span>Character & intensity of precipitation</span></div></td>
                                                <td ><div><span>Beginning or end of precipitation</span></div></td>
                                                <td ><div><span>Maximum temperature</span></div></td>
                                                <td > <div><span>Minimum temperature</span></div> </td>
                                                <td ><div><span>Amount of evaporation</span></div></td>

                                                <td ><div><span>Indicator of  type of instrument</span></div></td>
                                                <td ><div><span> Duration of sunshine</span></div></td>
                                                <td ><div><span>Sign of pressure change</span></div></td>
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
                                                <td><div><span>Genus of cloud</span></div>  </td>
                                                            <td ><div><span>Height of base cloud layer or mass</span></div></td>
                                                                                  
                               <td   colspan="2"><div ><span><br><br> <br>Supplementary information<br>9 11 ff highest gust <br>9 12 ff highest mean wind speed<br>9 43CL DP movement of C clouds</span></div></td>

                             <td > <div><span> <span >Wet bulb Temperature</span></span></div>   </td>
                                                        
                                                        <td ><div><span> <span>Relative Humidity(RH)</span></span></div> </td>
                                                      
                                                        <td ><div><span> Vapour Pressure(VAP)</span></div> </td>
                                                        <td></td>
                            </tr>
                        </thead>
                         <tr bgcolor="#F7ECF2">                                
                               

                                <td> GGG </td>
                           
                                <td class="hidden-phone"><a href="#">i<span class="foot-note">R</span></a></td>

                                <td class="hidden-480"><a href="#">i<span class="foot-note">X</span></a> </td>


                                <td>h</td>
                               
                                <td> VV</td>
                                <td>N</td>
                                <td>dd</td>
                                <td> ff</td>
                                       <tr bgcolor="#F7ECF2">                                
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
                                                
                                                <td colspan="1"> </td>

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
                                                <td colspan="3"><?=$loop->supplementary?> </td>
 <td><?=$loop->wet_bulb?></td>
                                                    
                                                        <td><?=$loop->humidity?></td>
                                                     
                                                        <td></td>
                            </tr>
                                <?php   } } }  ?>  
                   


                        </tbody>
                    </table>
                                   
       
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                       
                                            <tr>
                                
                                                           

                                                            </tr>
                                                            <tbody>
                                                                <tr>                                
                                            
                                              
                                            </tr>
                         <?php
                           // var_dump($metas);
                             
                            if (is_array($metas) && count($metas)) {
                                foreach ($metas as $loop) {
                                   if ($loop->datetime!=$datetime){
                                ?> 
                                        <tr>

                                                
                                            </tr>      
                                            
                                   <?php } }}?>

                                            </tbody>
                                            </table>
                                           
                                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                                  
                                                    <tr>
                                                      
                                                        
                                                    </tr>                                                    
                                                     <?php
                           // var_dump($metas);
                             
                            if (is_array($metas) && count($metas)) {
                                foreach ($metas as $loop) {
                                     if ($loop->datetime!=$datetime){
                            ?>   
                                                    <tr>
                                                        
                                                     
                                                       
                                                        
                                     </tr><?php } }}?>
                                                    
                                                  
                                                </table>



                </div>

                <div class="well ">
   

<button  class="width-65 pull-right btn btn-small btn-yellow"  style="width: 10% !important; margin-bottom: 5px;" >
                                                        Submit 

                                                    </button>

                </div>
            </form>   
        </div>
          </div>
    </div>


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
        </script>-->
