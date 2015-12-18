<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Apiuser extends REST_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('Md');
    }

    public function user_get() {

        if (!$this->get('station')) {
            $this->response(NULL, 400);
        }

        if ($this->get('station') == "centers") {
            $user = $this->Md->query("select * from user WHERE role='Data'");               
            if ($user) {
                $this->response($user, 200); // 200 being the HTTP response code
            }
        }

        $user = $this->Md->get('station', $this->get('station'), 'user');

        if ($user) {
            $this->response($user, 200); // 200 being the HTTP response code
        } else {
            $this->response(NULL, 404);
        }
    }

    public function user_post() {

        if (!$this->post('station')) {
            echo 'F';
        } else {
            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $contact = $this->input->post('contact');
            $password = $this->input->post('password');
            $role = $this->input->post('role');
            $contact2 = $this->input->post('contact2');
            $station = $this->input->post('station');
            $page = $this->input->post('front');

            $password = $password;
            $key = $email;

            $password = $this->encrypt->encode($password, $key);
            /*             * $msg = 'My secret message';
              $key = 'super-secret-key';
              $encrypted_string = $this->encrypt->decode($msg, $key);* */

            $get_result = $this->Md->check($name, 'name', 'user');
            if (!$get_result) {
                echo 'T';
            }
            $get_result = $this->Md->check($email, 'email', 'user');
            if (!$get_result) {
                echo 'T';
            }
            $get_result = $this->Md->check($email, 'email', 'user');
            if (!$get_result) {
                echo 'T';
            } else {
                $user = array('email' => $email, 'name' => $name, 'station' => $station, 'contact' => $contact, 'contact2' => $contact2, 'password' => $password, 'role' => $role, 'active' => 'false', 'create' => date('Y-m-d'));
                $this->Md->save($user, 'user');
                echo 'T';
            }
        }
    }

    public function tasks_put() {
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

    public function tasks_delete($id = NULL) {
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
