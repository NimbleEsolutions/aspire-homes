<?php 
	class Search_model extends CI_Model
	{
		function fetch_data($limit, $start){
			$this->db->select('*');
			$this->db->from("rm_resort");
			$this->db->order_by('rs_id', 'DESC');
			$this->db->limit($limit, $start);
			$query = $this->db->get();
			return $query;
		}
	}
?>