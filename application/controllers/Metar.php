<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Metar extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
        $this->load->library('helper');
    }

    public function grid() {

        $this->load->view('metar-grid');
    }

    public function metar() {

        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }

        $tm = 00;

        while ($tm <= 23) {
// sprintf("%02d", $gg)
            //$yg =  date('d') . date('H') . "00Z";
             $yg =  date('d') . sprintf("%02d", $tm) . "00Z";
            
            $get_result = $this->Md->check_sql('SELECT * FROM metars where station ="' . $this->session->userdata('station') . '" AND day ="' . date('Y-m-d') . '" AND yg = "' . $yg . '"');
            if ($get_result) {
                $met = array('when' => date('Y-m-d H:i:s'), 'station' => $this->session->userdata('station'), 'day' => date('Y-m-d'), 'type' => '', 'cc' => $this->session->userdata('code'), 'yg' => $yg, 'df' => '', 'ww' => '', 'w1' => '', 'nc' => '', 'tt' => '', 'qnh' => '', 'qni' => '', 'qfh' => '', 'qfi' => '', 're' => '', 'trend' => '', 'user' => $this->session->userdata('username'), 'approved' => 'false');
                $this->Md->save($met, 'metars');
            }

            $tm = $tm + 1;
        }
        $query = $this->Md->query('SELECT * FROM metars where station ="' . $this->session->userdata('station') . '" AND day ="' . date('Y-m-d') . '" ');
        if ($query) {
            $data['metars'] = $query;
        } else {
            $data['metars'] = array();
        }


        $this->load->view('metar-original', $data);
    }

    public function updater() {
        $this->load->helper(array('form', 'url'));

        if (!empty($_POST)) {

            foreach ($_POST as $field_name => $val) {
                //clean post values
                $field_id = strip_tags(trim($field_name));
                $val = strip_tags(trim(mysql_real_escape_string($val)));
                //from the fieldname:user_id we need to get user_id
                $split_data = explode(':', $field_id);
                $user_id = $split_data[1];
                $field_name = $split_data[0];
                if (!empty($user_id) && !empty($field_name) && !empty($val)) {
                    //update the values
                    $student = array($field_name => $val,'when' => date('Y-m-d H:i:s'), 'user' => $this->session->userdata('username'));
                    $this->Md->update($user_id, $student, 'metars');
                    echo "Updated";
                } else {
                    echo "Invalid Requests";
                }
            }
        } else {
            echo "Invalid Requests";
        }
    }

    public function activate() {

        $this->load->helper(array('form', 'url'));
        $id = trim($this->input->post('id'));
        $approve = trim($this->input->post('approve'));
        if ($approve == "F") {
            if ($this->session->userdata('role') == "Observer" || ($this->session->userdata('role') == "Administrator")) {
                $metar = array('approved' => $this->session->userdata('username'));
                $this->Md->update($id, $metar, 'metar');
                $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'approve', 'details' => $this->session->userdata('username') . ' has approved', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
                $this->Md->save($log, 'logs');
            }
        }
    }

    public function activate_daily() {

        $this->load->helper(array('form', 'url'));
        $id = trim($this->input->post('id'));
        $approve = trim($this->input->post('approve'));
        if ($approve == "F") {
            if ($this->session->userdata('role') == "Observer" || ($this->session->userdata('role') == "Administrator")) {
                $metar = array('approved' => $this->session->userdata('username'));
                $this->Md->update($id, $metar, 'daily');
                $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'approve', 'details' => $this->session->userdata('username') . ' has approved', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
                $this->Md->save($log, 'logs');
            }
        }
    }

    public function activate_rain() {

        $this->load->helper(array('form', 'url'));
        $id = trim($this->input->post('id'));
        $approve = trim($this->input->post('approve'));
        if ($approve == "F") {
            if ($this->session->userdata('role') == "Observer" || ($this->session->userdata('role') == "Administrator")) {
                $metar = array('approved' => $this->session->userdata('username'));
                $this->Md->update($id, $metar, 'rain');
            }
        }
    }

    public function api() {

        $station = urldecode($this->uri->segment(3));

        if ($station != "") {
            $result = $this->Md->query("SELECT * FROM metar WHERE name='" . $station . "'");

            if ($result) {
                echo json_encode($result);
                return;
            }
        }
    }

    public function api_daily() {

        $station = urldecode($this->uri->segment(3));

        if ($station != "") {
            $result = $this->Md->query("SELECT * FROM daily WHERE station='" . $station . "'");

            if ($result) {
                echo json_encode($result);
                return;
            }
        }
    }

    public function api_rain() {

        $station = urldecode($this->uri->segment(3));

        if ($station != "") {
            $result = $this->Md->query("SELECT * FROM rain WHERE name='" . $station . "'");

            if ($result) {
                echo json_encode($result);
                return;
            }
        }
    }

    public function daily_weather() {
        $this->load->view('daily-grid');
    }

    public function periodic() {
        $this->load->view('rain-grid');
    }

    public function synoptic() {
        $this->load->view('synoptic-grid');
    }

    public function grids() {

        $this->load->view('metar-grids');
    }

    public function index() {

        $query = $this->Md->show('metar');
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
        $query = $this->Md->get('day', date('Y-m-d'), 'metar');
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('metar', $data);
    }

    public function view_metar() {

        $query = $this->Md->show('metar');
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
        $query = $this->Md->get('day', date('Y-m-d'), 'metar');
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('view-metar', $data);
    }

    public function add_metar() {

        $query = $this->Md->show('metar');
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
        $query = $this->Md->get('day', date('Y-m-d'), 'metar');
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('add-metar', $data);
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

        $this->load->view('metar-report', $data);
    }

    public function everyday() {

        $query = $this->Md->show('metar');
        //  var_dump($query);
        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $query = $this->Md->get('station', $this->session->userdata('stationname'), 'daily');
        //  var_dump($query);
        if ($query) {
            $data['daily'] = $query;
        } else {
            $data['daily'] = array();
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
        $query = $this->Md->get('day', date('Y-m-d'), 'metar');
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('add-daily-weather', $data);
    }

    public function rainfall_records() {

        $query = $this->Md->show('metar');
        //  var_dump($query);
        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $query = $this->Md->get('station', $this->session->userdata('stationname'), 'daily');
        //  var_dump($query);
        if ($query) {
            $data['daily'] = $query;
        } else {
            $data['daily'] = array();
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
        $query = $this->Md->get('day', date('Y-m-d'), 'metar');
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('view-daily-weather', $data);
    }

    public function rainfall() {

        $query = $this->Md->show('metar');
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
        $query = $this->Md->show('rain');
        if ($query) {
            $data['rain'] = $query;
        } else {
            $data['rain'] = array();
        }
        // get($field,$value,$table)
        $query = $this->Md->get('day', date('Y-m-d'), 'metar');
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('add-rainfall', $data);
    }

    public function view_rainfall() {

        $query = $this->Md->show('metar');
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
        $query = $this->Md->show('rain');
        if ($query) {
            $data['rain'] = $query;
        } else {
            $data['rain'] = array();
        }
        // get($field,$value,$table)
        $query = $this->Md->get('day', date('Y-m-d'), 'metar');
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('view-rainfall', $data);
    }

    public function save() {

        $sessdata = $this->session->userdata('actions');
        if ($this->helper->allowed($sessdata, 'save')) {

            $this->session->set_flashdata('msg', $this->session->userdata('actions') . '<div class="alert alert-error">
                                                   
                                                <strong>
                                               You do not have permission to execute this task	</strong>									
						</div>');

            redirect('metar/', 'refresh');
        }

        $this->load->helper(array('form', 'url'));
        $type = $this->input->post('type');
        $station = $this->session->userdata('code');
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
            $this->session->set_flashdata('msg', '<div class="alert alert-success">                                                   
                                                <strong>  meta has already been submitted</strong>									
						</div>');
            redirect('/metar', 'refresh');
            return;

            // $metar = array('station' => $station, 'type' => $type, 'datetime' => $datetime, 'timezone' => 'GMT', 'wind_direction' => $wind_direction, 'wind_speed' => $wind_speed, 'unit' => $wind_unit, 'visibility' => $visibility, 'present_weather' => $present, 'cloud' => $cloud, 'air_temperature' => $air_temperature, 'humidity' => $humidity, 'dew_temperature' => $dew_temperature, 'wet_bulb' => $wet_bulb, 'station_pressure_hpa' => $station_pressure, 'sea_pressure_hpa' => $sea_pressure, 'recent_weather' => $recent_weather, 'submitted' => date('Y-m-d H:m:s'), 'user' => $this->session->userdata('username'), 'day' => $day);
            //$this->Md->save($metar, 'metar');
            //$log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'save', 'details' => 'meta information saved ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
            //$this->Md->save($log, 'logs');
        }

        if ($station != "") {
            $metar = array('approved' => 'F', 'name' => $this->session->userdata('station'), 'station' => $station, 'type' => $type, 'datetime' => $datetime, 'timezone' => 'GMT', 'wind_direction' => $wind_direction, 'wind_speed' => $wind_speed, 'unit' => $wind_unit, 'visibility' => $visibility, 'present_weather' => $present, 'cloud' => $cloud, 'air_temperature' => $air_temperature, 'humidity' => $humidity, 'dew_temperature' => $dew_temperature, 'wet_bulb' => $wet_bulb, 'station_pressure_hpa' => $station_pressure, 'sea_pressure_hpa' => $sea_pressure, 'recent_weather' => $recent_weather, 'submitted' => date('Y-m-d H:m:s'), 'user' => $this->session->userdata('username'), 'day' => $day);
            $this->Md->save($metar, 'metar');
            $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'create', 'details' => $this->session->userdata('username') . ' created a metar', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
            $this->Md->save($log, 'logs');
            redirect('/metar', 'refresh');
            return;
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>  Please select a station</strong>									
						</div>');
            redirect('/metar', 'refresh');
        }
    }

    public function saveOnline() {

        $this->load->helper(array('form', 'url'));

        $stations = $this->Md->get('name', $this->input->post('station'), 'station');
        foreach ($stations as $loop) {
            $code = $loop->code;
        }

        $type = $this->input->post('type');
        $zone = $this->input->post('timezone');
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
        $user = $this->input->post('user');

        $wind_info = explode(' ', $wind);
        $wind_direction = $wind_info[0];
        $wind_speed = $wind_info[1];
        $wind_unit = $wind_info[2];

        $get_result = $this->Md->check($datetime, 'datetime', 'metar');
        if (!$get_result) {
            if ($type != '') {
                echo' meta has already been submitted';
                return;
            }
        }

        if ($station != "") {
            $metar = array('approved' => 'F', 'name' => $this->input->post('station'), 'station' => $station, 'type' => $type, 'datetime' => $datetime, 'timezone' => 'GMT', 'wind_direction' => $wind_direction, 'wind_speed' => $wind_speed, 'unit' => $wind_unit, 'visibility' => $visibility, 'present_weather' => $present, 'cloud' => $cloud, 'air_temperature' => $air_temperature, 'humidity' => $humidity, 'dew_temperature' => $dew_temperature, 'wet_bulb' => $wet_bulb, 'station_pressure_hpa' => $station_pressure, 'sea_pressure_hpa' => $sea_pressure, 'recent_weather' => $recent_weather, 'submitted' => date('Y-m-d H:m:s'), 'user' => $user, 'day' => $day);
            $this->Md->save($metar, 'metar');
            $log = array('user' => $user, 'userid' => '', 'action' => 'Create', 'details' => $user . ' has logged in ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
            $this->Md->save($log, 'logs');
            echo'saved';
        } else {
            echo 'no station defined ';
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
        $log = array('user' => $this->session->userdata('name'), 'userid' => $this->session->userdata('id'), 'action' => 'updated', 'details' => ' ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
        $this->Md->save($log, 'logs');
        $this->session->set_flashdata('msg', 'The ' . $name . ' has been updated');
        redirect('/Role', 'refresh');
        return;
    }

    public function update_daily() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        //  $id = '3';
        $max = $this->input->post('max');
        $min = $this->input->post('min');
        $actual = $this->input->post('actual');
        $anemometer = $this->input->post('anemometer');
        $wind = $this->input->post('wind');
        $maxi = "";
        $rain = $this->input->post('rain');
        $thunder = $this->input->post('thunder');
        $fog = $this->input->post('fog');
        $haze = $this->input->post('haze');
        $storm = $this->input->post('storm');
        $quake = $this->input->post('quake');
        $height = $this->input->post('height');
        $duration = $this->input->post('duration');
        // $duration = '5'; 
        $sunshine = $this->input->post('sunshine');
        $radiationtype = $this->input->post('radiationtype');
        $radiation = $this->input->post('radiation');
        $evaptype1 = $this->input->post('evaptype1');
        $evap1 = $this->input->post('evap1');
        $evaptype2 = $this->input->post('evaptype2');
        $evap2 = $this->input->post('evap2');
        $height = $this->input->post('height');

        if ($id != "") {
            $daily = array('max' => $max, 'min' => $min, 'actual' => $actual, 'anemometer' => $anemometer, 'height' => $height, 'wind' => $wind, 'maxi' => "", 'user' => $this->session->userdata('username'), 'submitted' => $submitted, 'approved' => $approved, 'rain' => $rain, 'thunder' => $thunder, 'fog' => $fog, 'haze' => $haze, 'storm' => $storm, 'quake' => $quake, 'height' => $height, 'duration' => $duration, 'sunshine' => $sunshine, 'radiationtype' => $radiationtype, 'radiation' => $radiation, 'evaptype1' => $evaptype1, 'evap1' => $evap1, 'evaptype2' => $evaptype2, 'evap2' => $evap2);
            $this->Md->update($id, $daily, 'daily');
            $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'update', 'details' => $this->session->userdata('stationname') . 'update of weather information ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
            $this->Md->save($log, 'logs');
            echo '<div class="alert alert-error">     <strong>
                                              information updated</strong>									
						</div>';
        }
    }

    public function delete() {

        $id = $this->uri->segment(3);

        $query = $this->Md->delete($id, 'metar');

        $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'delete', 'details' => $this->session->userdata('username') . ' has deleted metar information', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => 'www.');
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
        //$datenow = trim($this->input->post('datenow'));
        $station = trim($this->input->post('station'));
        $day = trim($this->input->post('day'));
        $month = trim($this->input->post('month'));
        $year = trim($this->input->post('year'));
        unset($sql);

        if ($day)
            $sql[] = "DAY(day) = '$day' ";
        if ($month)
            $sql[] = "MONTH(day) = '$month' ";
        if ($year)
            $sql[] = " YEAR(day) = '$year' ";
        if ($station)
            $sql[] = "station = '$station' ";

        $query = "SELECT * FROM metar";

        if (!empty($sql)) {
            $query .= ' WHERE ' . implode(' AND ', $sql);
        }

        $get_result = $this->Md->query($query);

        // var_dump($get_result);
        if ($get_result) {

            echo '   <h4>' . $day . '/' . $month . '/' . $year . ' METAR DATA</h4>             
                                         
   <table id="metar" class="table table-striped table-bordered table-hover">

                    <tbody>  
                          
                        <tr bgcolor="#F7ECF2">
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
                                <a href="#">Speed M/S</a>
                            </td>
                              <td class="center">
                                <a href="#">Direction</a>
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
                    $direction = 'none';
                    $speed = round(($loop->wind_speed * 0.514444), 2);
                    if (in_array($loop->wind_direction, range(0, 90)))
                        $direction = 'NE';
                    if (in_array($loop->wind_direction, range(90, 180)))
                        $direction = 'SE';
                    if (in_array($loop->wind_direction, range(180, 270)))
                        $direction = 'SW';
                    if (in_array($loop->wind_direction, range(270, 360)))
                        $direction = 'NW';

                    if ($loop->wind_direction == 0)
                        $direction = 'N';
                    if ($loop->wind_direction == 45)
                        $direction = 'NE';
                    if ($loop->wind_direction == 90)
                        $direction = 'E';
                    if ($loop->wind_direction == 180)
                        $direction = 'S';
                    if ($loop->wind_direction == 270)
                        $direction = 'W';

                    echo '<tr>
                            <td class="small" >' . $loop->type . '</td>
                            <td class="small" >' . $loop->station . ' </td>
                            <td class="small">' . $loop->datetime . '</td>
                            <td class="small">' . $loop->wind_direction . ' ' . $loop->wind_speed . ' ' . $loop->unit . '</td>
                               <td class="small">' . $speed . '</td>  
                     <td class="small">' . $direction . '</td>
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
                </table>  ';
        } else {

            echo $date . ' no values ';
        }
    }

    public function daily() {

        $sessdata = $this->session->userdata('actions');
        if ($this->helper->allowed($sessdata, 'save')) {

            echo $this->session->userdata('actions') . '<div class="alert alert-error">     <strong>
                                               You do not have permission to execute this task	</strong>									
						</div>';
            redirect('metar/', 'refresh');
        }
        $this->load->helper(array('form', 'url'));
        //{date:date,max:max,min:min,actual:actual,anemometer:anemometer,wind:wind,maxi:maxi,station:station}

        $date = $this->input->post('date');
        // $date = date('Y-m-d');
        $station = $this->input->post('station');
        // $station = "muk";
        $max = $this->input->post('max');
        $min = $this->input->post('min');
        $actual = $this->input->post('actual');
        $anemometer = $this->input->post('anemometer');
        $wind = $this->input->post('wind');
        $maxi = "";
        $rain = $this->input->post('rain');
        $thunder = $this->input->post('thunder');
        $fog = $this->input->post('fog');
        $haze = $this->input->post('haze');
        $storm = $this->input->post('storm');
        $quake = $this->input->post('quake');
        $height = $this->input->post('height');
        $duration = $this->input->post('duration');
        $sunshine = $this->input->post('sunshine');
        $radiationtype = $this->input->post('type');
        $radiation = $this->input->post('radiation');
        $evaptype1 = $this->input->post('evaptype1');
        $evap1 = $this->input->post('evap1');
        $evaptype2 = $this->input->post('evaptype2');
        $evap2 = $this->input->post('evap2');
        $user = '';
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

            $daily = array('approved' => 'F', 'station' => $station, 'date' => $date, 'max' => $max, 'min' => $min, 'actual' => $actual, 'anemometer' => $anemometer, 'wind' => $wind, 'maxi' => $maxi, 'user' => $this->session->userdata('username'), 'submitted' => $submitted, 'approved' => $approved, 'rain' => $rain, 'thunder' => $thunder, 'fog' => $fog, 'haze' => $haze, 'storm' => $storm, 'quake' => $quake, 'height' => $height, 'duration' => $duration, 'sunshine' => $sunshine, 'radiationtype' => $radiationtype, 'radiation' => $radiation, 'evaptype1' => $evaptype1, 'evap1' => $evap1, 'evaptype2' => $evaptype2, 'evap2' => $evap2);
            $this->Md->save($daily, 'daily');
            $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'create', 'details' => $this->session->userdata('stationname') . ' submit of weather information ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
            $this->Md->save($log, 'logs');
            echo '<br><div class="alert alert-info span12"><strong>Information  submitted</strong></div>';
        }
    }

    public function dailyOnline() {


        $this->load->helper(array('form', 'url'));
        //{date:date,max:max,min:min,actual:actual,anemometer:anemometer,wind:wind,maxi:maxi,station:station}

        $date = $this->input->post('date');
        // $date = date('Y-m-d');
        $station = $this->input->post('station');
        // $station = "muk";
        $max = $this->input->post('max');
        $min = $this->input->post('min');
        $actual = $this->input->post('actual');
        $anemometer = $this->input->post('anemometer');
        $wind = $this->input->post('wind');
        $maxi = "";
        $rain = $this->input->post('rain');
        $thunder = $this->input->post('thunder');
        $fog = $this->input->post('fog');
        $haze = $this->input->post('haze');
        $storm = $this->input->post('storm');
        $quake = $this->input->post('quake');
        $height = $this->input->post('height');
        $duration = $this->input->post('duration');
        $sunshine = $this->input->post('sunshine');
        $radiationtype = $this->input->post('type');
        $radiation = $this->input->post('radiation');
        $evaptype1 = $this->input->post('evaptype1');
        $evap1 = $this->input->post('evap1');
        $evaptype2 = $this->input->post('evaptype2');
        $evap2 = $this->input->post('evap2');
        $user = $this->input->post('user');
        $submitted = date('Y-m-d');
        $approved = 'false';

        if ($station == "") {
            echo 'Please select a station';
            return;
        }
        //echo $date;
        $get_result = $this->Md->check($date, 'date', 'daily');
        // var_dump($get_result);
        if (!$get_result) {
            echo 'Data already submitted for ' . $date . '';
        } else {

            $daily = array('approved' => 'F', 'station' => $station, 'date' => $date, 'max' => $max, 'min' => $min, 'actual' => $actual, 'anemometer' => $anemometer, 'wind' => $wind, 'maxi' => $maxi, 'user' => $user, 'submitted' => $submitted, 'approved' => $approved, 'rain' => $rain, 'thunder' => $thunder, 'fog' => $fog, 'haze' => $haze, 'storm' => $storm, 'quake' => $quake, 'height' => $height, 'duration' => $duration, 'sunshine' => $sunshine, 'radiationtype' => $radiationtype, 'radiation' => $radiation, 'evaptype1' => $evaptype1, 'evap1' => $evap1, 'evaptype2' => $evaptype2, 'evap2' => $evap2);
            $this->Md->save($daily, 'daily');
            $log = array('user' => $user, 'userid' => "", 'action' => 'create', 'details' => $station . 'submit of weather information ', 'date' => date('Y-m-d H:i:s'), 'ip' => "", 'url' => '');
            $this->Md->save($log, 'logs');
        }
    }

    public function rain() {

        $this->load->helper(array('form', 'url'));
        //date:date,rain:rain,time:time,duration:duration

        $date = $this->input->post('date');
        // $date = date('Y-m-d');
        $rain = $this->input->post('rain');
        $station = $this->input->post('station');
        $time = $this->input->post('time');
        $duration = $this->input->post('duration');

        $user = $this->session->userdata('username');
        $submitted = date('Y-m-d');

        if ($station == "") {
            echo '<div class="alert alert-error"><strong>Please select a station</strong></div>';
            return;
        }
        //echo $date;
        $get_result = $this->Md->check($time, 'rain', 'rain');
        // var_dump($get_result);
        if (!$get_result) {
            echo '<div class="alert alert-error"><strong> Data already submitted for ' . $time . '</strong></div>';
        } else {

            $rain = array('approved' => 'F', 'station' => $station, 'date' => $date, 'rain' => $rain, 'time' => $time, 'duration' => $duration, 'user' => $user, 'submitted' => $submitted);
            $this->Md->save($rain, 'rain');
            $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'Create', 'details' => $this->session->userdata('stationname') . 'submit of weather information ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
            $this->Md->save($log, 'logs');
            echo '<br><div class="alert alert-info"><strong>Rainfall information  submitted</strong></div>';
        }
    }

}
