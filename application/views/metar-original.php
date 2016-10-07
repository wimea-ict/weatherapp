<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<style>
    table.zebra-style {
        font-family:"Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        text-align:left;
        border:1px solid #ccc;
        margin-bottom:25px;
        width:90%
    }
    table.zebra-style th {
        color: #444;
        font-size: 13px;
        font-weight: normal;
        padding: 10px 8px;
    }
    table.zebra-style td {
        color: #777;
        padding: 8px;
        font-size:13px;
    }
    table.zebra-style tr.odd {
        background:#f2f2f2;
    }
    body {
        background:#fafafa;
    }
    .container {
        width: 800px;
        border: 1px solid #C4CDE0;
        border-radius: 2px;
        margin: 0 auto;
        height: 1300px;
        background:#fff;
        padding-left:10px;
    }
    td, th {
        border: 1px solid #ccc;
    }
    #status { padding:10px; background:#88C4FF; color:#000; font-weight:bold; font-size:12px; margin-bottom:10px; display:none; width:90%; }
</style>

<h3>METAR</h3>
<h4><span>DAY: </span>   <?php echo date("l"); ?> ..............................                <span> DATE:</span><?php echo date("Y-m-d"); ?></h4>
<div class="main-container container-fluid scroll">
    <div class="page-content">  
        <table id="example" class="dataTable display table zebra-style span8" cellspacing="0" width="100%">
            <thead>
                <tr class="odd">
                    <th ><div><span>METAR /SPECI</span></div></th>
                    <th ><div><span>CCCC</span></div></th>
                    <th ><div><span>YYGGgg</span></div></th>
                    <th ><div><span>Dddff/<a href="#">f<span class="foot-note">m</span></a>/<a href="#">f<span class="foot-note">m</span></a></span></div></th>
                    <th><div><span>WW of CAVOCK</span></div></th>
                    <th ><div><span>W1W1</span></div></th>
                    <th ><div><span><a href="#">N<span class="foot-note">l</span>CC<a href="#">h<span class="foot-note">1</span>h<span class="foot-note">1</span>h<span class="foot-note">1</span>N<span class="foot-note">n</span>CChhh N<span class="foot-note">H</span> CChhh</a></span></div></th>
                    <th ><div><span>QNH(hpa)</span></div></th>
                    <th ><div><span>QNH(in)</span></div></th>
                    <th ><div><span>QFE(hpa)</span></div></th>
                    <th ><div><span>QFE(in)</span></div></th>
                    <th ><div><span>REW1W1</span></div></th>
                    <th ><div><span>TREND</span></div></th>

                </tr>
            </thead>

            <tbody>

                <?php
                if (is_array($metars) && count($metars)) {
                    foreach ($metars as $loop) {
                        ?>  

                        <tr >
                            <td id="type:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->type; ?></td>
                            <td id="cc:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->cc; ?></td>
                            <td id="yg:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->yg; ?></td>
                            <td id="df:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->df; ?></td>
                            <td id="ww:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ww; ?></td>
                            <td id="w1:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->w1; ?></td>
                            <td id="nc:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->nc; ?></td>
                             <td id="qnh:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->qnh; ?></td>
                            <td id="qni:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->qni; ?></td>
                            <td id="qfh:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->qfh; ?></td>
                            <td id="qfi:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->qfi; ?></td>
                            <td id="re:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->re; ?></td>
                            <td id="trend:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->trend; ?></td>


                        </tr>

                        <?php
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<script src="<?= base_url(); ?>js/2.0.3-jquery.min.js"></script>
<script>
    $(function () {
        //acknowledgement message
        var message_status = $("#status");
        $("td[contenteditable=true]").blur(function () {
            var field_id = $(this).attr("id");
            var value = $(this).text();
            $.post('<?php echo base_url() . "index.php/metar/updater/"; ?>', field_id + "=" + value, function (data) {
                if (data != '')
                {
                    message_status.show();
                    message_status.text(data);
                    //hide the message
                    setTimeout(function () {
                        message_status.hide()
                    }, 1000);
                }
            });
        });


        jQuery('.s_download').click(function () {
            var semail = jQuery("#itzurkarthi_email").val();
            if (semail == '')
            {
                alert('Enter Email');
                return false;
            }
            var str = "sub_email=" + semail
            jQuery.ajax({
                type: "POST",
                url: "download.php",
                data: str,
                cache: false,
                success: function (htmld) {
                    jQuery('#down_update').html(htmld);
                }
            });
        });

    });
</script>