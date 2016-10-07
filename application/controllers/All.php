<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->library('helper');
    }

    public function index() {

        $query = $this->Md->show('user');
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
        $this->load->view('user', $data);
    }

    public function user() {

        $station = urldecode($this->uri->segment(3));

        $result = $this->Md->query("SELECT * FROM user ");

//        $all = array();
//
//        foreach ($result as $res) {
//            $resv = new stdClass();
//            $resv->station = $res->station;
//            $resv->name = $res->name;
//            $resv->email = $res->email;
//            $resv->contact = $res->contact;
//            $resv->role = $res->role;
//            $resv->password = $this->encrypt->decode($res->password, $res->email);
//
//
//            array_push($all, $resv);
//        }
        echo json_encode($result);

        return;
    }

    public function station() {

        $result = $this->Md->query("SELECT * FROM station ");
        echo json_encode($result);
        return;
    }

    public function metar() {
        
        $result = $this->Md->query("SELECT * FROM metar");
        if ($result) {
            echo json_encode($result);
            return;
        }
    }

    public function synoptic() {
        
        $result = $this->Md->query("SELECT * FROM synoptic");
        if ($result) {
            echo json_encode($result);
            return;
        }
    }

    public function daily() {

        $result = $this->Md->query("SELECT * FROM daily ");
        if ($result) {
            echo json_encode($result);
            return;
        }
    }

    public function rain() {

        $result = $this->Md->query("SELECT * FROM rain ");
        if ($result) {
            echo json_encode($result);
            return;
        }
    }

    public function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
