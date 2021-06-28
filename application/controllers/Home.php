<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller
	{
		
		public function index()
		{
			$data['flash']['active'] = $this->session->flashdata('active');
	    	$data['flash']['title'] = $this->session->flashdata('title');
	    	$data['flash']['text'] = $this->session->flashdata('text');
	    	$data['flash']['type'] = $this->session->flashdata('type');
			$data['destinations'] = $this->Home_model->fetch_details(array('des_isDelete'=>0),'rm_destination');
			$data['packages'] = $this->Home_model->fetch_details(array('pt_isDelete'=>0),'rm_package_type');
			$data['review'] = $this->db->query("SELECT * FROM avs20_posts WHERE post_status='publish' AND post_excerpt != '' AND ID IN (SELECT object_id FROM avs20_term_relationships WHERE term_taxonomy_id IN ( SELECT re_term_taxonomy_id FROM rm_review)) ORDER BY ID DESC Limit 10")->result_array();
			$data['promotion'] = $this->db->query("SELECT * FROM `rm_promotion_status` where ps_where = 1 and ps_rs_id = 0 and ps_isDelete = 0")->result_array();
			$data['SEO_status'] = $this->Home_model->fetch_details(array('rm_page'=>1),'rm_seo');
			$this->load->view('Home/header',$data);
			$this->load->view('Home/homepage',$data);
			$this->load->view('Home/footer',$data);
		}

		public function new_call_request()
		{
			$email = $this->input->post('request_email');
			$subject = "New Call Request Received.";
			$msg = "Hello,<br> New Request has been received for feetupholidays.com, Please check following details : <br> Name : ".$this->input->post('request_person')." <br> Contact : ".$this->input->post('request_contact')." <br> Email ID : ".$this->input->post('request_email')."";
			// print_r($msg);
			$mail_status = $this->Home_model->send_mail('applicationdevelopment@nimble-esolutions.com',$subject,$msg);
			// print_r($mail_status);die();
			if($mail_status == true){
				print_r("mail Send");
				$this->session->set_flashdata('active',1);
		         $this->session->set_flashdata('title',"");
		         $this->session->set_flashdata('text',"Thank you for requesting a call. You will be hearing from us soon."); 
		         $this->session->set_flashdata('type',"success");
				redirect('/');	
			}else{
				echo $this->email->print_debugger();
				print_r("mail Not Send");
				// $this->session->set_flashdata('active',1);
		  //       $this->session->set_flashdata('title',"Sorry.");
		  //       $this->session->set_flashdata('text',"Please call on office number for request."); 
		  //       $this->session->set_flashdata('type',"warning");
				// redirect('/');	
			}
			redirect('/');
		}

		function package_enquiry(){
			$subject = "New Package Booking Request Received.";
			$msg = "Hello,<br> New Request has been received for Aspire Stays, Please check following details : <br> Name : ".$this->input->post('contact_name')." <br> Contact : ".$this->input->post('contact_mobile')." <br> Email ID : ".$this->input->post('contact_email')." <br> Message : ".$this->input->post('contact_msg')."";
			$mail_status = $this->Home_model->send_mail('webapps@nimble-esolutions.com',$subject,$msg);
			print_r($mail_status);die();
			if($mail_status == true){
				echo "Mail Send";
			}else{
				echo "Please, try again later";
			}
		}
	}
?>