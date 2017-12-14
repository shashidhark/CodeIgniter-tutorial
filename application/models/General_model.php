<?php

class General_model extends CI_Model{

	function add($data){
		$this->db->insert("todo", $data);
	}
	
	function fetch_data(){
		$q = $this->db->query("select * from todo");
		return $q->result_array();
	}
	
}

?>
