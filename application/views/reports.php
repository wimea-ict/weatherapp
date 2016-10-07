<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />

<div class="main-container container-fluid scroll">
    <div class="page-content">       
        <div class="row-fluid" >
            <div class="span12">
                <div class="tabbable tabs-top">
                    <div class="tab-content">
                        <div id="home3" class="tab-pane in active">
                            <div class="page-header position-relative">
                                <h1>
                                    <i class="icon-cloud icon-2x blue"></i>
                                    MONTHLY RAINFALL REPORT(form No.496)Rev.12/2012
                                </h1>
                            </div><!--/.page-header-->

                            <div class="row-fluid">
                                <div class="span12">
                                    <!--PAGE CONTENT BEGINS-->

                                    <div class="page-content">					

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <!--PAGE CONTENT BEGINS-->


                                                <div class="row-fluid">
                                                    <div class="span12">
                                                        <div class="widget-box transparent">

                                                            <div class="widget-main">
                                                                <div class="form-group">
                                                                    <div class="span4">
                                                                        <label>Station</label>
                                                                        <select id="station">

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
                                                                    </div>
                                                                    <label> Month/Year </label>
                                                                    <?php $months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"); ?>

                                                                    <div class="span8">
                                                                        <select  name="month" id="month" >
                                                                            <?php
                                                                            for ($m = 1; $m <= 12; $m++)
                                                                                echo "<option value='$m'>" . $months[$m] . "</option>"
                                                                                ?>
                                                                        </select>
                                                                        <select name="year" id="year" >
                                                                            <?php
                                                                            for ($y = date('Y'); $y >= 1902; $y--)
                                                                                echo "<option value='$y'>$y</option>"
                                                                                ?>
                                                                        </select>
                                                                        <button type="button" class="btn btn-info btn-small" id="generate" >generate</button>
                                                                        <input type="button" class="btn btn-info btn-small" onclick="ExportToExcel('datatable')" value="Export to Excel">
                                                                        <input type="button" onclick="printDiv('printableArea')" value="print" />


                                                                    </div>



                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="span12" id="printableArea">  
                                                        <span id="loading_card" name ="loading_card"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="loading............" /></span>
                                                        <hr>
                                                        <div class="onload" id="onload">
                                                            <div class="rainfallcard" >

                                                                <?php
                                                                //  var_dump($daily);
                                                                if (is_array($daily) && count($daily)) {
                                                                    foreach ($daily as $loop) {

                                                                        $month = date('m', strtotime($loop->date));
                                                                        $day = date('d', strtotime($loop->date));
                                                                        $current_month = date('m');

                                                                        if ($loop->actual < 1) {

                                                                            if ($loop->actual < 0.1) {

                                                                                $rain = 'TR';
                                                                            } else {

                                                                                $rain = 'NIL';
                                                                            }
                                                                        } else {
                                                                            $rain = $loop->actual;
                                                                        }

                                                                        if ($month == $current_month + 1) {
                                                                            $first = $rain;
                                                                        }

                                                                        if ($month == $current_month) {

                                                                            if ($loop->actual > $max) {
                                                                                $max = $loop->actual;
                                                                                $maxdate = $loop->date;
                                                                            }
                                                                            if ($loop->actual > 1) {
                                                                                $rains = $rains + 1;
                                                                            }
                                                                            $sum = $sum + $loop->actual;


                                                                            if ($day == '1') {
                                                                                $one = $rain;
                                                                            }
                                                                            if ($day == '2') {
                                                                                $two = $rain;
                                                                            }
                                                                            if ($day == '3') {
                                                                                $three = $rain;
                                                                            }
                                                                            if ($day == '4') {
                                                                                $four = $rain;
                                                                            }
                                                                            if ($day == '5') {
                                                                                $five = $rain;
                                                                            }
                                                                            if ($day == '6') {
                                                                                $six = $rain;
                                                                            }
                                                                            if ($day == '7') {
                                                                                $seven = $rain;
                                                                            }
                                                                            if ($day == '8') {
                                                                                $eight = $rain;
                                                                            }
                                                                            if ($day == '9') {
                                                                                $nine = $rain;
                                                                            }
                                                                            if ($day == '10') {
                                                                                $ten = $rain;
                                                                            }
                                                                            if ($day == '11') {
                                                                                $eleven = $rain;
                                                                            }
                                                                            if ($day == '12') {
                                                                                $twelve = $rain;
                                                                            }
                                                                            if ($day == '13') {
                                                                                $thirt = $rain;
                                                                            }
                                                                            if ($day == '14') {
                                                                                $fourt = $rain;
                                                                            }
                                                                            if ($day == '15') {
                                                                                $fith = $rain;
                                                                            }
                                                                            if ($day == '16') {
                                                                                $sixth = $rain;
                                                                            }
                                                                            if ($day == '17') {
                                                                                $seventh = $rain;
                                                                            }
                                                                            if ($day == '18') {
                                                                                $eighth = $rain;
                                                                            }
                                                                            if ($day == '19') {
                                                                                $nineth = $rain;
                                                                            }
                                                                            if ($day == '20') {
                                                                                $twenty = $rain;
                                                                            }
                                                                            if ($day == '21') {
                                                                                $twentyone = $rain;
                                                                            }
                                                                            if ($day == '22') {
                                                                                $twentytwo = $rain;
                                                                            }
                                                                            if ($day == '23') {
                                                                                $twentythree = $rain;
                                                                            }
                                                                            if ($day == '24') {
                                                                                $twentyfour = $rain;
                                                                            }
                                                                            if ($day == '25') {
                                                                                $twentyfive = $rain;
                                                                            }
                                                                            if ($day == '26') {
                                                                                $twentysix = $rain;
                                                                            }
                                                                            if ($day == '27') {
                                                                                $twentyseven = $rain;
                                                                            }
                                                                            if ($day == '28') {
                                                                                $twentyeight = $rain;
                                                                            }
                                                                            if ($day == '29') {
                                                                                $twentynine = $rain;
                                                                            }
                                                                            if ($day == '30') {
                                                                                $thirty = $rain;
                                                                            }
                                                                            if ($day == '31') {
                                                                                $thirtyone = $rain;
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                                <table id="card" >
                                                                    <tr style="height:1px;">

                                                                        <td  colspan="10">

                                                                        </td>


                                                                    </tr>

                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <strong>REGION</strong>
                                                                        </td>
                                                                        <td colspan="3">
                                                                            <?php echo $this->session->userdata('region'); ?>
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <strong>  DISTRICT</strong>
                                                                        </td>
                                                                        <td colspan="3">
                                                                            <?php echo $this->session->userdata('city'); ?>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="10">
                                                                            <h5> <strong>  STATION NAME:</strong>  <?php echo $this->session->userdata('station'); ?></h5>
                                                                        </td>


                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <strong> NUMBER:</strong>
                                                                        </td>
                                                                        <td colspan="3">
                                                                            <?php echo $this->session->userdata('number'); ?>
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <strong>  MONTH</strong>
                                                                        </td>
                                                                        <td colspan="3">
                                                                            <?php echo date('Y-M'); ?>
                                                                        </td>

                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <strong> 2</strong>
                                                                        </td>
                                                                        <td >
                                                                            <strong> 3</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>   4
                                                                        </td>
                                                                        <td>
                                                                            <strong>  5</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>  6</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>   7</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>  8</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>  9</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>   10</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>  11</strong>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>

                                                                        <td>
                                                                            <?= $two; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $three; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $four ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $five ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $six ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $seven ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $eight ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $nine ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $ten ?>
                                                                        </td>
                                                                        <td >
                                                                            <?= $eleven; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td >
                                                                            <strong>    12</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>  13</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>   14</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>   15</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>   16</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>  17</strong>
                                                                        </td> 
                                                                        <td>
                                                                            <strong>  18</strong>
                                                                        </td> 
                                                                        <td>
                                                                            <strong>  19</strong>
                                                                        </td>  
                                                                        <td>
                                                                            <strong> 20</strong>
                                                                        </td> 
                                                                        <td>
                                                                            <strong>  21</strong>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td >
                                                                            <?= $twelve; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $thirt; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $fourt ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $fith ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $sixth ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $seventh ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $eighth ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $nineth ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twenty ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twentyone ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td >
                                                                            <strong>   22</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong> 23</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>  24</strong>
                                                                        </td>  
                                                                        <td>
                                                                            <strong>  25</strong>
                                                                        </td> 
                                                                        <td>
                                                                            <strong>  26</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong>  27</strong>
                                                                        </td> 
                                                                        <td>
                                                                            <strong> 28</strong>
                                                                        </td> 
                                                                        <td>
                                                                            <strong>  29</strong>
                                                                        </td>  
                                                                        <td>
                                                                            <strong> 30</strong>
                                                                        </td>
                                                                        <td>
                                                                            <strong> 31</strong>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td >
                                                                            <?= $twentytwo ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twentythree ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twentyfour ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twentyfive ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twentysix ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twentyseven ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twentyeight ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $twentynine ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $thirty ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $thirtyone ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td >

                                                                        </td>
                                                                        <td colspan="3">
                                                                            <strong>   1<sup>st</sup> of following month </strong>
                                                                        </td>

                                                                        <td colspan="2">
                                                                            <strong>     Total </strong>
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <strong> Days </strong>
                                                                        </td>                      
                                                                        <td colspan="2">

                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td >

                                                                        </td>
                                                                        <td colspan="3">
                                                                            <?= $first ?>
                                                                        </td>

                                                                        <td colspan="2">
                                                                            <?= $sum ?>
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <?= $rains ?>
                                                                        </td>                      
                                                                        <td colspan="2">

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="8">
                                                                            ........................................................................................................................................................................
                                                                        </td>
                                                                        <td colspan="2" >
                                                                            <strong>     Observer</strong>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <strong>   AVERAGE</strong>
                                                                        </td>
                                                                        <td colspan="2" >
                                                                            <strong>   YEARS</strong>
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <strong>   MAX.FALL</strong>
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <strong>  DATE</strong>
                                                                        </td>
                                                                        <td colspan="2">

                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <?= number_format($sum / $rains, 2) ?>
                                                                        </td>
                                                                        <td colspan="2" >

                                                                        </td>
                                                                        <td colspan="2">
                                                                            <?= $max ?>
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <?= $maxdate ?>
                                                                        </td>
                                                                        <td colspan="2">

                                                                        </td>

                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--                                                    <div class="span9">
                                                                                                            <div class="space"></div>
                                                    
                                                                                                            <div id="calendar"></div>
                                                                                                        </div>-->



                                                </div>

                                                <!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                        </div><!--/.row-fluid-->
                                    </div>






                                    <!--PAGE CONTENT ENDS-->
                                </div>                <!--PAGE CONTENT ENDS-->
                            </div>	</div>


                    </div>
                </div>
            </div><!--/span-->

            <div class="vspace-6"></div>


        </div><!--/row-->

        <div class="hr hr-double hr-dotted hr18"></div>
        <div class="span5">

        </div><!--/span-->

        <div class="span7">
            <div class="widget-box transparent">


                <div class="widget-body">
                    <div class="widget-main padding-4">
                        <div id="sales-charts" ></div>
                    </div><!--/widget-main-->
                </div><!--/widget-body-->
            </div><!--/widget-box-->
        </div>  
    </div><!--/.page-content-->



</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_report.php'); ?>
<script src="<?= base_url(); ?>assets/js/fullcalendar.min.js"></script>
<script type="text/javascript">
                                                                            $(function () {

                                                                                /* initialize the external events
                                                                                 -----------------------------------------------------------------*/

                                                                                $('#external-events div.external-event').each(function () {

                                                                                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                                                                                    // it doesn't need to have a start or end
                                                                                    var eventObject = {
                                                                                        title: $.trim($(this).text()) // use the element's text as the event title
                                                                                    };

                                                                                    // store the Event Object in the DOM element so we can get to it later
                                                                                    $(this).data('eventObject', eventObject);

                                                                                    // make the event draggable using jQuery UI
                                                                                    $(this).draggable({
                                                                                        zIndex: 999,
                                                                                        revert: true, // will cause the event to go back to its
                                                                                        revertDuration: 0  //  original position after the drag
                                                                                    });

                                                                                });




                                                                                /* initialize the calendar
                                                                                 -----------------------------------------------------------------*/

                                                                                var date = new Date();
                                                                                var d = date.getDate();
                                                                                var m = date.getMonth();
                                                                                var y = date.getFullYear();


                                                                                var calendar = $('#calendar').fullCalendar({
                                                                                    buttonText: {
                                                                                        prev: '<i class="icon-chevron-left"></i>',
                                                                                        next: '<i class="icon-chevron-right"></i>'
                                                                                    },
                                                                                    header: {
                                                                                        left: 'prev,next today',
                                                                                        center: 'title',
                                                                                        right: 'month,agendaWeek,agendaDay'
                                                                                    },
                                                                                    events: [
<?php
if (is_array($daily) && count($daily)) {

    foreach ($daily as $loops) {
        $value = explode("-", $loops->date);
        $y = $value[0];
        $m = $value[1];
        $d = $value[2];
        ?>
                                                                                                {
                                                                                                    title: '<?php echo $loops->actual . 'mm'; ?>',
                                                                                                    start: new Date(<?= $y ?>, <?= $m - 1 ?>,<?= $d ?>),
                                                                                                    className: 'label-success'},
        <?php
    }
}
?>


                                                                                    ]
                                                                                    ,
                                                                                    editable: true,
                                                                                    droppable: true, // this allows things to be dropped onto the calendar !!!
                                                                                    drop: function (date, allDay) { // this function is called when something is dropped

                                                                                        // retrieve the dropped element's stored Event Object
                                                                                        var originalEventObject = $(this).data('eventObject');
                                                                                        var $extraEventClass = $(this).attr('data-class');


                                                                                        // we need to copy it, so that multiple events don't have a reference to the same object
                                                                                        var copiedEventObject = $.extend({}, originalEventObject);

                                                                                        // assign it the date that was reported
                                                                                        copiedEventObject.start = date;
                                                                                        copiedEventObject.allDay = allDay;
                                                                                        if ($extraEventClass)
                                                                                            copiedEventObject['className'] = [$extraEventClass];

                                                                                        // render the event on the calendar
                                                                                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                                                                                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                                                                                        // is the "remove after drop" checkbox checked?
                                                                                        if ($('#drop-remove').is(':checked')) {
                                                                                            // if so, remove the element from the "Draggable Events" list
                                                                                            $(this).remove();
                                                                                        }

                                                                                    }
                                                                                    ,
                                                                                    selectable: true,
                                                                                    selectHelper: true,
                                                                                    select: function (start, end, allDay) {

                                                                                        bootbox.prompt("New Event Title:", function (title) {
                                                                                            if (title !== null) {
                                                                                                calendar.fullCalendar('renderEvent',
                                                                                                        {
                                                                                                            title: title,
                                                                                                            start: start,
                                                                                                            end: end,
                                                                                                            allDay: allDay
                                                                                                        },
                                                                                                        true // make the event "stick"
                                                                                                        );
                                                                                            }
                                                                                        });


                                                                                        calendar.fullCalendar('unselect');

                                                                                    }
                                                                                    ,
                                                                                    eventClick: function (calEvent, jsEvent, view) {

                                                                                        var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
                                                                                        form.append("<input autocomplete=off type=text value='" + calEvent.title + "' /> ");
                                                                                        form.append("<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>");

                                                                                        var div = bootbox.dialog(form,
                                                                                                [
                                                                                                    {
                                                                                                        "label": "<i class='icon-trash'></i> Delete Event",
                                                                                                        "class": "btn-small btn-danger",
                                                                                                        "callback": function () {
                                                                                                            calendar.fullCalendar('removeEvents', function (ev) {
                                                                                                                return (ev._id == calEvent._id);
                                                                                                            })
                                                                                                        }
                                                                                                    }
                                                                                                    ,
                                                                                                    {
                                                                                                        "label": "<i class='icon-remove'></i> Close",
                                                                                                        "class": "btn-small"
                                                                                                    }
                                                                                                ]
                                                                                                ,
                                                                                                {
                                                                                                    // prompts need a few extra options
                                                                                                    "onEscape": function () {
                                                                                                        div.modal("hide");
                                                                                                    }
                                                                                                }
                                                                                        );

                                                                                        form.on('submit', function () {
                                                                                            calEvent.title = form.find("input[type=text]").val();
                                                                                            calendar.fullCalendar('updateEvent', calEvent);
                                                                                            div.modal("hide");
                                                                                            return false;
                                                                                        });


                                                                                        //console.log(calEvent.id);
                                                                                        //console.log(jsEvent);
                                                                                        //console.log(view);

                                                                                        // change the border color just for fun
                                                                                        //$(this).css('border-color', 'red');

                                                                                    }

                                                                                });


                                                                            })
</script>
<script type="text/javascript">
    function ExportToExcel(datatable) {
        var htmltable = document.getElementById('card');
        var html = htmltable.outerHTML;
        window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>


<script type="text/javascript">
    $(document).ready(function ()
    {


        $('#loading_card').hide();
        $("#generate").on("click", function (e) {

            $('#loading_card').show();

            $("#onload").hide();

            var station = $("#station").val();
            var month = $("#month").val();
            var year = $("#year").val();

            if (month.length > 0) {

                $.post("<?php echo base_url() ?>index.php/welcome/card", {station: station, month: month, year: year}
                , function (response) {
                    //#emailInfo is a span which will show you message

                    $('#loading_card').hide();
                    setTimeout(finishAjax('loading_card', escape(response)), 200);

                }).fail(function (e) {
                    console.log(e);
                }); //end change
            } else {
                alert("Please insert missing information");

                $('#loading_card').hide();
            }

            function finishAjax(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }
        })




    });



</script>

