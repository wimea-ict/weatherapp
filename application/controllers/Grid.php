<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Grid extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index() {

        $this->load->view('add-budget');
    }

    public function account() {
        $query = $this->Md->query("SELECT DISTINCT(account) AS account FROM budgets ORDER BY account DESC");
        // $query = $this->Md->query("SELECT accounts FROM budgets ");
        echo json_encode($query);
    }

    public function department() {
        $query = $this->Md->query("SELECT DISTINCT(department) AS department FROM budgets ORDER BY department DESC");
        echo json_encode($query);
    }

    public function period() {
        $query = $this->Md->query("SELECT DISTINCT(period) AS period FROM budgets ORDER BY period DESC");
        echo json_encode($query);
    }

    public function unit() {
        $query = $this->Md->query("SELECT DISTINCT(unit) AS unit FROM budgets ORDER BY unit DESC");
        echo json_encode($query);
    }

    public function categories() {
        $query = $this->Md->query("SELECT DISTINCT(category) AS category FROM budgets ORDER BY category DESC");
        echo json_encode($query);
    }

    public function objective() {
        $query = $this->Md->query("SELECT DISTINCT(objectives) AS objective FROM budgets ORDER BY objective DESC");
        echo json_encode($query);
    }

    public function initiative() {
        $query = $this->Md->query("SELECT DISTINCT(initiatives) AS initiative FROM budgets ORDER BY initiative DESC");
        echo json_encode($query);
    }

    public function lines() {
        $query = $this->Md->query("SELECT DISTINCT(line) AS line FROM budgets ORDER BY line DESC");
        echo json_encode($query);
    }

    public function sublines() {
        $query = $this->Md->query("SELECT DISTINCT(subline) AS subline FROM budgets ORDER BY subline DESC");
        echo json_encode($query);
    }

    public function user() {
        $query = $this->Md->query("SELECT DISTINCT(submitted) AS submitted FROM budgets ORDER BY submitted DESC");
        echo json_encode($query);
    }

    public function obj() {
        $query = $this->Md->query("SELECT title  FROM objective ORDER BY id DESC");
        echo json_encode($query);
    }

    public function inits() {
        $query = $this->Md->query("SELECT details FROM initiative ORDER BY id DESC");
        echo json_encode($query);
    }

    public function perf() {
        $query = $this->Md->query("SELECT * FROM initiative ORDER BY id DESC");
        echo json_encode($query);
    }

    public function category() {
        $query = $this->Md->query("SELECT * FROM category ORDER BY id DESC");
        echo json_encode($query);
    }

    public function line() {
        $query = $this->Md->query("SELECT * FROM reporting ORDER BY id DESC");
        echo json_encode($query);
    }

    public function subline() {
        $query = $this->Md->query("SELECT * FROM subline ORDER BY id DESC");
        echo json_encode($query);
    }

    public function months() {

        $months = array();

        for ($x = 1; $x < 13; $x++) {
            $obj = new stdClass();
            $obj->id = $x;
            $obj->name = date('F', mktime(0, 0, 0, $x, 1));
            array_push($months, $obj);
        }

        echo json_encode($months);
    }

    public function fund() {

        $months = array();
        $obj = new stdClass();

        $obj->name = "INTERNAL";
        array_push($months, $obj);

        $objs = new stdClass();
        $objs->name = "EXTERNAL";
        array_push($months, $objs);

        echo json_encode($months);
    }

    public function grid() {

        $this->load->view('add-grid');
    }

    public function summary() {
        $this->load->view('summary-page');
    }

    public function metar() {

        $query = $this->Md->query("SELECT * FROM metar WHERE  day = '" . date('Y-m-d') . "' AND name = '" . $this->session->userdata('station') . "'");

        echo json_encode($query);
    }

    public function daily() {

        $query = $this->Md->query("SELECT * FROM daily WHERE  MONTH(date) = MONTH(NOW()) AND station = '" . $this->session->userdata('station') . "'");

        echo json_encode($query);
    }

    public function synoptic() {

        $query = $this->Md->query("SELECT * FROM synoptic WHERE  MONTH(date) = MONTH(NOW()) AND station = '" . $this->session->userdata('station') . "'");

        echo json_encode($query);
    }

    public function periodic() {

        $query = $this->Md->query("SELECT * FROM rain WHERE  MONTH(date) = MONTH(NOW()) AND station = '" . $this->session->userdata('number') . "'");

        echo json_encode($query);
    }

    public function metars() {

        $query = $this->Md->query("SELECT * FROM metar WHERE  day = '" . date('Y-m-d') . "'");

        echo json_encode($query);
    }

    public function summaries() {

        $page = ($this->input->post('page')) ? intval($this->input->post('page')) : 1;
        $rows = ($this->input->post('rows')) ? intval($this->input->post('rows')) : 50;

        $items = array();
        date_default_timezone_set('UTC');
        for ($i = 1; $i <= $rows; $i++) {
            $index = $i + ($page - 1) * $rows;
            $query = $this->Md->query("SELECT * FROM budgets");
            foreach ($query as $loop) {

                $items[] = array('id' => $loop->id,
                    'account' => $loop->account,
                    'totalForeign' => $loop->totalForeign,
                    'unit' => $loop->unit,
                    'department' => $loop->department,
                    'period' => $loop->period,
                    'objectives' => $loop->account,
                    'category ' => $loop->category,
                    'line' => $loop->line,
                    'subline' => $loop->subline,
                    'priceForeign' => $loop->priceForeign,
                    'qty' => $loop->qty,
                    'persons' => $loop->persons,
                    'freq' => $loop->freq,
                    'priceLocal' => $loop->priceLocal,
                    'totalForeign' => $loop->totalForeign,
                    'totalLocal' => $loop->totalLocal,
                );
            }
        }
        $result = array();
        $result['total'] = count($query);
        $result['rows'] = $items;
        echo json_encode($result);
    }

    public function synoptic_save() {


        $this->load->helper(array('form', 'url'));
        $time = $this->input->post('time');
        $date = $this->input->post('date');
        $station = $this->session->userdata('station');
        $ir = $this->input->post('ir');
        $ix = $this->input->post('ix');
        $h = $this->input->post('h');
        $www = $this->input->post('www');
        $vv = $this->input->post('vv');
        $n = $this->input->post('n');
        $dd = $this->input->post('dd');
        $ff = $this->input->post('ff');
        $t = $this->input->post('t');
        $td = $this->input->post('td');
        $Po = $this->input->post('Po');
        $gisis = $this->input->post('gisis');
        $hhh = $this->input->post('hhh');
        $rrr = $this->input->post('rrr');
        $tr = $this->input->post('tr');
        $present = $this->input->post('present');
        $past = $this->input->post('past');
        $nh = $this->input->post('nh');
        $cl = $this->input->post('cl');
        $cm = $this->input->post('cm');
        $ch = $this->input->post('ch');
        $Tq = $this->input->post('Tq');
        $Ro = $this->input->post('Ro');
        $R1 = $this->input->post('R1');
        $Tx = $this->input->post('Tx');
        $Tm = $this->input->post('Tm');
        $EE = $this->input->post('EE');
        $E = $this->input->post('E');
        $sss = $this->input->post('sss');
        $pchange = $this->input->post('pchange');
        $p24 = $this->input->post('p24');
        $rr = $this->input->post('rr');
        $tr1 = $this->input->post('tr1');
        $ns = $this->input->post('ns');
        $c = $this->input->post('c');
        $hs = $this->input->post('hs');
        $ns1 = $this->input->post('ns1');
        $c1 = $this->input->post('c1');
        $hs1 = $this->input->post('hs1');
        $ns2 = $this->input->post('ns2');
        $c2 = $this->input->post('c2');
        $hs2 = $this->input->post('hs2');
        $supplementary = $this->input->post('supplementary');
        $wb = $this->input->post('wb');
        $rh = $this->input->post('rh');
        $vap = $this->input->post('vap');
        $user = $this->session->userdata('username');
        $synoptic = array('station' => $station, 'date' => $date, 'time' => $time, 'ir' => $ir, 'ix' => $ix, 'h' => $h, 'www' => $www, 'vv' => $vv, 'n' => $n, 'dd' => $dd, 'ff' => $ff, 't' => $t, 'td' => $td, 'Po' => $Po, 'gisis' => $gisis, 'hhh' => $hhh, 'rrr' => $rrr, 'tr' => $tr, 'present' => $present, 'past' => $past, 'nh' => $nh, 'cl' => $cl, 'cm' => $cm, 'ch' => $ch, 'Tq' => $Tq, 'Ro' => $Ro, 'R1' => $R1, 'Tx' => $Tx, 'Tm' => $Tm, 'EE' => $EE, 'E' => $E, 'sss' => $sss, 'pchange' => $pchange, 'p24' => $p24, 'rr' => $rr, 'tr1' => $tr1, 'ns' => $ns, 'c' => $c, 'hs' => $hs, 'ns1' => $ns1, 'c1' => $c1, 'hs1' => $hs1, 'ns2' => $ns2, 'c2' => $c2, 'hs2' => $hs2, 'supplementary' => $supplementary, 'wb' => $wb, 'rh' => $rh, 'vap' => $vap, 'user' => $user, 'submitted' => date('H:i:s'));

        $this->Md->save($synoptic, 'synoptic');
    }

    public function synoptic_update() {

        $this->load->helper(array('form', 'url'));
        
        $id = $this->input->post('id');
        $time = $this->input->post('time');
        $date = $this->input->post('date');
        $station = $this->session->userdata('station');
        $ir = $this->input->post('ir');
        $ix = $this->input->post('ix');
        $h = $this->input->post('h');
        $www = $this->input->post('www');
        $vv = $this->input->post('vv');
        $n = $this->input->post('n');
        $dd = $this->input->post('dd');
        $ff = $this->input->post('ff');
        $t = $this->input->post('t');
        $td = $this->input->post('td');
        $Po = $this->input->post('Po');
        $gisis = $this->input->post('gisis');
        $hhh = $this->input->post('hhh');
        $rrr = $this->input->post('rrr');
        $tr = $this->input->post('tr');
        $present = $this->input->post('present');
        $past = $this->input->post('past');
        $nh = $this->input->post('nh');
        $cl = $this->input->post('cl');
        $cm = $this->input->post('cm');
        $ch = $this->input->post('ch');
        $Tq = $this->input->post('Tq');
        $Ro = $this->input->post('Ro');
        $R1 = $this->input->post('R1');
        $Tx = $this->input->post('Tx');
        $Tm = $this->input->post('Tm');
        $EE = $this->input->post('EE');
        $E = $this->input->post('E');
        $sss = $this->input->post('sss');
        $pchange = $this->input->post('pchange');
        $p24 = $this->input->post('p24');
        $rr = $this->input->post('rr');
        $tr1 = $this->input->post('tr1');
        $ns = $this->input->post('ns');
        $c = $this->input->post('c');
        $hs = $this->input->post('hs');
        $ns1 = $this->input->post('ns1');
        $c1 = $this->input->post('c1');
        $hs1 = $this->input->post('hs1');
        $ns2 = $this->input->post('ns2');
        $c2 = $this->input->post('c2');
        $hs2 = $this->input->post('hs2');
        $supplementary = $this->input->post('supplementary');
        $wb = $this->input->post('wb');
        $rh = $this->input->post('rh');
        $vap = $this->input->post('vap');
        $user = $this->session->userdata('username');
        $synoptic = array('station' => $station, 'date' => $date, 'time' => $time, 'ir' => $ir, 'ix' => $ix, 'h' => $h, 'www' => $www, 'vv' => $vv, 'n' => $n, 'dd' => $dd, 'ff' => $ff, 't' => $t, 'td' => $td, 'Po' => $Po, 'gisis' => $gisis, 'hhh' => $hhh, 'rrr' => $rrr, 'tr' => $tr, 'present' => $present, 'past' => $past, 'nh' => $nh, 'cl' => $cl, 'cm' => $cm, 'ch' => $ch, 'Tq' => $Tq, 'Ro' => $Ro, 'R1' => $R1, 'Tx' => $Tx, 'Tm' => $Tm, 'EE' => $EE, 'E' => $E, 'sss' => $sss, 'pchange' => $pchange, 'p24' => $p24, 'rr' => $rr, 'tr1' => $tr1, 'ns' => $ns, 'c' => $c, 'hs' => $hs, 'ns1' => $ns1, 'c1' => $c1, 'hs1' => $hs1, 'ns2' => $ns2, 'c2' => $c2, 'hs2' => $hs2, 'supplementary' => $supplementary, 'wb' => $wb, 'rh' => $rh, 'vap' => $vap, 'user' => $user, 'submitted' => date('H:i:s'));

         $this->Md->update($id, $synoptic, 'synoptic');
    }

    public function metar_save() {

        $this->load->helper(array('form', 'url'));
        $instance = array(
            'name' => $this->session->userdata('station'),
            'station' => $this->session->userdata('code'),
            'type' => $this->input->post('type'),
            'datetime' => $this->input->post('datetime'),
            'timezone' => $this->input->post('timezone'),
            'wind_direction' => $this->input->post('wind_direction'),
            'unit' => $this->input->post('unit'),
            'visibility' => $this->input->post('visibility'),
            'present_weather' => $this->input->post('present_weather'),
            'cloud' => $this->input->post('cloud'),
            'air_temperature' => $this->input->post('air_temperature'),
            'humidity' => $this->input->post('humidity'),
            'dew_temperature' => $this->input->post('dew_temperature'),
            'wet_bulb' => $this->input->post('wet_bulb'),
            'station_pressure_hpa' => $this->input->post('station_pressure_hpa'),
            'sea_pressure_hpa' => $this->input->post('sea_pressure_hpa'),
            'recent_weather' => $this->input->post('recent_weather'),
            'day' => $this->input->post('day'),
            'submitted' => date('Y-m-d'),
            'user' => $this->session->userdata('username'),
        );

        //  $budget = json_encode($budget);
        //  $instance = array('account' => $rowData[$d][13], 'total' => $rowData[$d][24], 'enddate' => "", 'startdate' => "", 'initiative' => $rowData[$d][7], 'unit' => $rowData[$d][2], 'department' => str_replace("_", " ", $rowData[$d][1]), 'period' => $rowData[$d][55], 'orgID' => '', 'content' => $budget, 'by' => $this->session->userdata('email'), 'created' => date('Y-m-d H:i:s'));
        $id = $this->Md->save($instance, 'metar');
    }

    public function periodic_save() {

        $this->load->helper(array('form', 'url'));
        $instance = array(
            'name' => $this->session->userdata('station'),
            'station' => $this->session->userdata('number'),
            'date' => $this->input->post('date'),
            'rain' => $this->input->post('rain'),
            'time' => $this->input->post('time'),
            'duration' => $this->input->post('duration'),
            'submitted' => date('Y-m-d'),
            'user' => $this->session->userdata('username'),
        );

        //  $budget = json_encode($budget);
        //  $instance = array('account' => $rowData[$d][13], 'total' => $rowData[$d][24], 'enddate' => "", 'startdate' => "", 'initiative' => $rowData[$d][7], 'unit' => $rowData[$d][2], 'department' => str_replace("_", " ", $rowData[$d][1]), 'period' => $rowData[$d][55], 'orgID' => '', 'content' => $budget, 'by' => $this->session->userdata('email'), 'created' => date('Y-m-d H:i:s'));
        $id = $this->Md->save($instance, 'rain');
    }

    public function periodic_update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $instance = array(
            'name' => $this->session->userdata('station'),
            'station' => $this->session->userdata('number'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'rain' => $this->input->post('rain'),
            'duration' => $this->input->post('duration'),
            'submitted' => date('Y-m-d'),
            'user' => $this->session->userdata('username'),
        );

        if ($this->input->post('date') != "") {
            $this->Md->update($id, $instance, 'rain');
        }
    }

    public function daily_save() {

        $this->load->helper(array('form', 'url'));

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

        $daily = array('date' => $this->input->post('date'), 'station' => $this->session->userdata('station'), 'max' => $max, 'min' => $min, 'actual' => $actual, 'anemometer' => $anemometer, 'height' => $height, 'wind' => $wind, 'maxi' => "", 'user' => $this->session->userdata('username'), 'submitted' => date('Y-m-d'), 'approved' => $approved, 'rain' => $rain, 'thunder' => $thunder, 'fog' => $fog, 'haze' => $haze, 'storm' => $storm, 'quake' => $quake, 'height' => $height, 'duration' => $duration, 'sunshine' => $sunshine, 'radiationtype' => $radiationtype, 'radiation' => $radiation, 'evaptype1' => $evaptype1, 'evap1' => $evap1, 'evaptype2' => $evaptype2, 'evap2' => $evap2);

        if ($this->input->post('date') != "") {
            $this->Md->save($daily, 'daily');
        }
    }

    public function daily_update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
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

        $daily = array('date' => $this->input->post('date'), 'station' => $this->session->userdata('station'), 'max' => $max, 'min' => $min, 'actual' => $actual, 'anemometer' => $anemometer, 'height' => $height, 'wind' => $wind, 'maxi' => "", 'user' => $this->session->userdata('username'), 'submitted' => $submitted, 'approved' => $approved, 'rain' => $rain, 'thunder' => $thunder, 'fog' => $fog, 'haze' => $haze, 'storm' => $storm, 'quake' => $quake, 'height' => $height, 'duration' => $duration, 'sunshine' => $sunshine, 'radiationtype' => $radiationtype, 'radiation' => $radiation, 'evaptype1' => $evaptype1, 'evap1' => $evap1, 'evaptype2' => $evaptype2, 'evap2' => $evap2);


        //  $budget = json_encode($budget);
        //  $instance = array('account' => $rowData[$d][13], 'total' => $rowData[$d][24], 'enddate' => "", 'startdate' => "", 'initiative' => $rowData[$d][7], 'unit' => $rowData[$d][2], 'department' => str_replace("_", " ", $rowData[$d][1]), 'period' => $rowData[$d][55], 'orgID' => '', 'content' => $budget, 'by' => $this->session->userdata('email'), 'created' => date('Y-m-d H:i:s'));
        if ($this->input->post('date') != "") {
            $this->Md->update($id, $daily, 'daily');
        }
    }

    public function metar_update() {

        $this->load->helper(array('form', 'url'));

        $id = $this->input->post('id');
        $instance = array(
            'name' => $this->session->userdata('station'),
            'station' => $this->session->userdata('code'),
            'type' => $this->input->post('type'),
            'datetime' => $this->input->post('datetime'),
            'timezone' => $this->input->post('timezone'),
            'wind_direction' => $this->input->post('wind_direction'),
            'unit' => $this->input->post('unit'),
            'visibility' => $this->input->post('visibility'),
            'present_weather' => $this->input->post('present_weather'),
            'cloud' => $this->input->post('cloud'),
            'air_temperature' => $this->input->post('air_temperature'),
            'humidity' => $this->input->post('humidity'),
            'dew_temperature' => $this->input->post('dew_temperature'),
            'wet_bulb' => $this->input->post('wet_bulb'),
            'station_pressure_hpa' => $this->input->post('station_pressure_hpa'),
            'sea_pressure_hpa' => $this->input->post('sea_pressure_hpa'),
            'recent_weather' => $this->input->post('recent_weather'),
            'day' => $this->input->post('day'),
            'submitted' => date('Y-m-d'),
            'user' => $this->session->userdata('username'),
        );
        $this->Md->update($id, $instance, 'metar');
        // echo json_encode($instance);
    }

    public function delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');

        $query = $this->Md->delete($id, 'budgets');

        if ($this->db->affected_rows() > 0) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => FALSE));
        }
    }

    public function metar_delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');

        $query = $this->Md->delete($id, 'metar');

        if ($this->db->affected_rows() > 0) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => FALSE));
        }
    }

    public function daily_delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');

        $query = $this->Md->delete($id, 'daily');

        if ($this->db->affected_rows() > 0) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => FALSE));
        }
    }

    public function periodic_delete() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');

        $query = $this->Md->delete($id, 'rain');

        if ($this->db->affected_rows() > 0) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => FALSE));
        }
    }
    public function synoptic_delete() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');

        $query = $this->Md->delete($id, 'synoptic');

        if ($this->db->affected_rows() > 0) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => FALSE));
        }
    }

    public function GUID() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    public function import() {

        if (isset($_POST["Import"])) {
            $filename = $_FILES["file"]["tmp_name"];
            // echo $filename;
            if ($_FILES["file"]["size"] > 0) {
                $file = fopen($filename, "r");

                $file = $filename;
                // $file = $filename;
//load the excel library
                $this->load->library('excel');

//read file from path
                $objPHPExcel = PHPExcel_IOFactory::load($file);

                //      Get worksheet dimensions
                $sheet = $objPHPExcel->getSheet(0);
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();
                // Loop through each row of the worksheet in turn
                $budget = new stdClass();

                for ($row = 1; $row < 2; $row++) {
                    //  Read a row of data into an array
                    // echo $row;
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

                    // var_dump($rowData[0]);
                    // echo count($rowData[0]);
                    for ($m = 0; $m < count($rowData[0]); $m++) {

                        // echo $rowData[0][$m]."<br> ";
                    }
                }
                for ($row = 2; $row <= $highestRow; $row++) {
                    //  Read a row of data into an array
                    // echo $row;
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

                    // var_dump($rowData[0]);
                    for ($d = 0; $d < count($rowData); $d++) {
                        // var_dump($rowData[$d]);
                        // echo $rowData[$d][13] . "<br>";
                        //  echo $rowData[$d][1] . "<br>";
                        //  echo $rowData[$d][2] . "<br>";
                        //  echo $rowData[$d][3] . "<br>";
                        $budget = new stdClass();

                        $instance = array('id' => $this->GUID(),
                            'account' => $rowData[$d][13],
                            'totalForeign' => $rowData[$d][24],
                            'unit' => $rowData[$d][2],
                            'department' => str_replace("_", " ", $rowData[$d][1]),
                            'period' => $rowData[$d][55],
                            'submitted' => $this->session->userdata('email'),
                            'created' => date('Y-m-d H:i:s'),
                            'activity ' => $rowData[$d][3],
                            'output' => $rowData[$d][4],
                            'outcome' => $rowData[$d][5],
                            'objectives' => $rowData[$d][6],
                            'initiatives' => $rowData[$d][7],
                            'performance' => $rowData[$d][8],
                            'starts' => $rowData[$d][27],
                            'starts' => $rowData[$d][28],
                            'Procurement' => $rowData[$d][9],
                            'category ' => $rowData[$d][10],
                            'line' => $rowData[$d][11],
                            'subline' => $rowData[$d][12],
                            'funding ' => $rowData[$d][15],
                            'description' => $rowData[$d][14],
                            //**isssue
                            'currency' => $rowData[$d][17],
                            'rate' => $rowData[$d][18],
                            'priceForeign' => $rowData[$d][19],
                            'qty' => $rowData[$d][20],
                            'persons' => $rowData[$d][21],
                            'freq' => $rowData[$d][22],
                            'priceLocal' => $rowData[$d][23],
                            'totalForeign' => $rowData[$d][24],
                            //**issue
                            'flow' => $rowData[$d][10],
                            'totalLocal' => $rowData[$d][23],
                            'variance' => $rowData[$d][25],
                            //**isssue
                            'generation' => $rowData[$d][10],
                            'Jan' => $rowData[$d][31],
                            'Feb' => $rowData[$d][32],
                            'Mar' => $rowData[$d][33],
                            'Apr' => $rowData[$d][34],
                            'May' => $rowData[$d][35],
                            'Jun' => $rowData[$d][36],
                            'Jul' => $rowData[$d][37],
                            'Aug' => $rowData[$d][38],
                            'Sep' => $rowData[$d][39],
                            'Oct' => $rowData[$d][40],
                            'Nov' => $rowData[$d][41],
                            'Dec' => $rowData[$d][42],
                            'Q1' => $rowData[$d][45],
                            'Q2' => $rowData[$d][46],
                            'Q3' => $rowData[$d][47],
                            'Q4' => $rowData[$d][48],
                            'other' => "",
                            ///***issue
                            'details ' => $rowData[$d][54],
                            'Year ' => $rowData[$d][55],
                        );

                        //  $budget = json_encode($budget);
                        //  $instance = array('account' => $rowData[$d][13], 'total' => $rowData[$d][24], 'enddate' => "", 'startdate' => "", 'initiative' => $rowData[$d][7], 'unit' => $rowData[$d][2], 'department' => str_replace("_", " ", $rowData[$d][1]), 'period' => $rowData[$d][55], 'orgID' => '', 'content' => $budget, 'by' => $this->session->userdata('email'), 'created' => date('Y-m-d H:i:s'));
                        $id = $this->Md->save($instance, 'budgets');
                    }
                }
                //  Insert row data array into your database of choice here
            }
//send the data in an array format

            fclose($file);
            // redirect('/all');
        }

        echo '<div class="alert alert-info">   <strong>Information uploaded!  </strong>	</div>';
        redirect('grid/grid', 'refresh');
    }

}
