<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('MD');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
        $query = $this->MD->show('role');
        if ($query) {
            $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }
        $query = $this->MD->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        $this->load->view('login', $data);
    }
     public function start()
	{
		$this->load->view('view-start');
	}
      public function logout() {
          
     $this -> session -> sess_destroy();
     $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'logout','details'=>  $this->session-> userdata('name').' has logged out ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'www.');
                      $this->MD->save($log, 'logs'); 
     $this->load->view('login');
    
      }

    public function login() {
        
        if( $this -> session -> userdata('name')!=null){
        
             $this->load->view('home');
             return;
        }

        $this->load->helper(array('form', 'url'));
        $email = $this->input->post('email');
        $password_now = $this->input->post('password');
       

        $key = $email;


        $get_result = $this->MD->check($email, 'email', 'user');
        if (!$get_result) {
            //$this->session->set_flashdata('msg', 'Welcome'.$email);
            //get($field,$value,$table)
            $result = $this->MD->get('email', $email, 'user');
           // var_dump($result);
            foreach ($result as $res) {
                $key = $email;
                $password = $this->encrypt->decode($res->password, $key);

                if ($password_now == $password) {
                    
                    $newdata = array(
                         'id' => $res->id,
                        'name' => $res->name,
                        'email' => $res->email,
                        'contact' => $res->contact,
                        'status' => $res->active,
                        'station' => $res->station, 
                        'role' => $res->role,
                        'logged_in' => TRUE
                    );
                   
			$this -> session -> set_userdata($newdata);
                    $log = array('user' => $this->session -> userdata('name'),'userid'=>$this->session -> userdata('id'),'action' => 'login','details'=>  $this->session-> userdata('name').' has logged in ', 'date' => date('Y-m-d H:i:s'),'ip' => $this->input->ip_address(), 'url' =>'www.');
                    $this->MD->save($log, 'logs'); 
                    $this->load->view('home');
                } else {
                    $this->session->set_flashdata('msg', 'Invalid user');
                    redirect('/', 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('msg', 'Invalid user');
            redirect('/', 'refresh');
        }
       
          
    }

    public function user() {
        $query = $this->MD->show('role');
        //  var_dump($query);
        if ($query) {
            $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }

        $this->load->view('user', $data);
    }

    public function station() {
        $this->load->view('station');
    }

    public function element() {
        $this->load->view('element');
    }

    public function instrument() {
        $this->load->view('instrument');
    }

    public function archive() {
        $this->load->view('archive');
    }

    public function schedule() {
         $query = $this->MD->show('instrument'); 
        if ($query) {
             $data['instruments'] = $query;
        } else {
            $data['instruments'] = array();
        }
        
        $this->load->view('schedule',$data);
    }

    public function reports() {


        $query = $this->MD->show('role');
        if ($query) {
            $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }
        $query = $this->MD->show('station');
        if ($query) {
            $data['stations'] = $query;
        } else {
            $data['stations'] = array();
        }
        // get($field,$value,$table)
        // $query = $this->MD->query("SELECT * FROM  daily RIGHT JOIN metar ON daily.date = metar.day  "); 
        $query = $this->MD->query("SELECT * FROM daily");

        if ($query) {
            $data['daily'] = $query;
        } else {
            $data['daily'] = array();
        }
        $datetime = "09" . "00Z";
        $datetimes = "15" . "00Z";
        $all = array();
        $query1 = $this->MD->query("select *  from daily");
        foreach ($query1 as $v) {
            $resv = new stdClass();
            $resv->date = $v->date;
            $resv->max = $v->max;
            $resv->min = $v->min;
            $resv->rain = $v->actual;
            $resv->actual2 = $v->maxi;

            $resv->rain = $v->rain;
            $resv->thunder = $v->thunder;
            $resv->fog = $v->fog;
            $resv->haze = $v->haze;
            $resv->storm = $v->storm;
            $resv->quake = $v->quake;
              $resv->height = $v->height;
                $resv->duration = $v->duration;
                  $resv->sunshine = $v->sunshine;
                    $resv->radiationtype = $v->radiationtype;
                      $resv->radiation = $v->radiation;
                        $resv->evaptype1 = $v->evaptype1;
                          $resv->evap = $v->evap;
                            $resv->evaptype2 = $v->evaptype2;
                              $resv->evap = $v->evap;




            $query2 = $this->MD->query("select * from metar WHERE day='" . $v->date . "'");
            $results = $query2;
            //  var_dump($results);
            foreach ($results as $res) {

                if ((strpos($res->datetime, $datetime)) && $res->day == $v->date) {

                    $resv->air9 = $res->air_temperature;
                    $resv->wet9 = $res->wet_bulb;
                    $resv->dew9 = $res->dew_temperature;
                    $resv->humid9 = $res->humidity;
                    $resv->wind9 = $res->wind_direction;
                    $resv->speed9 = $res->wind_speed;
                    $resv->visibility9 = $res->visibility;
                    $resv->hpa9 = $res->station_pressure_hpa;
                }
                if ((strpos($res->datetime, $datetimes)) && $res->day == $v->date) {

                    $resv->air15 = $res->air_temperature;
                    $resv->wet15 = $res->wet_bulb;
                    $resv->dew15 = $res->dew_temperature;
                    $resv->humid15 = $res->humidity;
                    $resv->wind15 = $res->wind_direction;
                    $resv->speed15 = $res->wind_speed;
                    $resv->visibility15 = $res->visibility;
                    $resv->hpa15 = $res->station_pressure_hpa;
                }
            }
            array_push($all, $resv);
        }
        //    var_dump($all);


        $data['monthly'] = $all;



        $this->load->view('reports', $data);
    }

    public function form() {
        $this->load->view('form');
    }

    public function form4() {
        $this->load->view('form4');
    }

    public function dekadal() {
        $this->load->view('dekadal');
    }

    public function form5() {
        $this->load->view('form5');
    }

    public function summary() {
        $this->load->view('summary');
    }

    public function metar() {
        $this->load->view('metar');
    }

    public function rainfall() {
        $this->load->view('rainfall');
    }

    public function climatological() {
        $this->load->view('climatological');
    }

}
