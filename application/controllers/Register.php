<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {

        parent::__construct();
       // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
          $this->load->library('helper');
    }
	public function index()
	{
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
		$this->load->view('login',$data);
	}
}
