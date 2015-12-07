<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Apimetar extends REST_Controller {

    function __construct() {

        parent::__construct();
       
        $this->load->model('Md');
        
    }

    public function metar_get() {         
       
         if(!$this->get('station'))
        {
            $this->response(NULL, 400);
        }
        //get($field, $value, $table);
        $stations = $this->Md->get('name', $this->get('station'), 'station');
         foreach ($stations as $loop) {                    
                         $code = $loop->code;
         }
        $user = $this->Md->get('station', $code, 'metar');
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
     

    public function metar_post() {
        
     if (!$this->post('station')) {
            echo 'F';           
            
       } else {
           
        $type = $this->input->post('type');
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
        $wind_info = explode(' ', $wind);
        $wind_direction = $wind_info[0];
        $wind_speed = $wind_info[1];
        $wind_unit = $wind_info[2];        
         $user = $this->input->post('user');
        
        if ($station == "") {
            echo 'F';
            return;
        }
        //echo $date;      
        $get_result = $this->Md->check($datetime, 'datetime', 'metar');
        if (!$get_result) {
                 echo 'T' ;
        }        
        else {
            $metar = array('station' => $station, 'type' => $type, 'datetime' => $datetime, 'timezone' => 'GMT', 'wind_direction' => $wind_direction, 'wind_speed' => $wind_speed, 'unit' => $wind_unit, 'visibility' => $visibility, 'present_weather' => $present, 'cloud' => $cloud, 'air_temperature' => $air_temperature, 'humidity' => $humidity, 'dew_temperature' => $dew_temperature, 'wet_bulb' => $wet_bulb, 'station_pressure_hpa' => $station_pressure, 'sea_pressure_hpa' => $sea_pressure, 'recent_weather' => $recent_weather, 'submitted' => date('Y-m-d H:m:s'), 'user' => $user, 'day' => $day);
            $this->Md->save($metar, 'metar');
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
