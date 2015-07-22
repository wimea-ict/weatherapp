<?php require_once(APPPATH . 'views/header.php'); ?>




<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="row-fluid">      
                
                  
                       
                      <div class="page-content">   
   <?php
                                    if (is_array($elementID) && count($elementID)) {
                                        foreach ($elementID as $element) {
                                            ?>   
    
                     <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/element/update'  method="post">            
             
                             <div class="alert-info span6 padding-5">
                                               <label for="form-field-select-1">Name</label>
                                               <input type="text" id="name"  name="name" class="span12" value="<?=$element->name?>" />
                                               <input type="hidden" id="id"  name="id" value="<?=$element->id?>" class="span12" placeholder="Element" />
                                                        
                                                     <div class="form-group">
                            <label> Abbreviation(Abbrev) </label>
                            <div id="locationField">
                                <input id="abbrev" name="abbrev" placeholder="Abbreviation" value="<?=$element->abbrev?>"  type="text"></input>
                            </div>
                            <br>  

                        </div>
                        <div class="form-group">

                            <label> Type</label>
                           

                            <select id="type" name="type">
                                                      <option  value="<?=$element->type?>"  /><?=$element->type?>
                                                         <option value="Daily" />Daily
                                                        <option value="Weekly" />Weekly
                                                         <option value="Monthly" />Monthly
                                                       
                                                        
                                                    </select>
                             <label for="form-field-select-1">Units</label>

                             <select id="units" name="units">
                                   <option  value="<?=$element->unit?>"  /><?=$element->units?>
                                                         <option value="Cm3" />Cm3
                                                        <option value="mm" />mm
                                                        <option value="Ltrs" />Ltrs
                                                       
                                                        
                                                    </select>
                        </div>  </div>    
                             <div class="alert-info span6 padding-12">
  <label for="form-field-select-1">Scale</label>

  <select id="scale" name="scale">
        <option  value="<?=$element->scale?>"  /><?=$element->scale?>
                                                         <option value="C" />C
                                                        <option value="F" />F
                                                       
                                                        
                                                    </select>
   <label for="form-field-select-1">Limits</label>

                <select id="limits" name="limits">
                      <option  value="<?=$element->limits?>"  /><?=$element->limits?>
                                                         <option value="20" />20
                                                        <option value="30" />30
                                                       
                                                        
                                                    </select>

                        <div class="form-group">

                            <label> Description </label>
                            <textarea class="span12" id="description" name="description" placeholder="Default Text">  <?=$element->description?></textarea>
												
                           <div class="clearfix">
                         <br>                              

                         <button type="submit" class="width-10 pull-left btn btn-small btn-success">     Update   </button>
                                                    </div>
                        </div>       </div>  
                            
                         </form>
    
    
                                        <?php } }?>

            <div class="span12">
                <div class="well-large">
                         <i class="icon-home icon-2x green"></i>
                         
                        <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                       <span class="arrowed-in-right"></span> <button  class="width-10 pull-left btn  btn-mini btn-yellow">   ADD WEATHER ELEMENT   </button>
                                        </a><a href="" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed float-right">
                       <span class="arrowed-in-right "></span> <button  class="width-10 pull-left btn float-right  btn-mini btn-success">          DELETE SELECTED      </button>     </a>
            

                  
                            <div class="row-fluid">
                                   <div id="accordion2" class="accordion">
                        <div class="accordion-group">
                                       <div class="accordion-body collapse" id="collapseOne">
                                <div class="accordion-inner">
                                          
                                            <h4> Enter element details to below: </h4>
                         <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/element/save'  method="post">            
             
                             <div class="alert-info span6 padding-5">
                                               <label for="form-field-select-1">Name</label>
                                               <input type="text" id="name"  name="name" class="span12" placeholder="Element" />
                                                        
                                                     <div class="form-group">
                            <label> Abbreviation(Abbrev) </label>
                            <div id="locationField">
                                <input id="abbrev" name="abbrev" placeholder="Abbreviation"  type="text"></input>
                            </div>
                            <br>  

                        </div>
                        <div class="form-group">

                            <label> Type</label>
                           

                            <select id="type" name="type">
                                                         <option value="Daily" />Daily
                                                        <option value="Weekly" />Weekly
                                                         <option value="Monthly" />Monthly
                                                       
                                                        
                                                    </select>
                             <label for="form-field-select-1">Units</label>

                             <select id="units" name="units">
                                                         <option value="Cm3" />Cm3
                                                        <option value="mm" />mm
                                                         <option value="Ltrs" />Ltrs
                                                       
                                                        
                                                    </select>
                        </div>  </div>    
                             <div class="alert-info span6 padding-12">
  <label for="form-field-select-1">Scale</label>

  <select id="scale" name="scale">
                                                         <option value="C" />C
                                                        <option value="F" />F
                                                       
                                                        
                                                    </select>
   <label for="form-field-select-1">Limits</label>

                <select id="limits" name="limits">
                                                         <option value="20" />20
                                                        <option value="30" />30
                                                       
                                                        
                                                    </select>

                        <div class="form-group">

                            <label> Description </label>
                            <textarea class="span12" id="description" name="description" placeholder="Default Text"></textarea>
												
                           <div class="clearfix">
                         <br>                               <button type="reset" class="width-10 pull-right btn btn-small">
                                                            <i class="icon-refresh"></i>
                                                            Clear
                                                        </button>

                         <button type="submit" class="width-10 pull-left btn btn-small btn-success">
                                                           Submit

                                                        </button>
                                                    </div>
                        </div>       </div>  
                            
                         </form>
                	</div>
											</div>

              
										</div>

									</div>
                         <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Abbreviation</th>
                                                    <th class="hidden-480">Type</th>

                                                    <th class="hidden-phone">
                                                        <i class="icon-time bigger-110 hidden-phone"></i>
                                                      Units
                                                    </th>
                                                    <th class="hidden-480">Scale</th>

                                                    <th>Limits</th>
                                                      <th>Description</th>
                                                       
                                                         <th>Submitted on</th>
                                                          <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
 <?php
                                        if (is_array($elements) && count($elements)) {
                                            foreach ($elements as $loop) {
                                                ?>  

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#"><?= $loop->name ?></a>
                                                    </td>
                                                  
                                                    <td class="hidden-480"><?= $loop->abbrev ?></td>
                                                    <td class="hidden-phone"><?= $loop->type ?></td>

                                                    <td class="hidden-480">
                                                        <span class="label label-success"><?= $loop->units ?></span>
                                                    </td>
                                                      <td><?= $loop->scale ?></td>
                                                       <td><?= $loop->limits ?></td>
                                                        <td><?= $loop->description ?></td>
                                                       
                                                           <td><?= $loop->submitted ?></td>

                                                    <td class="td-actions">
                                        <a href="<?php echo base_url() . "index.php/element/edit/" . $loop->id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="icon-edit bigger-120"></i>
                                                            </span>
                                                        </a>
                                                        <a href="<?php echo base_url() . "index.php/element/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="icon-trash bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }}?>
                                               


                                            </tbody>
                                        </table>      
                            </div>

            
            </div><!--/span-->
            </div><!--/span-->
             </div><!--/span-->
         

                
     <!--/widget-box-->
            </div><!--/span-->

        </div><!--/row-->

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->

</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer.php'); ?>

