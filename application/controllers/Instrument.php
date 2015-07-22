<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Instrument extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('MD');
        $this->load->library('session');
       
    }

    public function index() {
        $query = $this->MD->show('element');
      //  var_dump($query);
        if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
         $query = $this->MD->show('element');
         if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
         $query = $this->MD->show('station'); 
        if ($query) {
             $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        $query = $this->MD->show('instrument'); 
        if ($query) {
             $data['instruments'] = $query;
        } else {
            $data['instruments'] = array();
        }
        
       
        $this->load->view('instrument', $data);
    }

    public function save() {
       
        $this->load->helper(array('form', 'url'));       
       
        $name = $this->input->post('name');
        $station = $this->input->post('station');
        $element = $this->input->post('element');
         $dateRegister = $this->input->post('date-range-picker');
        $dateExpire = date('Y-m-d');
        $code = $this->input->post('code');
        $manufacturer = $this->input->post('manufacturer');
        $description = $this->input->post('description'); 
         $submitted = date('Y-m-d');      
       
            
        if ($name!=""){
        $instrument = array('name' => $name, 'station' => $station,'element' => $element, 'dateRegister' => $dateRegister, 'dateExpire' => $dateExpire, 'code' => $code,'manufacturer'=>$manufacturer, 'description'=>$description,'submitted' => date('Y-m-d H:i:s'));
        $this->MD->save($instrument, 'instrument');
        
         $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'save','details'=> 'instrument information saved ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
        $this->MD->save($log, 'logs'); 
         $this->session->set_flashdata('msg', 'Please input the name of the element');
         redirect('/instrument', 'refresh');
        return;
        }
        else{
              $this->session->set_flashdata('msg', 'Please input the name of the element');
              redirect('/instrument', 'refresh');            
        }
    }
    public  function edit(){
        $this->load->helper(array('form', 'url'));
         $id = $this->uri->segment(3);
           $query = $this->MD->show('element');
      //  var_dump($query);
        if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
         $query = $this->MD->show('element');
         if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
         $query = $this->MD->show('station'); 
        if ($query) {
             $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        $query = $this->MD->show('instrument'); 
        if ($query) {
             $data['instruments'] = $query;
        } else {
            $data['stations'] = array();
        }
       
         $query = $this->MD->show('instrument');
 
        if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
        
          $query = $this->MD->get('id',$id,'instrument');
    
        if ($query) {
             $data['instrumentID'] = $query;
        } else {
            $data['instrumentID'] = array();          

        }

        $this->load->view('instrument', $data);
        
    }
     public  function update(){
        
        $this->load->helper(array('form', 'url'));
        
        $name = $this->input->post('name');
        $station = $this->input->post('station');
        $element = $this->input->post('element');
        $dateRegister = $this->input->post('date-range-picker-u');
        $dateExpire = date('Y-m-d');
        $code = $this->input->post('code');
        $manufacturer = $this->input->post('manufacturer');
        $description = $this->input->post('description'); 
         $submitted = date('Y-m-d'); 
          $id = $this->input->post('id');
        
       $instrument = array('name' => $name, 'station' => $station,'element' => $element, 'dateRegister' => $dateRegister, 'dateExpire' => $dateExpire, 'code' => $code,'manufacturer'=>$manufacturer, 'description'=>$description,'submitted' => date('Y-m-d H:i:s'));
              // update($id, $data,$table)
        $this->MD->update($id,$instrument, 'instrument');
          $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'update','details'=> 'instrument information updated ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
        $this->MD->save($log, 'logs'); 
           $this->session->set_flashdata('msg', 'The '.$name.' has been updated');        
       redirect('/instrument', 'refresh');
                   return;
        
    }
    public function delete(){
        
                    $id = $this->uri->segment(3);
                 
                    $query = $this->MD->delete($id,'instrument');
                 
                    if ($this->db->affected_rows() > 0) {
                        $msg='<span style="color:red">Information Deleted Fields</span>';
                         $this->session->set_flashdata('msg', $msg); 
                             redirect('/instrument', 'refresh');
                    } else {
                       $msg='<span style="color:red">action failed</span>';
                        $this->session->set_flashdata('msg', $msg); 
                             redirect('/instrument', 'refresh');
                    }              
        
         }
         function get(){
         
            $station = $this->input->post('station');
           //  $station ='Makerere';
           // header('Content-Type: application/x-json; charset=utf-8');
            //($where,$data,$table)
            echo json_encode($this->MD->get('name',$station,'station'));
        }
    
    
    
}
