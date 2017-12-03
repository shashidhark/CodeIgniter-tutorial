<?php

class General_model extends CI_Model{

	function add($data){
		$this->db->insert("todo", $data);
	}
	
}

?>
