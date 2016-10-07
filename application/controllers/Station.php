<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Station extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('helper');
    }

    public function index() {
        $query = $this->Md->show('station');
        //  var_dump($query);
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }

        $this->load->view('station', $data);
    }

    public function add() {
        $query = $this->Md->show('station');
        //  var_dump($query);
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }

        $this->load->view('add-station', $data);
    }
     public function api() {

        $station = urldecode($this->uri->segment(3));
        $number = urldecode($this->uri->segment(4));
       

        if ($station != "") {
            $result = $this->Md->query("SELECT * FROM station WHERE name='" . $station . "' AND number = '$number'");

            if ($result) {
                echo json_encode($result);
                return;
            }
        }
    }

    public function view() {
        $query = $this->Md->show('station');
        //  var_dump($query);
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }

        $this->load->view('view-station', $data);
    }

    public function save() {

        $this->load->helper(array('form', 'url'));

        $number = $this->input->post('number');
        $name = $this->input->post('name');
        $location = $this->input->post('location');
        $country = $this->input->post('country');
        $region = $this->input->post('region');
        $code = $this->input->post('code');
        $city = $this->input->post('city');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $altitude = $this->input->post('altitude');
        $opened = $this->input->post('opened');
        $closed = $this->input->post('closed');
        $status = $this->input->post('status');
        $type = $this->input->post('type');
        $created = $this->input->post('created');


        $get_result = $this->Md->check($name, 'name', 'station');

        if (!$get_result) {
            $this->session->set_flashdata('msg', 'this station is already registered');
            redirect('/station', 'refresh');
        }
        $get_result = $this->Md->check($code, 'code', 'station');
        if (!$get_result) {
            $this->session->set_flashdata('msg', 'this station code is already in use');
            redirect('/station', 'refresh');
        }
        if ($code != "") {
            $station = array('number' => $number, 'name' => $name, 'location' => $location, 'country' => $country, 'region' => $region, 'code' => $code, 'city' => $city, 'latitude' => $latitude, 'longitude' => $longitude, 'altitude' => $altitude, 'opened' => $opened, 'closed' => $closed, 'status' => 'active', 'type' => $type, 'created' => date('Y-m-d'));
            $this->Md->save($station, 'station');
            $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'save', 'details' => $name . ' station added ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
            $this->Md->save($log, 'logs');
            redirect('/station', 'refresh');
            return;
        } else {
            $this->session->set_flashdata('msg', '<span style="color:#f00">Missing information station</span>');
            redirect('/station', 'refresh');
        }
    }

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
        $query = $this->Md->show('station');

        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }

        $query = $this->Md->get('id', $id, 'station');

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

        $this->load->view('station', $data);
    }

    public function update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $location = $this->input->post('location');
        $code = $this->input->post('code');
        $latitude = $this->input->post('lat');
        $longitude = $this->input->post('lng');
        $altitude = $this->input->post('alt');
          $type = $this->input->post('type');
        //   $number = $this->input->post('number');
        //  $country = $this->input->post('country');
        // $region = $this->input->post('region');
        //  $city = $this->input->post('city');
        //  $opened = $this->input->post('opened');
        //  $closed = $this->input->post('closed');
        //   $status = $this->input->post('status');      
        //    $created = $this->input->post('created');

        $station = array('name' => $name, 'location' => $location, 'code' => $code, 'latitude' => $latitude, 'longitude' => $longitude, 'altitude' => $altitude, 'type' => $type);
        // update($id, $data,$table)
        $this->Md->update($id, $station, 'station');
        $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'update', 'details' => $name . ' station updated', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
        $this->Md->save($log, 'logs');
        $this->session->set_flashdata('msg', 'The ' . $name . ' has been updated');
        //  redirect('/station', 'refresh');
        return;
    }

    public function delete() {

        $id = $this->uri->segment(3);

        $query = $this->Md->delete($id, 'station');
        $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'delete', 'details' => ' station deletion', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
        $this->Md->save($log, 'logs');

        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted Fields</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/Role', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/Role', 'refresh');
        }
    }

    public function check($station) {
        $this->load->helper(array('form', 'url'));

        $station = ($station == "") ? $this->input->post('name') : $role;
        //check($value,$field,$table)
        $get_result = $this->Md->check($role, 'name', 'station');

        if (!$get_result)
            echo '<span style="color:#f00"> name already in use. </span>';
        else
            echo '<span style="color:#0c0"> name not in use</span>';
    }

    public function check_email() {
        $this->load->helper(array('form', 'url'));

        $email = $this->input->post('email');
        //check($value,$field,$table)
        $get_result = $this->Md->check($role, 'email', 'station');

        if (!$get_result)
            echo '<span style="color:#f00">email already in use. </span>';
        else
            echo '<span style="color:#0c0">email not in use</span>';
    }

    function get() {

        $station = $this->input->post('station');
        //  $station ='Makerere';
        // header('Content-Type: application/x-json; charset=utf-8');
        //($where,$data,$table)
        echo json_encode($this->Md->get('name', $station, 'station'));
    }

}
