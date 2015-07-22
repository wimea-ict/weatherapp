<?php
class MD extends CI_Model {

	function __construct() {
		parent::__construct();
	}
      function save($roles = NULL,$table) {
		$this -> db -> insert($table, $roles);
		return $this -> db -> insert_id();
	}
       
	function show($table) {
           
                $query = $this->db->query("SELECT * FROM $table");
		$result = $query->result();
                 return $result;
	}
        function delete($id,$table) {             
            
		$sql = "DELETE FROM $table WHERE id =? ";
		$this -> db -> query($sql, array($id));
		return $this -> db -> affected_rows();
                
	}       
	
	function get($field,$value,$table) {
		$this -> db -> select('*');
		$this -> db -> from($table);
		$this -> db -> where($field, $value);
		$query = $this -> db -> get();
		$result = $query -> result();
		return $result;
                }       
  //$this->MD->update($id,$role, 'role');
	function update($id, $data,$table) {
		$this -> db -> where('id', $id);
		$this -> db -> update($table, $data);
	}
        function check($value,$field,$table) {		
		
		$query = $this -> db -> query('SELECT * FROM '.$table.' where '.$field.'="'.$value.'"');

		if ($query -> num_rows() > 0)
			return false;
		else
			return true;
	}
        function check_sql($string) {		
		
		$query = $this -> db -> query($string);

		if ($query -> num_rows() > 0)
			return false;
		else
			return true;
	}
        function query($string) {
           
                $query = $this->db->query($string);
		$result = $query->result();
                 return $result;
	}

}

?>