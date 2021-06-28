<?php 
	defined('BASEPATH') or exit('No direct script access allowed.');
	class Booking extends CI_Controller
	{
		public function index()
		{
			if( isset($_GET['rt']) && isset($_GET['r']) && !empty($_GET['r']) && !empty($_GET['rt'])){
				$resort = str_replace('+', '', $_GET['r']);
				$room_type = $_GET['rt'];
				$data['resort'] = $this->Home_model->fetch_details(array('rs_display_name'=>$resort,'rs_isDelete'=>0),'rm_resort');
				$data['room'] = $this->Home_model->fetch_details(array('rr_rs_id'=>$data['resort'][0]['rs_id'],'rr_isDelete'=>0,'rr_id'=>$room_type),'rm_resort_roomtype');
				$data['amenities'] = $this->Home_model->fetch_details("ra_rs_id=".$data['resort'][0]['rs_id']." and ra_isDelete=0",'rm_resort_amenity');
				$data['services'] = $this->Home_model->fetch_details(array('rrs_resort_id'=>$data['resort'][0]['rs_id'],'rrs_isDelete'=>0),'rm_resort_services');
				$data['start_date'] = $_GET['stDate'];
				$data['till_date'] = $_GET['tlDate'];
				$data['adult'] = $_GET['adult'];
				$data['child'] = $_GET['child'];
				$data['extra'] = $_GET['extra'];
				if($data['start_date'] != '' || $data['till_date'] != ''){
					$checkIn=date('Y-m-d',strtotime($data['start_date']));
	                $checkOut=date('Y-m-d',strtotime($data['till_date'])); 
	                $date1 = new DateTime("".$checkIn."");
	                $date2 = new DateTime("".$checkOut."");
	                $numberOfNights= $date2->diff($date1)->format("%a");
	                $book_room = 0;
	                for($i = 1;$i <= $numberOfNights;$i++){
	                    if($i == 1){
	                        $checkInDates = $checkIn;
	                        $total_room = $this->db->query("SELECT SUM(rb_rooms) as rb_room  FROM rm_booking WHERE (rb_start_date <= '".$checkInDates."' AND rb_till_date > '".$checkInDates."') and rb_resort_id = ".$data['resort'][0]['rs_id']." and rb_rt_id = ".$data['room'][0]['rr_rt_id']." and rb_isDelete = 0")->result_array();
	                        $book_room = max($book_room,$total_room[0]['rb_room']);
	                    }else{
	                        $j = $i-1; 
	                        $checkInDates =  date('Y-m-d',strtotime('+'.$j.' day', strtotime($checkIn)));
	                        $total_room = $this->db->query("SELECT SUM(rb_rooms) as rb_room  FROM rm_booking WHERE (rb_start_date <= '".$checkInDates."' AND rb_till_date > '".$checkInDates."') and rb_resort_id = ".$data['resort'][0]['rs_id']." and rb_rt_id = ".$data['room'][0]['rr_rt_id']." and rb_isDelete = 0")->result_array();
	                        $book_room = max($book_room,$total_room[0]['rb_room']);
	                    }
	                }
					// $total_start_available_room = $this->db->query('SELECT SUM(rb_rooms) as strt_total_rooms, rb_rt_id FROM rm_booking where  rb_isDelete = 0 AND rb_roomtype_id ="'.$room_type.'" AND rb_resort_id = "'.$data['resort'][0]['rs_id'].'" AND (rb_till_date <= "'.date('Y-m-d',strtotime($data['till_date'])).'" AND rb_start_date >= "'.date('Y-m-d',strtotime($data['start_date'])).'")')->result_array();
					// $total_start_available_room = $this->db->query('SELECT SUM(rb_rooms) as strt_total_rooms, rb_rt_id FROM rm_booking where  rb_isDelete = 0 AND rb_roomtype_id ="'.$room_type.'" AND rb_resort_id = "'.$data['resort'][0]['rs_id'].'" and (rb_start_date BETWEEN "'.date('Y-m-d',strtotime($data['start_date'])).'" and "'.date('Y-m-d',strtotime($data['till_date'])).'" OR rb_till_date > "'.date('Y-m-d',strtotime($data['till_date'])).'" AND rb_start_date < "'.date('Y-m-d',strtotime($data['start_date'])).'")')->result_array();
					$data['total_available_room'] = $data['room'][0]['rr_no_of_rooms'] - ($book_room);
				}else{
					$data['total_available_room'] = 0;
				}
				$data['totalRoom'] = $_GET['room'];
				// print_r($data['total_available_room']);die();
				$this->load->view('Booking/header');
				$this->load->view('Booking/room_booking',$data);
				$this->load->view('Booking/footer');
			}else{
				redirect('allResort');
			}			
		}

		public function serivce_rate()
		{
			$serviceID = $_POST['serviceID'];
			$data = $this->Home_model->fetch_details(array('rrs_id'=>$serviceID),'rm_resort_services');
			echo json_encode($data);
		}

		public function booking_details()
		{
			$data['form_dates'] = $this->input->post('form_dates');
			$data['till_dates'] = $this->input->post('till_dates');
			$data['guests'] = $this->input->post('guests');
			$data['child'] = $this->input->post('child');
			$data['room'] = $this->input->post('room');
			$data['extra'] = $this->input->post('extra');
			$data['extra_service'] = $this->input->post('extra_service');
			$data['totalNightRate'] = $this->input->post('totalNightRate');
			$data['extratotalNightRate'] = $this->input->post('extratotalNightRate');
			$data['service_tax'] = $this->input->post('service_tax');
			$data['extra_service_charge'] = $this->input->post('extra_service_charge');
			$data['totalResortAmount'] = $this->input->post('totalResortAmount');
			$data['room_rcd'] = $this->input->post('room_rcd');
			$data['room_details'] = $this->Home_model->fetch_details(array('rr_id'=>$data['room_rcd'],'rr_isDelete'=>0),'rm_resort_roomtype');
			$data['resort_details'] = $this->Home_model->fetch_details(array('rs_id'=>$data['room_details'][0]['rr_rs_id'],'rs_isDelete'=>0),'rm_resort');
			$data['room_amenities'] = $this->Home_model->fetch_details(array('rra_roomtype_id'=>$data['room_rcd'],'rra_isDelete'=>0),'rm_resort_room_amenity');
			$this->load->view('Booking/booking_details',$data);
		}

		public function register_new_booking()
		{
			$booking['rb_type'] = $this->input->post('rb_type');
			$booking['rb_resort_id'] = $this->input->post('rb_resort_id');
			$booking['rb_roomtype_id'] = $this->input->post('rb_roomtype_id');
			if($booking['rb_roomtype_id'] != 0){
				$rb_rt_id = $this->Home_model->fetch_details(array('rr_id'=>$booking['rb_roomtype_id']),'rm_resort_roomtype');
				$booking['rb_rt_id'] = $rb_rt_id[0]['rr_rt_id'];
			}
			$booking['rb_package_id'] = $this->input->post('rb_package_id');
			$booking['rb_start_date'] = date('Y-m-d',strtotime($this->input->post('rb_start_date')));
			$booking['rb_till_date'] = date('Y-m-d',strtotime($this->input->post('rb_till_date')));
			$booking['rb_guest'] = $this->input->post('rb_guest');
			$booking['rb_child'] = $this->input->post('rb_child');
			$booking['rb_extra'] = $this->input->post('rb_extra');
			$booking['rb_rooms'] = $this->input->post('rb_rooms');
			$booking['rb_total_amount'] = $this->input->post('rb_total_amount');
			$booking['rb_extra_total_amount'] = $this->input->post('rb_extra_total_amount');
			$booking['rb_tax_amount'] = $this->input->post('rb_tax_amount');
			$booking['rb_extra_ser_amt'] = $this->input->post('rb_extra_ser_amt');
			$booking['rb_amount'] = $this->input->post('rb_amount');
			$booking['rb_isDelete'] = 1;
			$user['bu_user_name'] = $this->input->post('bu_user_name');
			$user['bu_user_contact'] = $this->input->post('bu_user_contact');
			$user['bu_user_mobile'] = $this->input->post('bu_user_mobile');
			$user['bu_user_email'] = $this->input->post('bu_user_email');
			$user['bu_user_gender'] = $this->input->post('bu_user_gender');
			$user['bu_user_address'] = $this->input->post('bu_user_address');
			$user['bu_user_booking_amt'] = $this->input->post('rb_amount');
			$user['bu_user_paid_amt'] = $this->input->post('rb_amount');
			$user['bu_user_balance_amt'] = 0;
			$this->Home_model->insert_records('rm_booking_user',$user);
			$user_id = $this->db->insert_id();
			$booking['rb_user_id'] = $user_id;
			$this->Home_model->insert_records('rm_booking',$booking);
			$booking_id = $this->db->insert_id();
			if($this->input->post('bs_rs_service_id'))
			{
				for ($i=0; $i < count($this->input->post('bs_rs_service_id')); $i++) { 
					$service['bs_booking_id'] = $booking_id;
					$service['bs_rs_service_id'] = $this->input->post('bs_rs_service_id')[$i];	
					$this->Home_model->insert_records('rm_booking_service',$service);
				}
			}//rs_booking_pattern
			$rs_booking_pattern=$this->Home_model->fetch_details('rs_isDelete=0 AND rs_id='.$booking['rb_resort_id'].'','rm_resort');
			//print_r($rs_booking_pattern);
			if($rs_booking_pattern[0]['rs_booking_pattern']==1){
				$this->session->set_userdata('booking_records',$booking_id);
				$this->load->view('payment/dataForm.php');
			}
			else{
				$this->session->set_userdata('booking_records',$booking_id);
				redirect('Booking/send_inquiry');
			}
			//redirect('payBook');	
		}

		public function send_inquiry()
		{
			$data['booking_id'] =  $this->session->userdata('booking_records');

			$data['booking_details'] = $this->Home_model->fetch_details(array('rb_id'=>$data['booking_id']),'rm_booking'); 
			$data['user_details'] = $this->Home_model->fetch_details(array('bu_id'=>$data['booking_details'][0]['rb_user_id']),'rm_booking_user');
			$data['resort_details'] = $this->Home_model->fetch_details(array('rs_id'=>$data['booking_details'][0]['rb_resort_id']),'rm_resort');
			$display_name1="";
			if($data['booking_details'][0]['rb_type'] == 1){
				$data['room_details'] = $this->Home_model->fetch_details(array('rr_id'=>$data['booking_details'][0]['rb_roomtype_id']),'rm_resort_roomtype');
				$display_name1=$data['room_details'][0]['rr_display_name'];

			}else{
				$data['package_details'] = $this->Home_model->fetch_details(array('pk_id'=>$data['booking_details'][0]['rb_package_id']),'rm_package');
				$display_name1=$data['package_details'][0]['pk_name'];
			}

			$subject = "Inquiry For Booking";
			$header = "<center><img src='".base_url()."assets/images/feetup_logo.png' style='width:25%;'><h2>Inquiry for Booking</h2></center><br> <br>";
			$msg="<div style='border:1px solid;border-color: #666;padding: 10px;font-size: larger;'><b>Inquiry from :</b><br>Customer Name: <b>".$data['user_details'][0]['bu_user_name']."</b>,<br>Customer Email: <b>".$data['user_details'][0]['bu_user_email']."</b>,<br>Customer Contact No: <b>".$data['user_details'][0]['bu_user_contact']."</b>,<br>Customer Address: <b>".$data['user_details'][0]['bu_user_address'].",<br</b><br>Inquiry for as follows:<br><br>Resort Name : <b>".$data['resort_details'][0]['rs_display_name']."</b><br>Inquiry for : <b>".$display_name1."</b> <br>Resort Address : <b>".$data['resort_details'][0]['rs_address']."-".$data['resort_details'][0]['rs_pincode']."</b><br><br></div>";
			$content="".$header."".$msg;

			$mail_status = $this->Home_model->send_mail('applicationdevelopment@nimble-esolutions.com',$subject,$content);
			//print_r($content);die();
			if($mail_status == true){
				$this->session->set_flashdata('active',1);
		        $this->session->set_flashdata('title',"");
		        $this->session->set_flashdata('text',"Inquiry has been send successfully. Our feetup representative will contact you for Confirmation."); 
		        $this->session->set_flashdata('type',"success");
				redirect('/');	
			}else{
				$this->session->set_flashdata('active',1);
		        $this->session->set_flashdata('title',"Sorry.");
		        $this->session->set_flashdata('text',"Some issue mail is not send. We will contact us for Confirmation."); 
		        $this->session->set_flashdata('type',"warning");
				redirect('/');	
			}

		}

		public function booking_payment()
		{			
			$data['booking_id'] = $this->session->userdata('booking_records');
			$data['booking_details'] = $this->Home_model->fetch_details(array('rb_id'=>$data['booking_id']),'rm_booking'); 
			$data['user_details'] = $this->Home_model->fetch_details(array('bu_id'=>$data['booking_details'][0]['rb_user_id']),'rm_booking_user');
			$data['resort_details'] = $this->Home_model->fetch_details(array('rs_id'=>$data['booking_details'][0]['rb_resort_id']),'rm_resort');
			if($data['booking_details'][0]['rb_type'] == 1){
				$data['room_details'] = $this->Home_model->fetch_details(array('rr_id'=>$data['booking_details'][0]['rb_roomtype_id']),'rm_resort_roomtype');
			}else{
				$data['package_details'] = $this->Home_model->fetch_details(array('pk_id'=>$data['booking_details'][0]['rb_package_id']),'rm_package');
			}
			$data['amenities_details'] = $this->Home_model->fetch_details(array('rra_roomtype_id'=>$data['booking_details'][0]['rb_roomtype_id'],'rra_isDelete'=>0),'rm_resort_room_amenity');
			$data['services_details'] = $this->Home_model->fetch_details(array('bs_booking_id'=>$data['booking_id'],'bs_isDelete'=>0),'rm_booking_service');
			$subject = "Booking Details";
			$header = "<center><img src='".base_url()."assets/images/feetup_logo.png' style='width:25%;'><h2>Confirmation Voucher</h2><h4 style='font-weight:100;'> Voucher Id : <b>".$data['user_details'][0]['bu_id']."</b> || Voucher Date : <b>".date('d M Y')."</b></h4></center><br>Dear, <br>".$data['user_details'][0]['bu_user_name'].",<br>".$data['user_details'][0]['bu_user_email'].",<br>".$data['user_details'][0]['bu_user_contact'].",<br>".$data['user_details'][0]['bu_user_address'].",<br><br>Your booking details are as follows:<br><br>Resort Name : <b>".$data['resort_details'][0]['rs_display_name']."</b><br>Resort Address : <b>".$data['resort_details'][0]['rs_address']."-".$data['resort_details'][0]['rs_pincode']."</b><br>CheckIn Time : <b>".date("g:i A", strtotime($data['resort_details'][0]['rs_checkin_time']))."</b> || CheckOut Time : <b>".date("g:i A", strtotime($data['resort_details'][0]['rs_checkout_time']))."</b><br><br>";
			if($data['booking_details'][0]['rb_type'] == 1){
				$room = "<b>Room Details : </b><br><table style='border:1px solid;border-color: #666;' class=detailsData' cellpadding='5px'>
					<tr style='border:1px solid;border-color: #666;'>
						<td style='border:1px solid;border-color: #666; '><b>Room type</b></td>
						<td style='border:1px solid;border-color: #666;'><strong>Guests</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Extra Guets</strong>
						<td style='border:1px solid;border-color: #666;'><strong>No of Rooms</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Checkin Date</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Checkout Date</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Room Charges</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Extra Guests Charges</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Total Amount</strong></td>
					</tr>
					<tr>
						<td style='border:1px solid;border-color: #666;'>".$data['room_details'][0]['rr_display_name']."</td>
						<td style='border:1px solid;border-color: #666;'><center>".$data['booking_details'][0]['rb_guest']."</center></td>
						<td style='border:1px solid;border-color: #666;'><center>".$data['booking_details'][0]['rb_extra']."</center></td>
						<td style='border:1px solid;border-color: #666;'><center>".$data['booking_details'][0]['rb_rooms']."</center></td>
						<td style='border:1px solid;border-color: #666;'>".date('d M Y',strtotime($data['booking_details'][0]['rb_start_date']))."</td>
						<td style='border:1px solid;border-color: #666;'>".date('d M Y',strtotime($data['booking_details'][0]['rb_till_date']))."</td>
						<td style='border:1px solid;border-color: #666;'><center>".number_format($data['booking_details'][0]['rb_total_amount'])."/-</center></td>
						<td style='border:1px solid;border-color: #666;'><center>".number_format($data['booking_details'][0]['rb_extra_total_amount'])."/-</center></td>
						<td style='border:1px solid;border-color: #666;'><center>".number_format($data['booking_details'][0]['rb_total_amount'] + $data['booking_details'][0]['rb_extra_total_amount'])."/-</center></td>
					</tr>
					</table><br>";
				$gst = "<br><br><b>Discount & GST Details : </b>
						<br><br>Discount given : <b>Rs.0/-</b> 
						<br>GST @ (".$data['room_details'][0]['rr_cgst']." + ".$data['room_details'][0]['rr_sgst'].") % : <b>Rs. ".number_format($data['booking_details'][0]['rb_tax_amount'])." /-</b>
						<br><br><b>Extra Services : </b><br>";

				$amenities = "<b>Amenities : </b><br><br><div class='row'>";
				for ($i=0; $i < count($data['amenities_details']); $i++) { 
					$amenity = $this->Home_model->fetch_details(array('am_id'=>$data['amenities_details'][$i]['rra_amenity_id']),'rm_amenity');
					$amenities .= "<span style='padding-left:3%;'><img src='".base_url()."/assets/images/check.png' style='width:1%;'> ".$amenity[0]['am_name']."</i></span>";

				}				

				$services = "<div class='row'>";
				for ($i=0; $i < count($data['services_details']); $i++) { 
					$serv = $this->Home_model->fetch_details(array('rrs_id'=>$data['services_details'][$i]['bs_rs_service_id']),'rm_resort_services');
					$serv_name = $this->Home_model->fetch_details(array('s_id'=>$serv[0]['rrs_service_id']),'rm_services');
					// print_r($this->db->last_query());
					$services .= "<img src='".base_url()."/assets/images/check.png' style='width:1%;'> ".$serv_name[0]['s_name']."</i>";
				}
				$services .= "<br>Extra Service Charge = <b>Rs. ".number_format($data['booking_details'][0]['rb_extra_ser_amt'])." /-</b>";
			}else if($data['booking_details'][0]['rb_type'] == 2){
				$room = "<b>Package Details : </b><br><table style='border:1px solid;border-color: #666;' class=detailsData' cellpadding='5px'>
					<tr style='border:1px solid;border-color: #666;'>
						<td style='border:1px solid;border-color: #666; '><b>Package Name</b></td>
						<td style='border:1px solid;border-color: #666;'><strong>Adults</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Children</strong>
						<td style='border:1px solid;border-color: #666;'><strong>No of Rooms</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Checkin Date</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Checkout Date</strong></td>
						<td style='border:1px solid;border-color: #666;'><strong>Room Charges</strong></td>
					</tr>
					<tr>
						<td style='border:1px solid;border-color: #666;'>".$data['package_details'][0]['pk_name']."</td>
						<td style='border:1px solid;border-color: #666;'>".$data['booking_details'][0]['rb_guest']."</td>
						<td style='border:1px solid;border-color: #666;'>".$data['booking_details'][0]['rb_child']."</td>
						<td style='border:1px solid;border-color: #666;'>".$data['booking_details'][0]['rb_rooms']."</td>
						<td style='border:1px solid;border-color: #666;'>".date('d M Y',strtotime($data['booking_details'][0]['rb_start_date']))."</td>
						<td style='border:1px solid;border-color: #666;'>".date('d M Y',strtotime($data['booking_details'][0]['rb_till_date']))."</td>
						<td style='border:1px solid;border-color: #666;'>".number_format($data['booking_details'][0]['rb_total_amount'])."/-</td>
					</tr>
					</table>
					<br>";
					$gst = "<br><br><b>Discount & GST Details : </b>
						<br><br>Discount given : <b>Rs.0/-</b> 
						<br>GST @ (".$data['package_details'][0]['pk_cgst']." + ".$data['package_details'][0]['pk_sgst'].") % : <b>Rs. ".number_format($data['booking_details'][0]['rb_tax_amount'])." /-</b>
						<br>";

					$amenities = "";
					$services = "";
				}else{

				}				
				$footer = "<br><br>Total Booking amount received :<b> Rs. ".number_format($data['booking_details'][0]['rb_amount'])." /-</b> <br><br><b>Cancellation Policy:</b><br>
						1. Cancellation charges are not applicable for off season weekdays.<br>
						2. Cancellation intimation will be accepted only when received on company Email or Cell No. and not at the resort.<br>
						3. Alternative dates will be offered or else full amount will be refunded if got in touch in 15 days before check in date.<br>
						4. More than 15 days before check-in date : <b>Rs. 200/- admin charges are applicable.</b><br>
						5. Between 15 days to 7 days : 50% of the total cost will be charged as cancellation/modification fee.<br>
						6. 7 days before check in date: no refund.<br>
						7. In case of no show : no refund.<br><br>
						<b>Refund Policies:</b><br>
							7 to 10 working days post intimation of cancellation.
						<br><br><br>Warm Regards,<br><img src='".base_url()."assets/images/feetup_logo.png' style='width:10%;'><br><b>sales@feetupholidays.com</b> ,<br><b>7030866443 / 7030866442</b> <br>";
			$msg = "".$header." ".$room." ".$amenities." ".$gst." ".$services."".$footer ."";
			// print_r($msg);die();
			switch ($this->session->userdata('pay_status')) {
				case 1:
					$mail_status = $this->Home_model->send_mail($data['user_details'][0]['bu_user_email'],$subject,$msg);
					// print_r($mail_status);die()
					if($mail_status == true){
						$this->session->set_flashdata('active',1);
				        $this->session->set_flashdata('title',"");
				        $this->session->set_flashdata('text',"Booking has been successfully done. please check your email for details."); 
				        $this->session->set_flashdata('type',"success");
						redirect('/');	
					}else{
						$this->session->set_flashdata('active',1);
				        $this->session->set_flashdata('title',"Sorry.");
				        $this->session->set_flashdata('text',"Some issue mail is not send. We will contact us for Confirmation."); 
				        $this->session->set_flashdata('type',"warning");
						redirect('/');	
					}
					break;
				case 3:
					$this->session->set_flashdata('active',1);
			        $this->session->set_flashdata('title',"Sorry.");
			        $this->session->set_flashdata('text',"Transaction has been aborted."); 
			        $this->session->set_flashdata('type',"warning");
					break;
				case 4:
					$this->session->set_flashdata('active',1);
			        $this->session->set_flashdata('title',"Sorry.");
			        $this->session->set_flashdata('text',"Transaction has been failure."); 
			        $this->session->set_flashdata('type',"warning");
					break;
				default:
					//$this->Home_model->send_mail($data['user_details'][0]['bu_user_email'],$subject,$msg);
					$this->session->set_flashdata('active',1);
			        $this->session->set_flashdata('title',"Sorry.");
			        $this->session->set_flashdata('text',"Transaction has been aborted."); 
			        $this->session->set_flashdata('type',"warning");
					break;
			}
			redirect('/');
		}

		public function room_verify()
		{
			$strt_date = $_POST['strt_date'];
			$end_date = $_POST['end_date'];
			$resort = $_POST['resort'];
			$rtype = $_POST['roomtype'];
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
                    $total_room = $this->db->query("SELECT SUM(rb_rooms) as rb_room  FROM rm_booking WHERE (rb_start_date <= '".$checkInDates."' AND rb_till_date > '".$checkInDates."') and rb_resort_id = ".$resort." and rb_rt_id = ".$room_details[0]['rr_rt_id']." and rb_isDelete = 0")->result_array();
                    $book_room = max($book_room,$total_room[0]['rb_room']);
                }
            }
			// $total_start_available_room = $this->db->query('SELECT SUM(rb_rooms) as strt_total_rooms, rb_rt_id FROM rm_booking where  rb_isDelete = 0 AND rb_roomtype_id ="'.$rtype.'" AND rb_resort_id = "'.$resort.'" AND (rb_till_date <= "'.date('Y-m-d',strtotime($end_date)).'" AND rb_start_date >= "'.date('Y-m-d',strtotime($strt_date)).'")')->result_array();
			// $total_start_available_room = $this->db->query('SELECT SUM(rb_rooms) as strt_total_rooms, rb_rt_id FROM rm_booking where  rb_isDelete = 0 AND rb_roomtype_id ="'.$rtype.'" AND rb_resort_id = "'.$resort.'" and (rb_start_date BETWEEN "'.date('Y-m-d',strtotime($strt_date)).'" and "'.date('Y-m-d',strtotime($end_date)).'" OR rb_till_date > "'.date('Y-m-d',strtotime($end_date)).'" AND rb_start_date < "'.date('Y-m-d',strtotime($strt_date)).'")')->result_array();
			// $total_book_start_till_available_room = $this->db->query("SELECT SUM(rb_rooms) as book_total_rooms FROM `rm_booking` WHERE (rb_start_date BETWEEN'".date('Y-m-d',strtotime($strt_date))."' and '".date('Y-m-d',strtotime($end_date))."' OR rb_till_date BETWEEN'".date('Y-m-d',strtotime($strt_date))."' and '".date('Y-m-d',strtotime($end_date))."') and rb_isDelete = 0 and rb_resort_id = ".$resort." AND rb_roomtype_id = ".$rtype."")->result_array();
			$data = $room_details[0]['rr_no_of_rooms'] - ($book_room);
			echo json_encode($data);
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
                    $total_room = $this->db->query("SELECT SUM(rb_rooms) as rb_room  FROM rm_booking WHERE (rb_start_date <= '".$checkInDates."' AND rb_till_date > '".$checkInDates."') and rb_resort_id = ".$resort." and rb_rt_id = ".$room_details[0]['rr_rt_id']." and rb_isDelete = 0")->result_array();
                    $book_room = max($book_room,$total_room[0]['rb_room']);
                }
            }   
			// $total_start_available_room = $this->db->query('SELECT SUM(rb_rooms) as strt_total_rooms, rb_rt_id FROM rm_booking where  rb_isDelete = 0 AND rb_roomtype_id ="'.$rtype.'" AND rb_resort_id = "'.$resort.'" AND (rb_till_date <= "'.date('Y-m-d',strtotime($end_date)).'" AND rb_start_date >= "'.date('Y-m-d',strtotime($strt_date)).'")')->result_array();
			// $total_start_available_room = $this->db->query('SELECT SUM(rb_rooms) as strt_total_rooms, rb_rt_id FROM rm_booking where  rb_isDelete = 0 AND rb_roomtype_id ="'.$rtype.'" AND rb_resort_id = "'.$resort.'" and (rb_start_date BETWEEN "'.date('Y-m-d',strtotime($strt_date)).'" and "'.date('Y-m-d',strtotime($end_date)).'" OR rb_till_date > "'.date('Y-m-d',strtotime($end_date)).'" AND rb_start_date < "'.date('Y-m-d',strtotime($strt_date)).'")')->result_array();
			$total_available_room = $room_details[0]['rr_no_of_rooms'] - ($book);
			print_r($total_available_room);die();
			return $total_available_room;
		}
		public function ccavRequestHandler()
		{
			$this->load->view('payment/ccavRequestHandler','');
		}

		public function ccavResponseHandler()
		{
			$this->load->view('payment/ccavResponseHandler','');
		}
	}
?>