

<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
<style>
    #container-3d, #sliders {
        min-width: 310px; 
        max-width: 800px;
        margin: 0 auto;
    }
    #container-3d {
        height: 400px; 
    }
</style>


<div class="span12">
     CODE: <?php echo $this->session->userdata('code'); ?>
                          STATION:  <?php echo $this->session->userdata('station'); ?>
                            NUMBER:  <?php echo $this->session->userdata('number'); ?>
                           <?php echo $this->session->userdata('username'); ?>
                           <?php echo $this->session->userdata('role'); ?>         

    <h1>
        <?php echo $this->session->userdata('station'); ?>
        Weather Station
        <small>
            <i class="icon-double-angle-right"></i>
            overview &amp; stats
        </small>
    </h1>
</div><!--/.page-header-->
<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->


        <div class="space-6"></div>

        <div class="row-fluid">
            <div class="span12 infobox-container">

                <div class="infobox infobox-red  ">
                    <div class="infobox-icon">
                        <i class="icon-beaker"></i>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number">7</span>
                        <div class="infobox-content">Instruments Installed</div>
                    </div>
                </div>

                <div class="infobox infobox-orange2  ">
                    <div class="infobox-chart">
                        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-data-number">6,251</span>
                        <div class="infobox-content">Data submitted</div>
                    </div>

                    <div class="badge badge-success">
                        7.2%
                        <i class="icon-arrow-up"></i>
                    </div>
                </div>

              
                <div class="infobox infobox-blue2  ">
                    <div class="infobox-progress">
                        <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                            <span class="percent">42</span>
                            %
                        </div>
                    </div>

                    <div class="infobox-data">
                        <span class="infobox-text">Reports Generated</span>

                        <div class="infobox-content">
                            <span class="bigger-110">~</span>
                            25/78 remaining
                        </div>
                    </div>

                </div>



            </div>      
        </div><!--/row-->

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->
<hr>
<div class="row-fluid">
    <div class="span12">
        <div class="tabbable tabs-top">
            <ul class="nav nav-tabs" id="myTab3">
                <li class="active">
                    <a data-toggle="tab" href="#home3">
                        <i class="pink icon-dashboard bigger-110"></i>
                        Wind rose & atmospheric pressure
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#profile3">
                        <i class="blue icon-user bigger-110"></i>
                        Average weather data
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#dropdown13">
                        <i class="icon-rocket"></i>
                        Average temperatures
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="home3" class="tab-pane in active">


                    <div class="row-fluid">
                        <div class="span12">
                            <!--PAGE CONTENT BEGINS-->

                            <div class="page-content">					

                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="span6">
                                            <div id="container-rose" style="min-width: 420px; max-width: 600px; height: 400px; margin: 0 auto"></div>

                                            <div style="display:none">
                                                <!-- Source: http://or.water.usgs.gov/cgi-bin/grapher/graph_windrose.pl -->
                                                <table id="freq" border="0" cellspacing="0" cellpadding="0">
                                                    <tr nowrap bgcolor="#CCCCFF">
                                                        <th colspan="9" class="hdr">Table of Frequencies (percent)</th>
                                                    </tr>
                                                    <tr nowrap bgcolor="#CCCCFF">
                                                        <th class="freq">Direction</th>
                                                        <th class="freq">&lt; 0.5 m/s</th>
                                                        <th class="freq">0.5-2 m/s</th>
                                                        <th class="freq">2-4 m/s</th>
                                                        <th class="freq">4-6 m/s</th>
                                                        <th class="freq">6-8 m/s</th>
                                                        <th class="freq">8-10 m/s</th>
                                                        <th class="freq">&gt; 10 m/s</th>
                                                        <th class="freq">Total</th>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="dir">N</td>
                                                        <td class="data">1.81</td>
                                                        <td class="data">1.78</td>
                                                        <td class="data">0.16</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">3.75</td>
                                                    </tr>		
                                                    <tr nowrap bgcolor="#DDDDDD">
                                                        <td class="dir">NNE</td>
                                                        <td class="data">0.62</td>
                                                        <td class="data">1.09</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">1.71</td>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="dir">NE</td>
                                                        <td class="data">0.82</td>
                                                        <td class="data">0.82</td>
                                                        <td class="data">0.07</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">1.71</td>
                                                    </tr>
                                                    <tr nowrap bgcolor="#DDDDDD">
                                                        <td class="dir">ENE</td>
                                                        <td class="data">0.59</td>
                                                        <td class="data">1.22</td>
                                                        <td class="data">0.07</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">1.88</td>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="dir">E</td>
                                                        <td class="data">0.62</td>
                                                        <td class="data">2.20</td>
                                                        <td class="data">0.49</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">3.32</td>
                                                    </tr>
                                                    <tr nowrap bgcolor="#DDDDDD">
                                                        <td class="dir">ESE</td>
                                                        <td class="data">1.22</td>
                                                        <td class="data">2.01</td>
                                                        <td class="data">1.55</td>
                                                        <td class="data">0.30</td>
                                                        <td class="data">0.13</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">5.20</td>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="dir">SE</td>
                                                        <td class="data">1.61</td>
                                                        <td class="data">3.06</td>
                                                        <td class="data">2.37</td>
                                                        <td class="data">2.14</td>
                                                        <td class="data">1.74</td>
                                                        <td class="data">0.39</td>
                                                        <td class="data">0.13</td>
                                                        <td class="data">11.45</td>
                                                    </tr>
                                                    <tr nowrap bgcolor="#DDDDDD">
                                                        <td class="dir">SSE</td>
                                                        <td class="data">2.04</td>
                                                        <td class="data">3.42</td>
                                                        <td class="data">1.97</td>
                                                        <td class="data">0.86</td>
                                                        <td class="data">0.53</td>
                                                        <td class="data">0.49</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">9.31</td>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="dir">S</td>
                                                        <td class="data">2.66</td>
                                                        <td class="data">4.74</td>
                                                        <td class="data">0.43</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">7.83</td>
                                                    </tr>
                                                    <tr nowrap bgcolor="#DDDDDD">
                                                        <td class="dir">SSW</td>
                                                        <td class="data">2.96</td>
                                                        <td class="data">4.14</td>
                                                        <td class="data">0.26</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">7.37</td>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="dir">SW</td>
                                                        <td class="data">2.53</td>
                                                        <td class="data">4.01</td>
                                                        <td class="data">1.22</td>
                                                        <td class="data">0.49</td>
                                                        <td class="data">0.13</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">8.39</td>
                                                    </tr>
                                                    <tr nowrap bgcolor="#DDDDDD">
                                                        <td class="dir">WSW</td>
                                                        <td class="data">1.97</td>
                                                        <td class="data">2.66</td>
                                                        <td class="data">1.97</td>
                                                        <td class="data">0.79</td>
                                                        <td class="data">0.30</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">7.70</td>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="dir">W</td>
                                                        <td class="data">1.64</td>
                                                        <td class="data">1.71</td>
                                                        <td class="data">0.92</td>
                                                        <td class="data">1.45</td>
                                                        <td class="data">0.26</td>
                                                        <td class="data">0.10</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">6.09</td>
                                                    </tr>
                                                    <tr nowrap bgcolor="#DDDDDD">
                                                        <td class="dir">WNW</td>
                                                        <td class="data">1.32</td>
                                                        <td class="data">2.40</td>
                                                        <td class="data">0.99</td>
                                                        <td class="data">1.61</td>
                                                        <td class="data">0.33</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">0.00</td>
                                                        <td class="data">6.64</td>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="dir">NW</td>
                                                        <td class="data">1.58</td>
                                                        <td class="data">4.28</td>
                                                        <td class="data">1.28</td>
                                                        <td class="data">0.76</td>
                                                        <td class="data">0.66</td>
                                                        <td class="data">0.69</td>
                                                        <td class="data">0.03</td>
                                                        <td class="data">9.28</td>
                                                    </tr>		
                                                    <tr nowrap bgcolor="#DDDDDD">
                                                        <td class="dir">NNW</td>
                                                        <td class="data">1.51</td>
                                                        <td class="data">5.00</td>
                                                        <td class="data">1.32</td>
                                                        <td class="data">0.13</td>
                                                        <td class="data">0.23</td>
                                                        <td class="data">0.13</td>
                                                        <td class="data">0.07</td>
                                                        <td class="data">8.39</td>
                                                    </tr>
                                                    <tr nowrap>
                                                        <td class="totals">Total</td>
                                                        <td class="totals">25.53</td>
                                                        <td class="totals">44.54</td>
                                                        <td class="totals">15.07</td>
                                                        <td class="totals">8.52</td>
                                                        <td class="totals">4.31</td>
                                                        <td class="totals">1.81</td>
                                                        <td class="totals">0.23</td>
                                                        <td class="totals">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div id="container-3d"></div>
                                            <div id="sliders">
                                                <table>
                                                    <tr><td>Alpha Angle</td><td><input id="R0" type="range" min="0" max="45" value="15"/> <span id="R0-value" class="value"></span></td></tr>
                                                    <tr><td>Beta Angle</td><td><input id="R1" type="range" min="0" max="45" value="15"/> <span id="R1-value" class="value"></span></td></tr>
                                                </table>
                                            </div>

                                        </div>   </div><!--/.row-fluid-->
                                </div>

                                <!--PAGE CONTENT ENDS-->
                            </div>                <!--PAGE CONTENT ENDS-->
                        </div>	</div>
                </div>

                <div id="profile3" class="tab-pane">


                    <div class="row-fluid">

                        <span class="well-large">  
                            <div id="container-combo" ></div>

                        </span>

                        <!--PAGE CONTENT ENDS-->

                    </div><!--/.page-content-->
                </div>

                <div id="dropdown13" class="tab-pane">


                    <div class="row-fluid">
                        <div class="span12">

                            <div id="container"></div>


                            <!--PAGE CONTENT ENDS-->

                        </div><!--/.page-content-->

                    </div><!--/.main-container-->	</div>
            </div>
        </div>
    </div><!--/span-->

    <div class="vspace-6"></div>

    <?php foreach ($dir as $loops) {
        echo $loops->station_pressure_hpa . ',';
    } ?>
</div><!--/row-->

<div class="hr hr-double hr-dotted hr18"></div>
</div><!--/.page-content-->
<div

</div><!--/#ace-settings-container-->

<script src="<?= base_url(); ?>js/2.0.3-jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#container').highcharts({
            title: {
                text: 'Monthly Average Temperature',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: UNMA',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Temperature (°C)'
                },
                plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
            },
            tooltip: {
                valueSuffix: '°C'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                    name: 'Entebbe',
                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                }, {
                    name: 'Makerere',
                    data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
                }, {
                    name: 'Soroti',
                    data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
                }, {
                    name: 'Kasese',
                    data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
                }]
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#container-combo').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Average Monthly Weather Data for Makerere weather station'
            },
            subtitle: {
                text: 'Source: UNMA'
            },
            xAxis: [{
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    crosshair: true
                }],
            yAxis: [{// Primary yAxis
                    labels: {
                        format: '{value}°C',
                        style: {
                            color: Highcharts.getOptions().colors[2]
                        }
                    },
                    title: {
                        text: 'Temperature',
                        style: {
                            color: Highcharts.getOptions().colors[2]
                        }
                    },
                    opposite: true

                }, {// Secondary yAxis
                    gridLineWidth: 0,
                    title: {
                        text: 'Rainfall',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    labels: {
                        format: '{value} mm',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    }

                }, {// Tertiary yAxis
                    gridLineWidth: 0,
                    title: {
                        text: 'Sea-Level Pressure',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    labels: {
                        format: '{value} mb',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    opposite: true
                }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 80,
                verticalAlign: 'top',
                y: 55,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
            },
            series: [{
                    name: 'Rainfall',
                    type: 'column',
                    yAxis: 1,
                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                    tooltip: {
                        valueSuffix: ' mm'
                    }

                }, {
                    name: 'Sea-Level Pressure',
                    type: 'spline',
                    yAxis: 2,
                    data: [1016, 1016, 1015.9, 1015.5, 1012.3, 1009.5, 1009.6, 1010.2, 1013.1, 1016.9, 1018.2, 1016.7],
                    marker: {
                        enabled: false
                    },
                    dashStyle: 'shortdot',
                    tooltip: {
                        valueSuffix: ' mb'
                    }

                }, {
                    name: 'Temperature',
                    type: 'spline',
                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
                    tooltip: {
                        valueSuffix: ' °C'
                    }
                }]
        });
    });


</script>
<script src="<?= base_url(); ?>js/json2.min.js"></script>
<script language="javascript">
    // code to create a data set that looks like data: [[5, 2], [6, 3], [8, 2]]
    var windDirection, windSpeed, windDirectionJSON, windSpeedJSON, windDataJSON;
    windDirection = "[<?php foreach ($dir as $loop) {
        echo $loop->wind_direction . ',';
    } ?>0,89]";
    windSpeed = "[<?php foreach ($dir as $loop) {
        echo $loop->wind_speed . ',';
    } ?>0,9]";
    windDirectionJSON = JSON.parse(windDirection);
    windSpeedJSON = JSON.parse(windSpeed);
    windDataJSON = [];
    for (i = 0; i < windDirectionJSON.length; i++) {
        windDataJSON.push([windDirectionJSON[i], windSpeedJSON[i]]);
    }
</script>
<script type="text/javascript">
    $(function () {
        var categories = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE', 'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW'];
        $('#container-rose').highcharts({
            series: [{
                    data: windDataJSON
                }],
            chart: {
                polar: true,
                type: 'column'
            },
            title: {
                text: 'Wind Rose for <?php echo $this->session->userdata('stationname'); ?>'
            },
            pane: {
                size: '85%'
            },
            legend: {
                align: 'right',
                verticalAlign: 'top',
                y: 100,
                layout: 'vertical'
            },
            xAxis: {
                min: 0,
                max: 360,
                type: "",
                tickInterval: 22.5,
                tickmarkPlacement: 'on',
                labels: {
                    formatter: function () {
                        return categories[this.value / 22.5] + '°';
                    }
                }
            },
            yAxis: {
                min: 0,
                endOnTick: false,
                showLastLabel: true,
                title: {
                    text: 'speed (KT)'
                },
                labels: {
                    formatter: function () {
                        return this.value + 'KT';
                    }
                },
                reversedStacks: false
            },
            tooltip: {
                valueSuffix: 'KT'
            },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    shadow: false,
                    groupPadding: 0,
                    pointPlacement: 'on'
                }
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
// Set up the chart
        var chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container-3d',
                type: 'column',
                margin: 75,
                options3d: {
                    enabled: true,
                    alpha: 15,
                    beta: 15,
                    depth: 50,
                    viewDistance: 25
                }
            },
            title: {
                text: 'Monthly  atmospheric pressure'
            },
            subtitle: {
                text: ''
            },
            plotOptions: {
                column: {
                    depth: 25}
            },
            series: [{
                    data: [<?php foreach ($dir as $loops) {
        echo ($loops->station_pressure_hpa) . ',';
    } ?>]
                }]
        });

        function showValues() {
            $('#R0-value').html(chart.options.chart.options3d.alpha);
            $('#R1-value').html(chart.options.chart.options3d.beta);
        }

// Activate the sliders
        $('#R0').on('change', function () {
            chart.options.chart.options3d.alpha = this.value;
            showValues();
            chart.redraw(false);
        });
        $('#R1').on('change', function () {
            chart.options.chart.options3d.beta = this.value;
            showValues();
            chart.redraw(false);
        });

        showValues();
    });
</script>




<script src="<?= base_url(); ?>js/highcharts.js"></script>
<script src="<?= base_url(); ?>js/highcharts-more.js"></script>
<script src="<?= base_url(); ?>js/modules/data.js"></script>
<script src="<?= base_url(); ?>js/highcharts-3d.js"></script>
<script src="<?= base_url(); ?>js/exporting.js"></script>