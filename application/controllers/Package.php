<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Package extends CI_COntroller
	{
		public function index()
		{
			if(isset($_GET['pk']) && !empty($_GET['pk'])){
				$data['packageRecords'] = $this->Home_model->fetch_details("'".date('Y-m-d')."' BETWEEN pk_display_start_date and pk_display_end_date and pk_isDelete = 0 and pk_package_type_id IN( SELECT pt_id FROM rm_package_type where pt_name IN('".$_GET['pk']."'))",'rm_package');
				$data['packages'] = $this->Home_model->fetch_details(array('pt_isDelete'=>0),'rm_package_type');
				$data['resort'] = $this->Home_model->fetch_details(array('rs_isDelete'=>0),'rm_resort');
				$data['start_date'] = '';
				$data['till_date'] = '';
				$data['adult'] ='';
				$data['child'] ='';
				$data['rooms'] = $this->input->get('rooms');
				$data['packageType'] = explode(',',$_GET['pk']);
				$data['pckType'] = '"'.$_GET['pk'].'"';
				$data['resortType'] = '';
				$data['rest'] = '';
				$data['property'] = '';
				$data['type'] = '';
				// print_r($data['packageRecords']);
				// die();
				$this->load->view('Package/header',$data);
				$this->load->view('Package/package',$data);
				$this->load->view('Package/footer');
			}else{
				redirect('/');
			}
		}

		public function search_sorting_wise()
		{
			if((isset($_GET['pk']) && !empty($_GET['pk'])) || (isset($_GET['r']) && !empty($_GET['r']))){
				if(!empty($_GET['pk']) && !empty($_GET['r'])){
					$data['packageRecords'] = $this->Home_model->fetch_details("'".date('Y-m-d')."' BETWEEN pk_display_start_date and pk_display_end_date and pk_isDelete = 0 and pk_package_type_id IN( SELECT pt_id FROM rm_package_type where pt_name IN(".$_GET['pk'].")) and pk_resort_id IN( SELECT rs_id FROM rm_resort where rs_display_name IN(".$_GET['r']."))",'rm_package');
				}else if(!empty($_GET['pk'])){
					$data['packageRecords'] = $this->Home_model->fetch_details("'".date('Y-m-d')."' BETWEEN pk_display_start_date and pk_display_end_date and pk_isDelete = 0 and pk_package_type_id IN( SELECT pt_id FROM rm_package_type where pt_name IN(".$_GET['pk']."))",'rm_package');
				}else{
					$data['packageRecords'] = $this->Home_model->fetch_details("'".date('Y-m-d')."' BETWEEN pk_display_start_date and pk_display_end_date and pk_isDelete = 0 and pk_resort_id IN( SELECT rs_id FROM rm_resort where rs_display_name IN(".$_GET['r']."))",'rm_package');
				}
				$data['packages'] = $this->Home_model->fetch_details(array('pt_isDelete'=>0),'rm_package_type');
				$data['resort'] = $this->Home_model->fetch_details(array('rs_isDelete'=>0),'rm_resort');
				$data['packageType'] = explode(',',str_replace('"', '',$_GET['pk']));
				$data['pckType'] = $_GET['pk'];
				$data['resortType'] = explode(',',str_replace('"', '',$_GET['r']));
				$data['rest'] = $_GET['r'];
				$data['start_date'] = "";
				$data['till_date'] = "";
				$data['adult'] = "";
				$data['child'] = "";
				$data['rooms'] = "";
				$this->load->view('Package/header',$data);
				$this->load->view('Package/package',$data);
				$this->load->view('Package/footer');
			}else{
				redirect('/');
			}	
		}

		public function book_resort_package()
		{
			if(isset($_GET['pk']) && !empty($_GET['pk'])){
				$data['packageRecords'] = $this->Home_model->fetch_details("pk_name = '".$_GET['pk']."'and pk_isDelete = 0",'rm_package');
				$data['resort'] = $this->Home_model->fetch_details(array('rs_id'=>$data['packageRecords'][0]['pk_resort_id'],'rs_isDelete'=>0),'rm_resort');
				$data['amenities'] = $this->Home_model->fetch_details(array('ra_rs_id'=>$data['resort'][0]['rs_id'],'ra_isDelete'=>0),'rm_resort_amenity');
				$data['services'] = $this->Home_model->fetch_details(array('rrs_resort_id'=>$data['resort'][0]['rs_id'],'rrs_isDelete'=>0),'rm_resort_services');
				$data['rst_images'] = $this->Home_model->fetch_details(array('im_resort_id'=>$data['resort'][0]['rs_id'],'im_isDelete'=>0),'rm_image');
				$data['start_date'] = $_GET['st_date'];
				$data['till_date'] = $_GET['end_dates'];
				$data['adult'] = $_GET['adult'];
				$data['child'] = $_GET['child'];
				$this->load->view('pck_Booking/header',$data);
				$this->load->view('pck_Booking/pck_booking',$data);
				$this->load->view('pck_Booking/footer',$data);
			}else{
				redirect('/');
			}
		}
	}
?>