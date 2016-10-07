
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/easyui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/icon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo.css">


<h2>Metars</h2>
<!--<form class="form-horizontal well" action="<?php echo base_url(); ?>index.php/grid/import" method="post" name="upload_excel" enctype="multipart/form-data">
    <input type="file" name="file" id="file" class="input-mini">
    <button type="submit" id="submit" name="Import" class="btn sm btn-primary button-loading">Import</button>
</form>-->

<table id="dg" title="Metars" style="width:100%;height:100%"
       toolbar="#toolbar" pagination="true" idField="id"
       rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr> 
            <th field="type" class="th" editor="text">TYPE</th>
            <th field="datetime" class="th" editor="text">DATE</th>
            <th field="timezone" class="th" editor="text">YYGGggz</th>
            <th field="wind_direction" width="30" editor="text">DIRECTION</th>
            <th field="unit" class="th" editor="text">UNIT</th>
            <th field="visibility" class="th" editor="text">WW or CAVOK</th>
            <th field="present_weather" class="th" editor="text">Present Weather</th>
            <th field="cloud" class="th" editor="text">N1CCh1h1NnCChhhNhCChhh</th>
            <th field="air_temperature" class="th" editor="text">Air Pressure </th>
            <th field="humidity" class="th" editor="text">Humidity</th>
            <th field="dew_temperature" class="th" editor="text">DEW POINT</th>
            <th field="wet_bulb" class="th" editor="text">WET BULB</th>
            <th field="station_pressure_hpa" editor="text">QNH(hpa)</th>
            <th field="sea_pressure_hpa" class="th" editor="text">Sea HPA</th>
            <th field="recent_weather" class="th" editor="text">REW1W1</th>
            <th field="day" class="th" editor="text">day</th>
        </tr>
    </thead>
</table>
<div id="toolbar">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Delete</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
    <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
  
    <div id="tb" style="padding:5px;height:auto">


    </div>

</div>


<style type="text/css">
    #fm{
        margin:0;
        padding:10px 30px;
    }
    .ftitle{
        font-size:14px;
        font-weight:bold;
        padding:5px 0;
        margin-bottom:10px;
        border-bottom:1px solid #ccc;
    }
    .fitem{
        margin-bottom:5px;
    }
    .fitem label{
        display:inline-block;
        width:80px;
    }
    .fitem input{
        width:160px;
    }
</style>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easyui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.edatagrid.js"></script>

<script type="text/javascript">
    $(function () {
        $('#dg').edatagrid({
            url: '<?php echo base_url() . 'index.php/grid/metar/'; ?>',
            saveUrl: '<?php echo base_url() . 'index.php/grid/metar_save/'; ?>',
            updateUrl: '<?php echo base_url() . 'index.php/grid/metar_update/'; ?>',
            destroyUrl: '<?php echo base_url() . 'index.php/grid/metar_delete/'; ?>'
        });
    });
    var lastIndex;
    $('#dg').datagrid({
        onClickRow: function (rowIndex) {
            if (lastIndex != rowIndex) {
                $(this).datagrid('endEdit', lastIndex);
                $(this).datagrid('beginEdit', rowIndex);
            }
            lastIndex = rowIndex;
        },
        onBeginEdit: function (rowIndex) {
            var editors = $('#dg').datagrid('getEditors', rowIndex);
            var n1 = $(editors[0].target);
            var n2 = $(editors[1].target);
            var n3 = $(editors[2].target);
            n1.add(n2).numberbox({
                onChange: function () {
                    var cost = n1.numberbox('getValue') * n2.numberbox('getValue');
                    n3.numberbox('setValue', cost);
                }
            })
        }
    });
    $('#dg').datagrid({
        rowStyler: function (index, row) {
            if (row.listprice > 80) {
                return 'background-color:#6293BB;color:#fff;'; // return inline style
                // the function can return predefined css class and inline style
                // return {class:'r1', style:{'color:#fff'}};	
            }
        }
    });


//        onSelect: function(rows){
//            var url = '<?php echo base_url() . 'index.php/grid/account/'; ?>' + rows.family_id;
//            var tr = $(this).closest('tr.datagrid-row');
//            var idx = parseInt(tr.attr('datagrid-row-index'));
//            var ed = $("#dgUpholdstery").datagrid("getEditor", {index: id, field: 'account'});
//            $(ed.target).combobox("reload", url);
//        }

</script>

