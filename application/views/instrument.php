<?php require_once(APPPATH . 'views/header.php'); ?>

<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/colorpicker.css" />


<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="page-content"> 
            <?php echo $this->session->flashdata('msg'); ?>
            <?php
            if (is_array($instrumentID) && count($instrumentID)) {
                foreach ($instrumentID as $instrument) {
                    ?>   

                    <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/instrument/update'  method="post">            

                        <div class="alert-info span6 padding-5">


                            <label for="form-field-select-1">Name</label>
                            <input type="text" name="name" id="name" class="span12" value="<?= $instrument->name ?>" />
                            <input type="hidden" name="id" id="id" class="span12" value="<?= $instrument->id ?>" />

                            <div class="form-group">
                                <label for="form-field-select-1">Station</label>
                                <select id="station" name="station">
                                    <option value="<?= $instrument->station ?>" /><?= $instrument->station ?>
                                    <?php
                                    if (is_array($stations) && count($stations)) {
                                        foreach ($stations as $loop) {
                                            ?>                        
                                            <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                        <?php }
                                    } ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="form-field-select-1">Element</label>
                                <select id="element" name="element">
                                    <?php
                                    if (is_array($elements) && count($elements)) {
                                        foreach ($elements as $loop) {
                                            ?>                        
                                            <option value="<?= $loop->name ?>" /><?= $loop->name ?>


            <?php }
        } ?>
                                </select>

                            </div>
                            <div class="row-fluid">
                                <label for="id-date-range-picker-1">Date of registration - Date of Expiry</label>
                            </div>

                            <div class="control-group">
                                <div class="row-fluid input-prepend">
                                    <span class="add-on">
                                        <i class="icon-calendar"></i>
                                    </span>

                                    <input  class="span10" type="text" name="date-range-picker-u" id="id-date-range-picker-1" value="<?=$instrument->dateRegister?>" />
                                </div>
                            </div>




                        </div>         
                        <div class="alert-info span6 padding-5">



                            <label for="form-field-select-1">Code</label>
                            <input type="text" class="span12"  name="code" id="code" value="<?= $instrument->code ?>" />
                            <label for="form-field-select-1">Manufacturer</label>
                            <input type="text" class="span12"  name="manufacturer" id="manufacturer" value="<?= $instrument->manufacturer ?>" />
                            <label for="form-field-select-1">Description</label>
                            <input type="text" class="span12"  id="description" name="description"  value="<?= $instrument->description ?>"/>                                                    

                            <div class="form-group">

                                <div class="clearfix">
                                    <button type="submit" class="width-10 pull-right btn btn-small btn-success"> Update </button>
                                </div>
                            </div>                   



                        </div>    


                    </form>


    <?php }
} ?>

            <div class="span12">
                <div class="well-large">
                    <i class="icon-home icon-2x green"></i>

                    <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                        <span class="arrowed-in-right"></span> <button  class="width-10 pull-left btn  btn-mini btn-yellow">   ADD INSTRUMENT   </button>
                    </a><a href="" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed float-right">
                        <span class="arrowed-in-right "></span> <button  class="width-10 pull-left btn float-right  btn-mini btn-success">          DELETE SELECTED      </button>     </a>



                    <div class="row-fluid">
                        <div id="accordion2" class="accordion">
                            <div class="accordion-group">
                                <div class="accordion-body collapse" id="collapseOne">
                                    <div class="accordion-inner">

                                        <h4> Enter instrument details to below: </h4>
                                        <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/instrument/save'  method="post">            

                                            <div class="alert-info span6 padding-5">



                                                <label for="form-field-select-1">Name</label>
                                                <input type="text" name="name" id="name" class="span12" placeholder="Name" />

                                                <div class="form-group">
                                                    <label for="form-field-select-1">Station</label>
                                                    <select id="station" name="station">
                                                        <option value="<?= $user->station ?>" /><?= $user->station ?>
                                                        <?php
                                                        if (is_array($stations) && count($stations)) {
                                                            foreach ($stations as $loop) {
                                                                ?>                        
                                                                <option value="<?= $loop->name ?>" /><?= $loop->name ?>


    <?php }
} ?>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="form-field-select-1">Element</label>
                                                    <select id="element" name="element">
<?php
if (is_array($elements) && count($elements)) {
    foreach ($elements as $loop) {
        ?>                        
                                                                <option value="<?= $loop->name ?>" /><?= $loop->name ?>


    <?php }
} ?>
                                                    </select>

                                                </div>
                                                <div class="row-fluid">
                                                    <label for="id-date-range-picker-1">Date of registration - Date of Expiry</label>
                                                </div>

                                                <div class="control-group">
                                                    <div class="row-fluid input-prepend">
                                                        <span class="add-on">
                                                            <i class="icon-calendar"></i>
                                                        </span>

                                                        <input class="span10" type="text" name="date-range-picker" id="id-date-range-picker-1" />
                                                    </div>
                                                </div>




                                            </div>         
                                            <div class="alert-info span6 padding-5">



                                                <label for="form-field-select-1">Code</label>
                                                <input type="text" class="span12" placeholder="Code" name="code" id="code" />
                                                <label for="form-field-select-1">Manufacturer</label>
                                                <input type="text" class="span12" placeholder="Name" name="manufacturer" id="manufacturer" />
                                                <label for="form-field-select-1">Description</label>
                                                <input type="text" class="span12" placeholder="Name" id="description" name="description" />                                                    

                                                <div class="form-group">

                                                    <div class="clearfix">
                                                        <br>                               <button type="reset" class="width-10 pull-left btn btn-small">
                                                            <i class="icon-refresh"></i>
                                                            Clear
                                                        </button>

                                                        <button type="submit" class="width-15 pull-right btn btn-small btn-success">
                                                            Submit

                                                        </button>
                                                    </div>
                                                </div>                   



                                            </div>    


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
                                    <th>Station</th>
                                    <th class="hidden-480">Element</th>

                                    <th class="hidden-phone">   Date registered- Expire </th>
                                    
                                    <th>Code</th
                                    <th>Manufacturer</th>
                                    <th>Manufacturer</th>
                                    <th>Description</th>

                                    <th>Submitted on</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
<?php
if (is_array($instruments) && count($instruments)) {
    foreach ($instruments as $loop) {
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

                                            <td class="hidden-480"><?= $loop->station ?></td>
                                            <td class="hidden-phone"><?= $loop->element ?></td>

                                            <td class="hidden-480">
                                                <span class="label label-success"><?= $loop->dateRegister ?></span>
                                            </td>                                           
                                            <td><?= $loop->code ?></td>
                                            <td><?= $loop->manufacturer ?></td>
                                            <td><?= $loop->description ?></td>
                                            <td><?= $loop->submitted ?></td>


                                            <td class="td-actions">
                                                <a href="<?php echo base_url() . "index.php/instrument/edit/" . $loop->id; ?>" class="tooltip-info" data-rel="tooltip" title="View">
                                                    <span class="blue">
                                                        <i class="icon-edit bigger-120"></i>
                                                    </span>
                                                </a>
                                                <a href="<?php echo base_url() . "index.php/instrument/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                    <span class="red">
                                                        <i class="icon-trash bigger-120"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
    <?php }
} ?>



                            </tbody>
                        </table>      
                    </div>


                </div><!--/span-->
            </div><!--/span-->
        </div>



        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_instrument.php'); ?>


