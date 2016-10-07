<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/easyui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/icon.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.edatagrid.js"></script>
    </head>
    <body>
        <h2>Metars </h2>
        <div class="demo-info">
            <div class="demo-tip icon-tip">&nbsp;</div>
            <div>Click the edit button on the right side of row to start editing.</div>
        </div>

        <div style="margin:10px 0">
            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="insert()">NEW METAR</a>
        </div>

        <table id="tt" style="width:100%;height:100%"></table>

        <script>

            $(function () {
                $('#tt').edatagrid({
                    title: 'Metar information ',
                    iconCls: 'icon-edit',
                    width: 660,
                    height: 250,
                    singleSelect: true,
                    idField: 'id',                   
                    url:'<?php echo base_url() . 'index.php/grid/metars/'; ?>',
                    saveUrl: '<?php echo base_url() . 'index.php/grid/metar_save/'; ?>',
                    updateUrl: '<?php echo base_url() . 'index.php/grid/metar_update/'; ?>',
                    columns: [[
                            {field: 'id', title: 'ID', width: 60,
                                formatter: function (value, row) {
                                    return row.id || value;
                                },
                                editor: {
                                    type: 'text'

                                }

                            },
                            {field: 'name', title: 'Name', width: 60},
                            {field: 'station', title: 'CCCC', width: 100, align: 'right', editor: 'text'},
                            {field: 'type', title: 'METAR / SPECI', width: 80, align: 'right', editor: 'text'},
                            {field: 'datetime', title: 'YYGGggz', width: 80, align: 'right', editor: 'text'},
                            {field: 'timezone', title: 'TIMEZONE', width: 180, editor: 'text'},
                            {field: "wind_direction", title: 'DIRECTION', width: 180, editor: 'text'},
                            {field: 'unit', title: 'UNIT', width: 180, editor: 'text'},
                            {field: 'visibility', title: 'WW or CAVOK', width: 180, editor: 'text'},
                            {field: 'present_weather', title: 'W1W1 ', width: 180, editor: 'text'},
                            {field: 'cloud', title: 'N1CCh1h1NnCChhhNhCChhh', width: 180, editor: 'text'},
                            {field: 'air_temperature', title: 'A/T', width: 180, editor: 'text'},
                            {field: 'humidity', title: 'HUMIDITY', width: 180, editor: 'text'},
                            {field: 'dew_temperature', title: 'DEW POINT', width: 180, editor: 'text'},
                            {field: 'wet_bulb', title: 'WET BULB', width: 180, editor: 'text'},
                            {field: 'station_pressure_hpa', title: 'QNH(hpa)', width: 180, editor: 'text'},
                            {field: 'sea_pressure_hpa', title: 'QFE(hpa)', width: 180, editor: 'text'},
                            {field: 'recent_weather', title: 'REW1W1', width: 180, editor: 'text'},
                            {field: 'day', title: 'DATE', width: 80, editor: 'text'},
                            {field: 'submitted', title: 'SUBMITTED ON', width: 80, editor: 'text'},
                            {field: 'status', title: 'Status', width: 50, align: 'center',
                                editor: {
                                    type: 'checkbox',
                                    options: {
                                        on: 'P',
                                        off: ''
                                    }
                                }
                            },
                            {field: 'action', title: 'Action', width: 80, align: 'center',
                                formatter: function (value, row, index) {
                                    if (row.editing) {
                                        var s = '<a href="javascript:void(0)" onclick="saverow(this)">Save</a> ';
                                        var c = '<a href="javascript:void(0)" onclick="cancelrow(this)">Cancel</a>';
                                        return s + c;
                                    } else {
                                        var e = '<a href="javascript:void(0)" onclick="editrow(this)">Edit</a> ';
                                        var d = '<a href="javascript:void(0)" onclick="deleterow(this)">Delete</a>';
                                        return e + d;
                                    }
                                }
                            }
                        ]],
                    onEndEdit: function (index, row) {
                        var ed = $(this).datagrid('getEditor', {
                            index: index,
                            field: 'id'
                        });
                        row.id = $(ed.target).text('getText');
                    },
                    onBeforeEdit: function (index, row) {
                        row.editing = true;
                         updateActions(index);
                        $(this).datagrid('refreshRow', index);
                       
                    },
                    onAfterEdit: function (index, row) {
                        row.editing = false;
                        updateActions(index);
                        $(this).datagrid('refreshRow', index);
                    },
                    onCancelEdit: function (index, row) {
                        row.editing = false;
                        updateActions(index);
                        $(this).datagrid('refreshRow', index);
                    }
                });
            });
            function updateActions(index){
			$('#tt').edatagrid('updateRow',{
				index: index,
				row:{}
			});
		}
            
            function getRowIndex(target) {
                var tr = $(target).closest('tr.datagrid-row');
                return parseInt(tr.attr('datagrid-row-index'));
            }
            function editrow(target) {
                $('#tt').edatagrid('beginEdit', getRowIndex(target));


                var $row = $(target).closest('tr');
                /* map text of each cell to an array*/
                var cellData = $row.find('td').map(function () {
                    return $(this).text();
                }).get();

                /* send array to server*/

                $.post('<?php echo base_url() . 'index.php/grid/metar_update/'; ?>', {rowData: cellData}, function (response) {
                    /* do something with response*/
                })
            }
            function deleterow(target) {
                $.messager.confirm('Confirm', 'Are you sure?', function (r) {
                    if (r) {
                        $('#tt').edatagrid('deleteRow', getRowIndex(target));
                    }
                });
            }
            function saverow(target) {
                $('#tt').edatagrid('endEdit', getRowIndex(target));            

            }
            function cancelrow(target) {
                $('#tt').edatagrid('cancelEdit', getRowIndex(target));
            }
            function insert() {
                var row = $('#tt').edatagrid('getSelected');
                if (row) {
                    var index = $('#tt').edatagrid('getRowIndex', row);
                } else {
                    index = 0;
                }
                $('#tt').edatagrid('insertRow', {
                    index: index,
                    row: {
                        status: 'P'
                    }
                });
                $('#tt').edatagrid('selectRow', index);
                $('#tt').edatagrid('beginEdit', index);
            }
        </script>
       

    </body>
</html>