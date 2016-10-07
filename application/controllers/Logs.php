<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends CI_Controller {

    function __construct() {

        parent::__construct();
        error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
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
        $query = $this->Md->show('logs');
        if ($query) {
            $data['logs'] = $query;
        } else {
            $data['logs'] = array();
        }
        $query = $this->Md->show('user');
        if ($query) {
            $data['users'] = $query;
        } else {
            $data['users'] = array();
        }
        $this->load->view('logs', $data);
    }

    public function gets() {

        $this->load->helper(array('form', 'url'));
        //$datenow = trim($this->input->post('datenow'));

        $day = trim($this->input->post('day'));
        $month = trim($this->input->post('month'));
        $year = trim($this->input->post('year'));
        $action = trim($this->input->post('action'));
        $user = trim($this->input->post('user'));
       echo $data = trim($this->input->post('datas'));
     
        unset($sql);
        if ($day)
            $sql[] = "DAY(day) = '$day' ";
        if ($month)
            $sql[] = "MONTH(day) = '$month' ";
        if ($year)
            $sql[] = " YEAR(day) = '$year' ";
        if ($action)
            $sql[] = "action = '$action' ";
        if ($user)
            $sql[] = "user= '$user' ";

        $query = "SELECT * FROM logs";

        if (!empty($sql)) {
            $query .= ' WHERE ' . implode(' AND ', $sql);
        }

        $get_result = $this->Md->query($query);

        // var_dump($get_result);
        if ($get_result && $this->input->post('datas') == "") {

            echo '   <h4>' . $user . ' ' . $action . ' ' . $day . ' ' . $month . ' ' . $year . ' log Information Count(' . count($get_result) . ')</h4>             
                                         
   <table id="datatable" class="table scroll table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>                                            
                                            <th>User</th>
                                            <th>UserID</th>
                                            <th class="hidden-480">Action</th>
                                            <th class="hidden-480">Details</th>
                                            <th class="hidden-480">IP</th>
                                             <th class="hidden-480">Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>';
            if (is_array($get_result) && count($get_result)) {
                foreach ($get_result as $loop) {

                    echo '<tr>
                            <td class="small" >' . $loop->user . '</td>
                            <td class="small" >' . $loop->userid . ' </td>
                            <td class="small">' . $loop->action . '</td>
                            <td class="small">' . $loop->details . '</td> 
                            <td class="small" >' . $loop->ip . '</td>
                            <td class="small" >' . $loop->date . '</td> 
                            <td class="small"> </td>
                            </tr> ';
                }
            }

            echo '</tbody>
                </table>  ';
        } elseif ($this->input->post('datas') != " ") {
            
         
            unset($sqls);
            if ($day)
                $sqls[] = "DAY(submitted) = '$day' ";
            if ($month)
                $sqls[] = "MONTH(submitted) = '$month' ";
            if ($year)
                $sqls[] = " YEAR(submitted) = '$year' ";
            if ($user)
                $sqls[] = "user= '$user' ";


            if ($this->input->post('datas') == "Metar") {
                $querys = "SELECT * FROM metar";
            }
            if ($this->input->post('datas') == "Daily") {
                $querys = "SELECT * FROM daily";
            }
            if ($this->input->post('datas') == "Synoptic") {
                $querys = "SELECT * FROM synoptic";
            }
            if ($this->input->post('datas') == "Rainfall") {
                $querys = "SELECT * FROM rain";
            }

            if (!empty($sqls)) {
                $querys .= ' WHERE ' . implode(' AND ', $sqls);
            }


            $get_results = $this->Md->query($querys);

            //  var_dump($get_results);
            if ($get_results) {

                echo '   <h4>' . $user . ' ' . $action . ' ' . $day . ' ' . $month . ' ' . $year . '  ' . $data . ' log Information Count(' . count($get_results) . ')</h4>             
                                         
   <table id="datatable" class="table scroll table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>                                            
                                            <th>Station</th>
                                            <th>Status</th>
                                            <th class="hidden-480">Submitted</th>                                            
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>';
                if (is_array($get_results) && count($get_results)) {
                    foreach ($get_results as $loop) {

                        echo '<tr>
                            <td class="small" >' . $loop->station . '</td>
                            <td class="small" >' . $loop->approved . ' </td>
                            <td class="small">' . $loop->submitted . '</td>                          
                            <td class="small"> </td>
                            </tr> ';
                    }
                }

                echo '</tbody>
                </table>  ';
            }
        } else {

            echo $date . ' no values ';
        }
    }

    public function save() {

        $this->load->helper(array('form', 'url'));

        $file_element_name = 'userfile';



        $config['upload_path'] = 'archive/';
        // $config['upload_path'] = '/uploads/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($file_element_name)) {
            $status = 'error';
            echo $msg = $this->upload->display_errors('', '');
        } else {

            $data = $this->upload->data();
            $form = $this->input->post('form');
            $name = $this->input->post('name');
            $station = $this->input->post('station');
            $period = $this->input->post('date-range-picker');
            $description = $this->input->post('description');
            $submitted = date('Y-m-d');
            $file = $data['file_name'];

            $archive = array('file' => $file, 'name' => $name, 'station' => $station, 'form' => $form, 'period' => $period, 'description' => $description, 'submitted' => date('Y-m-d H:i:s'));
            $file_id = $this->Md->save($archive, 'archive');


            if ($file_id) {
                $this->session->set_flashdata('msg', 'Please input the name of the element');
                redirect('/archive', 'refresh');
            } else {
                unlink($data['full_path']);
                $this->session->set_flashdata('msg', 'Error');
                redirect('/archive', 'refresh');
            }
        }
        @unlink($_FILES[$file_element_name]);
    }

    public function edit() {
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

        $query = $this->Md->get('id', $id, 'instrument');

        if ($query) {
            $data['instrumentID'] = $query;
        } else {
            $data['instrumentID'] = array();
        }

        $this->load->view('archive', $data);
    }

    public function update() {

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

        $instrument = array('name' => $name, 'station' => $station, 'element' => $element, 'dateRegister' => $dateRegister, 'dateExpire' => $dateExpire, 'code' => $code, 'manufacturer' => $manufacturer, 'description' => $description, 'submitted' => date('Y-m-d H:i:s'));
        // update($id, $data,$table)
        $this->Md->update($id, $instrument, 'instrument');
        $this->session->set_flashdata('msg', 'The ' . $name . ' has been updated');
        redirect('/Archive', 'refresh');
        return;
    }

    public function delete() {

        $id = $this->uri->segment(3);

        $query = $this->Md->delete($id, 'instrument');

        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted Fields</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/archive', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/archive', 'refresh');
        }
    }

    function get() {

        $station = $this->input->post('station');
        //  $station ='Makerere';
        // header('Content-Type: application/x-json; charset=utf-8');
        //($where,$data,$table)
        echo json_encode($this->Md->get('name', $station, 'station'));
    }

}
