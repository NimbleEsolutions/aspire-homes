<?php
	class Home_model extends CI_Model
	{
		public function total_records_count($where,$table)
		{
			if(!empty($where)){
				return $this->db->where($where)->get($table)->num_rows();
			}else{
				return $this->db->get($table)->num_rows();				
			}
		}

		public function fetch_details($where,$table)
		{
			if(!empty($where)){
				return $this->db->where($where)->get($table)->result_array();	
			}else{
				return $this->db->get($table)->result_array();	
			}
		}

		public function insert_records($table,$data)
		{
			return $this->db->insert($table,$data);
		}

		public function update_records($where,$table,$data)
		{
			return $this->db->where($where)->update($table,$data);
		}

		public function delete_records($where,$table)
		{
			return $this->db->where($where)->delete($table);
		}

		public function send_mail($member_email,$subject,$msg)
		{
			$config['protocol'] = $this->config->item('protocol');
			$config['smtp_host'] = $this->config->item('smtp_host');
			$config['smtp_port'] = $this->config->item('smtp_port');
			$config['smtp_timeout'] = $this->config->item('smtp_timeout');
			$config['smtp_user'] = $this->config->item('smtp_user');
			$config['smtp_pass'] = $this->config->item('smtp_pass');
			$config['charset'] = $this->config->item('charset');
			$config['newline'] = $this->config->item('newline');
			$config['mailtype'] = $this->config->item('mailtype');
			$config['validation'] = $this->config->item('validation');
			print_r($config);

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('bookings@aspirevillastays.com');
			$this->email->to(''.$member_email.'');
			$this->email->subject($subject);	
			$this->email->message($msg);
			if($this->email->send()){
				return true;	
			}else{
				// print_r($this->email->print_debugger());die();
				return false;
			}
		}

		public function verifyRoomsAvailable($strt_date,$end_date,$rtype,$resort)
		{
			$room_details = $this->Home_model->fetch_details(array('rr_rs_id'=>$resort,'rr_isDelete'=>0,'rr_id'=>$rtype),'rm_resort_roomtype');
			$checkIn=date('Y-m-d',strtotime($strt_date));
            $checkOut=date('Y-m-d',strtotime($end_date)); 
            $date1 = new DateTime("".$checkIn."");
            $date2 = new DateTime("".$checkOut."");
            $numberOfNights= $date2->diff($date1)->format("%a");
            $book_room = 0;
            for($i = 1;$i <= $numberOfNights;$i++){
                if($i == 1){
                    $checkInDates = $checkIn;
                    $total_room = $this->db->query("SELECT SUM(rb_rooms) as rb_room  FROM rm_booking WHERE (rb_start_date <= '".$checkInDates."' AND rb_till_date > '".$checkInDates."') and rb_resort_id = ".$resort." and rb_rt_id = ".$room_details[0]['rr_rt_id']." and rb_isDelete = 0")->result_array();
                    $book_room = max($book_room,$total_room[0]['rb_room']);
                }else{
                    $j = $i-1; 
                    $checkInDates =  date('Y-m-d',strtotime('+'.$j.' day', strtotime($checkIn)));
                    $total_room = $this->db->query("SELECT SUM(rb_rooms) as rb_room  FROM rm_booking WHERE (rb_start_date <= '".$checkInDates."' AND rb_till_date > '".$checkInDates."') and rb_resort_id = ".$resort."  and rb_rt_id = ".$room_details[0]['rr_rt_id']." and rb_isDelete = 0")->result_array();
                    $book_room = max($book_room,$total_room[0]['rb_room']);
                }
            }
			$total_available_room = $room_details[0]['rr_no_of_rooms'] - ($book_room);
			return $total_available_room;
		}
	}
?>