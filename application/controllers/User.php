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

    public function api() {

        $station = urldecode($this->uri->segment(3));

        if ($station != "") {
            $result = $this->Md->query("SELECT * FROM user WHERE station='" . $station . "'");
            // $result = $this->Md->show('user');
// var_dump($result);
 echo json_encode($result);
return;
            $all = array();

            foreach ($result as $res) {
                $resv = new stdClass();
                $resv->station = $res->station;
                $resv->name = $res->name;
                $resv->email = $res->email;
                $resv->contact = $res->contact;
                $resv->role = $res->role;
                $resv->password = $this->encrypt->decode($res->password, $res->email);


                array_push($all, $resv);
            }
           // echo json_encode($all);
              $variations =  json_encode($all);
echo $variations;


            return;
        }
    }

    public function add() {

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
        $this->load->view('add-user', $data);
    }

    public function view() {

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
        $this->load->view('view-user', $data);
    }

    public function save() {
        $this->load->helper(array('form', 'url'));
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
        /*         * $msg = 'My secret message';
          $key = 'super-secret-key';
          $encrypted_string = $this->encrypt->decode($msg, $key);* */

        $get_result = $this->Md->check($name, 'name', 'user');
        if (!$get_result) {
            $this->session->set_flashdata('msg', 'this name is already in use');
            redirect('/User', 'refresh');
        }
        $get_result = $this->Md->check($email, 'email', 'user');
        if (!$get_result) {
            $this->session->set_flashdata('msg', 'this name is already in use');
            redirect('/user', 'refresh');
        }
        if ($email != "") {
            $user = array('email' => $email, 'name' => $name, 'station' => $station, 'contact' => $contact, 'contact2' => $contact2, 'password' => md5($this->input->post('password')), 'role' => $role, 'active' => 'false', 'create' => date('Y-m-d'));
            $this->Md->save($user, 'user');
            $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'save', 'details' => $name . ' new user information saved '.$name, 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
            $this->Md->save($log, 'logs');
            if ($page == "") {
                redirect('/user', 'refresh');
                return;
            } else {
                redirect('/welcome', 'refresh');
                return;
            }
        } else {
            $this->session->set_flashdata('msg', 'Please input username  ');
            redirect('/user', 'refresh');
        }
    }

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
        $query = $this->Md->show('user');

        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }

        $query = $this->Md->get('id', $id, 'user');

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

    public function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function reset() {
        $password = $this->generateRandomString();
        $password = "123456";
        $userid = trim($this->input->post('id'));
        // $userid = 'CB501C98-74B4-4480-BFBE-6447CF3BBB18';
        //query_cell($string, $cell)
        $email = $this->Md->query_cell("SELECT * FROM user where id= '" . $userid . "'", 'email');


        if ($email == "") {
            echo 'No email specified';
            return;
        }
        $key = $email;
        $password_new = md5($password) ;//$this->encrypt->encode($password, $key);
        $newer = $password;

        $user = array('password' => $password_new);
        $this->Md->update($userid, $user, 'user');
        echo 'New Password is reset please check mail( SPAM MAIL ESPECIALLY ) ' . $password;

//        $reciever = $this->Md->query_cell("SELECT email FROM users WHERE id ='$userid' ", 'email');
//        $message = $reciever . ' Your Password has been changed to  <b>' . $newer . '</b> for Caseprofessional login panel';
//        $subject = 'CHANGED PASSWORD FOR YOUR ONLINE CASEPROFESSIONAL ACCOUNT ';
//
//        $mail = array('message' => $message, 'subject' => $subject, 'schedule' => date('d-m-Y'), 'reciever' => $email, 'created' => date('Y-m-d H:i:s'), 'org' => "", 'sent' => 'false', 'guid' => '');
//        $this->Md->save($mail, 'emails');
    }

    public function remote() {

        $this->load->helper(array('form', 'url'));
        $email = $this->input->post('email');
        $password_now = md5($this->input->post('password'));
        $key = $email;
        $get_result = $this->Md->check($email, 'email', 'user');
        if (!$get_result) {

            $result = $this->Md->get('email', $email, 'user');
            // var_dump($result);
            foreach ($result as $res) {
                $key = $email;
               // $password = md5($res->password);
               
                if ($password_now == $res->password && $res->role=="Administrator") {
                    echo 'T';
                } else {
                    echo 'F';
                }
            }
        } else {
            echo 'F';
        }
    }

    public function update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $contact = $this->input->post('contact');
        $contact2 = $this->input->post('contact2');
        $password = $this->input->post('password');
        $role = $this->input->post('role');
        $station = $this->input->post('station');

        if ($password != "") {
            $password = $password;
            $key = 'user';

            $password = $this->encrypt->encode($msg, $key);
            $user = array('password' => $password, 'create' => date('Y-m-d'));
            $this->Md->update($id, $user, 'user');
            $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'upate' => 'save', 'details' => $name . ' user password updated ', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
            $this->Md->save($log, 'logs');
        }

        $user = array('email' => $email, 'name' => $name, 'contact' => $contact, 'contact2' => $contact2, 'role' => $role, 'active' => 'true', 'station' => $station, 'create' => date('Y-m-d'));

        $this->Md->update($id, $user, 'user');

        $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'update', 'details' => $name . ' user information updated', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
        $this->Md->save($log, 'logs');
        $this->session->set_flashdata('msg', 'The ' . $name . ' has been updated');
        // redirect('/user', 'refresh');
        return;
    }

    public function delete() {

        $id = $this->uri->segment(3);

        $query = $this->Md->delete($id, 'user');

        $log = array('user' => $this->session->userdata('username'), 'userid' => $this->session->userdata('id'), 'action' => 'delete', 'details' => ' user information deleted', 'date' => date('Y-m-d H:i:s'), 'ip' => $this->input->ip_address(), 'url' => '');
        $this->Md->save($log, 'logs');

        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted Fields</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/user', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/user', 'refresh');
        }
    }

    public function login() {


        $this->load->helper(array('form', 'url'));
        $email = $this->input->post('email');
        //$email = "weredouglas@gmail.com";
        $password_now = $this->input->post('password');
        $key = $email;

        $get_result = $this->Md->check($email, 'email', 'user');
        if (!$get_result) {

            $result = $this->Md->get('email', $email, 'user');
            foreach ($result as $res) {
                $key = $email;
                $password = $this->encrypt->decode($res->password, $key);

                if ($password_now == $password) {

                    $query2 = $this->Md->query("select * from user WHERE email='" . $email . "'");
                    $results = $query2;
                    foreach ($results as $res) {

                        $b["station"] = $res->station;
                        $b["name"] = $res->name;
                        $b["email"] = $res->email;
                        $b["contact"] = $res->contact;
                        $b["role"] = $res->role;
                        $b["status"] = "true";
                        $b["info"] = "";
                    }
                    echo json_encode($b);
                } else {
                    $b["info"] = "invalid password";
                    $b["status"] = "false";
                    echo json_encode($b);
                }
            }
        } else {
            $b["info"] = "invalid email";
            $b["status"] = "false";
            echo json_encode($b);
        }
    }

    public function all() {



        $result = $this->Md->show('user');
// var_dump($result);
        $all = array();

        foreach ($result as $res) {
            $resv = new stdClass();
            $resv->station = $res->station;
            $resv->name = $res->name;
            $resv->email = $res->email;
            $resv->contact = $res->contact;
            $resv->role = $res->role;
            $resv->password = $this->encrypt->decode($res->password, $res->email);


            array_push($all, $resv);
        }
        echo json_encode($all);
    }

    public function check($user) {
        $this->load->helper(array('form', 'url'));

        $user = ($user == "") ? $this->input->post('name') : $user;
//check($value,$field,$table)
        if ($this->input->post('name') == "") {
            echo '<span style="color:#f00">Please Input Name. </span>';
        } else {
            $get_result = $this->Md->check($user, 'name', 'user');

            if (!$get_result)
                echo '<span style="color:#f00"> name already in use. </span>';
            else
                echo '<span style="color:#0c0"> name not in use</span>';
        }
    }

    public function check_email() {
        $this->load->helper(array('form', 'url'));

        $email = $this->input->post('email');
        if ($email == "") {
            echo '<span style="color:#f00">Please Input E-mail Address. </span>';
        } else {
//check($value,$field,$table)
            $get_result = $this->Md->check($email, 'email', 'user');

            if (!$get_result)
                echo '<span style="color:#f00">email already in use. </span>';
            else
                echo '<span style="color:#0c0">email not in use</span>';
        }
    }

}
