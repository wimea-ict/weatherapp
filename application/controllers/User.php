<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->library('helper');
    }

    public function index() {
        $query = $this->Md->show('user');
      //  var_dump($query);
        if ($query) {
             $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $query = $this->Md->show('role'); 
        if ($query) {
             $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }
         $query = $this->Md->show('station'); 
        if ($query) {
             $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        $this->load->view('user', $data);
    }

    public function save() {
        $this->load->helper(array('form', 'url'));
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
        $password= $this->input->post('password');
        $role = $this->input->post('role');
        $contact2 = $this->input->post('contact2');
        $station = $this->input->post('station');
        $page = $this->input->post('front');
        
        $password =$password;
        $key =$email;

        $password = $this->encrypt->encode($password, $key);
        /**$msg = 'My secret message';
            $key = 'super-secret-key';
            $encrypted_string = $this->encrypt->decode($msg, $key);**/
       
        $get_result = $this->Md->check($name,'name','user');
        if(!$get_result){
            $this->session->set_flashdata('msg', 'this name is already in use');
              redirect('/User', 'refresh');
        }
         $get_result = $this->Md->check($email,'email','user');
        if(!$get_result){
            $this->session->set_flashdata('msg', 'this name is already in use');
              redirect('/user', 'refresh');
        }
        if ($email!=""){
        $user = array('email' => $email,'name' => $name,'station'=>$station, 'contact' => $contact,'contact2' => $contact2, 'password' => $password, 'role' => $role, 'active' => 'false', 'create' => date('Y-m-d'));
        $this->Md->save($user, 'user');
          $log = array('user' => $this->session -> userdata('username'),'userid'=>$this->session -> userdata('id'),'action' => 'save','details'=>  $name.' user information save ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
           $this->Md->save($log, 'logs'); 
          if ($page==""){
            redirect('/user', 'refresh');
            return;
            }else{
                redirect('/welcome', 'refresh');
            return;

            }
        }
        else{
              $this->session->set_flashdata('msg', 'Please input username  ');
              redirect('/user', 'refresh');            
        }
    }
    public  function edit(){
        $this->load->helper(array('form', 'url'));
         $id = $this->uri->segment(3);
         $query = $this->Md->show('user');
 
        if ($query) {
             $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        
          $query = $this->Md->get('id',$id,'user');
    
        if ($query) {
             $data['userID'] = $query;
        } else {
            $data['userID'] = array();
        }
          $query = $this->Md->show('role'); 
        if ($query) {
             $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }
         $query = $this->Md->show('station'); 
        if ($query) {
             $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }

        $this->load->view('user', $data);
        
    }
     public  function update(){
        
        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('userID');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
         $contact2 = $this->input->post('contact2');
        $password= $this->input->post('password');
        $role = $this->input->post('role');
        $contact2 = $this->input->post('contact2');
        $station = $this->input->post('station');
        
        if($password!=""){
            $password =$password;
            $key = 'user';

            $password = $this->encrypt->encode($msg, $key);
            $user = array( 'password' => $password,'create' => date('Y-m-d'));     
            $this->Md->update($id,$user, 'user');
             $log = array('user' => $this->session -> userdata('username'),'userid'=>$this->session -> userdata('id'),'upate' => 'save','details'=>  $name.' user password updated ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
           $this->Md->save($log, 'logs');
            
        }
         
        $user = array('email' => $email,'name' => $name, 'contact' => $contact,'contact2' => $contact2,'role' => $role, 'active' => 'true','station'=>$station,'create' => date('Y-m-d'));
      // update($id, $data,$table)
        $this->Md->update($id,$user, 'user');
        
         $log = array('user' => $this->session -> userdata('username'),'userid'=>$this->session -> userdata('id'),'action' => 'update','details'=>  $name.' user information updated', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
           $this->Md->save($log, 'logs');
           $this->session->set_flashdata('msg', 'The '.$name.' has been updated');        
       redirect('/user', 'refresh');
                   return;
        
    }
    public function delete(){
        
                    $id = $this->uri->segment(3);
                 
                    $query = $this->Md->delete($id,'user');
                    
                     $log = array('user' => $this->session -> userdata('username'),'userid'=>$this->session -> userdata('id'),'action' => 'delete','details'=>' user information deleted', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'');
                      $this->Md->save($log, 'logs');
                 
                    if ($this->db->affected_rows() > 0) {
                        $msg='<span style="color:red">Information Deleted Fields</span>';
                         $this->session->set_flashdata('msg', $msg); 
                             redirect('/user', 'refresh');
                    } else {
                       $msg='<span style="color:red">action failed</span>';
                        $this->session->set_flashdata('msg', $msg); 
                             redirect('/user', 'refresh');
                    }              
        
         }

      public function check($user) {
        $this->load->helper(array('form', 'url'));
     
        $user = ($user == "") ? $this->input->post('name') :$user;
        //check($value,$field,$table)
        $get_result = $this->Md->check($user,'name','user');

        if (!$get_result)
            echo '<span style="color:#f00"> name already in use. </span>';
        else
            echo '<span style="color:#0c0"> name not in use</span>';
    }
     public function check_email() {
        $this->load->helper(array('form', 'url'));
     
        $email = $this->input->post('email');
        //check($value,$field,$table)
        $get_result = $this->Md->check($email,'email','user');

        if (!$get_result)
            echo '<span style="color:#f00">email already in use. </span>';
        else
            echo '<span style="color:#0c0">email not in use</span>';
    }
}
