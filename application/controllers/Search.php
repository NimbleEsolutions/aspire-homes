<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Search extends CI_Controller
	{		
		public function index()
		{
			$data['resort'] = $this->Home_model->fetch_details(array('rs_isDelete'=>0),'rm_resort');
			$data['destinations'] = $this->Home_model->fetch_details(array('des_isDelete'=>0),'rm_destination');
			$data['proprty_type'] = $this->Home_model->fetch_details(array('pt_isDelete'=>0),'rm_property_type');
			$data['amenities'] = $this->Home_model->fetch_details(array('am_isDelete'=>0),'rm_amenity');
			$data['start_date'] = $this->input->get('form_dates');
			$data['till_date'] = $this->input->get('till_dates');
			$data['adult'] = $this->input->get('adult');
			$data['child'] = $this->input->get('child');
			$data['rooms'] = $this->input->get('rooms');
			$data['destination'] = '';
			$data['dest'] = '';
			$data['property'] = '';
			$data['type'] = '';
			// print_r($data);die();
			$this->load->view('Search/header',$data);
			$this->load->view('Search/search',$data);
			$this->load->view('Search/footer');
		}

		public function all_resort()
		{
			$data['resort'] = $this->Home_model->fetch_details(array('rs_isDelete'=>0),'rm_resort');
			$data['destinations'] = $this->Home_model->fetch_details(array('des_isDelete'=>0),'rm_destination');
			$data['proprty_type'] = $this->Home_model->fetch_details(array('pt_isDelete'=>0),'rm_property_type');
			$data['amenities'] = $this->Home_model->fetch_details(array('am_isDelete'=>0),'rm_amenity');
			$data['start_date'] = $this->input->post('form_dates');
			$data['till_date'] = $this->input->post('till_dates');
			$data['adult'] = $this->input->post('adult');
			$data['child'] = $this->input->post('child');
			$data['rooms'] = $this->input->post('rooms');
			$data['destination'] = '';
			$data['property'] = '';
			$data['dest'] = '';
			$data['type'] = '';
			$this->load->view('Search/header',$data);
			$this->load->view('Search/search',$data);
			$this->load->view('Search/footer');
		}

		public function search_destination_wise()
		{
			//print_r($this->uri->segment(3));die();
			if(!empty($this->uri->segment(3))){
				//$data['resort'] = $this->db->query("SELECT * FROM `rm_resort` where rs_des_id IN( SELECT des_id from rm_destination where des_name IN('".$this->uri->segment(2)."')) and rs_isDelete = 0")->result_array();
				$data['resort'] = $this->db->query("SELECT * FROM `rm_resort` where rs_des_id ='".$this->uri->segment(3)."' and rs_isDelete = 0")->result_array();
				$data['destinations'] = $this->Home_model->fetch_details(array('des_isDelete'=>0),'rm_destination');
				$data['proprty_type'] = $this->Home_model->fetch_details(array('pt_isDelete'=>0),'rm_property_type');
				$data['amenities'] = $this->Home_model->fetch_details(array('am_isDelete'=>0),'rm_amenity');
				//$data['SEO_status'] = $this->Home_model->fetch_details(array('rm_page'=>2,'rm_destination_id'=>$data['resort'][0]['rs_des_id']),'rm_seo');
				//print_r($data['SEO_status']);die();
				$data['destination'] = explode(',',$this->uri->segment(2));
				$data['dest'] = '"'.$this->uri->segment(2).'"';
				$data['property'] = '';
				$data['type'] = '';
			    //print_r($data['resort']);die();
				$data['start_date'] = "";
				$data['till_date'] = "";
				$data['adult'] = "";
				$data['child'] = "";
				$data['rooms'] = "";
				$this->load->view('Search/header',$data);
				$this->load->view('Search/search',$data);
				$this->load->view('Search/footer');
			}else{
				redirect('allResort');
			}	
		}

		public function search_sorting_wise()
		{
			if((isset($_GET['d']) && !empty($_GET['d'])) || (isset($_GET['type']) && !empty($_GET['type']))){
				if(!empty($_GET['d']) && !empty($_GET['type'])){
					$data['resort'] = $this->db->query('SELECT * FROM `rm_resort` where rs_des_id IN( SELECT des_id from rm_destination where des_name IN('.$_GET['d'].'))  and rs_pt_id IN( SELECT pt_id from rm_property_type where pt_name IN('.$_GET['type'].')) and rs_isDelete = 0')->result_array();
				}else if(!empty($_GET['d'])){
					$data['resort'] = $this->db->query('SELECT * FROM `rm_resort` where rs_des_id IN( SELECT des_id from rm_destination where des_name IN('.$_GET['d'].')) and rs_isDelete = 0')->result_array();
				}else{
					$data['resort'] = $this->db->query('SELECT * FROM `rm_resort` where rs_pt_id IN( SELECT pt_id from rm_property_type where pt_name IN('.$_GET['type'].')) and rs_isDelete = 0')->result_array();
				}
				$data['destinations'] = $this->Home_model->fetch_details(array('des_isDelete'=>0),'rm_destination');
				$data['proprty_type'] = $this->Home_model->fetch_details(array('pt_isDelete'=>0),'rm_property_type');
				$data['amenities'] = $this->Home_model->fetch_details(array('am_isDelete'=>0),'rm_amenity');
				$data['destination'] = explode(',',str_replace('"', '',$_GET['d']));
				$data['dest'] = $_GET['d'];
				$data['property'] = explode(',',str_replace('"', '',$_GET['type']));
				$data['type'] = $_GET['type'];
				$data['start_date'] = "";
				$data['till_date'] = "";
				$data['adult'] = "";
				$data['child'] = "";
				$data['rooms'] = "";
				$this->load->view('Search/header',$data);
				$this->load->view('Search/search',$data);
				$this->load->view('Search/footer');
			}else{
				redirect('allResort');
			}	
		}
	}
?>