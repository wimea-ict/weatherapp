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


            <div class="page-header position-relative">
                <h3>
                    AAXX SYNOPTIC REGISTER
                </h3>
                <a href="<?php echo base_url() . "index.php/synoptic/vertical"; ?>">  View vertical form</a>
                <a href="<?php echo base_url() . "index.php/synoptic/full"; ?>">  complete vertical form</a>

            </div><!--/.page-header-->


            <div class="vspace-6"></div>

            <div class="span12">
                <!--PAGE CONTENT BEGINS-->
                <div class="row-fluid">


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
                        <?php echo $this->session->flashdata('msg'); ?>

                        <div class="span12">
                            <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs" id="myTab3">
                                    <li class="active">
                                        <a data-toggle="tab" href="#info">
                                            <i class="pink icon-dashboard bigger-110"></i>
                                            AAXX Info
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#one">
                                            Section one
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#333">
                                            Section indicator 333
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#555">                 
                                            Section indicator 555
                                        </a>
                                    </li>          
                                </ul>

                                <div class="tab-content">
                                    <div id="info" class="tab-pane in active">
                                        <div class="span12">     

                                            <label>Time:GGG</label>
                                            <input type="text" id="time" name="time" class=""  value="<?php echo date('d') . date('H') . "00Z"; ?>"  />
                                            <label> Inclusion or omission of precipitation(ir)</label>
                                            <input type="text"  id="ir" name="ir" class="" /> 
                                            <label> Type of station/present & past weather(ix)</label>
                                            <input type="text" id="ix" name="ix" class=""  />
                                            <label>  Height of lowest cloud cover (h)   </label> 
                                            <span class="center"><input type="text" id="h" name="h" class=""  /></span>
                                            <label>  Horizontal visibility(vv)</label>
                                            <input type="text" id="vv" name="vv" class=""  />
                                            <label>    Total cloud cover(N)</label>
                                            <input type="text" id="n" name="n" class=""  />
                                            <label>  Wind speed(KT)  </label>
                                            <input type="text" id="dd" name="dd" class="" value="<?= $wind; ?>"  />
                                            <label>   Wind direction(ff)</label>
                                            <input type="text" id="ff" name="ff" class=""  value="<?= $direction; ?>" />

                                        </div> 


                                    </div>


                                    <div id="one" class="tab-pane">
                                        <div class="span12">  
                                            <label>  <span class="lbl">Air temperature</span></label>
                                            <input type="text" id="T" name="T" class="" value="<?php echo $temperature; ?>"  /> 
                                            <label>Dew point temperature</label>
                                            <input type="text" id="Td" name="Td" class="" value="<?php echo $dew; ?>" /> 
                                            <label>Pressure at station level</label>
                                            <input type="text" id="Po" name="Po" class="" value="<?php echo $pressure; ?>"  />                     
                                            <label>   Group Indicator Standard isobaric surface</label>
                                            <input type="text" id="gisis" name="gisis" class=""  />
                                            <label>  Geopotential of standard Isobaric surface </label>
                                            <input type="text" id="rrr" name="rrr" class=""  />
                                            <label>  Amount of precipitation</label>
                                            <input type="text" id="Tr" name="Tr" class=""  />
                                            <label>   Duration period of precipitation</label> 

                                            <label>  Present weather </label>
                                            <input type="text" id="present" name="present" class=""  />
                                            <label>   Past weather</label>
                                            <input type="text" id="past" name="past" class=""  />
                                            <label>   Amount of clouds(Cl) </label>
                                            <input type="text" id="Nh" name="Nh" class=""  />
                                            <label>   Clouds (Sc,St,Cu,Cb)</label>
                                            <input type="text" id="Cl" name="Cl" class=""  />
                                            <label>  Clouds (Ac,As,Ns) </label>
                                            <input type="text" id="Cm" name="Cm" class=""  />
                                            <label>  Clouds (C,Cc,Cs) </label>
                                            <input type="text" id="Ch" name="Ch" class=""  />

                                            <label>Maximum temperature</label>
                                            <input type="text" id="maxtemp" name="maxtemp" class=""  />
                                        </div>




                                    </div>                       



                                    <div id="333" class="tab-pane">

                                        <div class="span12"> 
                                            <label>Grass minimum temperature</label>
                                            <input class="span6" type="text" id="Tq" name="Tq" class=""  />
                                            <label>Character & intensity of precipitation</label>
                                            <input class="span6" type="text" id="Ro" name="Ro" class="" /> 
                                            <label>Beginning or end of precipitation</label>
                                            <input  class="span6" type="text" id="R1" name="R1" class="" />
                                            <label>Maximum temperature</label>
                                            <input  class="span6" type="text" id="Tx" name="Tx" class="" />
                                            <label>Minimum temperature</label><br>
                                            <input class="span6" type="text" id="Tm" name="Tm" class="" />
                                            <label>Amount of evaporation</label>
                                            <input class="span6" type="text" id="EE" name="EE" class="" /> 
                                            <label>Indicator of  type of instrument</label>
                                            <input class="span6" type="text" id="E" name="E" class="" /> 
                                            <label> Duration of sunshine</label>
                                            <input class="span6" type="text" id="sss" name="sss" class="" />
                                            <label>Sign of pressure change</label>
                                            <input class="span6" type="text" id="pchange" name="pchange" class="" />  
                                            <label>Pressure change in 24 hours </label>
                                            <input class="span6" type="text" id="p24" name="p24" class="" />                        
                                            <label> Amount of precipitation</label>
                                            <input class="span6" type="text" id="rr" name="rr" class="" />
                                            <label> Duration period of precipitation</label>
                                            <input class="span6" type="text" id="tr1" name="tr1" class="" />                       
                                            <label>Amount of individual cloud layer</label>
                                            <input class="span6" type="text" id="ns" name="ns" class=""  />

                                            <label>Genus of cloud </label>
                                            <input class="span6" type="text" id="c" name="c" class=""  />
                                            <label>Height of base cloud layer or mass</label>
                                            <input class="span6" type="text" id="hs" name="hs" class=""  />
                                            <label>Amount of individual cloud layer</label>
                                            <input class="span6" type="text" id="ns1" name="ns1" class="i"  />
                                            <label>Genus of cloud </label>
                                            <input class="span6" type="text" id="c1" name="c1" class=""  />
                                            <label>Height of base cloud layer or mass</label>
                                            <input class="span6" type="text" id="hs1" name="hs1" class=""  />
                                            <label>Amount of individual cloud layer</label>
                                            <input class="span6" type="text" id="ns2" name="ns2" class=""  />
                                            <label>Genus of cloud</label>
                                            <input class="span6" type="text" id="c2" name="c2" class=""  />
                                            <label>Height of base cloud layer or mass</label>
                                            <input class="span6" type="text" id="hs2" name="hs2" class=""  />

                                            <label>Supplementary information<br>9 11 ff highest gust <br>9 12 ff highest mean wind speed<br>9 43CL DP movement of C clouds</label>
                                            <input class="span6" type="text" id="supplementary" name="supplementary"   />

                                        </div>
                                    </div>
                                    <div id="555" class="tab-pane">

                                        Group indicator  Sign of data 1 S<br>

                                        <label >Wet bulb Temperature</label>  
                                        <input type="text" id="wb" name="wb" value="<?= $wet ?>"   />
                                        <label>Relative Humidity(RH)</label>
                                        <input type="text" id="rh" name="rh" value="<?= $humidity ?>"  />
                                        <label>  Vapour Pressure(VAP)</label>
                                        <input type="text" id="vap" name="vap" value="<?= $vap ?>"   />    

                                        <button  class=" pull-right btn btn-small btn-yellow span3"   >
                                            Submit 

                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div><!--/span-->






                        <?php
                        // var_dump($metas);
                        $datetime = date('d') . date('H') . "00Z";
                        if (is_array($metas) && count($metas)) {
                            foreach ($metas as $loop) {
                                // echo  '<br>here'.$loop->datetime;
                                if ($loop->datetime == $datetime) {
                                    $wind = $loop->wind_speed;
                                    $direction = $loop->wind_direction;
                                    $pressure = $loop->station_pressure_hpa;
                                    $temperature = $loop->air_temperature;
                                    $dew = $loop->dew_temperature;
                                    $wet = $loop->wet_bulb;
                                    $humidity = $loop->humidity;
                                    $vap = $wet * $dew;
                                }
                            }
                        }
                        ?>   

                        <div class="success">
                            <h4>AAXX Info</h4>
                            Block Number:<?= $loop->station ?>
                            Station:<?= $loop->station ?>
                            Date:<?= date('Y-m-d') ?>
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr >
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
                                <tr bgcolor="#F7ECF2">                                


                                    <td>  </td>

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
                                            if ($loop->datetime != $datetime) {
                                                ?> 
                                                <tr>
                                                    <td><?= $loop->datetime ?>  </td>
                                                    <td><?= $loop->ir ?></td>

                                                    <td ><span class="center"><?= $loop->ix ?></span>  </td>


                                                    <td> <?= $loop->h ?></td>
                                                    <td><?= $loop->vv ?> </td>

                                                    <td><?= $loop->n ?> </td>
                                                    <td> <?= $loop->wind_speed; ?></td>
                                                    <td> <?= $loop->wind_direction; ?></td>

                                                </tr>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>  


                                </tbody>
                            </table>
                            <h4>Section one</h4>
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>

                                    <tr>

                                        <td colspan="1">
                                            <div><span>  <span class="lbl">1 S<span class="foot-note">n</span></span><br>1 0
                                                </span></div>
                                        </td>
                                        <td> <label>                                       
                                                <span class="lbl">2 S<span class="foot-note">n</span></span><br>2 0
                                            </label></td>
                                        <td class="center"><label>Group indicator</label><br>3</td>
                                        <td class="hidden-480" colspan="2"></td>


                                        <td class="hidden-480" colspan="2">Group indicator <br>6</td>


                                        <td class="hidden-phone" colspan="2">Group indicator <br>7 </td>

                                        <td class="hidden-phone" colspan="4">Group indicator <br>8 </td>

                                        <td class="hidden-phone"></td>
                                    </tr>
                                </thead>
                                <tr>
                                    <td class="center">
                                        <label>                                       
                                            <span class="lbl">Air temperature</span>
                                        </label>
                                    </td>
                                    <td><label>Dew point temperature</label></td>
                                    <td class="center"><label>Pressure at station level</label></td>
                                    <td class="hidden-480">Group Indicator Standard isobaric surface</td>

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


                                <tbody>
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

                                    </tr>

                                    <?php
                                    // var_dump($metas);

                                    if (is_array($metas) && count($metas)) {
                                        foreach ($metas as $loop) {
                                            if ($loop->datetime != $datetime) {
                                                ?> 
                                                <tr>

                                                    <td> <?= $loop->air_temperature ?> </td>

                                                    <td><?= $loop->dew_temperature ?>  </td>
                                                    <td><?= $loop->station_pressure_hpa ?></td>
                                                    <td><?= $loop->gisis ?></td>
                                                    <td ><?= $loop->hhh ?></td>
                                                    <td ><span class="center"><?= $loop->rrr ?></span> </td>
                                                    <td><?= $loop->tr ?></td>
                                                    <td><?= $loop->present ?> </td>
                                                    <td><?= $loop->past ?> </td>
                                                    <td> <?= $loop->nh ?></td>
                                                    <td><?= $loop->cl ?> </td>
                                                    <td><?= $loop->cm ?></td>
                                                    <td> <?= $loop->ch ?></td>
                                                    <td><?= $loop->tq ?> </td>

                                                </tr>



                                                <?php
                                            }
                                        }
                                    }
                                    ?>


                                </tbody>
                            </table>
                            <h4>Section indicator 333</h4>
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>

                                        <td class="center" colspan="3">  Group  0    </td>



                                        <td class="hidden-480" colspan="4">Group indicator 6</td>


                                        <td class="hidden-phone" colspan="2">Group indicator 7 </td>

                                        <td class="hidden-phone" colspan="14">Group indicator 8 </td>

                                        <td class="hidden-phone" colspan="2">Group indicator 9</td>

                                    </tr>
                                </thead>
                                <tr>


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

                                        <td colspan="1"> </td>

                                    </tr>
                                    <?php
                                    // var_dump($metas);

                                    if (is_array($metas) && count($metas)) {
                                        foreach ($metas as $loop) {
                                            if ($loop->datetime != $datetime) {
                                                ?> 
                                                <tr>

                                                    <td><?= $loop->Tq ?>  </td>
                                                    <td> <?= $loop->Ro ?> </td>
                                                    <td><?= $loop->R1 ?>  </td>
                                                    <td><?= $loop->Tx ?>  </td>
                                                    <td><?= $loop->Tm ?> </td>
                                                    <td><?= $loop->EE ?>  </td>
                                                    <td> <?= $loop->E ?> </td>
                                                    <td> <?= $loop->sss ?> </td>
                                                    <td> <?= $loop->pchange ?></td>
                                                    <td><?= $loop->p24 ?>  </td>
                                                    <td> <?= $loop->rr ?></td>
                                                    <td><?= $loop->tr1 ?> </td>
                                                    <td><?= $loop->ns ?></td>
                                                    <td ><?= $loop->c ?></td>
                                                    <td ><?= $loop->hs ?></td>
                                                    <td >  <span class="center"><?= $loop->ns1 ?></span> </td>
                                                    <td> <?= $loop->c1 ?></td>
                                                    <td><?= $loop->hs1 ?> </td>
                                                    <td> <?= $loop->ns2 ?></td>
                                                    <td> <?= $loop->c2 ?></td>
                                                    <td><?= $loop->hs2 ?></td>
                                                    <td colspan="3"><?= $loop->supplementary ?> </td>
                                                </tr>      

                                                <?php
                                            }
                                        }
                                    }
                                    ?>


                                </tbody>
                            </table>
                            <h4>Section 555</h4>
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr bgcolor="#F7ECF2">
                                        <td class="hidden-480" colspan="8">Group indicator  Sign of data 1 S</td>
                                    </tr>
                                </thead>
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
                                        if ($loop->datetime != $datetime) {
                                            ?>   
                                            <tr>


                                                <td><?= $loop->wet_bulb ?></td>

                                                <td><?= $loop->humidity ?></td>

                                                <td></td>

                                            </tr><?php
                                        }
                                    }
                                }
                                ?>
                            </table>



                        </div>


                    </form>                              <!--PAGE CONTENT ENDS-->

                </div><!--/.page-content-->

            </div><!--/.main-container-->
        </div>
    </div>
</div>

<?php require_once(APPPATH . 'views/footers.php'); ?>
