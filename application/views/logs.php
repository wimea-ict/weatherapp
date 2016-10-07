<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

<div class="row-fluid">
    <div class="page-content"> 
        <h1>User logs</h1>


        <label>Day/Month/Year </label>

        <?php $months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"); ?>

        <div class="span12">
            <select class=" col-md-2 no"  name="day" id="day">
                <option value=""></option>
                <?php
                for ($d = 1; $d <= 31; $d++)
                    echo "<option value='$d'>$d</option>"
                    ?>
            </select>
            <select  name="month" id="month" >
                <option value=""></option>
                <?php
                for ($m = 1; $m <= 12; $m++)
                    echo "<option value='$m'>" . $months[$m] . "</option>"
                    ?>
            </select>
            <select name="year" id="year" >
                <option value=""></option>
                <?php
                for ($y = date('Y'); $y >= 1902; $y--)
                    echo "<option value='$y'>$y</option>"
                    ?>
            </select>
            <label>Action</label>
            <select name="action" id="action" >
                <option value=""></option>
                <option value="Create">Create</option>
                <option value="Update">Update</option>
                <option value="Delete">Delete</option>
                <option value="Login">Login</option>
                <option value="Approve">Approve</option>

            </select>
            <select name="datas" id="datas" >
                <option value=""></option>
                <option value="Metar">Metar</option>
                <option value="Daily">Daily</option>
                <option value="Synoptic">Synoptic</option>
                 <option value="Rainfall">Rainfall</option>
            </select>

            <label>Users</label>
            <select name="user" id="user" >
                <option value=""></option>
                <?php
                foreach ($users as $loop) {
                    ?> 
                <option value="<?php echo $loop->name?>"><?php echo $loop->name?></option>
                    <?php }
                ?>
            </select>
            <button type="button" class="btn btn-info btn-small" id="generate" >generate</button>
            <input type="button" class="btn btn-info btn-small" onclick="ExportToExcel('datatable')" value="Export to Excel">
            <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span><br>


        </div>

<!--           <table id="datatable" class="table table-striped table-bordered table-hover">
                  <thead>
                      <tr>
                          <th class="center">
                              <label>
                                  <input type="checkbox" />
                                  <span class="lbl"></span>
                              </label>
                          </th>
                          <th>User</th>
                          <th>UserID</th>
                          <th class="hidden-480">Action</th>
                            <th class="hidden-480">Details</th>
                          <th class="hidden-480">IP</th>
                           <th class="hidden-480">Date</th>
                         

                          <th></th>
                      </tr>
                  </thead>

                  <tbody>
        <?php
        if (is_array($logs) && count($logs)) {
            foreach ($logs as $loop) {
                ?>  

                                      <tr>
                                          <td class="center">
                                              <label>
                                                  <input type="checkbox" />
                                                  <span class="lbl"></span>
                                              </label>
                                          </td>

                                          <td>
                                              <a href="#"><?= $loop->user ?></a>
                                          </td>
                                          <td><?= $loop->userid ?></td>
                                          <td class="hidden-480"><?= $loop->action ?></td>
                                          <td class="hidden-phone"><?= $loop->details ?></td>

                                          <td class="hidden-480">
                                              <span class="label label-success"><?= $loop->ip ?></span>
                                          </td>
                                           <td class="hidden-480">
                                              <span class="label label-info"><?= $loop->date ?></span>
                                        

                                        <td> 
                                                     
                                                      <a href="<?php echo base_url() . "index.php/logs/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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

        -->

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->


<?php require_once(APPPATH . 'views/footer_report.php'); ?>

<script src='<?= base_url(); ?>js/jquery.dataTables.min.js'></script>

<script src="<?= base_url(); ?>js/jquery.dataTables.js" type="text/javascript"></script>
<script type="text/javascript">
                $(function () {
                    $("#datatable").dataTable();

                });
</script>
<script type="text/javascript">
    $('#Loading_name').hide();
    $("#name").blur(function (e) {

        var name = $("#name").val();

        if (name != null) {           // show loader 

            $('#Loading_name').show();
            $.post("<?php echo base_url() ?>index.php/User/check", {
                name: name
            }, function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_name').hide();
                setTimeout(finishAjax('Loading_name', escape(response)), 400);
            });
        }
        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    }

    );
    $('#Loading_email').hide();
    $("#email").blur(function (e) {

        var email = $("#email").val();

        if (email != null) {           // show loader 

            $('#Loading_email').show();
            $.post("<?php echo base_url() ?>index.php/User/check_email", {
                email: email
            }, function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_email').hide();
                setTimeout(finishAjax('Loading_email', escape(response)), 400);
            });
        }
        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    }

    );
</script>
<script type="text/javascript">
    function ExportToExcel(datatable) {
        var htmltable = document.getElementById('metar');
        var html = htmltable.outerHTML;
        window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
</script>
<script type="text/javascript">
    $('#Loading').hide();
    $('#Loading_daily').hide();
    $('#station').change(function () {
        var station = $('#station').val();
        if (station != "") {

            $.post("<?= base_url() ?>/index.php/station/get", {station: $("#station").val()}
            , function (station) {
                var json = JSON.parse(station);
                $('#number').empty();
                $('#code').empty();
                //   console.log(json[0].number);
                $("#number").val(json[0].number);
                $("#code").val(json[0].code);

            });


        } else {

            $('#number').empty();
            $('#code').empty();
        }
    }); //end change

    $("#generate").on("click", function (e) {

       
        var month = $("#month").val();
        var year = $("#year").val();
        var day = $("#day").val();
         var action = $("#action").val();
          var user = $("#user").val();
           var datas = $("#datas").val();
        $('#meta').hide();
        $('#Loading').show();
        $.post("<?php echo base_url() ?>index.php/logs/gets", {datenow: $("#datenow").val(), day: day, month: month, year: year, action:action,user:user,datas:datas}
        , function (response) {
            //#emailInfo is a span which will show you message
            $('#Loading').hide();
            setTimeout(finishAjaxitem('Loading', escape(response)), 200);
        }); //end change

        function finishAjaxitem(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    });


</script>
