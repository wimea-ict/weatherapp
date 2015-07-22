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
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box transparent" id="recent-box">
                    <div class="widget-header">
                        <h4 class="lighter smaller">
                            <i class="icon-file icon-2x green"></i>
                            Files & Archive
                        </h4>

                        <div class="widget-toolbar no-border">
                            <ul class="nav nav-tabs" id="recent-tab">
                                <li class="active">
                                    <a data-toggle="tab" href="#task-tab">New File</a>
                                </li>

                                <li>
                                    <a data-toggle="tab" href="#member-tab">View All</a>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-4">
                            <div class="tab-content padding-8 overflow-visible">
                                <div id="task-tab" class="tab-pane active">

                                    <div id="signup-box" class="signup-box widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <div class="span6">
                                                    <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/archive/save'  method="post">            

                                                        <div class="well well-large"> 
                                                            <span >Report/form type:<br><select id="form" name="form">
                                                                    <option value="Metar" />Metar
                                                                    <option value="Synoptic" />Synoptic register
                                                                    <option value="Dekadal" />Dekadal
                                                                </select></span><br>
                                                            <label for="form-field-select-1">Name</label>
                                                            <input type="text" class="span12" placeholder="Name" id="name" name="name" />
                                                            <label for="form-field-select-1">Station</label>
                                                            <select id="station" name="station">                                                       
                                                                <?php
                                                                if (is_array($stations) && count($stations)) {
                                                                    foreach ($stations as $loop) {
                                                                        ?>                        
                                                                        <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                                                    <?php }
                                                                }
                                                                ?>
                                                            </select>



                                                            <div class="widget-body">
                                                                <div class="widget-main">
<!--													<input type="file" id="id-input-file-2" />-->
                                                                    <input type="file" id="id-input-file-3" name="userfile" />
                                                                    <label>
                                                                        <input type="checkbox" name="file-format" id="id-file-format" />
                                                                        <span class="lbl"> Allow only images</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row-fluid">
                                                                <label for="id-date-range-picker-1">(Period)Start Date - End Date</label>
                                                            </div>

                                                            <div class="control-group">
                                                                <div class="row-fluid input-prepend">
                                                                    <span class="add-on">
                                                                        <i class="icon-calendar"></i>
                                                                    </span>

                                                                    <input class="span10" type="text" name="date-range-picker" id="id-date-range-picker-1" />
                                                                </div>
                                                            </div>

                                                            <label for="form-field-select-1">Description</label>
                                                            <input type="text" class="span12" id="description" name="description" placeholder="Details" />                                                    

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


                                                    <fieldset>









                                                    </fieldset>

                                                </div>
                                                <div class="widget-box span6">
                                                    <div class="widget-header header-color-green2">
                                                        <h4 class="lighter smaller">Browse Files</h4>
                                                    </div>

                                                    <div class="widget-body">
                                                        <div class="widget-main padding-8">
                                                            <div id="tree2" class="tree"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    var $assets = "assets";//this will be used in fuelux.tree-sampledata.js
                                                </script>

                                            </div><!--/widget-body-->
                                        </div><!--/signup-box-->
                                    </div>
                                </div>

                                <div id="member-tab" class="tab-pane">
                                    <div class="clearfix">
                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Form</th>
                                                    <th>Name</th>
                                                    <th>Station</th>
                                                    <th class="hidden-480">Period</th>

                                                    <th class="hidden-phone">Description </th>
                                                    <th class="hidden-480">Submitted On:</th>

                                                    <th>File</th

                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                if (is_array($files) && count($files)) {
                                                    foreach ($files as $loop) {
                                                        ?>  

                                                        <tr>
                                                            <td class="center">
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <a href="#"><?= $loop->form ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="#"><?= $loop->name ?></a>
                                                            </td>

                                                            <td class="hidden-480"><?= $loop->station ?></td>
                                                            <td class="hidden-phone"><?= $loop->period ?></td>

                                                            <td class="hidden-480">
                                                                <span class="label label-success"><?= $loop->description ?></span>
                                                            </td>
                                                            <td><?= $loop->submitted ?></td>
                                                            <td><?= $loop->file ?></td>



                                                            <td class="td-actions">

                                                                <a href="<?php echo base_url() . "index.php/archive/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="icon-trash bigger-120"></i>
                                                                    </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                }
                                                ?>



                                            </tbody>
                                        </table>     

                                    </div>


                                    <div class="hr hr-double hr8"></div>
                                </div><!--member-tab-->

                            </div>
                        </div><!--/widget-main-->
                    </div><!--/widget-body-->
                </div><!--/widget-box-->
            </div><!--/span-->

        </div><!--/row-->

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->

</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_instrument.php'); ?>
<script src="<?= base_url(); ?>assets/js/fuelux/data/fuelux.tree-sampledata.js"></script>
<script src="<?= base_url(); ?>assets/js/fuelux/fuelux.tree.min.js"></script>

<script type="text/javascript">
                                                    $(function () {

                                                        $('#tree1').ace_tree({
                                                            dataSource: treeDataSource,
                                                            multiSelect: true,
                                                            loadingHTML: '<div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div>',
                                                            'open-icon': 'icon-minus',
                                                            'close-icon': 'icon-plus',
                                                            'selectable': true,
                                                            'selected-icon': 'icon-ok',
                                                            'unselected-icon': 'icon-remove'
                                                        });

                                                        $('#tree2').ace_tree({
                                                            dataSource: treeDataSource2,
                                                            loadingHTML: '<div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div>',
                                                            'open-icon': 'icon-folder-open',
                                                            'close-icon': 'icon-folder-close',
                                                            'selectable': false,
                                                            'selected-icon': null,
                                                            'unselected-icon': null
                                                        });



                                                        /**
                                                         $('#tree1').on('loaded', function (evt, data) {
                                                         });
                                                         
                                                         $('#tree1').on('opened', function (evt, data) {
                                                         });
                                                         
                                                         $('#tree1').on('closed', function (evt, data) {
                                                         });
                                                         
                                                         $('#tree1').on('selected', function (evt, data) {
                                                         });
                                                         */
                                                    });
</script>
<script src="<?= base_url(); ?>js/scanner.js"></script>