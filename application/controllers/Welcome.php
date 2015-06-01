<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
        public function login()
	{
		$this->load->view('home');
	}
         public function user()
	{
		$this->load->view('user');
	}
         public function station()
	{
		$this->load->view('station');
	}
         public function element()
	{
		$this->load->view('element');
	}
        public function instrument()
	{
		$this->load->view('instrument');
	}
        public function archive()
	{
		$this->load->view('archive');
	}
         public function schedule()
	{
		$this->load->view('schedule');
	}
        public function reports()
	{
		$this->load->view('reports');
	}
}
