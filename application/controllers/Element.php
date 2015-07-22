<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Element extends CI_Controller {

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
       
        $this->load->view('element', $data);
    }

    public function save() {
       
        $this->load->helper(array('form', 'url'));       
       
        $name = $this->input->post('name');
        $abbrev = $this->input->post('abbrev');
        $type = $this->input->post('type');
        $units = $this->input->post('units');
        $scale = $this->input->post('scale');
        $limits = $this->input->post('limits');
        $description = $this->input->post('description');    
       
       
        $get_result = $this->MD->check($name,'name','element');
        
        if(!$get_result){
            $this->session->set_flashdata('msg', 'this element is already registered');
              redirect('/element', 'refresh');
        }
    
        if ($name!=""){
        $element = array('name' => $name, 'abbrev' => $abbrev,'type' => $type, 'units' => $units, 'scale' => $scale, 'limits' => $limits, 'description'=>$description,'submitted' => date('Y-m-d'));
        $this->MD->save($element, 'element');
        redirect('/element', 'refresh');
        return;
        }
        else{
              $this->session->set_flashdata('msg', 'Please input the name of the element');
              redirect('/element', 'refresh');            
        }
    }
    public  function edit(){
        $this->load->helper(array('form', 'url'));
         $id = $this->uri->segment(3);
         $query = $this->MD->show('element');
 
        if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
        
          $query = $this->MD->get('id',$id,'element');
    
        if ($query) {
             $data['elementID'] = $query;
        } else {
            $data['elementID'] = array();
        }
          

        $this->load->view('element', $data);
        
    }
     public  function update(){
        
        $this->load->helper(array('form', 'url'));
       $name = $this->input->post('name');
        $abbrev = $this->input->post('abbrev');
        $type = $this->input->post('type');
        $units = $this->input->post('units');
        $scale = $this->input->post('scale');
        $limits = $this->input->post('limits');
        $description = $this->input->post('description'); 
          $id = $this->input->post('id');
        
       
         
        $element = array('name' => $name, 'abbrev' => $abbrev,'type' => $type, 'units' => $units, 'scale' => $scale, 'limits' => $limits, 'description'=>$description,'submitted' => date('Y-m-d'));
           // update($id, $data,$table)
        $this->MD->update($id,$element, 'element');
           $this->session->set_flashdata('msg', 'The '.$name.' has been updated');        
       redirect('/element', 'refresh');
                   return;
        
    }
    public function delete(){
        
                    $id = $this->uri->segment(3);
                 
                    $query = $this->MD->delete($id,'element');
                 
                    if ($this->db->affected_rows() > 0) {
                        $msg='<span style="color:red">Information Deleted Fields</span>';
                         $this->session->set_flashdata('msg', $msg); 
                             redirect('/element', 'refresh');
                    } else {
                       $msg='<span style="color:red">action failed</span>';
                        $this->session->set_flashdata('msg', $msg); 
                             redirect('/element', 'refresh');
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
    
     function get(){
         
            $station = $this->input->post('station');
           //  $station ='Makerere';
           // header('Content-Type: application/x-json; charset=utf-8');
            //($where,$data,$table)
            echo json_encode($this->MD->get('name',$station,'station'));
        }
    
    
    
}
