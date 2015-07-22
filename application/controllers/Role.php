<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('MD');
        $this->load->library('session');
    }

    public function index() {
        $query = $this->MD->show('role');
      //  var_dump($query);
        if ($query) {
             $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }

        $this->load->view('roles', $data);
    }

    public function save() {
        $this->load->helper(array('form', 'url'));
        $role = $this->input->post('role');
        $create = $this->input->post('creates');
        $edits = $this->input->post('edits');
        $read = $this->input->post('reads');
        $update = $this->input->post('updates');
        $delete = $this->input->post('deletes');
       
        $get_result = $this->MD->check($role,'name','role');
        if(!$get_result){
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                  Role name already in use	</strong>									
						</div>');
              redirect('/Role', 'refresh');
        }
        if ($role!=""){
        $role = array('name' => $role, 'create' => $create, 'edit' => $edits, 'read' => $read, 'update' => $update, 'delete' => $delete,'status'=>'true');
        $this->MD->save($role, 'role');
          $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'save','details'=> 'role information  ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
        $this->MD->save($log, 'logs'); 
        
        
        redirect('/Role', 'refresh');
        return;
        }
        else{
              $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                 Please input the name of the role</strong>									
						</div>');
              redirect('/Role', 'refresh');            
        }
    }
    public  function edit(){
        $this->load->helper(array('form', 'url'));
         $id = $this->uri->segment(3);
         $query = $this->MD->show('role');
 
        if ($query) {
             $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }
        
          $query = $this->MD->get($id,'role');
    
        if ($query) {
             $data['roleID'] = $query;
        } else {
            $data['roleID'] = array();
        }

        $this->load->view('roles', $data);
        
    }
     public  function update(){
        
        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('roleID');
        $role = $this->input->post('edit_role');
        $create = $this->input->post('creates');
        $edits = $this->input->post('edits');
        $read = $this->input->post('reads');
        $update = $this->input->post('updates');
        $delete = $this->input->post('deletes');
        $roles = array('name' => $role, 'create' => $create, 'edit' => $edits, 'read' => $read, 'update' => $update, 'delete' => $delete);
        $this->MD->update($id,$roles, 'role');
        $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'update','details'=> 'role information update ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
        $this->MD->save($log, 'logs'); 
           $this->session->set_flashdata('msg', '<div class="alert alert-info">
                                                   
                                                <strong>
                                                  This role '.$role.' has already been updated	</strong>									
						</div>');        
       redirect('/Role', 'refresh');
                   return;
        
    }
    public function delete(){
        
                    $id = $this->uri->segment(3);
                 
                    $query = $this->MD->delete($id,'role');
                    $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'delete','details'=> 'role information delete ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
                    $this->MD->save($log, 'logs'); 
                 
                    if ($this->db->affected_rows() > 0) {
                        $msg='<div class="alert alert-info">
                                                   
                                                <strong>
                                                  Information deleted	</strong>									
						</div>';
                         $this->session->set_flashdata('msg', $msg); 
                             redirect('/Role', 'refresh');
                    } else {
                       $msg='<div class="alert alert-error">
                                                   
                                                <strong>
                                                  Action failed</strong>									
						</div>';
                        $this->session->set_flashdata('msg', $msg); 
                             redirect('/Role', 'refresh');
                    }              
        
         }

      public function check($role) {
        $this->load->helper(array('form', 'url'));
     
        $role = ($role == "") ? $this->input->post('role') :$role;
        //check($value,$field,$table)
        $get_result = $this->MD->check($role,'name','role');

        if (!$get_result)
            echo '<div class="alert alert-error">
                                                   
                                                <strong>
                                                  Role name already registered	</strong>									
						</div>';
        else
            echo '';
    }
}
