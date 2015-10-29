<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Angular extends CI_Controller 
{

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('helper');
    }

    public function index() {   
        
       
        $this->load->view('angular');
    }
     

  
    
    
}
