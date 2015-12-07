<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Apisynoptic extends REST_Controller {

    function __construct() {

        parent::__construct();
       
        $this->load->model('Md');
        
    }

    public function synoptic_get() {         
       
         if(!$this->get('station'))
        {
            $this->response(NULL, 400);
        }
       
        $user = $this->Md->get('station', $this->get('station'), 'synoptic');
      //  var_dump($user);
        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
     

     public function synoptic_post() {
        
       if (!$this->post('station')) {
            echo 'F';           
            
       } else {
        $time = $this->input->post('time');
        $date = $this->input->post('datenow');
        $station = $this->input->post('station');
        $ir = $this->input->post('ir');
        $ix = $this->input->post('ix');
        $h = $this->input->post('h');
        $www = $this->input->post('www');
        $vv = $this->input->post('vv');
        $n = $this->input->post('n');
        $dd = $this->input->post('dd');
        $ff = $this->input->post('ff');
        $t = $this->input->post('t');
        $td = $this->input->post('td');
        $Po = $this->input->post('Po');
        $gisis = $this->input->post('gisis');
        $hhh = $this->input->post('hhh');
        $rrr = $this->input->post('rrr');
        $tr = $this->input->post('tr');
        $present = $this->input->post('present');
        $past = $this->input->post('past');
        $nh = $this->input->post('nh');
        $cl = $this->input->post('cl');
        $cm = $this->input->post('cm');
        $ch = $this->input->post('ch');
        $Tq = $this->input->post('Tq');
        $Ro = $this->input->post('Ro');
        $R1 = $this->input->post('R1');
        $Tx = $this->input->post('Tx');
        $Tm = $this->input->post('Tm');
        $EE = $this->input->post('EE');
        $E = $this->input->post('E');
        $sss = $this->input->post('sss');
        $pchange = $this->input->post('pchange');
        $p24 = $this->input->post('p24');
        $rr = $this->input->post('rr');
        $tr1 = $this->input->post('tr1');
        $ns = $this->input->post('ns');
        $c = $this->input->post('c');
        $hs = $this->input->post('hs');
        $ns1 = $this->input->post('ns1');
        $c1 = $this->input->post('c1');
        $hs1 = $this->input->post('hs1');
        $ns2 = $this->input->post('ns2');
        $c2 = $this->input->post('c2');
        $hs2 = $this->input->post('hs2');
        $supplementary = $this->input->post('supplementary');
        $wb = $this->input->post('wb');
        $rh = $this->input->post('rh');
        $vap = $this->input->post('vap');
        $user = $this->input->post('user');
        
        if ($station == "") {
            echo 'F';
            return;
        }
        //echo $date;
        
        $get_result = $this->Md->check_sql('SELECT * FROM synoptic where station ="'.$station.'" AND date ="'.$date.'" AND time = "'.$time.'"');
        if (!$get_result) {
                 echo 'T' ;
        }
        
        else {

            $synoptic = array('station' => $station, 'date' => $date, 'time' => $time, 'ir' => $ir, 'ix' => $ix, 'h' => $h, 'www' => $www, 'vv' => $vv, 'n' => $n, 'dd' => $dd, 'ff' => $ff, 't' => $t, 'td' => $td, 'Po' => $Po, 'gisis' => $gisis, 'hhh' => $hhh, 'rrr' => $rrr, 'tr' => $tr, 'present' => $present, 'past' => $past, 'nh' => $nh, 'cl' => $cl, 'cm' => $cm, 'ch' => $ch, 'Tq' => $Tq, 'Ro' => $Ro, 'R1' => $R1, 'Tx' => $Tx, 'Tm' => $Tm, 'EE' => $EE, 'E' => $E, 'sss' => $sss, 'pchange' => $pchange, 'p24' => $p24, 'rr' => $rr, 'tr1' => $tr1, 'ns' => $ns, 'c' => $c, 'hs' => $hs, 'ns1' => $ns1, 'c1' => $c1, 'hs1' => $hs1, 'ns2' => $ns2, 'c2' => $c2, 'hs2' => $hs2, 'supplementary' => $supplementary, 'wb' => $wb, 'rh' => $rh, 'vap' => $vap, 'user' => $user, 'submitted' => date('H:i:s'));
            $this->Md->save($synoptic, 'synoptic');
            echo 'T';
        }
      }
    }

    public function tasks_put() {
        if (!$this->put('actual')) {
            $this->response(array('error' => 'Actual rainfall is required'), 400);
        }

        $data = array(
            'actual' => $this->put('actual'),
            'max' => $this->put('max'),
            'min' => $this->put('min')
        );
      //  $this->task_model->update_task($this->put('id'), $data);
          $this->Md->update($this->put('id'),$data, 'daily');
        $message = array('success' => $this->put('actual') . ' Updated!');
        $this->response($message, 200);
    }

    public function tasks_delete($id = NULL) {
        if ($id == NULL) {
            $message = array('error' => 'Missing delete data: id');
            $this->response($message, 400);
        } else {
           $this->Md->delete($id,'daily');
            $message = array('id' => $id, 'message' => 'DELETED!');
            $this->response($message, 200);
        }
    }

}
