<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Station extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('MD');
        $this->load->library('session');
       
    }

    public function index() {
        $query = $this->MD->show('station');
      //  var_dump($query);
        if ($query) {
             $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
       
        $this->load->view('station', $data);
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
       
       
        $get_result = $this->MD->check($name,'name','station');
        
        if(!$get_result){
            $this->session->set_flashdata('msg', 'this station is already registered');
              redirect('/station', 'refresh');
        }
         $get_result = $this->MD->check($code,'code','station');
        if(!$get_result){
            $this->session->set_flashdata('msg', 'this station code is already in use');
              redirect('/station', 'refresh');
        }
        if ($code!=""){
        $station = array('number' => $number,'name' => $name, 'location' => $location,'country' => $country, 'region' => $region, 'code' => $code, 'city' => $city, 'latitude'=>$latitude,'longitude'=>$longitude,'altitude'=>$altitude,'opened'=>$opened,'closed'=>$closed,'status'=>'active','type'=>$type,'created' => date('Y-m-d'));
        $this->MD->save($station, 'station');
         $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'save','details'=>  $name.' station added ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
           $this->MD->save($log, 'logs');
        redirect('/station', 'refresh');
        return;
        }
        else{
              $this->session->set_flashdata('msg', 'Please input the name of the ');
              redirect('/station', 'refresh');            
        }
    }
    public  function edit(){
        $this->load->helper(array('form', 'url'));
         $id = $this->uri->segment(3);
         $query = $this->MD->show('station');
 
        if ($query) {
             $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        
          $query = $this->MD->get('id',$id,'station');
    
        if ($query) {
             $data['userID'] = $query;
        } else {
            $data['userID'] = array();
        }
          $query = $this->MD->show('role'); 
        if ($query) {
             $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }

        $this->load->view('station', $data);
        
    }
     public  function update(){
        
        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('stationID');
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
        
       
         
        $station = array('number' => $number,'name' => $name, 'location' => $location,'country' => $country, 'region' => $region, 'code' => $code, 'city' => $city, 'latitude'=>$latitude,'longitude'=>$longitude,'altitude'=>$altitude,'opened'=>$opened,'closed'=>$closed,'status'=>'active','type'=>$type,'created' => date('Y-m-d'));
        // update($id, $data,$table)
        $this->MD->update($id,$station, 'station');
         $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'update','details'=>  $name.' station updated', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
           $this->MD->save($log, 'logs');
           $this->session->set_flashdata('msg', 'The '.$name.' has been updated');        
       redirect('/station', 'refresh');
                   return;
        
    }
    public function delete(){
        
                    $id = $this->uri->segment(3);
                 
                    $query = $this->MD->delete($id,'station');
                     $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'delete','details'=> ' station deletion', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
                     $this->MD->save($log, 'logs');
                 
                    if ($this->db->affected_rows() > 0) {
                        $msg='<span style="color:red">Information Deleted Fields</span>';
                         $this->session->set_flashdata('msg', $msg); 
                             redirect('/Role', 'refresh');
                    } else {
                       $msg='<span style="color:red">action failed</span>';
                        $this->session->set_flashdata('msg', $msg); 
                             redirect('/Role', 'refresh');
                    }              
        
         }

      public function check($station) {
        $this->load->helper(array('form', 'url'));
     
        $station = ($station == "") ? $this->input->post('name') :$role;
        //check($value,$field,$table)
        $get_result = $this->MD->check($role,'name','station');

        if (!$get_result)
            echo '<span style="color:#f00"> name already in use. </span>';
        else
            echo '<span style="color:#0c0"> name not in use</span>';
    }
     public function check_email() {
        $this->load->helper(array('form', 'url'));
     
        $email = $this->input->post('email');
        //check($value,$field,$table)
        $get_result = $this->MD->check($role,'email','station');

        if (!$get_result)
            echo '<span style="color:#f00">email already in use. </span>';
        else
            echo '<span style="color:#0c0">email not in use</span>';
    }
     function get(){
         
            $station = $this->input->post('station');
           //  $station ='Makerere';
           // header('Content-Type: application/x-json; charset=utf-8');
            //($where,$data,$table)
            echo json_encode($this->MD->get('name',$station,'station'));
        }
    
    
    
}
