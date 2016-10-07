
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/easyui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/icon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/demo.css">


<h2>AAXX SYNOPTIC REGISTER </h2>
<!--<form class="form-horizontal well" action="<?php echo base_url(); ?>index.php/grid/import" method="post" name="upload_excel" enctype="multipart/form-data">
    <input type="file" name="file" id="file" class="input-mini">
    <button type="submit" id="submit" name="Import" class="btn sm btn-primary button-loading">Import</button>
</form>-->

<table id="dg" title="AAXX SYNOPTIC REGISTER " style="width:100%;height:100%"
       toolbar="#toolbar" pagination="true" idField="id"
       rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr> 
            <th field="date" class="th" editor="text">Date</th>
            <th field="time" class="th" editor="text">Time(GGG)</th>
            <th field="ir" class="th" editor="text">Inclusion or omission of precipitation(ir)</th>
            <th field="ix" class="th" editor="text">Inclusion or omission of precipitation(ix)</th>          
            <th field="h" class="th" editor="text">Height of lowest cloud cover </th>
            <th field="www" class="th" editor="text">Present weather</th>
            <th field="vv" class="th" editor="text">Horizontal visibility(vv)</th>
            <th field="n" class="th" editor="text">Total cloud cover[N]</th>
            <th field="dd" class="th" editor="text">Wind speed(KT)[dd]</th>
            <th field="ff" class="th" editor="text">Wind direction </th>
            <th field="t" class="th" editor="text">(1 Sn1 0 ) Air temperature[TTT] </th>
            <th field="td" class="th" editor="text">(2 Sn 2 0 )Dew point temperature[TdTdTd]</th>
            <th field="Po" class="th" editor="text">Pressure at station level[P0P0P0P0]</th>
            <th field="gisis" class="th" editor="text">Group Indicator Standard isobaric surface[4 8]</th>
            <th field="hhh" class="th" editor="text">Geopotential of standard Isobaric surface[hhh]</th>
            <th field="rrr" class="th" editor="text">Amount of precipitation[RRR]</th>
            <th field="tr" class="th" editor="text">Duration period of precipitation[Tr]</th>
            <th field="present" class="th" editor="text">Present weather[WWW]</th>
            <th field="past" class="th" editor="text">Past weather[W1W1]</th>
            <th field="nh" class="th" editor="text">Amount of clouds(Cl)[Nh]</th>
            <th field="cl" class="th" editor="text">Clouds (Sc,St,Cu,Cb)[Cl]</th>
            <th field="cm" class="th" editor="text">Clouds (Ac,As,Ns) [Cm]</th>
            <th field="ch" class="th" editor="text">Clouds (C,Cc,Cs)[Ch]</th>
<!--            <th field="maxtemp" class="th" editor="text">Maximum temperature</th>-->
            <th field="Tq" class="th" editor="text">Grass minimum temperature</th>
            <th field="Ro" class="th" editor="text">Character & intensity of precipitation</th>
            <th field="R1" class="th" editor="text">Beginning or end of precipitation</th>
            <th field="Tx" class="th" editor="text">Maximum temperature[TxTxTx]</th>
            <th field="Tm" class="th" editor="text">Minimum temperature<span class="green">[Tm]</span></th>
            <th field="EE" class="th" editor="text">Amount of evaporation[EE]</th>
            <th field="E" class="th" editor="text">Indicator of  type of instrument[E]</th>
            <th field="sss" class="th" editor="text">Duration of sunshine[SSS]</th>
            <th field="pchange" class="th" editor="text">Sign of pressure change</th>
            <th field="p24" class="th" editor="text">Pressure change in 24 hours</th>
            <th field="rr" class="th" editor="text">Amount of precipitation</th>
            <th field="tr1" class="th" editor="text">Duration period of precipitation[]</th>
            <th field="ns" class="th" editor="text">Amount of individual cloud layer</th>
            <th field="c" class="th" editor="text">Genus of Cloud</th>
            <th field="hs" class="th" editor="text">Height of base cloud layer or mass</th>
            <th field="ns1" class="th" editor="text">Amount of individual cloud layer</th>
            <th field="c1" class="th" editor="text">Genus of cloud</th>
            <th field="hs1" class="th" editor="text">Height of base cloud layer or mass</th>
            <th field="ns2" class="th" editor="text">Amount of individual cloud layer</th>
            <th field="c2" class="th" editor="text">Genus of cloud</th>
            <th field="hs2" class="th" editor="text">Height of base cloud layer or mass</th>
            <th field="supplementary" class="th" editor="text"><label>Supplementary information<br>9 11 ff highest gust <br>9 12 ff highest mean wind speed<br>9 43CL DP movement of C clouds</label></th>
            <th field="wb" class="th" editor="text"><label >Wet bulb Temperature</label>  </th>
            <th field="rh" class="th" editor="text"><label>Relative Humidity(RH)</label></th>
            <th field="vap" class="th" editor="text"> <label>  Vapour Pressure(VAP)</label></th>
           


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
                url: '<?php echo base_url().'index.php/grid/synoptic/'; ?>',
                saveUrl: '<?php echo base_url().'index.php/grid/synoptic_save/'; ?>',
                updateUrl: '<?php echo base_url().'index.php/grid/synoptic_update/'; ?>',
                destroyUrl: '<?php echo base_url().'index.php/grid/synoptic_delete/'; ?>'
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

