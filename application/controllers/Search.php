<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Search extends CI_Controller
	{	
		function __constructor(){
			$this->start_date= '';
		}

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
			// print_r($data['start_date']);die();
			$this->load->view('Search/header',$data);
			$this->load->view('Search/search',$data);
			$this->load->view('Search/footer');
		}

		function fetch_lazy_data()
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
			$this->load->view('Search/header',$data);
			$this->load->view('Search/search',$data);
			$this->load->view('Search/footer');
		}

		function load_resort_data()
		{
			$output = '';
			$data = $this->Search_model->fetch_data($this->input->post('limit'),$this->input->post('start'),$this->input->post('type'),$this->input->post('dest'));
			if($data->num_rows() > 0){
				foreach($data->result() as $row){
					$resort_des = $this->Home_model->fetch_details(array('des_id'=>$row->rs_des_id,'des_isDelete'=>0),'rm_destination');
					$resort_img = $this->Home_model->fetch_details(array('im_resort_id' => $row->rs_id, 'im_isDelete' => 0, 'im_image_type' => 0), 'rm_image');
					$city = $this->Home_model->fetch_details(array('ct_id' => $row->rs_city), 'rm_cities');
					$state = $this->Home_model->fetch_details(array('st_id' => $row->rs_state), 'rm_state');
					$proprty_type = $this->Home_model->fetch_details(array('pt_id' => $row->rs_pt_id, 'pt_isDelete' => 0), 'rm_property_type');
					$person = $this->db->query("SELECT sum((rr_no_of_rooms * (rr_max_person + rr_extra_adult))) as total_person FROM `rm_resort_roomtype` where rr_rs_id =" . $row->rs_id . " and rr_isDelete = 0")->result_array();
					$rate = $this->db->query("SELECT min(rr_room_rate) as lowest_rate FROM `rm_resort_roomtype` where rr_rs_id = " . $row->rs_id . " and rr_isDelete = 0")->result_array();
					$records = $this->db->query("SELECT count(rr_id) as total_records FROM `rm_resort_roomtype` where rr_rs_id = " . $row->rs_id . " and rr_isDelete = 0")->result_array();
					$amenities = $this->Home_model->fetch_details(array('ra_rs_id'=>$row->rs_id,'ra_isDelete'=>0),'rm_resort_amenity');
					$amenity = '';
					if(!empty($amenities)){
						foreach($amenities as $amen){
							$amenityy = $this->Home_model->fetch_details(array('am_id'=>$amen['ra_am_id'],'am_isDelete'=>0),'rm_amenity');
							if(!empty($amenityy)){
								$amenity = "".$amenity."<div class='tooltip' style='display:inline-block;position:relative;'>
												<image src='".$amenityy[0]['am_icon']."' style='width:60%;'></image>
												<div class='top'>
													<h4 style='font-size: xx-small;'>".$amenityy[0]['am_name']."</h4>
													<i></i>
												</div>
											</div>";
							}
						}
					}
					$SEO_keyword = 'aspirevillastays';
					if(!empty($resort_img)){
						$img = "".$resort_img[0]['im_image_url']."";
					}else{
						$img = "".base_url()."assets/images/image-not-available.jpg";
					}
					$output = '					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hotel_details ">
						<a href="'.site_url('destinationsResort/'.$resort_des[0]['des_name'].'/'.$SEO_keyword.'/'.$row->rs_display_name.'/'.$this->input->post('start_date').'/'.$this->input->post('end_date').'/'.$this->input->post('adult').'/0').'">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 hotel_picture">
							<div id="myCarousel first" class="carousel slide">
								<div class="carousel-inner">
									<div class="item active">
										<img src="'.$img.'" alt="Resort Image Not Found" style="width:100%;height: 230px;">
									</div>
								</div>
							</div>
						</div>
						</a>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hotel_details_records">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h2 class="hotel_heading">'.substr($row->rs_display_name,0,23).'</h2>
								<h3 class="hotel_subheading"><i class="fa fa-map-marker" aria-hidden="true"></i> '. ucfirst(strtolower($city[0]['ct_name'])).", ". ucfirst(strtolower($state[0]['st_name'])).'</h3>
								<div class="features clearfix">	<br>
									<span style="font-size: smaller; border: 1px solid #707070 !important;padding: 3px 10px;border-radius: 5px;color: #000;"> <b>'.$row->rs_bedrooms.'</b> Bedrooms</span>	&nbsp &nbsp <span class="" style="color:#000;font-size: smaller;"><b>'.$person[0]['total_person'].'</b> Guests</span>
									<br><br>
									'.$amenity.'
								</div>		
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 hotel_details_records">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: end;">									
								<i class="fa fa-heart-o fa-lg" aria-hidden="true"></i><br>
								<h4 class="" style="color: #000">
									<br>
									<i class="fa fa-rupee fa-sm"></i>  <b>'.number_format($rate[0]['lowest_rate']).'</b> <span style="font-size: small;text-transform: none;">/night</span>
								</h4>	  
							</div>
						</div>
					</div>';
				  	echo $output;
				}
			}			
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
			print_r($data['start_date']);die();
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
				$data['start_date'] = date("d M Y");
				$data['till_date'] = date("d M Y", strtotime("+1 day"));
				$data['adult'] = "1";
				$data['child'] = "";
				$data['rooms'] = "";
				$this->load->view('Search/header',$data);
				$this->load->view('Search/search',$data);
				$this->load->view('Search/footer',$data);
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
				$data['start_date'] = date("d M Y");
				$data['till_date'] = date("d M Y", strtotime("+1 day"));
				$data['adult'] = "1";
				$data['child'] = "";
				$data['rooms'] = "";
				$this->load->view('Search/header',$data);
				$this->load->view('Search/search',$data);
				$this->load->view('Search/footer',$data);
			}else{
				redirect('allResort');
			}	
		}
	}
