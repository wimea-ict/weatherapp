<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
         $this->load->library('helper');
    }

    public function index() {
        
        $query = $this->Md->show('archive');
      //  var_dump($query);
        if ($query) {
             $data['files'] = $query;
        } else {
            $data['files'] = array();
        }
         $query = $this->Md->show('element');
         if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
         $query = $this->Md->show('station'); 
        if ($query) {
             $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        $query = $this->Md->show('instrument'); 
        if ($query) {
             $data['instruments'] = $query;
        } else {
            $data['instruments'] = array();
        }
        
       
        $this->load->view('archive', $data);
      }
      public function image() {  
          
          $data['file'] = $this->uri->segment(3);
          
           $this->load->view('view-image', $data);
          
      }
    
    
     public function add_archive() {
        
        $query = $this->Md->show('archive');
      //  var_dump($query);
        if ($query) {
             $data['files'] = $query;
        } else {
            $data['files'] = array();
        }
         $query = $this->Md->show('element');
         if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
         $query = $this->Md->show('station'); 
        if ($query) {
             $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        $query = $this->Md->show('instrument'); 
        if ($query) {
             $data['instruments'] = $query;
        } else {
            $data['instruments'] = array();
        }
        
       
        $this->load->view('add-archive', $data);
    }

    public function save() {
       
        $this->load->helper(array('form', 'url')); 
       
         $file_element_name = 'userfile';
         
         
         
        $config['upload_path'] = 'archive/';
         // $config['upload_path'] = '/uploads/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;
             
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file_element_name))
        {
            $status = 'error';
         echo   $msg = $this->upload->display_errors('', '');
        }
        else
        {
       
        $data = $this->upload->data();            
        $form = $this->input->post('form');
        $name = $this->input->post('name');
        $station = $this->input->post('station');
        $period = $this->input->post('date-range-picker');
        $description = $this->input->post('description'); 
        $submitted = date('Y-m-d');  
        $file = $data['file_name'];
        
        $archive = array('file' => $file, 'name' => $name, 'station' => $station,'form' => $form, 'period' => $period,'description'=>$description,'submitted' => date('Y-m-d H:i:s'));
        $file_id= $this->Md->save($archive, 'archive');
        
         $log = array('user' => $this->session -> userdata('username'),'userid'=>$this->session -> userdata('id'),'action' => 'save','details'=>  $name.' file  upload', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
         $this->Md->save($log, 'logs');
       
            if($file_id)
            {
                 $this->session->set_flashdata('msg', 'Please input the name of the element');
         redirect('/archive', 'refresh');
               
            }
            else
            {
                unlink($data['full_path']);
                $this->session->set_flashdata('msg', 'Error');
         redirect('/archive', 'refresh');
            }
        }
        @unlink($_FILES[$file_element_name]);
            
        
    }
    public  function edit(){
        $this->load->helper(array('form', 'url'));
         $id = $this->uri->segment(3);
           $query = $this->Md->show('element');
      //  var_dump($query);
        if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
         $query = $this->Md->show('element');
         if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
         $query = $this->Md->show('station'); 
        if ($query) {
             $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        $query = $this->Md->show('instrument'); 
        if ($query) {
             $data['instruments'] = $query;
        } else {
            $data['stations'] = array();
        }
       
         $query = $this->Md->show('instrument');
 
        if ($query) {
             $data['elements'] = $query;
        } else {
            $data['elements'] = array();
        }
        
          $query = $this->Md->get('id',$id,'instrument');
    
        if ($query) {
             $data['instrumentID'] = $query;
        } else {
            $data['instrumentID'] = array();          

        }

        $this->load->view('archive', $data);
        
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
        $this->Md->update($id,$instrument, 'instrument');
           $this->session->set_flashdata('msg', 'The '.$name.' has been updated');        
       redirect('/Archive', 'refresh');
                   return;
        
    }
    public function delete(){
        
                    $id = $this->uri->segment(3);
                 
                    $query = $this->Md->delete($id,'archive');
                 
                    if ($this->db->affected_rows() > 0) {
                        $msg='<span style="color:red">Information Deleted Fields</span>';
                         $this->session->set_flashdata('msg', $msg); 
                             redirect('/archive', 'refresh');
                    } else {
                       $msg='<span style="color:red">action failed</span>';
                        $this->session->set_flashdata('msg', $msg); 
                             redirect('/archive', 'refresh');
                    }              
        
         }
         function get(){
         
            $station = $this->input->post('archive');
           //  $station ='Makerere';
           // header('Content-Type: application/x-json; charset=utf-8');
            //($where,$data,$table)
            echo json_encode($this->Md->get('name',$station,'archive'));
        }
    
    
    
}
