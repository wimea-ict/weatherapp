<?php require_once(APPPATH . 'views/header.php'); ?>


<div class="main-container container-fluid">

    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                <i class="icon-edit icon-2x green"></i>
                SYNOPTIC REGISTER

            </h1>
        </div><!--/.page-header-->

        <div class="row-fluid">
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->

<div class="form-group well">
     

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
                    <span> Select the date:<input class="span3 date-picker" id="datenow" value="<?php echo date('Y-m-d')?>"  name="datenow" type="text" data-date-format="yyyy-mm-dd" />
                        <span class="add-on">
                            <i class="icon-calendar"></i>
                        </span>
                    </span>



                </div>
                <div class="form-group well">
     

                   


                </div>
                <table  style="" id="sample-table-2" class="table table-striped table-bordered table-hover">
                    
                    <tbody>
                        <tr>
                            <td class="center-head">
                                <label>
                                   Day
                                </label>
                            </td>

                            <td align='left' class="center">
                                <a href="#">YY</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                           <tr>
                            <td class="center-head">
                                <label>
                             Time
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">GG</a>
                            </td>
                            <td class="center">00</td>
                            <td class="center">03</td>
                            <td class="center">06</td>

                            <td class="center" >09 </td>
                            <td class="center" >12 </td>

                             <td class="center" >15</td>

                             <td  class="center">18</td>

                             <td  class="center">21</td>
                        </tr>
                              <tr>
                            <td class="center">
                                <label>
                                 Unit of wind speed
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">i<span class="foot-note">w</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
    <tr>
                            <td class="center">
                                <label>
                         Block number
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">ii</a>
                            </td>
                            <td class="center">63</td>
                            <td class="center">63</td>
                            <td class="center">63</td>

                            <td class="center" >63</td>
                            <td class="center" >63</td>

                             <td class="center" >63</td>

                             <td  class="center">63</td>

                             <td  class="center">63</td>
                        </tr>
          <tr>
                            <td class="center">
                                <label>
                                 Station Number
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">iii</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                                    Ind. of omission of precipitation
                            </td>

                            <td class="center">
                                <a href="#">i<span class="foot-note">r</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                                Type of station present & past weather
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">i<span class="foot-note">x</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                              Height of lowest cloud
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">h</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                               Horizontal Visibility
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">VV</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                               Total cloud cover
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">N</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                               Wind direction
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">dd</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                              wind speed
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">ff</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                           <tr>
                            <td class="center">
                                <label>
                             Group Indicator
                                </label><br>
                                 <label>
                         Sign of the data
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">1</a><br>
                                 <a href="#">S <span class="foot-note">n</span></a>
                            </td>
                            <td class="center">1<br>0</td>
                            <td class="center">1<br>0</td>
                            <td class="center">1<br>0</td>

                            <td class="center" >1<br>0 </td>
                            <td class="center" >1<br>0 </td>

                             <td class="center" >1<br>0</td>

                             <td  class="center">1<br>0</td>

                             <td  class="center">1<br>0</td>
                        </tr>
                           <tr>
                            <td class="center">
                                <label>
                             Air Temperature
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">TTT</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                            <tr>
                            <td class="center">
                                <label>
                             Group Indicator
                                </label><br>
                                 <label>
                         Sign of the data
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">2</a><br>
                                 <a href="#">S <span class="foot-note">n</span>
                            </td>
                            <td class="center">2<br>0</td>
                            <td class="center">2<br>0</td>
                            <td class="center">2<br>0</td>

                            <td class="center" >2<br>0 </td>
                            <td class="center" >2<br>0 </td>

                             <td class="center" >2<br>0</td>

                             <td  class="center">2<br>0</td>

                             <td  class="center">2<br>0</td>
                        </tr>
                            <tr>
                            <td class="center">
                                <label>
                           Dew Point Temperature
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">T <span class="foot-note">d</span>T<span class="foot-note">d</span>T<span class="foot-note">d</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                           <tr>
                            <td class="center">
                                <label>
                             Group Indicator
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">3</a>
                            </td>
                            <td class="center">3</td>
                            <td class="center">3</td>
                            <td class="center">3</td>

                            <td class="center" >3</td>
                            <td class="center" >3</td>

                             <td class="center" >3</td>

                             <td  class="center">3</td>

                             <td  class="center">3</td>
                        </tr>
                             <tr>
                            <td class="center">
                                <label>
                        Pressure at station level
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">P<span class="foot-note">0</span>P<span class="foot-note">0</span>P<span class="foot-note">0</span>P<span class="foot-note">0</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                        
                             <tr>
                            <td class="center">
                                <label>
                             Group Indicator
                                </label><br>
                                 <label>
                         Standard Isobaric surface
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">4</a><br>
                                 <a href="#">8</a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                         Geopotential of standard Isobaric surface
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">h h h</a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Group indicator
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">4</a>
                            </td>
                            <td class="center"> 6</td>
                            <td class="center">6</td>

                            <td class="center" >6</td>
                            <td class="center" >6 </td>

                             <td class="center" >6</td>

                             <td  class="center">6</td>

                             <td  class="center">6</td>
                              <td  class="center">6</td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                         Amount of precipitation
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">R R R</a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                              <tr>
                            <td class="center">
                               
                                 <label>
                        Duration period of precipitation
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">T<span class="foot-note">4</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Group indicator
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">7</a>
                            </td>
                            <td class="center">7</td>
                            <td class="center">7</td>

                            <td class="center" >7</td>
                            <td class="center" >7</td>

                             <td class="center" >7</td>

                             <td  class="center">7</td>

                             <td  class="center">7</td>
                              <td  class="center">7</td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                        Present weather 
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">WW</a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Past Weather
                                </label>
                            </td>

                            <td class="center">
                               
                                <a href="#">W<span class="foot-note">1</span>W<span class="foot-note">2</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Group indicator
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">8</a>
                            </td>
                            <td class="center">8</td>
                            <td class="center">8</td>
                            <td class="center" >8</td>
                            <td class="center" >8</td>
                            <td class="center" >8</td>
                            <td  class="center">8</td>
                            <td  class="center">8</td>
                            <td  class="center">8</td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Amount of clouds
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">N<span class="foot-note">h</span>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                           <tr>
                            <td class="center">
                               
                                 <label>
                       Clouds of the general Sc,St,Cu,Cb
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">C<span class="foot-note">L</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Clouds of the general Ac,As,Ns
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">C<span class="foot-note">G</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Clouds of the general C,Cc,Cs
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">C<span class="foot-note">H</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                        
                          <tr>
                            <td class="center">
                               
                                 <label>
                       Section indicator
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">3 3 3 </a>
                            </td>
                            <td class="center">333</td>
                            <td class="center">333</td>
                            <td class="center" >333</td>
                            <td class="center" >333</td>
                            <td class="center" >333</td>
                            <td  class="center">333</td>
                            <td  class="center">333</td>
                            <td  class="center">333</td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Group indicator
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">0</a>
                            </td>
                            <td class="center">0</td>
                            <td class="center">0</td>
                            <td class="center" >0</td>
                            <td class="center" >0</td>
                            <td class="center" >0</td>
                            <td  class="center">0</td>
                            <td  class="center">0</td>
                            <td  class="center">0</td>
                        </tr>
                        
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Grass minimum temperature
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">T<span class="foot-note">Q</span> T<span class="foot-note">Q</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Character & intensity of precipitation
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">R<span class="foot-note">0</span></a>
                            </td>
                            <td class="small"> <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /> </td>

                             <td class="small" ><input type="text" class="input-mini" /></td>

                             <td  class="small"><input type="text" class="input-mini" /></td>

                             <td  class="small"><input type="text" class="input-mini" /></td>
                              <td  class="small"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                      Beginning or end of precipitation
                                </label>
                            </td>

                            <td class="center">
                               
                                <a href="#">R<span class="foot-note">1</span></a>
                            </td>
                            <td class="small"> <input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" ><input type="text" class="input-mini" /></td>
                            <td class="small" ><input type="text" class="input-mini" /> </td>

                             <td class="small" ><input type="text" class="input-mini" /></td>

                             <td  class="small"><input type="text" class="input-mini" /></td>

                             <td  class="small"><input type="text" class="input-mini" /></td>
                              <td  class="small"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
            
                        <tr>
                            <td class="center-head">
                                <label>
                                   Group indicator 
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">1</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                           <tr>
                            <td class="center-head">
                                <label>
                             Sign of the data
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">S<span class="foot-note">n</span></a>
                            </td>
                            <td class="center">00</td>
                            <td class="center">03</td>
                            <td class="center">06</td>

                            <td class="center" >09 </td>
                            <td class="center" >12 </td>

                             <td class="center" >15</td>

                             <td  class="center">18</td>

                             <td  class="center">21</td>
                        </tr>
                              <tr>
                            <td class="center">
                                <label>
                                 Maximum temperature
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">T<span class="foot-note">x</span>T<span class="foot-note">x</span>T<span class="foot-note">x</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
    <tr>
                            <td class="center">
                                <label>
                       Group indicator
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">2</a>
                            </td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>

                            <td class="center" ></td>
                            <td class="center" ></td>

                             <td class="center" ></td>

                             <td  class="center"></td>

                             <td  class="center"></td>
                        </tr>
          <tr>
                            <td class="center">
                                <label>
                                 Sign of the data
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">S<span class="foot-note">n</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                                   Minimum temperature 
                            </td>

                            <td class="center">
                                <a href="#">T<span class="foot-note">n</span>T<span class="foot-note">n</span>T<span class="foot-note">n</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                             
                                <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                                Group indicator
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">5</a><br>E
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                            
                                <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                              Amount of evaporation 
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">E</a><br><a href="#">E</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                              
                                <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                               Indicator of type of instrumentation
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">E</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                              
                                <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                               Group indicator
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">5</a><br> <a href="#">5</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                             
                                <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                               Duration of sunshine
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">S</a><br> <a href="#">S</a><br> <a href="#">S</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                               <tr>
                            <td class="center">
                                <label>
                              Group indicator
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">5</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" />5</td>
                            <td class="small"><input type="text" class="input-mini" />5</td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               
                                <input type="text" class="input-mini" value="5" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" value="5" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" value="5" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini"  value="5"/>
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" value="5" />
                            </td>
                        </tr>
                           <tr>
                            <td class="center">
                                <label>
                             Sign of pressure change
                                </label>
                                
                            </td>

                            <td class="center">
                                <a href="#">8</a><br>
                                 <a href="#">9</a>
                            </td>
                            <td class="center"><input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /> </td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                           <tr>
                            <td class="center">
                                <label>
                             Pressure change in 24 hours
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">P<span class="foot-note">24</span>P<span class="foot-note">24</span>P<span class="foot-note">24</span></a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                              
                                <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                            <tr>
                            <td class="center">
                                <label>
                             Group Indicator
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">6</a><br>
                                
                            </td>
                            <td class="center"></td>
                            <td class="center">6</td>
                            <td class="center"></td>

                            <td class="center" >6</td>
                            <td class="center" ></td>

                             <td class="center" >6</td>

                             <td  class="center"></td>

                             <td  class="center">6</td>
                        </tr>
                            <tr>
                            <td class="center">
                                <label>
                           Amount of precipitation
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">RRR</a>
                            </td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>
                            <td class="small"><input type="text" class="input-mini" /></td>

                            <td class="small" >                               
                                <input type="text" class="input-mini" />
                            </td>
                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td class="small" >
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>

                             <td  class="small">
                               <input type="text" class="input-mini" />
                            </td>
                        </tr>
                           <tr>
                            <td class="center">
                                <label>
                            Duration period of precipitation
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">t<span class="foot-note">R</span></a>
                            </td>
                            <td class="center"></td>
                            <td class="center"></td>
                            <td class="center"></td>

                            <td class="center" ></td>
                            <td class="center" ></td>

                             <td class="center" ></td>

                             <td  class="center"></td>

                             <td  class="center"></td>
                        </tr>
                             <tr>
                            <td class="center">
                                <label>
                        Group indicator
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">8</a>
                            </td>
                            <td class="small">8</td>
                            <td class="small">8</td>
                            <td class="small">8</td>

                            <td class="small" >8</td>
                             <td class="small" > 8</td>

                             <td class="small" >8 </td>

                             <td  class="small">8</td>

                             <td  class="small">8  </td>
                        </tr>
                        
                             <tr>
                            <td class="center">
                                <label>
                             Amount of individual cloud layer
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">N<span class="foot-note">s</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                        Genus of cloud
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">C</a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Height of base cloud layer layer or mass
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">h<span class="foot-note">s</span>h<span class="foot-note">s</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /></td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                         Group indicator
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">8</a>
                            </td>
                            <td class="center"> 8</td>
                            <td class="center">8</td>

                            <td class="center" >8</td>
                            <td class="center" >8 </td>

                             <td class="center" >8</td>

                             <td  class="center">8</td>

                             <td  class="center">8</td>
                              <td  class="center">8</td>
                        </tr>
                              <tr>
                            <td class="center">
                               
                                 <label>
                        Amount of individual cloud layer
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">N<span class="foot-note">8</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Genus of cloud
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">C</a>
                            </td>
                            <td class="center"><input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /></td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                        Present weather 
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">WW</a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                                <label>
                             Amount of individual cloud layer
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">N<span class="foot-note">s</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                        Genus of cloud
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">C</a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Height of base cloud layer layer or mass
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">h<span class="foot-note">s</span>h<span class="foot-note">s</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /></td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                                <label>
                             Amount of individual cloud layer
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">N<span class="foot-note">s</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                        Genus of cloud
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">C</a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Height of base cloud layer layer or mass
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">h<span class="foot-note">s</span>h<span class="foot-note">s</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /></td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Group Indicator
                                </label>
                            </td>

                            <td class="center">
                               
                                <a href="#">9</a>
                            </td>
                            <td class="center"> 9</td>
                            <td class="center">9</td>

                            <td class="center" >9</td>
                            <td class="center" >9 </td>

                             <td class="center" >9</td>

                             <td  class="center">9</td>

                             <td  class="center">9</td>
                              <td  class="center">9</td>
                        </tr>
                         <tr>
                            <td class="center">                               
                                 <label> Suplementary information</label><br>
                                 <label> 9 11 ff highest gust</label><br>
                                  <label> 9 12 ff highest mean wind speed</label><br>
                                   <label> 9 43CL Dp movement of C clouds</label><br>
                                   
                            </td>

                            <td class="center">
                                <br>
                               S<span class="foot-note">p</span><br>
                                S<span class="foot-note">p</span><br>
                                 S<span class="foot-note">p</span><br>
                                
                            </td>
                            
                            <td class="center">  <br>5<br>5<br>5<br></td>
                            <td class="center">  <br>5<br>5<br>5<br></td>
                            <td class="center" >  <br>5<br>5<br>5<br></td>
                            <td class="center" >  <br>5<br>5<br>5<br></td>
                            <td class="center" >  <br>5<br>5<br>5<br></td>
                            <td  class="center">  <br>5<br>5<br>5<br></td>
                            <td  class="center">  <br>5<br>5<br>5<br></td>
                            <td  class="center">  <br>5<br>5<br>5<br></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Group indicator
                                </label><br>
                                  <label>
                       Sign of data
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">1</a><br>
                                      <a href="#">S<span class="foot-note">n</span>
                            </td>
                            <td class="center"> 1<br>0</td>
                            <td class="center">1<br>0</td>

                            <td class="center" >1<br>0</td>
                            <td class="center" >1<br>0 </td>

                             <td class="center" >1<br>0</td>

                             <td  class="center">1<br>0</td>

                             <td  class="center">1<br>0</td>
                              <td  class="center">1<br>0</td>
                        </tr>
                           <tr>
                            <td class="center">
                               
                                 <label>
                     Wet bulb temperature
                                </label>
                            </td>

                            <td class="center">
                               
                                 <a href="#">T<span class="foot-note">w</span>T<span class="foot-note">w</span>T<span class="foot-note">w</span></a>
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Relative humidity(RH)
                                </label>
                            </td>

                            <td class="center">
                               
                                 
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                         <tr>
                            <td class="center">
                               
                                 <label>
                       Vapour pressure(VAP)
                                </label>
                            </td>

                            <td class="center">
                               
                                
                            </td>
                            <td class="center"> <input type="text" class="input-mini" /></td>
                            <td class="center"><input type="text" class="input-mini" /></td>

                            <td class="center" ><input type="text" class="input-mini" /></td>
                            <td class="center" ><input type="text" class="input-mini" /> </td>

                             <td class="center" ><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>

                             <td  class="center"><input type="text" class="input-mini" /></td>
                              <td  class="center"><input type="text" class="input-mini" /></td>
                        </tr>
                        
                         
               
                </table>


                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->

        </div><!--/.main-container-->

        <?php require_once(APPPATH . 'views/footer.php'); ?>


<!--        <script type="text/javascript">
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