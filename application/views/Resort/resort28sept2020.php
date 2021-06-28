<style type="text/css">
body {
  background-color: #ffffff;
  line-height:1.6;
}
h1,h2{
    font-family: 'Lato', sans-serif!important;
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
    font-family: 'Roboto', sans-serif!important;
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
	padding: 1em 0;
}
.hotel_heading{
    
    font-weight: 700;
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
    border-bottom: 1px solid #8d949e;
}
.navi_title{
	padding: 1%;
    background: #ffffff;
    /*border-top: 1px solid #e2dfdf;*/
    color: #000000;
    font-weight: bold;
    text-decoration: underline;
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
	color: #705345;
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
    margin-top:  10px;
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
    top: 40%;
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
    top: 40%;
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
  	background-color: #f47720;
  	color: #ffffff;
  	padding: 0.5% 1%;
  	border: 1.5px solid #ffffff;
  	border-radius: 5%;
}
.text-block a{
  	color: #ffffff;
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
}
</style>
<?php $CI = &get_instance(); ?>
<div class="special featured" style="1em !important" >
	<div class="container" style="background-color: #ffffff;padding: 1% 2%;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fixme">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<h2 class="hotel_heading" style="display: flex;"><?php echo ucfirst(strtolower($resort[0]['rs_display_name'])); ?>
					</h2>
					<?php $city = $CI->Home_model->fetch_details(array('ct_id'=>$resort[0]['rs_city']),'rm_cities'); ?>
					<?php $state = $CI->Home_model->fetch_details(array('st_id'=>$resort[0]['rs_state']),'rm_state'); ?>
					<?php $property_type = $CI->Home_model->fetch_details(array('pt_id'=>$resort[0]['rs_pt_id']),'rm_property_type'); ?>
					<p class="hotel_location"><?php if(!empty($resort[0]['rs_village'])){echo ucfirst(strtolower($resort[0]['rs_village']))." ,"; }?><?php echo ucfirst(strtolower($city[0]['ct_name'])); ?>, <?php echo ucfirst(strtolower($state[0]['st_name'])); ?></p>
					<p class="hotel_location"><?php echo $property_type[0]['pt_name']; ?> 
						<?php $person = $CI->db->query("SELECT sum((rr_no_of_rooms * (rr_max_person + rr_extra_adult))) as total_person FROM `rm_resort_roomtype` where rr_rs_id =".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array(); ?>
      					&nbsp &nbsp<span><i class="fa fa-users"></i> <span class=""><?php if(!empty($person)){echo $person[0]['total_person'];}else{ echo "0";} ?> Guests</span></span>
					</p>
					<?php if(!empty($resort[0]['rs_tripadviser_link'])){ ?>
					<a href="<?php echo $resort[0]['rs_tripadviser_link']; ?>" target="_blank"><img class="tripAdvisor" src="<?php echo base_url() ?>assets/images/TripAdvisor.png"></a>
					<?php } ?>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: right;float: right;">
					<?php $rate = $CI->db->query("SELECT min(rr_room_rate) as lowest_rate FROM `rm_resort_roomtype` where rr_rs_id = ".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array();
					$records = $CI->db->query("SELECT count(rr_id) as total_records FROM `rm_resort_roomtype` where rr_rs_id = ".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array();
        			// $average =  $rate[0]['lowest_rate']/$records[0]['total_records'];
        			?>
					<h3 class="" style="padding: 5px"><i class="fa fa-rupee"> <?php if(!empty($rate)){echo number_format($rate[0]['lowest_rate']);} ?></i><span style="font-size: small;text-transform: none;">/night</span></h3>
					<a href="#roomRates"><span class="btn btn-primary btn-md" style="border-radius: 6%;"> Select Villa</span></a>
					<p style="padding-top: 1%;"><a href="" style="color: #000000;"><i class="fa fa-share-alt" aria-hidden="true"> </i> <span style="text-decoration: underline;">Share</span></a>&nbsp &nbsp<a href="" style="color: #000000;"><i class="fa fa-heart-o" aria-hidden="true"></i> <span style="text-decoration: underline;">Save</span></a></p>
				</div>
			</div>
				<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hotel_rating">
					<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12" >
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="text-align: right;float: right;">
							<?php $rate = $CI->db->query("SELECT sum(rr_room_rate) as lowest_rate FROM `rm_resort_roomtype` where rr_rs_id = ".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array();
							$records = $CI->db->query("SELECT count(rr_id) as total_records FROM `rm_resort_roomtype` where rr_rs_id = ".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array();
                			$average =  $rate[0]['lowest_rate']/$records[0]['total_records'];
                			?>
							<h3 class="" style="padding: 0px"><i class="fa fa-rupee"> <?php if(!empty($rate)){echo number_format($average);} ?></i><span style="font-size: small;text-transform: none;">/night</span></h3>
							<a href="#roomRates"><span class="btn btn-primary btn-md"> Select Room</span></a>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12" style="text-align: right; float: right;">
							<span style="font-size: x-large;"><i class="fa fa-rupee"> <b><?php echo number_format(3930);?></b> <br><p style="color: #646c73;font-size: x-small;padding-top: 4%;">Onwards</p></i></span>
						</div>
					</div>
				</div> -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden">
				<div class="demo-inner-content">
					<!--/header-w3l-->
					<div class="header-w3-agileits" id="home">
						<div class="inner-header-agile">	
							<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- navbar-header -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav" style="margin-left: 0px;">
										<li><a href="#aboutUs">About Us</a></li>
										<li class="active"><a href="#roomRates">Rooms & Rates</a></li>
										<li><a href="#travellerReview">Traveller Review</a></li>
										<li><a href="#amenitiesFacilities">Amenities & Facilities</a></li>
										<li><a href="#gallery">Gallery</a></li>
										<li><a href="#travellerReview">Map</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>	
							</nav>
						</div> 
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rst_gallery">
				<!-- <h3 class="navi_title">Gallery <a href="<?php echo $resort[0]['rs_gallery_link']; ?>" target="_blank"><span style="font-size: medium;color: #f47320;text-decoration: underline;float: right;">View All</span></a></h3> -->
				<div class="demo">
			        <div class="item">            
			            <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details" style="padding:1%;">
			                <div id="carousel-custom" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner" role="listbox">
							  	<?php $j = 1; foreach ($rst_images as $key) {?>
								    <div class="item <?php if($j == 1){ echo "active"; }?>">
								      <img src="<?php echo $key['im_image_url'] ?>" alt="..." class="img-responsive">
								      <div class="text-block">
									    	<a href="" target="_blank"><p>View All Images</p></a>
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
							  <ol class="carousel-indicators visible-sm-block hidden-xs-block visible-md-block visible-lg-block">
							  	<?php $j = 0; foreach ($rst_images as $key) {?>
					            	<li data-target="#carousel-custom" data-slide-to="<?php echo $j; ?>" class="<?php if($j == 0){ echo "active"; }?>">
					              		<img src="<?php echo $key['im_image_url'] ?>" alt="..." class="img-responsive">
					            	</li>
					            	<?php $j++;} ?>
					          </ol> 
							</div>  
			            </div>
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
					<!-- <div class="row">
						<div class="col-sm-6">
							<h3 style="text-decoration: underline;">Quick Facts</h3>
							<div class="col-sm-4" style="border: 1px solid #dddddd;border-radius: 7%;margin: 3% 2% 1% 1%;text-align: left;line-height: 4;padding: 2% 4%;">
								<img src="<?php echo base_url() ?>assets/images/checkin-small.png">
								<h3 style="font-weight: bold;color: #705345;"><?php echo date("g:i A", strtotime("".$resort[0]['rs_checkin_time']."")); ?></h3>
								<h4>Check-in</h4>
							</div>
							<div class="col-sm-4" style="border: 1px solid #dddddd;border-radius: 7%;margin: 3% 2% 1% 1%;text-align: left;line-height: 4;padding: 2% 4%;">
								<img src="<?php echo base_url() ?>assets/images/check-out-small.png">
								<h3 style="font-weight: bold;color: #705345;"><?php echo date("g:i A", strtotime("".$resort[0]['rs_checkout_time']."")); ?></h3>
								<h4>Check-out</h4>
							</div>
						</div>
						<div class="col-sm-6">
							<h3 style="text-decoration: underline;">Sleeping Arrangements</h3>
							<img src="<?php echo base_url() ?>assets/images/sleeping-arrangements.png">
						</div>
					</div> -->
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="amenitiesFacilities">
				<h3 class="navi_title">Villa Amenities</h3>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details" style="text-align: center;">
					<div class="row">
						<?php foreach ($amenities as $key) {?>
							<?php $amenity = $CI->Home_model->fetch_details(array('am_id'=>$key['ra_am_id'],'am_isDelete'=>0),'rm_amenity');
							if(!empty($amenity)){ ?>
							<!-- <div class="col-sm-1" style="padding-left:0px;">								 -->
								<?php if(empty($amenity[0]['am_icon'])){?>
								    <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i>
								    <?php }else{?>
                                        <image src="<?php echo $amenity[0]['am_icon'] ?>" style="padding-right: 2%;"/> <span class="tooltiptext"><?php echo $amenity[0]['am_name'] ?></span>
								    <?php }?> 
							<!-- </div> -->
							<?php } ?>
						<?php } ?>
						</ul>
					</div>
					<div class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
						<br>
						<button type="button" data-toggle="modal" data-id="2" data-target="#all_amenities" style="font-size: medium;color: #f47320;padding: 0.5% 1%;background-color: #ffffff;border: 1px solid #000000;border-radius: 8px;">View All Amenities</button>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="aboutUs">
				<!--<h3 class="navi_title">Sleeping Arrangements</h3>-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
					<div class="row">
						<div class="col-sm-6">
							 <h3 style="text-decoration: underline;">Quick Facts</h3> 
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
						<div class="col-sm-6">
							 <h3 style="text-decoration: underline;">Sleeping Arrangements</h3> 
							<img src="<?php echo base_url() ?>assets/images/sleeping-arrangements.png">
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="roomRates">
				<h3 class="navi_title">Rooms Tarrif <?php if(!empty($package)){?>
					<!-- <a href='<?php echo site_url('sortPackage?'); ?>pk=&r="<?php echo $resort[0]['rs_display_name']; ?>"' style="display: contents;">
						<img src="<?php echo base_url();?>assets/images/package.gif" class="img-responsive" id="packageDetails"/>
					</a> -->
				<?php } ?>
				</h3>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
					<div class="row" style="padding: 1% 1%;">
					<?php  //print_r($room);
					foreach ($room as $key1) {?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details">
						<h2 class="room_heading"><?php echo $key1['rr_display_name']; ?></h2>
						<?php $room_type = $CI->Home_model->fetch_details(array('rt_id'=>$key1['rr_rt_id'],'rt_isDelete'=>0),'rm_roomtype');?>

						<h3 class="room_subheading"><i class="fa fa-home"></i> <?php if(!empty($room_type)){ echo $room_type[0]['rt_name'];}else{ echo "NA";} ?> <!-- <i class="fa fa-bed" style="padding-left: 2%"></i> 1 Bed --> <i class="fa fa-users" style="padding-left: 2%"></i> <?php echo $key1['rr_max_person']; ?> + <?php echo $key1['rr_extra_adult']; ?> Guests</h3>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hotel_picture">
							<div id="myCarousel<?php echo $key1['rr_id'];?>" class="carousel slide">
							    <div class="carousel-inner">
								<?php 
								
									//$room_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$key1['rr_rs_id'],'im_rs_room_id'=>$key1['rr_id'],'im_isDelete'=>0,'im_image_type'=>1),'rm_image');
									$room_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$key1['rr_rs_id'],'im_rs_room_id'=>$key1['rr_rt_id'],'im_isDelete'=>0,'im_image_type'=>1),'rm_image');
									//print_r($room_img);
									if (empty($room_img)) { ?>
										<div class="item active">
								        	<img src="<?=base_url()?>assets/images/image-not-available.jpg" alt="Los Angeles" style="width:100%;height: 200.969px;">
								      	</div>
								<?php } else {$j=1;								
					    			foreach ($room_img as $key2) { //echo $key2['im_image_url'];?>
								      	<div class="item <?php if($j==1) echo "active"; else echo"";?>">
								        	<img src="<?php echo $key2['im_image_url']?>" alt="Room Image" style="width:100%;height: 200.969px;">
								      	</div>
							      <?php $j++;} }?>
							    </div>
							    <a class="left carousel-control" href="#myCarousel<?php echo $key1['rr_id'];?>" data-slide="prev">
							      <span class="glyphicon glyphicon-chevron-left" style="font-size: 12px;top: 52%;"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="right carousel-control" href="#myCarousel<?php echo $key1['rr_id'];?>" data-slide="next">
							      <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;top: 52%;"></span>
							      <span class="sr-only">Next</span>
							    </a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<p><?php echo $key1['rr_description']; ?></p><br>
							<!-- <p><?php echo substr($key1['rr_description'],0,150); ?><?php if(strlen($key1['rr_description']) >150){?><a href=""> ...See More</a><?php } ?></p><br> -->
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 room_amenities_details ">
								<h4 style="text-decoration: underline;">Room Amenities</h4>
								<?php $room_amenities = $CI->Home_model->fetch_details(array('rra_resort_id'=>$key1['rr_rs_id'],'rra_roomtype_id'=>$key1['rr_id'],'rra_isDelete'=>0),'rm_resort_room_amenity'); ?>
								<ul class="no-bullets">
									<div class="row">
									<?php foreach ($room_amenities as $key) {?>
										<div class="col-sm-4">
											<?php $amenity = $CI->Home_model->fetch_details(array('am_id'=>$key['rra_amenity_id']),'rm_amenity'); ?>
											<li style="font-size: small;padding: 4% 0 0 4%;"><i class="fa fa-check fa-sm" aria-hidden="true" style="color: #64c18e;"></i> <?php echo $amenity[0]['am_name']; ?></li>
										</div>
									<?php } ?>
									</div>
								</ul>
							</div>
							<!-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 room_services_details">
								<h4 style="text-decoration: underline;">Services</h4>
							</div> -->
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 room_price_records">
								<h3 class="" style="padding: 0px 7%;"><i class="fa fa-rupee"> <?php if($key1['rr_isShared'] == 1){ echo number_format($key1['rr_sharing_cost']); }else{ echo number_format($key1['rr_room_rate']);} ?></i><span style="font-size: small;text-transform: none;">/night</span></h3>
								<?php $total_available_rooms = $CI->Home_model->verifyRoomsAvailable($start_date,$till_date,$key1['rr_id'],$resort[0]['rs_id']); if ($total_available_rooms != 0 || $total_available_rooms > 0) {?>
									<a href="<?php echo site_url('preVerify?stDate='.$start_date.'&tlDate='.$till_date.'&adult='.$adult.'&child='.$child.'&room=&extra=&rt='.$key1['rr_id'].'&r='.$resort[0]['rs_display_name'].'') ?>"><span class="btn btn-primary" style="border-radius: 8%;margin: 2% 7%;font-weight: 700;">Villa Details <i class="fa fa-chevron-right"></i> </span></a>
								<?php }else{?>
									<h3 class="" style="padding: 1% 7%;color:red;">Not Available</h3>
								<?php } ?>
							</div>
						</div>
						<?php if($key1['rr_isShared'] == 1){ ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 1%;color:red;">
							<h4>Available On sharing basis</h4>
						</div>
						<?php } ?>
					</div>					
					<?php } ?>

					<?php  //print_r($room);
					foreach ($package as $pck_key) {?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details">
						<h2 class="room_heading"><?php echo $pck_key['pk_name']; ?></h2>
						<?php $package_type = $CI->Home_model->fetch_details(array('pt_id'=>$pck_key['pk_package_type_id'],'pt_isDelete'=>0),'rm_package_type');?>

						<h3 class="room_subheading"><i class="fa fa-home"></i> <?php if(!empty($package_type)){ echo $package_type[0]['pt_name'];}else{ echo "NA";} ?> <i class="fa fa-users" style="padding-left: 2%"></i> <?php echo $pck_key['pk_number_day']; ?> Days <?php echo $pck_key['pk_number_night']; ?> Night</h3>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hotel_picture">
							<div id="myCarousel<?php echo $pck_key['pk_id'];?>" class="carousel slide">
							    <div class="carousel-inner">
								<?php 
								
									//$room_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$pck_key['rr_rs_id'],'im_rs_room_id'=>$pck_key['rr_id'],'im_isDelete'=>0,'im_image_type'=>1),'rm_image');
									$room_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$pck_key['pk_resort_id'],'im_isDelete'=>0,'im_image_type'=>0),'rm_image');
									//print_r($room_img);
									if (empty($room_img)) { ?>
										<div class="item active">
								        	<img src="<?=base_url()?>assets/images/image-not-available.jpg" alt="Los Angeles" style="width:100%;height: 200.969px;">
								      	</div>
								<?php } else {$j=1;								
					    			foreach ($room_img as $key2) { //echo $key2['im_image_url'];?>
								      	<div class="item <?php if($j==1) echo "active"; else echo"";?>">
								        	<img src="<?php echo $key2['im_image_url']?>" alt="Room Image" style="width:100%;height: 200.969px;">
								      	</div>
							      <?php $j++;} }?>
							    </div>
							    <a class="left carousel-control" href="#myCarousel<?php echo $pck_key['pk_id'];?>" data-slide="prev">
							      <span class="glyphicon glyphicon-chevron-left" style="font-size: 12px;top: 52%;"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="right carousel-control" href="#myCarousel<?php echo $pck_key['pk_id'];?>" data-slide="next">
							      <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;top: 52%;"></span>
							      <span class="sr-only">Next</span>
							    </a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<p><?php echo $pck_key['pk_desc']; ?></p><br>
							<!-- <p><?php echo substr($pck_key['pk_desc'],0,150); ?><?php if(strlen($pck_key['pk_desc']) >150){?><a href=""> ...See More</a><?php } ?></p><br> -->
							<!-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 room_services_details">
								<h4 style="text-decoration: underline;">Services</h4>
							</div> -->
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 room_price_records" style="float: right;">
								<h3 class="" style="padding: 0px 7%;"><i class="fa fa-rupee"> <?php echo number_format($pck_key['pk_cost_adult']); ?></i><span style="font-size: small;text-transform: none;">/<?php if($pck_key['pk_pay_type'] == 1){ echo "Person";}else{ echo "Package";} ?></span></h3>
								<a href="<?php echo site_url('pkVerify?st_date=&end_dates=&adult=&child=&pk='.$pck_key['pk_name'].'#pckBooking') ?>"><span class="btn btn-primary" style="border-radius: 8%;margin: 2% 7%;font-weight: 700;">Package Details  <i class="fa fa-chevron-right"></i> </span></a>
							</div>
						</div>
						<?php if($key1['rr_isShared'] == 1){ ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 1%;color:red;">
							<h4>Available On sharing basis</h4>
						</div>
						<?php } ?>
					</div>					
					<?php } ?>
				</div>
				</div>
			</div>
			<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="">
				<h3 class="navi_title">Things to Do</h3>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
					<h3 style="text-decoration: underline;">Activity</h3><br>
					<div class="row" style="padding-left: 2%;">
					<?php $to_do_list = explode('#', $resort[0]['rs_to_do']);?>
					<ul style="padding-left: 5%;font-size: medium;">

						<?php if(!empty($resort[0]['rs_to_do'])){ for ($i=0; $i < count($to_do_list); $i++) { ?>
							<li><?php echo $to_do_list[$i]; ?></li>
						<?php } }?>
					</ul>
					</div>
					<br>
					<h3 style="text-decoration: underline;">Other Information</h3><br>
					<div class="row" style="padding-left: 2%;">
						<p><?php echo $resort[0]['rs_additional_info']; ?></p>
					</div>
				</div>
			</div> -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="">
				<h3 class="navi_title">How to Reach</h3>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.8153608527145!2d73.80134981441823!3d18.62737277076191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b851b56d8b71%3A0x59e9ba17661c51f2!2sMind%20Space%20Hotel!5e0!3m2!1sen!2sin!4v1600676678404!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><br>
						<h3 style="text-decoration: underline;">Address</h3><br>
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
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"><br>
						<h3 style="text-decoration: underline;">Things To Do</h3><br>
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
						<!-- <h3 style="text-decoration: underline;">Other Information</h3><br>
						<div class="row" style="padding-left: 2%;">
							<p><?php echo $resort[0]['rs_additional_info']; ?></p>
						</div> -->
				</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<div class="guests-agile" style="padding-top: 3em;">
	<!--<a href="#" target="_blank"><span class="btn btn-primary" style="writing-mode: vertical-rl;transform: rotate(0deg); background-color: #f47720;border-color: #f47720;font-weight: bold;padding-left: 2%;font-size:large;width: 10px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-top-right-radius: 20px;-->
	<!--	    border-bottom-right-radius: 20px;">All Reviews</span></a>-->
	<a href="#" target="_blank"><span class="btn btn-primary" style="writing-mode: vertical-rl;transform: rotate(0deg); background-color: #f47720;border-color: #f47720;font-weight: bold;padding-left: 2%;font-size:large;width: 10px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;border-top-right-radius: 20px;
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
							<img src="<?=base_url()?>assets/images/n_logo.png" style="width: 10%;"alt=" " class="img-responsive" />
							<p><?php echo substr($key['post_title'],19,(strrpos($key['post_title'], 'stayed')-19)); ?></p>
						</div>
					</li>
					<?php } }else{ ?>
					<li>
						<div class="w3_agileits_testimonial_grid">
							<i class="fa fa-quote-right" aria-hidden="true"></i>
							<p><?php echo "Welcome to post first review."; ?></p>
							<img src="<?=base_url()?>assets/images/n_logo.png" style="width: 10%;" alt=" " class="img-responsive" />
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</section>
		
		<div id="all_amenities" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->               
                <div class="modal-content" style="border-radius: 35px;">
                	<div class="modal-header">
				        <h3 class="modal-title text-center">Amenities</h3>
				    </div>
                    <div class="modal-body">
                        <!-- <div class="form-group hidden">
                            <input type="text" class="form-control" name="rst_id">
                        </div> -->
                        <!-- <div class="row container"> -->
                        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                       	
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
	                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                     		
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
	                        	</div>
	                        </div>
	                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                       		
	                        	<dl>
	                        		<dt>Facilities</dt>
	                        		<dd>Free Parking on premises</dd>
	                        		<dd>Swimming Pool - Shared</dd>
	                        	</dl>                     		
	                        	</div>
	                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                     		
	                        		<dl>
    	                        		<dt>Outdoor Space</dt>
    	                        		<dd>BBQ Grill</dd>
    	                        		<dd>Garden or Backyard</dd>
    	                        		<dd>Patio or Balcony</dd>
	                        		</dl>
	                        	</div>	                        	
                        	</div>
                        	 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                       		
	                        	<dl>
	                        		<dt>Special Amenities (Chargeable)</dt>
	                        		<dd>Breakfast</dd>
	                        		<dd>Cook Services</dd>
	                        		<dd>Nanny Services</dd>
	                        		<dd>Self Drive 2/4 Wheelers </dd>
	                        		<dd>Taxi/Pickup-Drop/Sightseeing</dd>
	                        	</dl>                     		
	                        	</div>
	                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                     		
	                        		<dl>
    	                        		<dt>Logistics</dt>
    	                        		<dd>Luggage drop-off allowed</dd>
    	                        		<dd>Long-term stays allowed - 14+ days</dd>
	                        		</dl>
	                        	</div>	
	                        	
	                        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                       		
    	                        	<dl>
    	                        		<dt>Home Safety</dt>
    	                        		<dd>Fire Extinguisher</dd>
    	                        		<dd>First aid kit</dd>
    	                        	</dl>                     		
    	                        	</div>
    	                        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                     		
    	                        		<!--<dl>-->
        	                      <!--  		<dt>Logistics</dt>-->
        	                      <!--  		<dd>Luggage drop-off allowed</dd>-->
        	                      <!--  		<dd>Long-term stays allowed - 14+ days</dd>-->
    	                        		<!--</dl>-->
    	                        	</div>	                        	
                            	</div>
                        </div>

                        	
                    	<!-- </div> -->
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

<!-- //testimonials -->
