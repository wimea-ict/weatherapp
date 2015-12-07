<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Apistation extends REST_Controller {

    function __construct() {

        parent::__construct();
       
        $this->load->model('Md');
        
    }

    public function station_get() {         
       
         if(!$this->get('station'))
        {
            $this->response(NULL, 400);
        }
        
        $user = $this->Md->get('name', $this->get('station'), 'station');
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

    public function station_post() {
        
       if (!$this->post('date')) {
            echo 'F';           
            
       } else {
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
            echo 'F';
            return;
        }
        //echo $date;
        $get_result = $this->Md->check($date, 'date', 'daily');
        // var_dump($get_result);
        if (!$get_result) {
            echo 'T' ;
        } else {

            $daily = array('station' => $station, 'date' => $date, 'max' => $max, 'min' => $min, 'actual' => $actual, 'anemometer' => $anemometer, 'wind' => $wind, 'maxi' => $maxi, 'user' => $user, 'submitted' => $submitted, 'approved' => $approved, 'rain' => $rain, 'thunder' => $thunder, 'fog' => $fog, 'haze' => $haze, 'storm' => $storm, 'quake' => $quake, 'height' => $height, 'duration' => $duration, 'sunshine' => $sunshine, 'radiationtype' => $radiationtype, 'radiation' => $radiation, 'evaptype1' => $evaptype1, 'evap1' => $evap1, 'evaptype2' => $evaptype2, 'evap2' => $evap2);
            $this->Md->save($daily, 'daily');
            $log = array('user' => $user, 'userid' => $user, 'action' => 'saved from synchronisation', 'details' => $station. 'submit of weather information from client ', 'date' => date('Y-m-d H:i:s'), 'ip' => "", 'url' => '');
            $this->Md->save($log, 'logs');
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
