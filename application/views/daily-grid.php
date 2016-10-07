
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/easyui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/icon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo.css">


<h2>DAILY WEATHER RECORDS</h2>
<!--<form class="form-horizontal well" action="<?php echo base_url(); ?>index.php/grid/import" method="post" name="upload_excel" enctype="multipart/form-data">
    <input type="file" name="file" id="file" class="input-mini">
    <button type="submit" id="submit" name="Import" class="btn sm btn-primary button-loading">Import</button>
</form>-->

<table id="dg" title="DAILY" style="width:100%;height:100%"
       toolbar="#toolbar" pagination="true" idField="id"
       rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr> 
            <th field="date" class="th" editor="text">Date</th>          
            <th field="max" class="th" editor="text">Max temp</th>
            <th field="min" class="th" editor="text">Min temp</th>
            <th field="actual" class="th" editor="text">Rainfall</th>
            <th field="anemometer" class="th" editor="text">Duration(Hrs)</th>
            <th field="wind" class="th" editor="text">Anemometer</th>
            <th field="maxi" class="th" editor="text">Height</th>
            <th field="rain" class="th" editor="text">Rain</th>
            <th field="thunder" editor="text">Thunder</th>
            <th field="fog" class="th" editor="text">Fog</th>
            <th field="haze" class="th" editor="text">Haze</th>
            <th field="storm" class="th" editor="text">Storm</th>
            <th field="quake" class="th" editor="text">Quake</th>
            <th field="height" class="th" editor="text">Height</th>
            <th field="duration" class="th" editor="text">day</th>
            <th field="sunshine" class="th" editor="text">Sunshine</th>
            <th field="radiationtype" class="th" editor="text">Radiation</th>
            <th field="radiation" class="th" editor="text">Radiation</th>
            <th field="evaptype1" class="th" editor="text">Evap Type 1</th>
            <th field="evap1" class="th" editor="text">Evaporation 1</th>
            <th field="evaptype2" class="th" editor="text">Evap. Type 2</th>
            <th field="evap2" class="th" editor="text">Evaporation 2</th>
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
            url: '<?php echo base_url() . 'index.php/grid/daily/'; ?>',
            saveUrl: '<?php echo base_url() . 'index.php/grid/daily_save/'; ?>',
            updateUrl: '<?php echo base_url() . 'index.php/grid/daily_update/'; ?>',
            destroyUrl: '<?php echo base_url() . 'index.php/grid/daily_delete/'; ?>'
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

