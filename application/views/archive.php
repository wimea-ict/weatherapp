<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
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
                <div class="widget-box transparent" id="recent-box">
                    <div class="widget-header">
                        <h4 class="lighter smaller">
                            <i class="icon-file icon-2x green"></i>
                            Files & Archive
                        </h4>
                    </div>
                    <?php echo $this->session->flashdata('msg'); ?>

                    <div class="scroll">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <input type="checkbox" />
                                            <span class="lbl"></span>
                                        </label>
                                    </th>
                                    <th>FORM</th>
                                    <th>NAME</th>
                                    <th>STATION</th>
                                    <th class="hidden-480">PERIOD</th>

                                    <th class="hidden-phone">DETAILS </th>
                                    <th class="hidden-480">CREATED</th>

                                    <th>FILE</th>
                                    <th>PRINT</th>
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
                                                <a href="<?php echo base_url() . "archive/" . $loop->file; ?>"><?= $loop->name ?></a>
                                            </td>

                                            <td class="hidden-480"><?= $loop->station ?></td>
                                            <td class="hidden-phone"><?= $loop->period ?></td>

                                            <td class="hidden-480">
                                                <span class="label label-success"><?= $loop->description ?></span>
                                            </td>
                                            <td><?= $loop->submitted ?></td>
                                            <td><a href="<?php echo base_url() . "archive/" . $loop->file; ?>"><?= $loop->file ?></a></td>

                                            <td class="td-actions">
                                                <a href="<?php echo base_url() . "index.php/archive/image/" . $loop->file; ?>" ><i class="icon-print bigger-120"></i></a> <span class="red">
                                                      </span>
                                            </td>

                                            <td class="td-actions">

                                                <a href="<?php echo base_url() . "index.php/archive/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                    <span class="red">
                                                        <i class="icon-trash bigger-120"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>     

                    </div>
                </div>


            </div><!--/widget-box-->
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
        } else if ("type" in options && options.type == "folder") {
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
    <?php
    }
}
?>


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

