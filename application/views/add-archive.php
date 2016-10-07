<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/admin.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

<style>

    #one,#two,#three
    {
        height:30px;
        width:300px;
        border:1px solid #69CDF5;
        background-color:cornsilk;
        margin: 0px 5px;
        overflow:hidden;
    }

    .arrow
    {
        padding:5px;
        float:right;
        color:#69CDF5;
    }
    .sub
    {
        height:200px;
        width:280px;
        display:none;
        border:1px solid #69CDF5;
        background-color:cornsilk;
        margin:0px 5px 5px;
        padding:10px;


    }
    #one p,#two p,#three p
    {
        padding:5px;

    }
    .sub img
    {
        margin:25px 5px;

    }

    #divLargerImage
    {
        display: none;
        width: 250px;
        height: 250px;
        position: absolute;
        top: 35%;
        left: 35%;
        z-index: 99;
    }

    #divOverlay
    {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #CCC;
        opacity: 0.5;
        width: 100%;
        height: 100%;
        z-index: 98;
    } 

</style>

<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="row-fluid">
            <div class="span12">
                     <div id="signup-box" class="signup-box widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <div class="span12">
                                                    <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/archive/save'  method="post">            

                                                       
                                                            <span >Report/form type:<br><select id="form" name="form">
                                                                    <option value="Metar book" />Metar book
                                                                    <option value="Synoptic register" />Synoptic register
                                                                    <option value="Dekadal" />Dekadal
                                                                    <option value="Rainfall card" />Rainfall card
                                                                    <option value="Weather summary" />Weather summary
                                                                    <option value="Climatological observation" />Climatological observation
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


                                                                        <?php
                                                                    }
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

                                                     
                                                    </form>

                                                    <fieldset>
                                                    </fieldset>

                                                </div>
                                            
                                                <div id="divOverlay"></div>
                                                <script type="text/javascript">
                                                    var $assets = "assets"; //this will be used in fuelux.tree-sampledata.js
                                                </script>

                                            </div><!--/widget-body-->
                                        </div><!--/signup-box-->
                                    </div>
            </div><!--/span-->

        </div><!--/row-->

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->
<!-- let's call the following div as the POPUP FRAME -->

</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_instrument.php'); ?>
<script type="text/javascript">
    var DataSourceTree = function (options) {
        this._data = options.data;
        this._delay = options.delay;
    }

    DataSourceTree.prototype.data = function (options, callback) {
        var self = this;
        var $data = null;
        if (!("name" in options) && !("type" in options)) {
            $data = this._data; //the root tree
            callback({data: $data});
            return;
        }
        else if ("type" in options && options.type == "folder") {
            if ("additionalParameters" in options && "children" in options.additionalParameters)
                $data = options.additionalParameters.children;
            else
                $data = {}//no data
        }

        if ($data != null)//this setTimeout is only for mimicking some random delay
            setTimeout(function () {
                callback({data: $data});
            }, parseInt(Math.random() * 500) + 200);
        //we have used static data here
        //but you can retrieve your data dynamically from a server using ajax call
        //checkout examples/treeview.html and examples/treeview.js for more info
    };
    var tree_data = {
        'for-sale': {name: 'For Sale', type: 'folder'},
        'vehicles': {name: 'Vehicles', type: 'folder'},
        'rentals': {name: 'Rentals', type: 'folder'},
        'real-estate': {name: 'Real Estate', type: 'folder'},
        'pets': {name: 'Pets', type: 'folder'},
        'tickets': {name: 'Tickets', type: 'item'},
        'services': {name: 'Services', type: 'item'},
        'personals': {name: 'Personals', type: 'item'}
    }




    var treeDataSource = new DataSourceTree({data: tree_data});
    var tree_data_2 = {
        'documents': {name: 'FILES', type: 'folder', 'icon-class': 'green'}

    }


    tree_data_2['documents']['additionalParameters'] = {
        'children': [
<?php
if (is_array($files) && count($files)) {
    foreach ($files as $loop) {
        ?>
                    {name: '<i class="icon-file-text red"></i><a href="#"><img height="30px" width="30px" src="<?= base_url(); ?>/archive/<?= $loop->file; ?>"/></a><a href="#"><?php echo $loop->station . ' ' . $loop->period; ?></a>', type: 'item'},
    <?php }
} ?>


        ]
    }



    var treeDataSource2 = new DataSourceTree({data: tree_data_2});


</script>
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
    });</script>

<script type="text/javascript">


    $('a img').click(function () {
        var $img = $(this);
        $('#divLargerImage').html($img.clone().height(250).width(250)).add($('#divOverlay')).fadeIn();
    });

    $('#divLargerImage').add($('#divOverlay')).click(function () {
        $('#divLargerImage').add($('#divOverlay')).fadeOut(function () {
            $('#divLargerImage').empty();
        });
    });



</script>

