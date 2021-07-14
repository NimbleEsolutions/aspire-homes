<style type="text/css">
body {
  background-color: #ffffff;
  line-height:1.6;
}
h1,h2{
   font-family: Poppins !important;
   line-height: 1.6;
   font-size:26px;
   margin:0;
   font-weight:600;
               /*text-transform: uppercase;*/
}
.col-sm-1 {
    width: 11.33333333%;
}
h3,h4,h5,h6{
    font-family: Poppins !important;
    margin:0;
    /*text-transform: uppercase;*/
    font-size:18px;
}
.tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
.special{
	padding: 0;
}
.hotel_heading{
	text-transform: none;
    font-weight: 600;
}
.hotel_location{
	color: #646c73;
    padding: 0.2% 0.5%;
}
.hotel_review{
	padding: 0px;
}
.hotel_rating{
	padding: 1% 0px;
}
.hotel_rate{
	color: #646c73;
    padding: .5% 2%;
}
.service-list {
    list-style-type: none;
    margin-left:0px;
    padding-left:0px;
    display: inline-block;
}
.service-list p {
    text-align: right; 
    display:inline-block;
    padding: 0;
}
.service-list img
{
	float:left;
}
.inner-header-agile {
    padding: 0em 0 0em 0.6em;
    /*border-top: 1px solid;*/
}
.navi_title{
	padding: 1%;
    /* background: #ffffff; */
    /*border-top: 1px solid #e2dfdf;*/
    color: #000000;
    font-weight: bold;
    /*text-decoration: underline;*/
}
.navi_details{
	padding: 2%;
}
.resort_des{
	text-align: justify;
    font-size: medium;
}
.no-bullets {
    list-style-type: none;
}
.fa-lg{
	color: #64c18e;
}
.modal-backdrop.in{
	opacity: 0;
}
.room_details{
	background: white;
	padding: 2% 1%;
	border-radius: 5px;
	margin-bottom: 2%;
	box-shadow: 2px 1px 2px 2px #ddd;
}
.room_details:hover{
	box-shadow: 0 0 4px 4px #ddd;
}
.room_heading{
	color: #333333;
    font-weight: bold;
    font-size: 19px;
    line-height: 21px;
    padding: 0px 0px 1% 1.5%;
    margin: 0;
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-transform: none;
}
.room_subheading{
    color: #000000;
    font-size: 15px;
    font-weight: bold;
    line-height: 15px;
    padding: 0px 0px 1% 1.5%;
    margin: 5px 0 0;
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    text-transform: none;
}
.room_price_records{
	padding: 10% 0px 0px 0px;
	text-align: right;
}
.hotel_heading img{
	width: 10%;
	transform: rotate(-10deg);
}
.tripAdvisor{
	width: 15%;
}
#packageDetails{
	width: 8%;
	transform: rotate(-10deg);
	float: right;
}
iframe{
	width: 100%;
}
video{
	width: 100%;
    height: fit-content;
}
.lSSlideOuter .lSPager.lSGallery li.active, .lSSlideOuter .lSPager.lSGallery li:hover{
	border:2px solid #f36d21;
}
.carousel-inner {
    border-radius: 1%;
}
#carousel-custom {
    /* margin-top:  10px; */
    width: 100%;
}
#carousel-custom .carousel-indicators {
    margin: 10px 0 0;
    overflow: auto;
    position: static;
    text-align: left;
    white-space: nowrap;
    width: 100%;
}
#carousel-custom .carousel-indicators li {
    background-color: transparent;
    -webkit-border-radius: 0;
    border-radius: 0;
    display: inline-block;
    height: auto;
    margin: 0 !important;
    width: 15%;
}
#carousel-custom .carousel-indicators li img {
    display: block;
    opacity: 0.5;   
}
#carousel-custom .carousel-indicators li.active img {
    opacity: 1;
}
#carousel-custom .carousel-indicators li:hover img {
    opacity: 0.75;
}
#carousel-custom .carousel-outer {
    position: relative;
}
#carousel-custom .carousel-control.left {
    background-image: none;
    width: 54px;
    height: 54px;
    top: 45%;
    left: 20px;
    margin-top: -27px;
    line-height: 54px;
    /*border: 2px solid #fff;*/
    opacity: 1;
    text-shadow: none;
    -webkit-transition: all 0.2s ease-in-out 0s;
    -o-transition: all 0.2s ease-in-out 0s;
    transition: all 0.2s ease-in-out 0s;
}
#carousel-custom .carousel-control.right {
    background-image: none;
    width: 54px;
    height: 54px;
    top: 45%;
    right: 20px;
    margin-top: -27px;
    line-height: 54px;
    /*border: 2px solid #fff;*/
    opacity: 1;
    text-shadow: none;
    -webkit-transition: all 0.2s ease-in-out 0s;
    -o-transition: all 0.2s ease-in-out 0s;
    transition: all 0.2s ease-in-out 0s;
}
.text-block {
	position: absolute;
    bottom: 15px;
    right: 15px;
    background-color: #ffffff;
    color: #000000;
    padding: 0.5% 2%;
    border: 1.5px solid #ffffff;
    border-radius: 10px;
    font-weight: 600;
}
.text-block a{
  	color: #ffffff;
}
.amenities_section{
	padding-left: 10px;
	padding-right: 10px;
}
.tooltip {
    display:inline-block;
    position:relative;
    /* border-bottom:1px dotted #666; */
    /* text-align:left; */
	opacity: unset;
}

.tooltip .top {
	min-width: max-content;
    top:-5px;
    left:50%;
    transform:translate(-50%, -100%);
    padding:10px 10px;
    color:#ffffff;
    background-color:#000000;
    font-weight:normal;
    font-size:10px;
    border-radius:8px;
    position:absolute;
    z-index:99999999;
    box-sizing:border-box;
    box-shadow:0 1px 8px rgba(0,0,0,0.5);
    display:none;
}

.tooltip:hover .top {
    display:block;
}

.tooltip .top i {
    position:absolute;
    top:100%;
    left:50%;
    margin-left:-12px;
    width:24px;
    height:12px;
    overflow:hidden;
}

.tooltip .top i::after {
    content:'';
    position:absolute;
    width:12px;
    height:12px;
    left:50%;
    transform:translate(-50%,-50%) rotate(45deg);
    background-color:#000000;
    box-shadow:0 1px 8px rgba(0,0,0,0.5);
}
@media (max-width: 400px){
	.hotel_heading img{
		width: 15%;	
	}
	.tripAdvisor{
		width: 30%;
	}
	#packageDetails{
		width: 16%;
	}
	.flex-control-nav {
	    display: none;
	}
}
@media (min-width:450px and max-width: 800px){
	.hotel_heading img{
		width: 10%;	
	}
	.tripAdvisor{
		width: 15%;
	}
	#packageDetails{
		width: 10%;
	}
	.flex-control-nav {
	    display: none;
	}
}
@media (min-width: 768px){
	.col-sm-1 {
	    /*width: 8%;*/
	}
	.column {
  float: left;
  width: 25%;
  padding: 0 10px 10px;
}
.card {
  box-shadow: 1px 4px 8px 1px rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffffff;
}
}
</style>
<?php $CI = &get_instance(); 
	$property_type = $CI->Home_model->fetch_details(array('pt_id'=>$resort[0]['rs_pt_id']),'rm_property_type');
	$person = $CI->db->query("SELECT sum((rr_no_of_rooms * (rr_max_person + rr_extra_adult))) as total_person FROM `rm_resort_roomtype` where rr_rs_id =".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array();
	$rate = $CI->db->query("SELECT min(rr_room_rate) as lowest_rate FROM `rm_resort_roomtype` where rr_rs_id = ".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array();
?>
<div class="special featured" >
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12" style="padding-top: 0px;padding-right: 0px;">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rst_gallery" style="padding-top: 0px;padding-right: 0px;padding-left:0px;">
					<div class="demo">
						<div class="item">            
							<div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details" style="padding:1%;padding-top: 0;">
								<div id="carousel-custom" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<?php $j = 1; foreach ($rst_images as $key) {?>
										<div class="item <?php if($j == 1){ echo "active"; }?>" style="height: 450px;">
										<img src="<?php echo $key['im_image_url'] ?>" alt="..." class="img-responsive" style="height: 450px;width:100%;">
										<div class="text-block">
											<!-- <a href="<?php echo $resort[0]['rs_gallery_link'] ?>" target="_blank"><p>View All Images</p></a> -->
											<span>&nbsp <?php echo $resort[0]['rs_type']; ?> &nbsp | &nbsp  <?php echo $resort[0]['rs_bedrooms']; ?> Bedrooms &nbsp | &nbsp <i class="fa fa-users"></i> <?php if(!empty($person)){echo $person[0]['total_person'];}else{ echo "0";} ?> max guests &nbsp </span>
										</div>
										</div>
									<?php $j++;} ?>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
									<i class="fa fa-chevron-left"></i>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
									<i class="fa fa-chevron-right"></i>
									<span class="sr-only">Next</span>
								</a>			  
								
								<!-- Indicators -->
								<ol class="carousel-indicators visible-sm-block hidden-xs-block visible-md-block visible-lg-block hidden">
									<?php $j = 0; foreach ($rst_images as $key) {?>
										<li data-target="#carousel-custom" data-slide-to="<?php echo $j; ?>" class="hidden <?php if($j == 0){ echo "active"; }?>" >
											<img src="<?php echo $key['im_image_url'] ?>" alt="..." class="img-responsive">
										</li>
										<?php $j++;} ?>
								</ol> 
								</div>  
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fixme">
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<h2 class="hotel_heading" style="display: flex;"><?php echo ucfirst(strtolower($resort[0]['rs_display_name'])); ?>
						</h2>
						<?php $city = $CI->Home_model->fetch_details(array('ct_id'=>$resort[0]['rs_city']),'rm_cities'); ?>
						<?php $state = $CI->Home_model->fetch_details(array('st_id'=>$resort[0]['rs_state']),'rm_state'); ?>						
						<p class="hotel_location"> <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo ucfirst(strtolower($city[0]['ct_name'])); ?>, <?php echo ucfirst(strtolower($state[0]['st_name'])); ?></p>
						
						<?php if(!empty($resort[0]['rs_tripadviser_link'])){ ?>
						<a href="<?php echo $resort[0]['rs_tripadviser_link']; ?>" target="_blank"><img class="tripAdvisor" src="<?php echo base_url() ?>assets/images/TripAdvisor.png"></a>
						<?php } ?>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: right;float: right;">
						<p style="padding-top: 1%;"><button type="button" data-toggle="modal" style="border: none;background-color: transparent;font-size:large;color: #ec0868;" data-id="2" data-target="#social_share"><i class="fa fa-share-alt" aria-hidden="true" >&nbsp;</i>Share</button>&nbsp; &nbsp;
						<a id="bookmark-this" href="#" title="Bookmark This Page" style="border: none;background-color: transparent;color: #ec0868;font-size:large"><i class="fa fa-heart-o" aria-hidden="true"></i> <span style="text-decoration: underline;">Save</span></a></p>
					</div>
				</div>
					

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="amenitiesFacilities">
					<!-- <h3 class="navi_title">Popular Amenities</h3> -->
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details" style="text-align: center;">
						<div class="row" style="padding: 1rem 0rem;">
							<?php foreach ($amenities as $key) {?>
								<?php $amenity = $CI->Home_model->fetch_details(array('am_id'=>$key['ra_am_id'],'am_isDelete'=>0),'rm_amenity');
								if(!empty($amenity)){ ?>
								<div class="col-sm-1 amenities_section">
									<?php if(empty($amenity[0]['am_icon'])){?>
										<i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i>
										<?php }else{?>
											<div class="tooltip" style="display:inline-block;position:relative;">
												<image src="<?php echo $amenity[0]['am_icon']; ?>"></image>
												<div class="top">
													<h4 style="font-size: small;"><?php echo $amenity[0]['am_name'] ?></h4>
													<i></i>
												</div>
											</div>
										<?php }?> 
									<?php } ?>
								</div>
							<?php } ?>
							</ul>
						</div>
						<div class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
							<br>
							<button type="button" data-toggle="modal" data-id="2" data-target="#all_amenities" style="font-size: medium;color: #ec0868;padding: 0px 1%;background-color: transparent;border: none;">View All Amenities</button>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="aboutUs">
					<h3 class="navi_title">About Villa</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<p class="resort_des"><?php echo $resort[0]['rs_description']; ?></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="aboutUs">
					<h3 class="navi_title">About Locality</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<p class="resort_des"><?php echo $resort[0]['rs_additional_info']; ?></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="">
					<h3 class="navi_title">How to Reach</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;">
							<?php echo $resort[0]['rs_googlemap_pin'];	?>
							<!-- <button type="button" data-toggle="modal" data-id="2" data-target="#" style="margin-top:5%;font-size: medium;color: #f47320;padding: 0.5% 1%;background-color: #ffffff;border: 1px solid #000000;border-radius: 8px;">More About The Location</button> -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden"><br>
							<h3 class="navi_title">Address</h3><br>
							<?php $city = $CI->Home_model->fetch_details(array('ct_id'=>$resort[0]['rs_city']),'rm_cities'); ?>
							<?php $state = $CI->Home_model->fetch_details(array('st_id'=>$resort[0]['rs_state']),'rm_state'); ?>
							<h4><?php echo $resort[0]['rs_address']; ?></h4>
							<h4><?php echo ucfirst(strtolower($city[0]['ct_name'])); ?>, <?php echo ucfirst(strtolower($state[0]['st_name'])); ?> <?php echo $resort[0]['rs_pincode']; ?></h4>
							<h4><?php  ?></h4>
							<br>
							<!--<h2 style="text-decoration: underline;">How to reach?</h2>-->
							<?php $reach_by = explode('#', $resort[0]['rs_reach_info']);?>
							<br>
							<ul style="padding-left: 5%;font-size: small;">
								<?php if(!empty($resort[0]['rs_reach_info'])){  for ($i=0; $i < count($reach_by); $i++) { ?>
									<li><?php echo $reach_by[$i]; ?></li>
								<?php } }?>
							</ul>
							
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 hidden"><br>
							<h3 class="navi_title">Things To Know</h3><br>
							<div class="row" style="padding-left: 2%;">
							<?php $to_do_list = explode('#', $resort[0]['rs_to_do']);?>
							<ul style="padding-left: 2%;font-size: medium;">

								<?php if(!empty($resort[0]['rs_to_do'])){ for ($i=0; $i < count($to_do_list); $i++) { ?>
									<div class="col-sm-6">
										<li><?php echo $to_do_list[$i]; ?></li>									
									</div>
								<?php } }?>
							</ul>
							</div>
							<br>					
						</div>
					</div>
					
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden" id="aboutUs">
					<h3 class="navi_title">Sleeping Arrangements</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
						<div class="row">
							<div class="col-sm-6 hidden">
								<h3 class="navi_title">Quick Facts</h3> 
								<div class="col-sm-4" style="border: 1px solid #dddddd;border-radius: 7%;margin: 3% 2% 1% 1%;text-align: left;line-height: 4;padding: 4% 4%;">
									<img src="<?php echo base_url() ?>assets/images/check-out-small.png" style="padding-bottom: 17%;">
									<h3 style="padding-bottom: 4%;font-size:16px;"><?php echo date("g:i A", strtotime("".$resort[0]['rs_checkin_time']."")); ?></h3>
									<h4 style="font-size:16px;">Check In Time</h4>
								</div>
								<div class="col-sm-4" style="border: 1px solid #dddddd;border-radius: 7%;margin: 3% 2% 1% 1%;text-align: left;line-height: 4;padding: 4% 4%;">
									<img src="<?php echo base_url() ?>assets/images/check-in-small.png" style="padding-bottom: 17%;">
									<h3 style="padding-bottom: 4%;font-size:16px;"><?php echo date("g:i A", strtotime("".$resort[0]['rs_checkout_time']."")); ?></h3>
									<h4 style="font-size:16px;">Check Out Time</h4>
								</div>
							</div>
							<div class="col-sm-4">
								<!--<h3 class="navi_title">Sleeping Arrangements</h3> -->
								
							</div>
						</div>
					</div>
				</div>
				<?php if(!empty($sleep_arrange)){?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="aboutUs">
					<h3 class="navi_title">Sleeping Arrangements</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
						<div class="row">
						<?php foreach($sleep_arrange as $sleep){ 
							$amenity = $CI->Home_model->fetch_details(array('am_id'=>$sleep['ra_room_amt_id'],'am_isDelete'=>0),'rm_amenity');
						?>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
								<h3 style="padding: 0 0 0.7rem 0.2rem;"><?= $sleep['ra_room_name']; ?></h3> 
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sleeping_arrangement" style="text-align: center;padding: 8px;color: #2368A2;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #1A4971;opacity: 0.9;">
									<span> <?php if($sleep['ra_quantity'] != 0){ ?> <b> <?= $sleep['ra_quantity'];?> </b><i class="fa fa-times" aria-hidden="true"></i> <?php } ?><img src="<?= $amenity[0]['am_icon']; ?>" alt="" style="width: 20%;"> <?= $amenity[0]['am_name']; ?></span>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
				<?php } ?>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="aboutUs">
					<h3 class="navi_title">Things To Know</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php $to_do_list = explode('#', $resort[0]['rs_to_do']);?>
							<ul style="padding-left: 2%;font-size: medium;">
								<?php if(!empty($resort[0]['rs_to_do'])){ for ($i=0; $i < count($to_do_list); $i++) { ?>
									<div class="col-sm-6">
										<li><?php echo $to_do_list[$i]; ?></li>									
									</div>
								<?php } }?>
							</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden" id="">
					<h3 class="navi_title">Video</h3>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video navi_details">
						<!-- <video controls>
						<source src="<?php echo $resort[0]['rs_video_link']; ?>" type="video/mp4">
						</video> -->
						<?php if(!empty($promotion)){ 
							if($promotion[0]['ps_for'] == 1){ ?>
								<div class="demo">
									<div class="item">            
										<div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
											<div id="carousel-custom" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner" role="listbox">
												<?php $j = 1; foreach ($promotion as $key) {?>
													<div class="item <?php if($j == 1){ echo "active"; }?>">
													<img src="<?php echo $key['ps_path'] ?>" alt="..." class="img-responsive">
													</div>
												<?php $j++;} ?>
												</div>
												<!-- Controls -->
												<a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
													<i class="fa fa-chevron-left"></i>
													<span class="sr-only">Previous</span>
												</a>
												<a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
													<i class="fa fa-chevron-right"></i>
													<span class="sr-only">Next</span>
												</a>
											</div>			  
										</div>
									</div>
								</div>
							<?php }else{ ?>
								<?php echo $promotion[0]['ps_path']; ?>
							<?php } ?>
						<?php }else{?>
							<iframe height="473" src="https://www.youtube.com/embed/Ne22L_Db1Xg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%;"><img src="<?=base_url()?>assets/images/watch.jpg" alt="" class="img-responsive" /></iframe>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class="theme-config">
					<div class="theme-config-box verify" id="spin">
						<div class="skin-settings">
							<form class="form-horizontal" method="post" id="callRequest" action="#" style="padding:0px 5% 1%;">
								<div class="form-group">
									<!-- <h2 style="text-transform: none;"> &nbsp Request a Call</h2> -->
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label class="control-label">Dates</label>
										<div class="input-group date" >
				                        	<input type="text" name="form_dates" class="form-control" placeholder="Check In" value="<?php echo $start_date; ?>" style="height: 45px;border-right: none;" ><span class="input-group-addon" style="border-left: none;border-right: none;background:transparent;font-size: 21px;"><i class="fa fa-long-arrow-right"></i></span>
											<input type="text" name="till_dates" class="form-control" placeholder="Check Out" value="<?php echo $till_date; ?>" style="height: 45px;border-left: none;">
				                    	</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label class="control-label">Guests</label>
										<select class="form-control" name="adult" style="height: 45px;">
											<option value="">Guests</option>
											<?php for ($i=1; $i <= 30; $i++) { ?>
												<option value="<?=  $i; ?>" <?php if($adult == $i){ echo "selected"; }?>><?=  $i; ?> Guests</option>";
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group" style="margin-bottom: 0;">
									<div class="col-sm-12" style="font-size: 2.5rem;font-weight: 600;color: #212934 !important;text-align: center;">
										<i class="fa fa-rupee"> </i> <span> <?php if(!empty($rate)){echo number_format($rate[0]['lowest_rate']);} ?></span>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12"><br>
									<a href="<?php echo site_url('preVerify?stDate='.$start_date.'&tlDate='.$till_date.'&adult='.$adult.'&child='.$child.'&room=1&extra=&rt='.$room[0]['rr_id'].'&r='.$resort[0]['rs_display_name'].'') ?>"><span class="btn btn-primary" style="width: 100%;font-size: large;font-weight: 600;">Proceed to Booking</span></a>
									</div>
									<div class="col-sm-12">
										<p style="font-size: 11px;font-family: 'Poppins';text-align: center;padding: 0.5rem 1rem;color: red;">Prices are dynamic, but guaranteed till midnight</p>
									</div>
									<div class="col-lg-12">
										<p style="font-size: 11px;font-family: 'Poppins';text-align: center;padding: 0.5rem 1rem;">You will have to pay a <b> refundable </b> security deposit of <b> ₹ 7,143 per room</b></p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
						
		</div>
	</div>
</div>
<div class="guests-agile" style="padding-top: 1em;">
	<!--<a href="#" target="_blank"><span class="btn btn-primary" style="writing-mode: vertical-rl;transform: rotate(0deg); background-color: #f47720;border-color: #f47720;font-weight: bold;padding-left: 2%;font-size:large;width: 10px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-top-right-radius: 20px;-->
	<!--	    border-bottom-right-radius: 20px;">All Reviews</span></a>-->
	<a href="https://aspirevillastays.com/Blog/" target="_blank"><span class="btn btn-primary" style="writing-mode: vertical-rl;transform: rotate(0deg); background-color: #f47720;border-color: #f47720;font-weight: bold;padding-left: 2%;font-size:large;width: 10px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-top-right-radius: 20px;
		    border-bottom-right-radius: 20px;font: normal normal normal 14px/1 FontAwesome;font-size: 1.33333333em;"><i class="fa fa-list "></i> All Reviews</span></a>
	<h3 class="tittle">Guest's Reviews</h3>
	<div class="w3_agileits_testimonial_grids">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<?php if(!empty($review)){foreach ($review as $key) { ?>
					<li>
						<div class="w3_agileits_testimonial_grid">
							<i class="fa fa-quote-right" aria-hidden="true"></i>
							<p><?php echo $key['post_excerpt']; ?></p>
							<img src="<?=base_url()?>assets/images/aspire-logo-web.png" style="width: 10%;"alt=" " class="img-responsive" />
							<p><?php echo substr($key['post_title'],19,(strrpos($key['post_title'], 'stayed')-19)); ?></p>
						</div>
					</li>
					<?php } }else{ ?>
					<li>
						<div class="w3_agileits_testimonial_grid">
							<i class="fa fa-quote-right" aria-hidden="true"></i>
							<p><?php echo "Welcome to post first review."; ?></p>
							<img src="<?=base_url()?>assets/images/aspire-logo-web.png" style="width: 10%;" alt=" " class="img-responsive" />
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</section>
		
		<div id="all_amenities" class="modal fade" role="dialog" style="z-index:5000;">
            <div class="modal-dialog" style="width: 900px; margin: auto;z-index:5000;">
                <!-- Modal content-->               
                <div class="modal-content" style="border-radius: 35px;z-index:5000;">
                	<div class="modal-header">
				        <h3 class="modal-title text-center">Amenities</h3>
				    </div>
                    <div class="modal-body">                      
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">                      	
                    		<dl>
                        		<dt>Common Amenities</dt>
                        		<dd>Private entrance</dd>
                        		<dd>AC - Living/Dining Room, Bedroom 1 & Bedroom 2</dd>
                        		<dd>Power Backup - Inverter</dd>
                        		<dd>WiFi</dd>
                        		<dd>HD TV with DTH</dd>  
                        		<dd>Kitchen</dd>
                        		<dd>Washing Machine</dd>
                        		<dd>Locker</dd>
                        		<dd>Hair Dryer</dd>
                        		<dd>Iron</dd>
                        		<dd>Hot Water</dd>
                        		<dd>Bed linens - Sheets, Pillow covers & Duvet covers</dd>
                        		<dd>Bathroom Essentials - Towels, Shampoo, Shower gel & Toilet paper</dd>
                        		<dd>Laptop-friendly workspace</dd>
                        	</dl>                     		
                        	</div>
                        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">                     		
                        	<dl>
                        		<dt>Kitchen Amenities</dt>
                        		<dd>Microwave</dd>
                        		<dd>Refrigerator</dd>
                        		<dd>Freezer</dd>
                        		<dd>Oven</dd>
                        		<dd>Rice Cooker</dd>
                        		<dd>Gas Cooktop</dd>
                        		<dd>Crockery, Cutlery & Glassware for 6 </dd>
                        		<dd>Cooking Basics - Utensils, Oil, Salt & Pepper</dd>
                        	</dl>

                        	<dl>
                        		<dt>Logistics</dt>
                        		<dd>Luggage drop-off allowed</dd>
                        		<dd>Long-term stays allowed - 14+ days</dd>
                    		</dl>

                    		<dl>
                        		<dt>Facilities</dt>
                        		<dd>Free Parking on premises</dd>
                        		<dd>Swimming Pool - Shared</dd>
                        	</dl>                 

                        	</div>
                        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">                    
	                        	<dl>
	                        		<dt>Special Amenities (Chargeable)</dt>
	                        		<dd>Breakfast</dd>
	                        		<dd>Cook Services</dd>
	                        		<dd>Nanny Services</dd>
	                        		<dd>Self Drive 2/4 Wheelers </dd>
	                        		<dd>Taxi/Pickup-Drop/Sightseeing</dd>
	                        	</dl> 

	                        	<dl>
	                        		<dt>Home Safety</dt>
	                        		<dd>Fire Extinguisher</dd>
	                        		<dd>First aid kit</dd>
	                        	</dl> 

	                        	<dl>
	                        		<dt>Outdoor Space</dt>
	                        		<dd>BBQ Grill</dd>
	                        		<dd>Garden or Backyard</dd>
	                        		<dd>Patio or Balcony</dd>
                        		</dl>                    		
	                        </div>
                        </div>
                    </div>                        	
                    <div class="modal-footer text-center" style="border: none;">
                        <button type="submit" class="btn text-center" data-dismiss="modal">Ok</button>
                        <!-- <button type="button" class="btn btn-default " >OK</button> -->
                    </div>
                </div>               
            </div>
        </div>
        
        <div id="cancellation_policy" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 900px; margin: auto;">
                <!-- Modal content-->               
                <div class="modal-content" style="border-radius: 35px;">
                	<div class="modal-header">
				        <h3 class="modal-title text-center">Cancellation Policy</h3>
				    </div>
                    <div class="modal-body">                      
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul>
                                <li>Cancel before 11:00 AM and get a 50% refund for the nights that remain 24 hours after you cancel, minus the service and cleaning fees.</li>
                            </ul>
                        </div>
                    </div>                        	
                    <div class="modal-footer text-center" style="border: none;">
                        <button type="submit" class="btn text-center" data-dismiss="modal">Ok</button>
                        <!-- <button type="button" class="btn btn-default " >OK</button> -->
                    </div>
                </div>               
            </div>
        </div>
        
         <div id="social_share" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 300px; margin: auto;">
                <!-- Modal content-->               
                <div class="modal-content" style="border-radius: 35px;">
                	<div class="modal-header">
				        <h3 class="modal-title text-center">Share this place with friends and family</h3>
				    </div>
                    <div class="modal-body">                                          
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    		<div class="table-responsive">
                    			<table class="table table-striped">
                                <tbody>
                                	<tr>
                                		<td>
											<a href="<?php echo 'mailto:?Subject='.current_url().'&amp;  Body=I%20saw%20this%20and%20thought%20of%20you!%20'.current_url();?>" style="color:black"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;<b style="font-size: 15px"> Gmail </b></a>					
										</td>                                		
                                	</tr>

                                	<tr>
                                		<td>
											<a href="<?php echo 'http://www.facebook.com/sharer.php?u='.current_url();?>" style="color:black"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;<b style="font-size: 15px"> Facebook </b></a>					
										</td>                                		
                                	</tr>

                                	<tr>
                                		<td>
											<a href="<?php echo 'https://plus.google.com/share?url='.current_url();?>" style="color:black"><i class="fa fa-google-plus-official fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;<b style="font-size: 15px"> Google Plus </b></a>					
										</td>                                		
                                	</tr>

                                	<tr>
                                		<td>
											<a href="<?php echo 'http://www.linkedin.com/shareArticle?mini=true&amp; url='.current_url();?>" style="color:black"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;<b style="font-size: 15px"> Linked In</b></a>					
										</td>                                		
                                	</tr>

                                	<tr>
                                		<td>
											<a href="<?php echo 'https://twitter.com/share?url='.current_url().'&amp;hashtags=jobs ,Nigeria'?>" style="color:black"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;<b style="font-size: 15px"> Twitter</b></a>					
										</td>                                		
                                	</tr>

                                	<tr>
                                		<td>
											<a href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" style="color:black"><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i> &nbsp;&nbsp;<b style="font-size: 15px"> WhatsApp</b></a>					
										</td>                                		
                                	</tr>
                                </tbody>
                                </table>                    			
                    		</div>                    	
                    	</div> 
                    </div>                       	
                    <div class="modal-footer text-center" style="border: none;">
                        <button type="submit" class="btn text-center" data-dismiss="modal">Ok</button>
                        <!-- <button type="button" class="btn btn-default " >OK</button> -->
                    </div>
                </div>               
            </div>
        </div>
		<!-- //flexSlider -->
	</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #ffffff"><br>
	<h3 class="navi_title">Similar Properties</h3>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details" style="background-color: #ffffff">
        <div class="row">
			<?php
				$proprty_type_id=$resort[0]['rs_pt_id'];
				//print_r($property_type);
				$resort_dtl = $CI->Home_model->fetch_details(array('rs_pt_id'=>$proprty_type_id),'rm_resort');
				// print_r($resort_dtl);
				//echo "cnt= ". count($resort_dtl);

				foreach ($resort_dtl as $rst) { 
				$resort_des = $CI->Home_model->fetch_details(array('des_id'=>$rst['rs_des_id'],'des_isDelete'=>0),'rm_destination');
				$resort_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$rst['rs_id'],'im_isDelete'=>0,'im_image_type'=>0),'rm_image');
				$resort_seo = $CI->Home_model->fetch_details(array('rm_page'=>3,'rm_resort_id'=>$rst['rs_id']),'rm_seo');
				$SEO_keyword = '';
				if(empty($start_date)){ $start_date = "".date('d M Y')."";}
				if(empty($till_date)){ $till_date = "". date('d M Y', strtotime('+1 day', strtotime($start_date)))."";}
				if(empty($adult)){ $adult = 0;}
				if(empty($child)){ $child = 0;}
				if(empty($resort_seo)){ $SEO_keyword = 'aspirevillastays';}else{ $SEO_keyword = $resort_seo[0]['rm_keyword'];}
			?>
			<div id="myCarousel<?php echo $rst['rs_id'];?>" class="col-sm-3 col-md-3">
				<?php if (empty($resort_img)) { ?>
					<a href="<?php echo site_url('destinationsResort/'.$resort_des[0]['des_name'].'/'.$SEO_keyword.'/'.$rst['rs_display_name'].'/'.$start_date.'/'.$till_date.'/'.$adult.'/'.$child.'');?>" target="_blank">
					<div class="card">
						<img src="<?=base_url()?>assets/images/image-not-available.jpg" style="width:100%;height: 250px;">	        	
					</div>
				</a>
				<?php } else { //$j=1;								
				//	foreach ($resort_img as $key1) {?>
					<a href="<?php echo site_url('destinationsResort/'.$resort_des[0]['des_name'].'/'.$SEO_keyword.'/'.$rst['rs_display_name'].'/'.$start_date.'/'.$till_date.'/'.$adult.'/'.$child.'');?>" target="_blank">
						<div class="card">
							<h3 style="margin-bottom:2%;text-align: left;"><?php echo $rst['rs_name'];?></h3>
							<img src="<?php echo $resort_img[0]['im_image_url']?>" alt="test" style="width:100%;height: 250px;">
						</div>
					</a>
				<?php } ?>
			</div>
    	<?php } ?>
	</div>
</div>
