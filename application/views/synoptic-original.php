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
    #status { padding:10px; background:#88C4FF; color:#000; font-weight:bold; font-size:12px; margin-bottom:10px; display:none; width:90%; }
</style>
<style>
    th.rotate {
        /* Something you can count on */
        height: 320px;
        white-space: nowrap;

    }

    th.rotate > div {
        transform: 
            /* Magic Numbers */
            translate(25px, 51px)
            /* 45 is really 360 - 45 */
            rotate(271deg);
        width: 90px;
    }
    th.rotate > div > span {

        padding: 6px 1px 0px 77px ;
    }
    td, th {
        border: 1px solid #ccc;
    }


</style>
<h3>Form No.444 Rev .10/2015</h3>
<div class="main-container container-fluid scroll">
    <div class="page-content">  
        <table id="example" class="dataTable display table zebra-style span8" cellspacing="0" width="100%">
            <thead>
                <tr >
                    <th class="rotate"><div><span>Day</span></div></th>
                    <th class="rotate"><div><span>Time</span></div></th>
                    <th class="rotate"><div><span>Unit of wind speed</span></div></th>
                    <th class="rotate"><div><span>Block number</span></div></th>
                    <th class="rotate"><div><span>Station Number</span></div></th>
                    <th class="rotate"><div><span>Ind.or omission of precipitation</span></div></th>
                    <th class="rotate"><div><span>Type of station/present & past weather</span></div></th>
                    <th class="rotate"><div><span>Height of lowest cloud</span></div></th>
                    <th class="rotate"><div><span>Horizontal Visibility</span></div></th>
                    <th class="rotate"><div><span>Total cloud cover</span></div></th>
                    <th class="rotate"><div><span>Wind Direction</span></div></th>
                    <th class="rotate"><div><span>Wind speed</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Sign of the data</span></div></th>
                    <th class="rotate"><div><span>Air Temperature</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Sign of the data</span></div></th>
                    <th class="rotate"><div><span>Dew Point Temperature</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Pressure at station level</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Standard Isobaric surface</span></div></th>
                    <th class="rotate"><div><span>Geopotential of standard Isobaric surface</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Amount of precipitation</span></div></th>
                    <th class="rotate"><div><span>Duration period of precipitation</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Present Weather</span></div></th>
                    <th class="rotate"><div><span>Past Weather</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Amount of Clouds(CL)</span></div></th>
                    <th class="rotate"><div><span>Clouds of the General Sc,St,Cu,Cb</span></div></th>
                    <th class="rotate"><div><span>Clouds of the General Ac,As,Ns</span></div></th>
                    <th class="rotate"><div><span>Clouds of the General C,Cc,Cs</span></div></th>
                    <th class="rotate"><div><span>Section Indicator</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Grass minimum temperature</span></div></th>
                    <th class="rotate"><div><span>Character & Intensity of precipitation</span></div></th>
                    <th class="rotate"><div><span>Beginning or end of precipitation</span></div></th>


                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Sign of data</span></div></th>
                    <th class="rotate"><div><span>Maximum temperature</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Sign of data</span></div></th>
                    <th class="rotate"><div><span>Minimum temperature</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Amount of evaporation</span></div></th>
                    <th class="rotate"><div><span>Indicator of type of instrumentation</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Duration of sunshine</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Sign of pressure change</span></div></th>
                    <th class="rotate"><div><span>Pressure change in 24 hours</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Amount of precipitation</span></div></th>
                    <th class="rotate"><div><span>Duration of period of  precipitation</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Amount of Individual cloud cover</span></div></th>
                    <th class="rotate"><div><span>Genus of cloud</span></div></th>
                    <th class="rotate"><div><span>Height of base cloud layer of mass</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Amount of Individual cloud cover</span></div></th>
                    <th class="rotate"><div><span>Genus of cloud</span></div></th>
                    <th class="rotate"><div><span>Height of base cloud layer of mass</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Amount of Individual cloud cover</span></div></th>
                    <th class="rotate"><div><span>Genus of cloud</span></div></th>
                    <th class="rotate"><div><span>Height of base cloud layer of mass</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Amount of Individual cloud cover</span></div></th>
                    <th class="rotate"><div><span>Genus of cloud</span></div></th>
                    <th class="rotate"><div><span>Height of base cloud layer of mass</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Supplementary information</span> <br><span>911 ff highest gust</span><br><span>911 ff highest mean wind speed</span><br><span>9 43CL DP movement of C clouds</span></div></th>
                    <th class="rotate"><div><span>Section indicator</span></div></th>
                    <th class="rotate"><div><span>Group Indicator</span></div></th>
                    <th class="rotate"><div><span>Sign of data</span></div></th>
                    <th class="rotate"><div><span>Wet bulb temperature</span></div></th>
                    <th class="rotate"><div><span>Relative Humidity (RH)</span></div></th>
                    <th class="rotate"><div><span>Vapour Pressure(VAP)</span></div></th>

                </tr>
            </thead>

            <tbody>
                <tr class="odd">
                    <td><a href="#">YY</a></td>
                    <td><a href="#">GG</a></td>
                    <td><a href="#">i<span class="foot-note">w</span></a></td>
                    <td><a href="#">ii<span class="foot-note"></span></a></td>
                    <td><a href="#">iii<span class="foot-note"></span></a></td>
                    <td><a href="#">i<span class="foot-note">R</span></a></td>
                    <td><a href="#">i<span class="foot-note">x</span></a></td>
                    <td><a href="#">h</a></td>
                    <td><a href="#">VV</a></td>
                    <td><a href="#">N</a></td>
                    <td><a href="#">dd</a></td>
                    <td><a href="#">ff</a></td>
                    <td><a href="#">1</a></td>
                    <td><a href="#">S<span class="foot-note">n</span></a></td>
                    <td><a href="#">T T T</a></td>
                    <td><a href="#">2</a></td>
                    <td><a href="#">S<span class="foot-note">n</span></a></td>
                    <td><a href="#">T<span class="foot-note">d</span>T<span class="foot-note">d</span>T<span class="foot-note">d</span></a></td>
                    <td><a href="#">3</a></td>
                    <td><a href="#">P<span class="foot-note">o</span>P<span class="foot-note">o</span>P<span class="foot-note">o</span></a></td>
                    <td><a href="#">4</a></td>
                    <td><a href="#">8</a></td>
                    <td><a href="#">hhh</a></td>
                    <td><a href="#">6</a></td>
                    <td><a href="#">RRR</a></td>
                    <td><a href="#">T<span class="foot-note">r</span></a></td>
                    <td><a href="#">7</a></td>
                    <td><a href="#">WW</a></td>
                    <td><a href="#">W<span class="foot-note">1</span>W<span class="foot-note">2</span></a></td>
                    <td><a href="#">8</a></td>
                    <td><a href="#">N<span class="foot-note">h</span></a></td>
                    <td><a href="#">C<span class="foot-note">L</span></a></td>
                    <td><a href="#">C<span class="foot-note">G</span></a></td>
                    <td><a href="#">C<span class="foot-note">H</span></a></td>
                    <td><a href="#">3 3 3</a></td>
                    <td><a href="#">0</a></td>
                    <td><a href="#">T<span class="foot-note">Q</span>T<span class="foot-note">Q</span></a></td>
                    <td><a href="#">R<span class="foot-note">0</span></a></td>
                    <td><a href="#">R<span class="foot-note">1</span></a></td>
                    <td><a href="#">1</a></td>
                    <td><a href="#">S<span class="foot-note">n</span></a></td>
                    <td><a href="#">T<span class="foot-note">x</span>T<span class="foot-note">x</span>T<span class="foot-note">x</span></a></td>
                    <td><a href="#">2</a></td>
                    <td><a href="#">S<span class="foot-note">n</span></a></td>
                    <td><a href="#">T<span class="foot-note">n</span>T<span class="foot-note">n</span>T<span class="foot-note">n</span></a></td>
                    <td><a href="#">5 E</a></td>
                    <td><a href="#">E E</a></td>
                    <td><a href="#">E</a></td>
                    <td><a href="#">5 5</a></td>
                    <td><a href="#">S S S</a></td>
                    <td><a href="#">5</a></td>
                    <td><a href="#">8 9</a></td>
                    <td><a href="#">P<span class="foot-note">24</span>P<span class="foot-note">24</span>P<span class="foot-note">24</span></a></td>
                    <td><a href="#">6</a></td>
                    <td><a href="#">RRR</a></td>
                    <td><a href="#">t<span class="foot-note">r</span></a></td>
                    <td><a href="#">8</a></td>
                    <td><a href="#">N<span class="foot-note">s</span></a></td>
                    <td><a href="#">C</a></td>
                    <td><a href="#">h<span class="foot-note">s</span>h<span class="foot-note">s</span></a></td>
                    <td><a href="#">8</a></td>
                    <td><a href="#">N<span class="foot-note">s</span></a></td>
                    <td><a href="#">C</a></td>
                    <td><a href="#">h<span class="foot-note">s</span>h<span class="foot-note">s</span></a></td>
                    <td><a href="#">8</a></td>
                    <td><a href="#">N<span class="foot-note">s</span></a></td>
                    <td><a href="#">C</a></td>
                    <td><a href="#">h<span class="foot-note">s</span>h<span class="foot-note">s</span></a></td>
                    <td><a href="#">8</a></td>
                    <td><a href="#">N<span class="foot-note">s</span></a></td>
                    <td><a href="#">C</a></td>
                    <td><a href="#">h<span class="foot-note">s</span>h<span class="foot-note">s</span></a></td>
                    <td><a href="#">9</a></td>
                    <td><a href="#">S<span class="foot-note">p</span>S<span class="foot-note">p</span>S<span class="foot-note">p</span></a></td>
                    <td><a href="#">555</a></td>
                    <td><a href="#">1</a></td>
                    <td><a href="#">S<span class="foot-note">n</span></a></td>
                    <td><a href="#">T<span class="foot-note">w</span>T<span class="foot-note">w</span>T<span class="foot-note">w</span></a></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                if (is_array($synop) && count($synop)) {
                    foreach ($synop as $loop) {
                        ?>  

                        <tr >
                            <td id="yy:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->yy; ?></td>
                            <td id="gg:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->gg; ?></td>
                            <td id="iw:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->iw; ?></td>
                            <td id="ii:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ii; ?></td>
                            <td id="iii:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->iii; ?></td>
                            <td id="ir:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ir; ?></td>
                            <td id="ix:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ix; ?></td>
                            <td id="h:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->h; ?></td>
                            <td id="vv:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->vv; ?></td>
                            <td id="n:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->n; ?></td>
                            <td id="dd:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->dd; ?></td>
                            <td id="ff:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ff; ?></td>
                             <td>1</td>
                          <td>0</td>
                            <td id="t:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->t; ?></td>
                         <td>2</td>
                            <td>0</td>
                            <td id="td:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->td; ?></td>         
                            <td>3</td>
                            <td id="Po:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->Po; ?></td>
                            <td id="gp4:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->gp4; ?></td>
                            <td id="sis:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->sis; ?></td>
                            <td id="hhh:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->hhh; ?></td>
                             <td>6</td>
                            <td id="rrr:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->rrr; ?></td>
                            <td id="tr:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->tr; ?></td>
                             <td>7</td>
                            <td id="present:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->present; ?></td>
                            <td id="past:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->past; ?></td>
                              <td>8</td>
                            <td id="nh:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->nh; ?></td>
                            <td id="cl:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->cl; ?></td>
                            <td id="cg:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->cg; ?></td>
                            <td id="ch:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ch; ?></td>
                            <td>3 3 3</td>
                            <td>0 </td>
                             <td id="Tq:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->Tq; ?></td>
                               <td id="Ro:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->Ro; ?></td>
                                 <td id="R1:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->R1; ?></td>
                            <td>1</td>
                            <td>0</td>
                            <td id="Tx:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->Tx; ?></td>
                            <td>2</td>
                            <td>0</td>
                            <td id="Tn:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->Tn; ?></td>
                            <td>5</td>
                            <td id="EE:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->EE; ?></td>
                            <td id="E:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->E; ?></td>
                            <td>5 5</td>
                            <td id="sss:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->sss; ?></td>
                            <td>5 </td>
                            <td id="pchange:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->pchange; ?></td>
                             <td id="p24:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->p24; ?></td>
                            <td>6 </td>
                            <td id="rr:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->rr; ?></td>
                            <td id="tr1:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->tr1; ?></td>
                            <td>8 </td>
                            <td id="ns:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ns; ?></td>
                            <td id="c:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->c; ?></td>
                            <td id="hs:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->hs; ?></td>
                            <td>8 </td>
                            <td id="ns1:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ns1; ?></td>
                            <td id="c1:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->c1; ?></td>
                            <td id="hs1:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->hs1; ?></td>
                            <td>8 </td>
                            <td id="ns2:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ns2; ?></td>
                            <td id="c2:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->c2; ?></td>
                            <td id="hs2:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->hs2; ?></td>
                             <td>8 </td>
                            <td id="ns2:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->ns2; ?></td>
                            <td id="c2:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->c2; ?></td>
                            <td id="hs2:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->hs2; ?></td>
                           
                            <td>9</td>
                            <td id="supplementary:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->supplementary; ?></td>
                           <td id="si5:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->si5; ?></td>
                           <td>1</td>
                            <td>0</td>
                            <td id="wb:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->wb; ?></td>
                          <td id="rh:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->rh; ?></td>
                          <td id="vap:<?php echo $loop->id; ?>" contenteditable="true"><?php echo $loop->vap; ?></td>
                          
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
            $.post('<?php echo base_url() . "index.php/synoptic/updater/"; ?>', field_id + "=" + value, function (data) {
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