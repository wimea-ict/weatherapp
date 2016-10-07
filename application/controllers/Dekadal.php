<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dekadal extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
        $this->load->library('helper');
    }

    public function index() {
        // $query = $this->Md->show('metar');
        //  var_dump($query);
        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $query = $this->Md->show('role');
        if ($query) {
            $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }
        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }


        $this->load->view('dekadal', $data);
    }

    public function gets() {

        $this->load->helper(array('form', 'url'));
        //$datenow = trim($this->input->post('datenow'));
        $station = trim($this->input->post('station'));
        $monthed = trim($this->input->post('month'));
        $yeared = trim($this->input->post('year'));
       $startdate = trim($this->input->post('startdate'));
       $enddate = trim($this->input->post('enddate'));

        if ($station != " " && $monthed != " " && $yeared != " ") {
            unset($sql);

            if ($monthed) {
                $sql[] = "MONTH(date) = '$monthed' ";
            }
            if ($yeared) {
                $sql[] = " YEAR(date) = '$yeared' ";
            }

            if ($startdate) {
                $sql[] = "DAY(date) > '$startdate' AND  DAY(date) < '$enddate' ";
            } 
            
            if ($enddate) {
                $sql[] = "DAY(date) > '$startdate' AND  DAY(date) < '$enddate' ";
            }

            $sql[] = "station = '$station'";


            $query = "SELECT * FROM daily ";

            if (!empty($sql)) {
                $query .= ' WHERE ' . implode(' AND ', $sql);
            }
            $datetime = "09" . "00Z";
            $datetimes = "15" . "00Z";
            $all = array();
            $month = date('m');
            $year = date('Y');
            $query1 = $this->Md->query($query);

            //var_dump($query1);
            foreach ($query1 as $v) {
                $resv = new stdClass();
                $resv->date = $v->date;
                $resv->max = $v->max;
                $resv->min = $v->min;
                $resv->rain = $v->actual;
                $query2 = $this->Md->query("select * from metar WHERE day='" . $v->date . "'");
                $results = $query2;
                //var_dump($results);
                foreach ($results as $res) {

                    if ((strpos($res->datetime, $datetime)) && $res->day == $v->date) {

                        $resv->air9 = $res->air_temperature;
                        $resv->wet9 = $res->wet_bulb;
                        $resv->dew9 = $res->dew_temperature;
                        $resv->humid9 = $res->humidity;
                        $resv->wind9 = number_format($res->wind_direction, 0);
                        $resv->speed9 = $res->wind_speed;
                        $resv->visibility9 = $res->visibility;
                        $resv->hpa9 = $res->station_pressure_hpa;
                    }
                    if ((strpos($res->datetime, $datetimes)) && $res->day == $v->date) {

                        $resv->air15 = $res->air_temperature;
                        $resv->wet15 = $res->wet_bulb;
                        $resv->dew15 = $res->dew_temperature;
                        $resv->humid15 = $res->humidity;
                        $resv->wind15 = number_format($res->wind_direction, 0);
                        $resv->speed15 = $res->wind_speed;
                        $resv->visibility15 = $res->visibility;
                        $resv->hpa15 = $res->station_pressure_hpa;
                    }
                }
                array_push($all, $resv);
            }

            echo '   <h4>' . 'Station ' . $station . '  ' . date('F', mktime(0, 0, 0, $monthed, 10)) . ' ' . $yeared . ' Dekadal</h4>             
                                         
   <table id="metar" class="table table-striped table-bordered table-hover">

                    <tbody>  
                          
                           <tr>
                            <th colspan="2" >
                               
                            </th>
                            <th colspan="9" >
                                <label>
                                    <h3>  Time of Observation 9:00am</h3>
                                </label>
                            </th>
                             <th colspan="11" >
                                <label>
                                    <h3>  Time of Observation 3:00pm   </h3>
                                </label>
                            </th>
                        </tr>
                        <tr>
                      
                            
                             <td class="center" colspan="2" >
                               DATE
                            </td>
                            <td class="center" colspan="5">
                                <a href="#">TEMPERATURES</a>
                            </td>
                         
                            
                              <td class="center">
                                <a href="#">RELATIVE HUMIDITY(%)</a>
                            </td>
                       
                             <td class="center" colspan="2">
                                <a href="#">WIND</a>
                            </td>
                        
                           
                              <td class="center">
                                
                            </td>
                             

                            <td class="center" colspan="3">
                                <a href="#">TEMPERATURES</a>
                            </td>
                         
                            
                              <td class="center">
                                <a href="#">RELATIVE HUMIDITY(%)</a>
                            </td>
                       
                             <td class="center" colspan="5">
                                <a href="#">WIND</a>
                            </td>
                            
                        </tr>
                             <tr>
                             <td class="center" colspan="2">
                               
                            </td>
                            

                            <td class="center">
                                <a href="#">MAX</a>
                            </td>
                              <td class="center">
                                <a href="#">MIN</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">DRY BULB</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">WET BULB</a>
                            </td>
                            <td class="center">
                                <a href="#">DEW POINT</a>
                            </td>
                             <td class="center">
                                RELATIVE HUMIDITY(%)
                            </td>
                            
                              <td class="center">
                                <a href="#">DIRECTION</a>
                            </td>
                             <td class="center">
                                <a href="#">DIRECTION</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">SPEED</a>
                            </td>
                              <td class="center">
                                <a href="#">SPEED(m/s)</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">RAIN FALL</a>
                            </td>
                             <td class="center">
                                <a href="#">DRY BULB</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">WET BULB</a>
                            </td>
                          
                              <td class="center">
                                <a href="#">DEW POINT</a>
                            </td>
                           
                              <td class="center">
                                  <a href="#">RELATIVE HUMIDITY(%)</a>
                            </td>
                         
                              <td class="center">
                                <a href="#">DIRECTION(C)</a>
                            </td>
                             <td class="center">
                                <a href="#">DIRECTION</a>
                            </td>
                            
                            
                              <td class="center">
                                <a href="#">SPEED(KT)</a>
                            </td>
                               <td class="center">
                                <a href="#">SPEED(m/s)</a>
                            </td>
                            
                              <td class="center">
                                <a href="#">RAIN FALL</a>
                            </td>
                           
                        </tr> ';

            $cr = 1;
            if (is_array($all) && count($all)) {
                // var_dump($all);

                foreach ($all as $loop) {
                    //  var_dump($loop);

                    $dir2 = round($loop->wind15);
                    $dir1 = round($loop->wind9);

                    $speed = round(($loop->speed9 * 0.514444), 2);
                    $speed2 = round(($loop->speed15 * 0.514444), 2);

                    if ($dir == "") {
                        $dir = "n/a";
                    } else {
                        $dir = $loop->wind9;
                    }
                    if ($dir2 == "") {
                        $dir2 = "n/a";
                    } else {
                        $dir2 = $loop->wind15;
                    }

                    if (in_array($dir, range(0, 11))) {
                        $direction = $dir;
                    }
                    if (in_array($dir, range(11, 34))) {
                        $direction = 'NNE';
                    }
                    if (in_array($dir, range(34, 56))) {
                        $direction = 'NE';
                    }
                    if (in_array($dir, range(56, 79))) {
                        $direction = 'ENE';
                    }
                    if (in_array($dir, range(79, 101))) {
                        $direction = 'E';
                    }
                    if (in_array($dir, range(101, 124))) {
                        $direction = 'ESE';
                    }
                    if (in_array($dir, range(124, 146))) {
                        $direction = 'SE';
                    }
                    if (in_array($dir, range(146, 169))) {
                        $direction = 'SSE';
                    }
                    if (in_array($dir, range(169, 191))) {
                        $direction = 'S';
                    }
                    if (in_array($dir, range(191, 214))) {
                        $direction = 'SSW';
                    }
                    if (in_array($dir, range(214, 236))) {
                        $direction = 'SW';
                    }
                    if (in_array($dir, range(236, 259))) {
                        $direction = 'WSW';
                    }
                    if (in_array($dir, range(259, 281))) {
                        $direction = 'W';
                    }
                    if (in_array($dir, range(281, 304))) {
                        $direction = 'WNW';
                    }
                    if (in_array($dir, range(304, 326))) {
                        $direction = 'NW';
                    }
                    if (in_array($dir, range(326, 360))) {
                        $direction = 'NNW';
                    }



                    if (in_array($dir2, range(0, 11))) {
                        $direction2 = 'N';
                    }
                    if (in_array($dir2, range(11, 34))) {
                        $direction2 = 'NNE';
                    }
                    if (in_array($dir2, range(34, 56))) {
                        $direction2 = 'NE';
                    }
                    if (in_array($dir2, range(56, 79))) {
                        $direction2 = 'ENE';
                    }
                    if (in_array($dir2, range(79, 101))) {
                        $direction2 = 'E';
                    }
                    if (in_array($dir2, range(101, 124))) {
                        $direction2 = 'ESE';
                    }
                    if (in_array($dir2, range(124, 146))) {
                        $direction2 = 'SE';
                    }
                    if (in_array($dir2, range(146, 169))) {
                        $direction2 = 'SSE';
                    }
                    if (in_array($dir2, range(169, 191))) {
                        $direction2 = 'S';
                    }
                    if (in_array($dir2, range(191, 214))) {
                        $direction2 = 'SSW';
                    }
                    if (in_array($dir2, range(214, 236))) {
                        $direction2 = 'SW';
                    }
                    if (in_array($dir2, range(236, 259))) {
                        $direction2 = 'WSW';
                    }
                    if (in_array($dir2, range(259, 281))) {
                        $direction2 = 'W';
                    }
                    if (in_array($dir2, range(281, 304))) {
                        $direction2 = 'WNW';
                    }
                    if (in_array($dir2, range(304, 326))) {
                        $direction2 = 'NW';
                    }
                    if (in_array($dir2, range(326, 360))) {
                        $direction2 = 'NNW';
                    }

                    echo '  <tr>
                            <td class="small" ><a>' . $cr++ . '</a></td>
                            <td class="small" >' . $loop->date . '</td>
                            <td class="small" >' . $loop->max . ' </td>
                            <td class="small">' . $loop->min . '</td>
                            <td class="small">' . $loop->air9 . '</td>
                            <td class="small" >' . $loop->wet9 . '</td>
                            <td class="small" >' . $loop->dew9 . '</td>
                            <td class="small" >' . $loop->humid9 . '</td>
                            <td class="small">' . $loop->wind9 . '<sup>o</sup></td>
                            <td class="small">' . $direction . '</td>
                            <td class="small">' . $loop->speed9 . '</td>
                            <td class="small">' . $speed . '</td>
                            <td class="small">' . $loop->rain . '</td>
                                

                            <td class="small">' . $loop->air15 . '</td>
                            <td class="small" >' . $loop->wet15 . '</td>
                            <td class="small" >' . $loop->dew15 . ' </td>
                            <td class="small" >' . $loop->humid15 . '</td>
                            <td class="small">' . $loop->wind15 . '<sup>o</sup></td>
                                 <td class="small">' . $direction2 . '</td>
                            <td class="small">' . $loop->speed15 . '</td>
                                   <td class="small">' . $speed2 . '</td>
                            <td class="small">' . $loop->rain15 . '</td>
                                </tr> ';
                }


                echo '</tbody>
                </table>  ';
            } else {

                echo date('F', mktime(0, 0, 0, $monthed, 10)) . ' has no values ';
            }
        } else {
            echo 'Please select/input the criteria to generate this report';
        }
    }

    public function save() {

        $this->load->helper(array('form', 'url'));

        $type = $this->input->post('type');
        $station = $this->input->post('code');
        $datetime = $this->input->post('datetime');
        $wind = $this->input->post('wind');
        $visibility = $this->input->post('visibility');
        $present = $this->input->post('present');
        $cloud = $this->input->post('cloud');
        $station_pressure = $this->input->post('stationhpa');
        $sea_pressure = $this->input->post('seahpa');
        $recent_weather = $this->input->post('recent');
        $air_temperature = $this->input->post('temperature');
        $humidity = $this->input->post('humidity');
        $dew_temperature = $this->input->post('dew');
        $wet_bulb = $this->input->post('wet');
        $day = $this->input->post('datenow');

        $wind_info = explode(' ', $wind);
        $wind_direction = $wind_info[0];
        $wind_speed = $wind_info[1];
        $wind_unit = $wind_info[2];

        $get_result = $this->Md->check($datetime, 'datetime', 'metar');
        if (!$get_result) {
            if ($type == 'SPECI') {

                $metar = array('station' => $station, 'type' => $type, 'datetime' => $datetime, 'timezone' => 'GMT', 'wind_direction' => $wind_direction, 'wind_speed' => $wind_speed, 'unit' => $wind_unit, 'visibility' => $visibility, 'present_weather' => $present, 'cloud' => $cloud, 'air_temperature' => $air_temperature, 'humidity' => $humidity, 'dew_temperature' => $dew_temperature, 'wet_bulb' => $wet_bulb, 'station_pressure_hpa' => $station_pressure, 'sea_pressure_hpa' => $sea_pressure, 'recent_weather' => $recent_weather, 'submitted' => date('Y-m-d H:m:s'), 'user' => 'test', 'day' => $day);
                $this->Md->save($metar, 'metar');

                $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'save', 'details' => 'meta information saved ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
                $this->Md->save($log, 'logs');


                redirect('/metar', 'refresh');
                return;
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                  This meta has already been submitted	</strong>									
						</div>');
                redirect('/metar', 'refresh');
            }
        }

        if ($station != "") {
            $metar = array('station' => $station, 'type' => $type, 'datetime' => $datetime, 'timezone' => 'GMT', 'wind_direction' => $wind_direction, 'wind_speed' => $wind_speed, 'unit' => $wind_unit, 'visibility' => $visibility, 'present_weather' => $present, 'cloud' => $cloud, 'air_temperature' => $air_temperature, 'humidity' => $humidity, 'dew_temperature' => $dew_temperature, 'wet_bulb' => $wet_bulb, 'station_pressure_hpa' => $station_pressure, 'sea_pressure_hpa' => $sea_pressure, 'recent_weather' => $recent_weather, 'submitted' => date('Y-m-d H:m:s'), 'user' => 'test', 'day' => $day);
            $this->Md->save($metar, 'metar');

            redirect('/metar', 'refresh');
            return;
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                  Please select a station	</strong>									
						</div>');
            redirect('/metar', 'refresh');
        }
    }

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
        $query = $this->Md->show('metar');

        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }

        $query = $this->Md->get('id', $id, 'metar');

        if ($query) {
            $data['userID'] = $query;
        } else {
            $data['userID'] = array();
        }
        $query = $this->Md->show('role');
        if ($query) {
            $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }
        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }

        $this->load->view('metar', $data);
    }

    public function update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('userID');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
        $password = $this->input->post('password');
        $role = $this->input->post('role');
        $contact2 = $this->input->post('contact2');
        $station = $this->input->post('station');

        if ($password != "") {
            $password = $password;
            $key = 'metar';

            $password = $this->encrypt->encode($msg, $key);
            $metar = array('password' => $password, 'create' => date('Y-m-d'));
            $this->Md->update($id, $metar, 'metar');
        }

        $metar = array('email' => $email, 'name' => $name, 'contact' => $contact, 'role' => $role, 'active' => 'true', 'station' => $station, 'create' => date('Y-m-d'));
        // update($id, $data,$table)
        $this->Md->update($id, $metar, 'metar');
        $this->session->set_flashdata('msg', 'The ' . $name . ' has been updated');
        redirect('/Role', 'refresh');
        return;
    }

    public function delete() {

        $id = $this->uri->segment(3);

        $query = $this->Md->delete($id, 'metar');

        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted Fields</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/metar', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/metar', 'refresh');
        }
    }

    public function check($metar) {
        $this->load->helper(array('form', 'url'));

        $metar = ($metar == "") ? $this->input->post('name') : $metar;
        //check($value,$field,$table)
        $get_result = $this->Md->check($metar, 'name', 'metar');

        if (!$get_result)
            echo '<span style="color:#f00"> name already in use. </span>';
        else
            echo '<span style="color:#0c0"> name not in use</span>';
    }

    public function check_email() {
        $this->load->helper(array('form', 'url'));

        $email = $this->input->post('email');
        //check($value,$field,$table)
        $get_result = $this->Md->check($email, 'email', 'metar');

        if (!$get_result)
            echo '<span style="color:#f00">email already in use. </span>';
        else
            echo '<span style="color:#0c0">email not in use</span>';
    }

    public function get() {
        $this->load->helper(array('form', 'url'));
        $date = trim($this->input->post('date'));

        $get_result = $this->Md->get('day', $date, 'metar');

        // var_dump($get_result);
        if ($get_result) {

            echo '  <div class="well well-large" id="meta" >
                                                <div class="widget-body">
                                         
   <table id="sample-table-2" class="table table-striped table-bordered table-hover">

                    <tbody>  
                          
                        <tr>
                            <td class="center-head">
                                <label>
                                    METAR/SPECI
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">CCCC</a>
                            </td>


                            <td class="center">
                                <a href="#">YYGGgg<span class="degree">z</span></a>
                            </td>

                            <td class="center">
                                <a href="#">Dddff/f<span class="foot-note">m</span>/f<span class="foot-note">m</span></a>
                            </td>


                            <td class="center">
                                <a href="#">WW or CAVOK</a>
                            </td>
                            <td class="center-head">
                                <label>
                                    <a href="#">W<span class="foot-note">1</span>W<span class="foot-note">1</span></a>

                                </label>
                            </td>

                            <td class="center" >
                                <a href="#">N<span class="foot-note">1</span>CCh<span class="foot-note">1</span>h<span class="foot-note">1</span>N<span class="foot-note">n</span>CChhhN<span class="foot-note">h</span>CChhh</a>
                            </td>
  <td class="center" >
                                <a href="#">A/temperature</a>
                            </td>
                           
                            <td class="center" >
                                <a href="#">Dew point</a>
                            </td>
                            <td class="center" >
                                <a href="#">Wet Bulb</a>
                            </td>

                            <td class="center">
                                <a href="#">TT/T<span class="foot-note">d</span>T<span class="foot-note">d</span></a>
                            </td>

                            <td class="center" >
                                <a href="#">QNH(hpa)</a>
                            </td>
                            <td class="center">
                                <a href="#">QNH(in)</a>
                            </td>
                            <td class="center-head">
                                <a href="#">QFE(hpa)</a>
                            </td>

                            <td class="center">
                                <a href="#">QFE(in)</a>
                            </td>
                            <td class="center">
                                <a href="#">RE W1W1</a>
                            </td>
                        </tr>';
            if (is_array($get_result) && count($get_result)) {
                foreach ($get_result as $loop) {

                    echo '<tr>
                            <td class="small" >' . $loop->type . '</td>
                            <td class="small" >' . $loop->station . ' </td>
                            <td class="small">' . $loop->datetime . '</td>
                            <td class="small">' . $loop->wind_direction . ' ' . $loop->wind_speed . ' ' . $loop->unit . '</td>
                     <td class="small" >' . $loop->visibility . '</td>
                      <td class="small" >' . $loop->present_weather . '</td>
                                <td class="small">' . $loop->cloud . '</td>
                                              <td class="small">' . $loop->air_temperature . '</td>
                                           
                                            <td class="small">' . $loop->dew_temperature . '</td>
                                     <td class="small">' . $loop->wet_bulb . '</td>

                                    <td class="small">' . $loop->air_temperature . '/' . $loop->dew_temperature . '</td>
                                     <td class="small" >' . $loop->station_pressure_hpa . ' </td>
                                      <td class="small">';
                    if ($loop->station_pressure_hpa != "") {
                        echo round(0.02952998751 * $loop->station_pressure_hpa, 2);
                    }

                    echo '</td>
                                     <td class="small" >' . $loop->sea_pressure_hpa . '</td>
                                      <td class="small"> </td>
                                     <td class="small" >' . $loop->recent_weather . '</td>

                        </tr>

                                        ';
                }
            }

            echo '</tbody>
                </table>


                                                </div><!--/widget-body-->
                                            </div>';
        } else {

            echo $date . ' no values ';
        }
    }

    public function daily() {

        $this->load->helper(array('form', 'url'));
        //{date:date,max:max,min:min,actual:actual,anemometer:anemometer,wind:wind,maxi:maxi,station:station}

        $date = $this->input->post('date');
        $station = $this->input->post('station');
        $max = $this->input->post('max');
        $min = $this->input->post('min');
        $actual = $this->input->post('actual');
        $anemometer = $this->input->post('anemometer');
        $wind = $this->input->post('wind');
        $maxi = $this->input->post('maxi');
        $user = 'test';
        $submitted = date('Y-m-d');
        $approved = 'false';

        if ($station == "") {
            echo '<div class="alert alert-error"><strong>Please select a station</strong></div>';
            return;
        }

        //echo $date;
        $get_result = $this->Md->check($date, 'date', 'daily');
        // var_dump($get_result);
        if (!$get_result) {
            echo '<div class="alert alert-error"><strong> Data already submitted for ' . $date . '</strong></div>';
        } else {

            $daily = array('station' => $station, 'date' => $date, 'max' => $max, 'min' => $min, 'actual' => $actual, 'anemometer' => $anemometer, 'wind' => $wind, 'maxi' => $maxi, 'user' => $user, 'submitted' => $submitted, 'approved' => $approved);
            $this->Md->save($daily, 'daily');
            echo '<div class="alert alert-info"><strong>Information  submitted</strong></div>';
        }
    }

}
