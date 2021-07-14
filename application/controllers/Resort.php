<?php 
	defined('BASEPATH') OR exit('No direct scropt access allowed.');
	class Resort extends CI_Controller
	{
		public function index()
		{ 
			if(!empty($this->uri->segment(4))){
				$resort = str_replace('%20', ' ',$this->uri->segment(4));
				$data['resort'] = $this->Home_model->fetch_details(array('rs_display_name'=>$resort,'rs_isDelete'=>0),'rm_resort');
				// print_r($data['resort']);die();
				$data['room'] = $this->Home_model->fetch_details(array('rr_rs_id'=>$data['resort'][0]['rs_id'],'rr_isDelete'=>0),'rm_resort_roomtype');
				$data['amenities'] = $this->Home_model->fetch_details(array('ra_rs_id'=>$data['resort'][0]['rs_id'],'ra_isDelete'=>0),'rm_resort_amenity');
				$data['services'] = $this->Home_model->fetch_details(array('rrs_resort_id'=>$data['resort'][0]['rs_id'],'rrs_isDelete'=>0),'rm_resort_services');
				$data['rst_images'] = $this->Home_model->fetch_details(array('im_resort_id'=>$data['resort'][0]['rs_id'],'im_isDelete'=>0),'rm_image');
				$data['review'] = $this->db->query("SELECT * FROM avs20_posts WHERE post_status='publish' AND post_excerpt != '' AND ID IN (SELECT object_id FROM avs20_term_relationships WHERE term_taxonomy_id IN ( SELECT re_term_taxonomy_id FROM rm_review WHERE re_resort_id  = ".$data['resort'][0]['rs_id'].")) ORDER BY ID DESC Limit 10")->result_array();
				$data['package'] = $this->db->query("SELECT * FROM `rm_package` WHERE pk_resort_id = ".$data['resort'][0]['rs_id']." and '".date('Y-m-d')."' BETWEEN pk_display_start_date and pk_display_end_date and pk_isDelete = 0")->result_array();
				$data['promotion'] = $this->db->query("SELECT * FROM `rm_promotion_status` where ps_where = 2 and ps_rs_id = ".$data['resort'][0]['rs_id']." and ps_isDelete = 0")->result_array();
				$data['SEO_status'] = $this->Home_model->fetch_details(array('rm_page'=>3,'rm_resort_id'=>$data['resort'][0]['rs_id']),'rm_seo');
				$data['sleep_arrange'] = $this->Home_model->fetch_details(array('ra_resort_id'=>$data['resort'][0]['rs_id'],'ra_isDelete'=>0),'rm_rooms_amenity');
				if(empty($data['SEO_status'])){
					$data['SEO_keyword'] = 'feetupholidays';
				}else{ 
					$data['SEO_keyword'] = $data['SEO_status'][0]['rm_keyword'];}
				$data['resort_des'] = $this->Home_model->fetch_details(array('des_id'=>$data['resort'][0]['rs_des_id'],'des_isDelete'=>0),'rm_destination');
				// print_r($data['SEO_status']);die();
				$data['start_date'] = str_replace('%20', ' ',$this->uri->segment(5));
				$data['till_date'] = str_replace('%20', ' ',$this->uri->segment(6));
				$data['adult'] = $this->uri->segment(7);
				$data['child'] = $this->uri->segment(8);
				$this->load->view('Resort/header',$data);
				$this->load->view('Resort/resort',$data);
				$this->load->view('Resort/footer');
			}else{
				redirect('allResort');
			}			
		}
	}
?>