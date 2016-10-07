<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rainfall extends CI_Controller {

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
        // get($field,$value,$table)
        // $query = $this->Md->query("SELECT * FROM  daily RIGHT JOIN metar ON daily.date = metar.day  "); 
        $query = $this->Md->query("SELECT * FROM daily");

        if ($query) {
            $data['daily'] = $query;
        } else {
            $data['daily'] = array();
        }
        //  $query = $this->Md->query("SELECT * FROM  daily LEFT JOIN metar ON daily.date = metar.day  ");
        $query = $this->Md->query("SELECT * FROM metar");
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('rainfall', $data);
    }

    public function report() {


        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        // get($field,$value,$table)
        $query = $this->Md->get('day', date('Y-m-d'), 'metar');
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('rainfall-report', $data);
    }

    public function gets() {

        $this->load->helper(array('form', 'url'));
        //$datenow = trim($this->input->post('datenow'));
        $station = trim($this->input->post('station'));

        $yeared = $this->input->post('year');

        if ($station != " " && $monthed != " " && $yeared != " ") {
            unset($sql);

            if ($yeared) {
                $sql[] = " YEAR(date) = '$yeared' ";
            }
            $sql[] = "station = '$station'";
            $query = "SELECT * FROM daily ";

            if (!empty($sql)) {
                $query .= ' WHERE ' . implode(' AND ', $sql);
            }

            $all = array();
            $query1 = $this->Md->query($query);


            foreach ($query1 as $v) {
                $resv = new stdClass();
                $resv->date = $v->date;
                $resv->max = $v->max;
                $resv->min = $v->min;
                $resv->rain = $v->actual;
                $resv->actual2 = $v->maxi;


                $resv->thunder = $v->thunder;
                $resv->fog = $v->fog;
                $resv->haze = $v->haze;
                $resv->storm = $v->storm;
                $resv->quake = $v->quake;
                $resv->height = $v->height;
                $resv->duration = $v->duration;
                $resv->sunshine = $v->sunshine;
                $resv->radiationtype = $v->radiationtype;
                $resv->radiation = $v->radiation;
                $resv->evaptype1 = $v->evaptype1;
                $resv->evap = $v->evap;
                $resv->evaptype2 = $v->evaptype2;
                $resv->evap = $v->evap;

                array_push($all, $resv);
            }

            echo '   <h4>' . 'Station ' . $station . '  ' . date('F', mktime(0, 0, 0, $monthed, 10)) . ' ' . $yeared . ' rainfall observations</h4>             
                                         
    <table id="sample-table-2" class="table table-striped table-bordered table-hover">

                                            <tbody>
                                                <tr>
                                                    <th><label>Date</label></th>
                                                    <th><label>January </label></th>
                                                    <th> <label> February </label></th>
                                                    <th><label>March</label> </th>
                                                    <th >  <label>April </label> </th>
                                                    <th> <label>May </label></th>
                                                    <th ><label>June</label> </th>
                                                    <th  > <label>July</label>   </th>
                                            <th ><label>August</label> </th>
                                            <th > <label>September</label></th>
                                             <th > <label>October</label></th>
                                              <th > <label>November</label></th>
                                               <th > <label>December</label></th>
                                            
                                            </tr>

                                         ';
            $months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December");

            if (is_array($all) && count($all)) {

                for ($do = 1; $do <= 31; $do++) {


                    foreach ($all as $loop) {

                        $thisday = $loop->date . ',';
                        $split = explode("-", $thisday);
                        $dy = $split[2]; //day
                        $mh = $split[1]; //month

                        if ($dy == $do) {
                            $thisday = $loop->date;

                            if ($mh == 1) {
                                $r1 = $loop->rain;
                            }
                            if ($mh == 2) {
                                $r2 = $loop->rain;
                            }
                            if ($mh == 3) {
                                $r3 = $loop->rain;
                            }
                            if ($mh == 4) {
                                $r4 = $loop->rain;
                            }
                            if ($mh == 5) {
                                $r5 = $loop->rain;
                            }
                            if ($mh == 6) {
                                $r6 = $loop->rain;
                            }
                            if ($mh == 7) {
                                $r7 = $loop->rain;
                            }
                            if ($mh == 8) {
                                $r8 = $loop->rain;
                            }
                            if ($mh == 9) {
                                $r9 = $loop->rain;
                            }
                            if ($mh == 10) {
                                $r10 = $loop->rain;
                            }
                            if ($mh == 11) {
                                $r11 = $loop->rain;
                            }
                            if ($mh == 12) {
                                $r12 = $loop->rain;
                            }
                        }
                    }



                    echo '<tr>  '
                    . ' <td class="small" >' . $do . '</td>
                                                        <td class="small"> ' . $r1 . '</td>
                                                        <td class="small" >' . $r2 . '</td>
                                                        <td class="small" >' . $r3 . ' </td>
                                                        <td class="small" >' . $r4 . '  </td>
                                                        <td class="small">' . $r5 . '</td>
                                                        <td class="small">' . $r6 . '</td>
                                                        <td class="small">' . $r7 . '</td>
                                                        <td class="small">' . $r8 . '</td>
                                                        <td class="small">' . $r9 . '</td>
                                                        <td class="small">' . $r10 . '</td>
                                                        <td class="small">' . $r11 . '</td>
                                                        <td class="small">' . $r12 . '</td>
                                                        
                                                      
                                        </tr> ';
                    $r1 = "";
                    $r2 = "";
                    $r3 = "";
                    $r4 = "";
                    $r5 = "";
                    $r6 = "";
                    $r7 = "";
                    $r8 = "";
                    $r9 = "";
                    $r10 = "";
                    $r11 = "";
                    $r12 = "";
                }


                echo '</tbody>
                </table>  ';
            } else {

                echo $yeared . ' has no values ';
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
                $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'create', 'details' => $this->session->userdata('username') . ' created metar information', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
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
              $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'create', 'details' => $this->session->userdata('username') . ' created metar information', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
                $this->Md->save($log, 'logs');

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
          $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'delete', 'details' => $this->session->userdata('username') . ' deleted metar information', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
                $this->Md->save($log, 'logs');

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
              $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'create', 'details' => $this->session->userdata('username') . ' created metar information', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
                $this->Md->save($log, 'logs');
            echo '<div class="alert alert-info"><strong>Information  submitted</strong></div>';
        }
    }

}
