<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Apicheck extends REST_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('Md');
    }

    public function check_get() {

        if (!$this->get('station')) {
            $this->response(NULL, 400);
        }

        $user = $this->Md->get('name', $this->get('station'), 'station');
        //  var_dump($user);
        if ($user) {
            $this->response($user, 200); // 200 being the HTTP response code
        } else {
            $this->response(NULL, 404);
        }
    }

    public function check_post() {

        if (!$this->post('station')) {
            echo 'no station input';
        } else {
            $station = $this->input->post('station');
            $get_result = $this->Md->check($station, 'name', 'station');

            if (!$get_result) {
                //echo 'T';
                
                  $query2 = $this->Md->query("select * from station WHERE name='" . $station . "'");
                $results = $query2;
                $resv = new stdClass();
                foreach ($results as $res) {
                    $resv->number = $res->number;
                    $resv->name = $res->name;
                    $resv->location = $res->location;
                    $resv->country = $res->country;
                    $resv->code = $res->code;
                    $resv->city = $res->city;
                    $resv->latitude =$res->latitude;
                    $resv->longitude = $res->longitude;
                    $resv->altitude = $res->altitude;
                    $resv->opened = $res->opened;
                    $resv->closed = $res->closed;
                    $resv->state = $res->status;
                     $resv->state = "T";
                    $resv->type = $res->type;
                    $resv->created = $res->created;
                }
                echo json_encode($resv);
                
            } else {
                
                   echo 'F';
              
            }
        }
    }

    public function check_put() {
        if (!$this->put('actual')) {
            $this->response(array('error' => 'Actual rainfall is required'), 400);
        }

        $data = array(
            'actual' => $this->put('actual'),
            'max' => $this->put('max'),
            'min' => $this->put('min')
        );
        //  $this->task_model->update_task($this->put('id'), $data);
        $this->Md->update($this->put('id'), $data, 'daily');
        $message = array('success' => $this->put('actual') . ' Updated!');
        $this->response($message, 200);
    }

    public function check_delete($id = NULL) {
        if ($id == NULL) {
            $message = array('error' => 'Missing delete data: id');
            $this->response($message, 400);
        } else {
            $this->Md->delete($id, 'daily');
            $message = array('id' => $id, 'message' => 'DELETED!');
            $this->response($message, 200);
        }
    }

}
