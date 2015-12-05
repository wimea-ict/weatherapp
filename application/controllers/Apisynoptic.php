<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Apisynoptic extends REST_Controller {

    function __construct() {

        parent::__construct();
       
        $this->load->model('Md');
        
    }

    public function synoptic_get() {         
       
         if(!$this->get('station'))
        {
            $this->response(NULL, 400);
        }
       
        $user = $this->Md->get('station', $this->get('station'), 'synoptic');
      //  var_dump($user);
        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
     

    public function tasks_post() {
        if (!$this->post('actual')) {
            $this->response(array('error' => 'Missing post data: title'), 400);
        } else {
            $data = array(
                'actual' => $this->post('actual'),
                 'min' => $this->post('min'),
                 'max' => $this->post('max')
            );
        }
       // $this->db->insert('task', $data);
         $this->Md->save($data, 'daily');
        if ($this->db->insert_id() > 0) {
            $message = array('id' => $this->db->insert_id(), 'actual' => $this->post('actual'));
            $this->response($message, 200);
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
          $this->Md->update($this->put('id'),$data, 'daily');
        $message = array('success' => $this->put('actual') . ' Updated!');
        $this->response($message, 200);
    }

    public function tasks_delete($id = NULL) {
        if ($id == NULL) {
            $message = array('error' => 'Missing delete data: id');
            $this->response($message, 400);
        } else {
           $this->Md->delete($id,'daily');
            $message = array('id' => $id, 'message' => 'DELETED!');
            $this->response($message, 200);
        }
    }

}
