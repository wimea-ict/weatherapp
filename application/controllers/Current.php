<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Current extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
        $this->load->library('helper');
    }

    /*     * 10m and below* */

    //V_A1	Wind Speed
    //V_A2	Wind
    //P0_T
    //V_AD1	Insolation S1223 sensor
    //V_AD2	Insolation VTB8440 sensor
    //V_AD4	Insolation BPW20R sensor
    //T	Onboard Temperature sensor reading
    //T_SHT2X	Temperature reading from SHT2X sensor
    //AH	The “Dose uSv/h” using formula (AH/T_DEW/5.8)
    //T_DEW	
    //T_HEAT_IDX	
    // RH_SHT2X	Humidity reading from SHT2X sensor
    /** 2m and below* */
    //T_SHT2X	Temperature reading from SHT sensor
    //  RH_SHT2X	Humidity reading from SHT sensor
    //T	Air temperature reading
    //T1	Soil temperature
    //V_A1	Soil moisture
    public function parse($string) {
        $string = "2015-08-04 15:06:31 TZ=CEST UT=1438693591 GW_LAT=60.38370 GW_LON=5.33196 &: TXT=sink E64=fcc23d0000006cef PS=0 T=24.44  V_MCU=3.00 V_IN=4.93  V_A3=277   P_MS5611=1001.32";
        $space_explode = explode(" ", $string);
        $object = array();
        for ($d = 0; $d < count($space_explode); $d++) {
            $explode_item = explode("=", $space_explode[$d]);
            if ($d == 0) {
                $object["day"] = chop($explode_item[0], "]");
            }
            if ($d == 1) {
                $object["times"] = chop($explode_item[0], "]");
            }
            //echo $space_explode[$d];


            if ($explode_item[1] != null) {
                $object[$explode_item[0]] = chop($explode_item[1], "]");
                //chop($str,"World!")
            }
        }

        $object = $object;
        var_dump($object);
        echo($object);
        $this->Md->save($object, 'aws');
    }

    public function index() {
             $this->load->view('current', $data);
    }

    public function delete() {

        $id = $this->uri->segment(3);

        $query = $this->Md->delete($id, 'aws');

        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted Fields</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/aws', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/aws', 'refresh');
        }
    }

    public function post() {

        $this->load->helper(array('form', 'url'));
        $string = $this->input->post('data');
        //  $string = "2015-08-04 15:06:31 TZ=CEST UT=1438693591 GW_LAT=60.38370 GW_LON=5.33196 &: TXT=sink E64=fcc23d0000006cef PS=0 T=24.44  V_MCU=3.00 V_IN=4.93  V_A3=277   P_MS5611=1001.32";
        $space_explode = explode(" ", $string);
        $object = array();
        for ($d = 0; $d < count($space_explode); $d++) {
            $explode_item = explode("=", $space_explode[$d]);
            if ($d == 0) {
                $object["day"] = chop($explode_item[0], "]");
            }
            if ($d == 1) {
                $object["times"] = chop($explode_item[0], "]");
            }
            if ($explode_item[1] != null) {
                $object[$explode_item[0]] = chop($explode_item[1], "]");
            }
        }

        $object = $object;
        var_dump($object);
        echo($object);
        $this->Md->save($object, 'aws');
    }

    public function listener() {

        $this->load->helper(array('form', 'url'));
        $json = $this->input->post('information');
        if ($json == "") {
            echo "NO INFORMATION SENT THROUGH";
        } else {
            $object = json_decode($json);

            // print_r($object);

            $this->Md->save($object, 'aws');
            echo "saved";
        }
    }

    public function get() {
        $this->load->helper(array('form', 'url'));

        $string = $this->uri->segment(3);

        //  $string = "2015-08-04 15:06:31 TZ=CEST UT=1438693591 GW_LAT=60.38370 GW_LON=5.33196 &: TXT=sink E64=fcc23d0000006cef PS=0 T=24.44  V_MCU=3.00 V_IN=4.93  V_A3=277   P_MS5611=1001.32";
        $space_explode = explode(" ", $string);
        $object = array();
        for ($d = 0; $d < count($space_explode); $d++) {
            $explode_item = explode("=", $space_explode[$d]);
            if ($d == 0) {
                $object["day"] = chop($explode_item[0], "]");
            }
            if ($d == 1) {
                $object["times"] = chop($explode_item[0], "]");
            }
            if ($explode_item[1] != null) {
                $object[$explode_item[0]] = chop($explode_item[1], "]");
            }
        }

        $object = $object;
        var_dump($object);
        echo($object);
        $this->Md->save($object, 'aws');
    }

}
