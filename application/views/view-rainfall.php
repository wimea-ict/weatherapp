
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
<?php require_once(APPPATH . 'views/permission.php'); ?> 

<div class=" container-fluid">
    <h4> Daily periodical rainfall</h4>
    <div class="row">
        <div class="span12">  

            <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span>

            <table id="sample-table-2" class="table table-striped table-bordered table-hover sample-table-2">
                <thead>
                    <tr>
                        <th class="center">
                            <label>
                                <input type="checkbox" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                          <td class="center">
                                    APPROVE
                                </td>
                        
                        <th>Date</th>
                        <th>Station</th>
                        <th class="hidden-480">Amount(mm)</th>

                        <th class="hidden-phone">Time started </th>

                        <th>Duration(Hrs.)</th>
                        <th>Date of submission </th>
                        <th>Submitted by</th>

                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if (is_array($rain) && count($rain)) {
                        foreach ($rain as $loop) {
                            ?>  

                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                    <td >

                                            <?php
                                            if ($loop->approved == "F") {
                                                ?>
                                                <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
                                                    <label class="btn btn-xs btn-default" data-toggle-class="btn-success" value="<?= $loop->id; ?>">
                                                        <input type="radio" name="status" id="<?= $loop->approved; ?>" value="<?= $loop->id; ?>" />
                                                        Approve
                                                    </label>
                                                    <label class="btn btn-xs btn-danger active" data-toggle-class="btn-danger" value="<?= $loop->id; ?>">
                                                        <input type="radio" name="status" id="<?= $loop->approved; ?>" value="<?= $loop->id; ?>" checked />
                                                       No
                                                    </label>
                                                </div> 
                                            <?php } ?>

                                            <?php
                                            if ($loop->status != "F") {
                                                ?>
                                                
                                            <?php } ?>

                                        </td>


                                <td>
                                    <a href="#"><?= $loop->date ?></a>
                                </td>

                                <td class="hidden-480"><?= $loop->station ?></td>
                                <td class="hidden-phone"><?= $loop->rain ?></td>

                                <td class="hidden-480">
                                    <span class="label label-success"><?= $loop->time ?></span>
                                </td>                                           
                                <td><?= $loop->duration ?></td>                                           
                                <td><?= $loop->submitted ?></td>
                                <td><?= $loop->user ?></td>


                                <td class="td-actions">

                                    <a href="<?php echo base_url() . "index.php/metar/rain/delete/" . $loop->id; ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
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
        <?php require_once(APPPATH . 'views/footers.php'); ?>

        <script src="<?php echo base_url(); ?>js/jQuery-2.1.4.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>js/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- Page script -->


        <script type="text/javascript">
            $(function () {
                $("#sample-table-2").dataTable();

            });
        </script>


        <script src="<?= base_url(); ?>assets/js/date-time/bootstrap-timepicker.min.js"></script>

        <script src="<?php echo base_url(); ?>js/moment-with-locales.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

        <script type="text/javascript">
            $(function () {


                $('#timepicker1').timepicker({
                    minuteStep: 1,
                    showSeconds: true,
                    showMeridian: false
                })
                $('#datenow').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
                $('#daterain').datetimepicker({
                    format: 'YYYY-MM-DD'
                });


            });
        </script>
        <script type="text/javascript">
            $('#Loading').hide();
            $('#Loading_daily').hide();
            $('#Loading_rainy').hide();

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





            $('#rainy').click(function (e) {
                e.preventDefault();
                var date = $('#daterain').val();
                var rain = $('#rain_now').val();
                var time = $('#timepicker1').val();
                var duration = $('#duration_now').val();
                var station = $('#number').val();


                //  console.log(station);
                // $('#Loading_daily').show(); 
                if (station != "") {

                    $.post("<?php echo base_url() ?>index.php/metar/rain", {station: station, date: date, rain: rain, time: time, duration: duration}
                    , function (response) {
                        //#emailInfo is a span which will show you message
                        $('#Loading_rainy').hide();
                        setTimeout(finishAjaxitem('Loading_rainy', escape(response)), 200);

                    }); //end change

                    function finishAjaxitem(id, response) {
                        $('#' + id).html(unescape(response));
                        $('#' + id).fadeIn();
                    }

                } else {
                    alert("Please select a station");
                    $('#Loading_rainy').hide();

                }
            }); //end change


        </script>

        <script>


            $('.btn-group[data-toggle=buttons]').each(function (i, e) {
                var default_class = $(e).data('toggle-default-class') || 'btn-default';

                $(e).find('label')
                        .click(function (event) {
                            $(e).find('label')
                                    .each(function (i, e) {
                                        if (!(e == event.target)) {
                                            $(e).removeClass($(e).data('toggle-class'))
                                                    .addClass(default_class);

                                            $(e).find('input').removeAttr('checked');
                                            // console.log($(e).find("input").attr("id"));


                                            $.post("<?php echo base_url() ?>index.php/metar/activate_rain", {
                                                id: $(e).find("input").val(),
                                                approve: $(e).find("input").attr("id")

                                            }, function (response) {
                                                // console.log(response);
                                            });
                                            // alert("active");

                                        } else {
                                            $(e).removeClass(default_class)
                                                    .addClass($(e).data('toggle-class'));

                                            $(e).find('input')
                                                    .attr('checked', 1);

                                        }
                                    });
                        });
            });

        </script>

