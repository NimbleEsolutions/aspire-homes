<?php 
	class Search_model extends CI_Model
	{
		function fetch_data($limit, $start,$type,$dest){
			$this->db->select('*');
			$this->db->from("rm_resort");
			if($type != 'NA' && !empty($this->getProperty($type))){
				$this->db->where("rs_pt_id IN (".$this->getProperty($type).")");
			}
			if($dest != 'NA' && !empty($this->getDestination($dest))){
				$this->db->where("rs_des_id = ".$this->getDestination($dest)."");
			}
			$this->db->order_by('rs_id', 'DESC');
			$this->db->limit($limit, $start);
			$query = $this->db->get();
			return $query;
		}

		function getProperty($prop)
		{
			$property = $this->db->query('SELECT pt_id FROM `rm_property_type` WHERE pt_name IN ('.$prop.')')->result_array();
			$prop_data = '';
			$i = 0;
			if(!empty($property)){
				foreach ($property as $key) {
					if($i == 0){
						$prop_data = "".$prop_data."'".$key['pt_id']."'";
					}else{
						$prop_data = "".$prop_data.",'".$key['pt_id']."'";
					}
					$i++;
				}
			}
			return $prop_data;
		}

		function getDestination($dest)
		{
			$destination = $this->db->query('SELECT des_id FROM `rm_destination` WHERE des_name = '.str_replace('%20', " ", $dest).'')->result_array();	
			if(!empty($destination)){ $dest_id = $destination[0]['des_id']; }else{ $dest_id = '';}		
			return $dest_id;
		}

	}
?>