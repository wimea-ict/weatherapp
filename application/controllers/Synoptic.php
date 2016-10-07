<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Synoptic extends CI_Controller {

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

        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        // get($field,$value,$table)
        //$query = $this->Md->get('day', date('Y-m-d'), 'metar');
        // $query = $this->Md->get('day','2015-07-8','metar'); 
        $query = $this->Md->query("SELECT * FROM metar LEFT JOIN synoptic ON metar.datetime = synoptic.time WHERE metar.day = '" . date('Y-m-d') . "'");
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('form5', $data);
    }

    public function synop() {

        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        // get($field,$value,$table)
        //$query = $this->Md->get('day', date('Y-m-d'), 'metar');
        // $query = $this->Md->get('day','2015-07-8','metar'); 
        

        $gg = 00;

        while ($gg <= 21) {
          

            $get_result = $this->Md->check_sql('SELECT * FROM synoptic where station ="' . $this->session->userdata('station') . '" AND date ="' . date('Y-m-d') . '" AND gg = "' . sprintf("%02d", $gg) . '"');
            if ($get_result) {
                $synoptic = array('approved' => 'F', 'station' => $this->session->userdata('station'), 'date' => date('Y-m-d'), 'gg' => sprintf("%02d", $gg) , 'ii' => '63', 'ir' => '', 'ix' => '', 'h' => '', 'www' => '', 'vv' => '', 'n' => '', 'dd' => '', 'ff' => '', 't' => '', 'td' => '', 'Po' => '', 'gisis' => '', 'hhh' => '', 'rrr' => '', 'tr' => '', 'present' => '', 'past' => '', 'nh' => '', 'cl' => '', 'cm' => '', 'ch' => '', 'Tq' => '', 'Ro' => '', 'R1' => '', 'Tx' => '', 'Tn' => '', 'EE' => '', 'E' => '', 'sss' => '', 'pchange' => '', 'p24' => '', 'rr' => '', 'tr1' => '', 'ns' => '', 'c' => '', 'hs' => '', 'ns1' => '', 'c1' => '', 'hs1' => '', 'ns2' => '', 'c2' => '', 'hs2' => '', 'supplementary' => '', 'wb' => $wb, 'rh' => '', 'vap' => '', 'user' => $this->session->userdata('username'), 'submitted' => date('H:i:s'));
                $this->Md->save($synoptic, 'synoptic');
            } 

            $gg = $gg + 3;
        }
        $query = $this->Md->query('SELECT * FROM synoptic where station ="' . $this->session->userdata('station') . '" AND date ="' . date('Y-m-d') . '" ');
        if ($query) {
            $data['synop'] = $query;
        } else {
            $data['synop'] = array();
        }


        $this->load->view('synoptic-original', $data);
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
                    $student = array($field_name => $val);
                    $this->Md->update($user_id, $student, 'synoptic');
                    echo "Updated";
                } else {
                    echo "Invalid Requests";
                }
            }
        } else {
            echo "Invalid Requests";
        }
    }

    public function api() {

        $station = urldecode($this->uri->segment(3));

        if ($station != "") {
            $result = $this->Md->query("SELECT * FROM synoptic WHERE station='" . $station . "'");

            if ($result) {
                echo json_encode($result);
                return;
            }
        }
    }

    public function tab() {

        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        // get($field,$value,$table)
        //$query = $this->Md->get('day', date('Y-m-d'), 'metar');
        // $query = $this->Md->get('day','2015-07-8','metar'); 
        $query = $this->Md->query("SELECT * FROM metar LEFT JOIN synoptic ON metar.datetime = synoptic.time WHERE metar.day = '" . date('Y-m-d') . "'");
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }
        $this->load->view('view-synoptic', $data);
    }

    public function vertical() {

        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        // get($field,$value,$table)
        //$query = $this->Md->get('day', date('Y-m-d'), 'metar');
        // $query = $this->Md->get('day','2015-07-8','metar'); 
        $query = $this->Md->query("SELECT * FROM metar LEFT JOIN synoptic ON metar.datetime = synoptic.time WHERE metar.day = '" . date('Y-m-d') . "'");
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('vertical-form', $data);
    }

    public function full() {

        $query = $this->Md->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        // get($field,$value,$table)
        //$query = $this->Md->get('day', date('Y-m-d'), 'metar');
        // $query = $this->Md->get('day','2015-07-8','metar'); 
        $query = $this->Md->query("SELECT * FROM metar LEFT JOIN synoptic ON metar.datetime = synoptic.time WHERE metar.day = '" . date('Y-m-d') . "'");
        if ($query) {
            $data['metas'] = $query;
        } else {
            $data['metas'] = array();
        }

        $this->load->view('complete-form', $data);
    }

    public function save() {

        $this->load->helper(array('form', 'url'));
        $time = $this->input->post('time');
        $date = $this->input->post('datenow');
        $station = $this->input->post('station');
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

        $get_result = $this->Md->check_sql('SELECT * FROM synoptic where station ="' . $station . '" AND date ="' . $date . '" AND time = "' . $time . '"');
        if (!$get_result) {

            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                  This data for this date and time ' . $time . ' has already been submitted	</strong>									
						</div>');
            redirect('/synoptic', 'refresh');
        }

        if ($station != "") {

            $synoptic = array('approved' => 'F', 'station' => $station, 'date' => $date, 'time' => $time, 'ir' => $ir, 'ix' => $ix, 'h' => $h, 'www' => $www, 'vv' => $vv, 'n' => $n, 'dd' => $dd, 'ff' => $ff, 't' => $t, 'td' => $td, 'Po' => $Po, 'gisis' => $gisis, 'hhh' => $hhh, 'rrr' => $rrr, 'tr' => $tr, 'present' => $present, 'past' => $past, 'nh' => $nh, 'cl' => $cl, 'cm' => $cm, 'ch' => $ch, 'Tq' => $Tq, 'Ro' => $Ro, 'R1' => $R1, 'Tx' => $Tx, 'Tm' => $Tm, 'EE' => $EE, 'E' => $E, 'sss' => $sss, 'pchange' => $pchange, 'p24' => $p24, 'rr' => $rr, 'tr1' => $tr1, 'ns' => $ns, 'c' => $c, 'hs' => $hs, 'ns1' => $ns1, 'c1' => $c1, 'hs1' => $hs1, 'ns2' => $ns2, 'c2' => $c2, 'hs2' => $hs2, 'supplementary' => $supplementary, 'wb' => $wb, 'rh' => $rh, 'vap' => $vap, 'user' => $user, 'submitted' => date('H:i:s'));
            $this->Md->save($synoptic, 'synoptic');

            $this->session->set_flashdata('msg', '<div class="alert alert-success">
                                                   
                                                <strong>
                                                   data submitted successfully</strong>									
						</div>');

            redirect('/synoptic', 'refresh');
            return;
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                  Please select a station	</strong>									
						</div>');
            redirect('/synoptic', 'refresh');
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

}
