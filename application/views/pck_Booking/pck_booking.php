<style type="text/css">
body {
  background-color: #e0eafd;
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
.btn-primary{
	background-color: #f47320;
    border-color: #f47320;
    border-radius: 3px;
}
.btn-primary:hover{
	background-color: #2baf2b;
    border-color: #2baf2b;
}
.navbar-default .navbar-nav > li > a{
	/*color: #ff401b;
	font-size: 0.8em;*/
}
.inner-header-agile {
    padding: 0em 0 0em 0.6em;
    border-top: 1px solid;
    border-bottom: 1px solid #e2dfdf;
}
.navi_title{
	padding: 1%;
    background: #d2ded74f;
    border-top: 1px solid #e2dfdf;
    color: #705345;
    font-weight: bold;
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
	box-shadow: 0 0 3px 2px #b7aeae;
}

.room_details:hover{
	/*box-shadow: 0 0 3px 2px #f37221;*/
}
.room_heading{
	color: #705345;
    font-weight: bold;
    font-size: xx-large;
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
	padding: 20% 0px 0px 0px;
	text-align: right;
}
.resort_heading{
	font-size: medium;
    font-weight: bold;
    padding: 0 0 1% 1.5%;
}
.invoice_head{
	    font-size: large;
    color: #7b7b7b;
    font-weight: 300;
}
.title{
	border-bottom: 1px solid #d8d5d5;
    margin-bottom: 2%;
    padding-bottom: .5%;
}
.special{
	padding: 2em 0;
}
.crs_verification{
	font-size: larger;
    color: red;
}
.error{
	color: red;
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
	.title{
		padding-left: 3%;	
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
	.title{
		padding-left: 3%;	
	}
}
</style>
<?php $CI = &get_instance(); ?>
<div class="special featured">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>Booking Details</h2>
			</div>
			<div class="container" style="background-color: #ffffff;padding: 1% 2%;border-radius: 8px;box-shadow: 0 0 3px 2px #b7aeae;">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fixme" style="padding-bottom: 3%;">
						<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
							<h2 class="hotel_heading" style="display: flex;"><?php echo ucfirst(strtolower($resort[0]['rs_display_name'])); ?> <?php if(!empty($package)){?> 
								<a href='<?php echo site_url('sortPackage?'); ?>pk=&r="<?php echo $resort[0]['rs_display_name']; ?>"' style="display: contents;">
									<img src="<?php echo base_url();?>assets/images/package.gif" class="img-responsive" id="packageDetails"/>
								</a> 
								<?php } ?> 
							</h2>
							<?php $city = $CI->Home_model->fetch_details(array('ct_id'=>$resort[0]['rs_city']),'rm_cities'); ?>
							<?php $state = $CI->Home_model->fetch_details(array('st_id'=>$resort[0]['rs_state']),'rm_state'); ?>
							<h4 class="hotel_location"><?php if(!empty($resort[0]['rs_village'])){echo ucfirst(strtolower($resort[0]['rs_village']))." ,"; }?><?php echo ucfirst(strtolower($city[0]['ct_name'])); ?>, <?php echo ucfirst(strtolower($state[0]['st_name'])); ?></h4>
							<?php if(!empty($resort[0]['rs_tripadviser_link'])){ ?>
							<a href="<?php echo $resort[0]['rs_tripadviser_link']; ?>" target="_blank"><img class="tripAdvisor" src="<?php echo base_url() ?>assets/images/TripAdvisor.png"></a>
							<?php } ?>
						</div>
						<!-- <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
							<h2>Hello</h2>
						</div> -->
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="text-align: right;float: right;">
							<?php $rate = $CI->db->query("SELECT sum(rr_room_rate) as lowest_rate FROM `rm_resort_roomtype` where rr_rs_id = ".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array();
							$records = $CI->db->query("SELECT count(rr_id) as total_records FROM `rm_resort_roomtype` where rr_rs_id = ".$resort[0]['rs_id']." and rr_isDelete = 0")->result_array();
		        			$average =  $rate[0]['lowest_rate']/$records[0]['total_records'];
		        			?>
							<h3 class="" style="padding: 0px"><i class="fa fa-rupee"> <?php echo number_format($packageRecords[0]['pk_cost_adult']); ?></i><span style="font-size: small;text-transform: none;">/Person</span></h3>
							<a href="#pckBooking"><span class="btn btn-primary btn-md"> Book Package</span></a>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rst_gallery">
						<h3 class="navi_title">Gallery <a href="<?php echo $resort[0]['rs_gallery_link']; ?>" target="_blank"><span style="font-size: medium;color: #f47320;text-decoration: underline;float: right;">View All</span></a></h3>
						<div class="demo">
					        <div class="item">            
					            <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
					                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
					                	<?php foreach ($rst_images as $key) {?>
					                    <li data-thumb="<?php echo $key['im_image_url'] ?>"> 
					                        <img src="<?php echo $key['im_image_url'] ?>" style="width:100%;"/>
					                    </li>
					                    <?php } ?>
					                </ul>
					            </div>
					        </div>
					    </div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="aboutUs">
						<h3 class="navi_title">About Resort</h3>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<p class="resort_des"><?php echo $resort[0]['rs_description']; ?></p>
								</div>
							</div>
							<br>
							<h3 style="text-decoration: underline;">Quick Facts</h3><br>
							<div class="col-sm-2">
								<h3 style="font-weight: bold;color: #705345;"><?php echo date("g:i A", strtotime("".$resort[0]['rs_checkin_time']."")); ?></h3>
								<h4>Check-in</h4>
							</div>
							<div class="col-sm-2">
								<h3 style="font-weight: bold;color: #705345;"><?php echo date("g:i A", strtotime("".$resort[0]['rs_checkout_time']."")); ?></h3>
								<h4>Check-out</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="amenitiesFacilities">
						<h3 class="navi_title">Resort Amenities</h3>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navi_details">
							<!-- <h3 style="text-decoration: underline;">Amenities</h3><br> -->
							<div class="row">
								<ul class="no-bullets">
								<?php foreach ($amenities as $key) {?>
									<?php $amenity = $CI->Home_model->fetch_details(array('am_id'=>$key['ra_am_id'],'am_isDelete'=>0),'rm_amenity');
									if(!empty($amenity)){ ?>
									<div class="col-sm-3">
										<li><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> <?php  echo $amenity[0]['am_name']; ?></li>
									</div>
									<?php } ?>
								<?php } ?>
								</ul>
							</div>
							<br>
							<!-- <h3 style="text-decoration: underline;">Facilities/Services</h3><br>
							<div class="row">
								<ul class="no-bullets">
								<?php foreach ($services as $key) {?>
									<?php $service = $CI->Home_model->fetch_details(array('s_id'=>$key['rrs_service_id'],'s_isDelete'=>0),'rm_services'); 
									if(!empty($service)){  ?>
									<div class="col-sm-3">
										<li><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> <?php echo $service[0]['s_name']; ?></li>
									</div>
									<?php } ?>
								<?php } ?>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="">
						<h3 class="navi_title">Video</h3>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video navi_details">
							<video controls>
							  <source src="<?php echo $resort[0]['rs_video_link']; ?>" type="video/mp4">
							</video>
						</div>
					</div>		
				</div>
			<!-- </div> -->
			<h3 class="navi_title">Book Package </h3>
			<form class="form-horizontal" method="post" id="pckBooking" action="<?php echo site_url('newBooking')?>">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 navi_details">
					<div class="row" style="padding: 0px  1%;">
					<?php foreach ($packageRecords as $key1) {?>
						<input type="text" name="room_rcd" class="form-control hidden" placeholder="" value="<?php echo $key1['pk_id']?>" style="border:none;padding: 0px;text-align: center;">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details">
							<h2 class="room_heading"><?php echo $key1['pk_name']; ?></h2>
							<h3 class="resort_heading"><?php echo strtolower($resort[0]['rs_display_name']); ?></h3>
							
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 hotel_picture">
								<div id="myCarousel<?php echo $key1['pk_id'];?>" class="carousel slide">
								    <div class="carousel-inner">
									<?php
										//$room_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$key1['rr_rs_id'],'im_rs_room_id'=>$key1['rr_id'],'im_isDelete'=>0),'rm_image');
										$room_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$key1['pk_resort_id'],'im_rs_room_id'=>0,'im_isDelete'=>0,'im_image_type'=>0),'rm_image');
										if (empty($room_img)) { ?>
											<div class="item active">
									        	<img src="<?=base_url()?>assets/images/image-not-available.jpg" alt="Los Angeles" style="width:100%;height: 200.969px;">
									      	</div>
									<?php } else {$j=1;								
							    			foreach ($room_img as $key2) {?>
										      	<div class="item <?php if($j==1) echo "active"; else echo"";?>">
										        	<img src="<?php echo $key2['im_image_url']?>" alt="Room Image" style="width:100%;height: 200.969px;">
										      	</div>
								      <?php $j++;} }?>
								    </div>
								    <a class="left carousel-control" href="#myCarousel<?php echo $key1['pk_id'];?>" data-slide="prev">
								      <span class="glyphicon glyphicon-chevron-left" style="font-size: 12px;top: 52%;"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a class="right carousel-control" href="#myCarousel<?php echo $key1['pk_id'];?>" data-slide="next">
								      <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;top: 52%;"></span>
								      <span class="sr-only">Next</span>
								    </a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
								<p><?php echo $key1['pk_desc']; ?></p><br>
								<!-- <p><?php echo substr($key1['rr_description'],0,200); ?><?php if(strlen($key1['rr_description']) >200){?><a href=""> ...See More</a><?php } ?></p><br> -->
								<div class="col-xs-12 col-sm-112 col-md-8 col-lg-8 room_amenities_details hidden">
									<?php $room_amenities = $CI->Home_model->fetch_details(array('rra_resort_id'=>$key1['rr_rs_id'],'	rra_roomtype_id'=>$key1['rr_id'],'rra_isDelete'=>0),'rm_resort_room_amenity'); ?>
									<h4 style="text-decoration: underline;">Room Amenities</h4>
									<ul class="no-bullets">
									<div class="row">
									<?php $i= 1; foreach ($room_amenities as $key) { if($i <= 4){?>
										<div class="col-sm-6">
											<?php $amenity = $CI->Home_model->fetch_details(array('am_id'=>$key['rra_amenity_id']),'rm_amenity'); ?>
											<li style="font-size: small;padding: 4% 0 0 4%;"><i class="fa fa-check fa-sm" aria-hidden="true" style="color: #64c18e;"></i> <?php echo $amenity[0]['am_name']; ?></li>
										</div>
									<?php } $i++;} ?>
										</div>
									</ul>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 room_price_records" style="float: right;">
									<h3 class="" style="padding: 0px 7%;"><i class="fa fa-rupee"> <?php echo number_format($key1['pk_cost_adult']); ?></i><span style="font-size: small;text-transform: none;">/ Person</span></h3>
									<!-- <a href=""><span class="btn btn-primary" style="border-radius: 8%;margin: 2% 7%;font-weight: 700;"> Book Room <i class="fa fa-chevron-right"></i> </span></a> -->
								</div>
							</div>
						</div>					
					<?php } ?>
					</div>
					<div class="row" style="padding: 0px 1%;">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details">
							<div class="col-sm-1 col-lg-1 col-md-1 col-xs-6" style="border-right: 1px solid;text-align: center;">
	                        	
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;border-left: 1px solid;text-align: center;">
								Check In
	                        	<input type="text" name="form_dates" class="form-control" placeholder="" value="<?php echo $start_date; ?>" style="border:none;padding: 0px;text-align: center;">
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;text-align: center;">
								Check Out
								<input type="text" name="till_dates" readonly class="form-control" placeholder="" value="<?php echo $till_date; ?>" style="border:none;padding: 0px;text-align: center;">
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;text-align: center;">
								Adult
								<input type="text" class="form-control" name="guests" value="<?php echo $adult; ?>" style="border:none;padding: 0px;text-align: center;">
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;text-align: center;">
								Child
								<input type="text" class="form-control" name="child" value="<?php echo $child; ?>" style="border:none;padding: 0px;text-align: center;">
							</div>
							<div class="col-sm-12 col-lg-2 col-md-6 col-xs-12" style="text-align: center;padding-top: 1%;">
								<span class="btn btn-primary update_invoice" value="" > Update  </span>
							</div>
						</div>
					</div>
					<?php if (!empty($services)) {?>
					<div class="row hidden" style="padding: 0px 1%;">				
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details" style="padding: 0px;">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #dad7d7;padding: 2%;">
								<h3>Extra Services</h3>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #ffffff;padding: 2%;">
								<table class="table table-striped">
									<thead>
									    <tr>
									    	<th style="width:10%;"><center>Select</center></th>
									    	<th scope="col">#</th>
									    	<th scope="col">Services</th>
									    	<th scope="col">Charges</th>
									    </tr>
									</thead>
									<tbody>
										<?php $i = 1;foreach ($services as $key) {
										$service = $CI->Home_model->fetch_details(array('s_id'=>$key['rrs_service_id'],'s_isDelete'=>0),'rm_services');if(!empty($service)){?>
									    <tr>
									    	<th style="width:10%;"><center><input type="checkbox" name="extra_service[]" class="extra_service" <?php if($start_date == '' || $till_date == ''){  echo "disabled"; }?> value="<?php echo $key['rrs_id'] ?>"></center></th>
									    	<th scope="row"><?php echo $i++; ?></th>
									    	<td><?php echo $service[0]['s_name']; ?></td>
									    	<td><i class="fa fa-rupee"></i> <?php echo number_format($key['rrs_rate'],2); ?></td>
									    </tr>
										<?php } }?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 navi_details" style="color: #7b7b7b;">
					<div class="row" style="padding: 0px 1%;">
					<?php foreach ($packageRecords as $key1) {?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details" style="padding: 0px;">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #dad7d7;padding: 3%;">
								<h3><img src="<?php echo base_url() ?>assets/images/invoice_logo.png" style="width: 10%;">Invoice</h3>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #ffffff;">
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding: 3% 3% 5% 8%;">
										<h4 class="invoice_head">Tariff <span>- </span><?php if($key1['pk_pay_type'] == 1){ echo "Adult";}else{ echo "Package";} ?></h4>
										<h5>for <?php echo $key1['pk_number_day'] ?> Day, 1 <?php if($key1['pk_pay_type'] == 1){ echo "Person";}else{ echo "Package";} ?></h5>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding: 3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$key1['pk_cost_adult'].''); ?></h4>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding: 3% 3% 5% 8%;">
										<h4 class="invoice_head">Tariff <span>- </span><?php if($key1['pk_pay_type'] == 1){ echo "Child";}else{ echo "Package";} ?></h4>
										<h5>for <?php echo $key1['pk_number_day'] ?> Day, 1 <?php if($key1['pk_pay_type'] == 1){ echo "Child";}else{ echo "Package";} ?></h5>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding: 3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$key1['pk_cost_child'].''); ?></h4>
									</div>
								</div>
								<?php 
									$date1 = new DateTime("".$start_date."");
									$date2 = new DateTime("".$till_date."");
									if($key1['pk_pay_type'] == 1){
										$packageRate =  ($key1['pk_cost_adult'] * intval($adult)) + ($key1['pk_cost_child'] * intval($child));
									}else{
										$packageRate =  $key1['pk_cost_adult'] * $totalRoom;
									}
									$tax = ((intval($key1['pk_cgst'])/intval(100))*$packageRate + (intval($key1['pk_sgst'])/intval(100))*$packageRate);
									$totalPrice = $packageRate+$tax;
								?>
								<div class="hr-line-dashed" style="border: 1px dashed #e8e4e4;    margin-right: 1%;"></div>
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding:3% 3% 5% 8%;">
										<h4 class="invoice_head">Amount</h4>
										<h5><i class="fa fa-rupee"></i> <?php echo number_format(''.$key1['pk_cost_adult'].'') ?> x <?php echo $adult; ?> Person</h5><h5><i class="fa fa-rupee"></i> <?php echo number_format(''.$key1['pk_cost_child'].'') ?> x <?php echo $child; ?> Child</h5>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding:3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$packageRate.''); ?></h4>
										<input type="text" name="rb_total_amount" class="form-control hidden" value="<?php echo $packageRate; ?>">
									</div>
								</div>							
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding:3% 3% 5% 8%;">
										<h4 class="invoice_head">Service Fees & Taxes</h4>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding:3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$tax.''); ?></h4>
										<input type="text" name="rb_tax_amount" class="form-control hidden" value="<?php echo $tax; ?>">
									</div>
								</div>
								<div class="row hidden">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding:3% 3% 5% 8%;">
										<h4 class="invoice_head">Extra Services Charge</h4>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding:3% 8% 5% 3%;">
										<h4 class="extra_service_charge" style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format('0'); ?></h4>
										<input type="text" name="extra_service_charge" class="form-control hidden" value="0">
									</div>
								</div>
								<div class="hr-line-dashed" style="border: 1px dashed #e8e4e4;    margin-right: 1%;"></div>						
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding:3% 3% 5% 8%;">
										<h3 class="">Booking Amount</h3>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding:3% 8% 5% 3%;">
										<h4 class="totalResortAmount" style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$totalPrice.''); ?></h4>
										<input type="text" name="rb_amount" class="form-control hidden" value="<?php echo $totalPrice; ?>">
									</div>
								</div>
							</div>			
						</div>					
					<?php } ?>
					</div>					
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color: #7b7b7b;">
					<div class="row" style="padding: 0px">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details" style="padding: 0px;">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #dad7d7;padding: 1.2%;">
								<h3><i class="fa fa-users fa-lg"></i> Booking User</h3>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #ffffff;">
								<div class="form-group hidden">
									<div class="col-sm-4">
										<label class="control-label">Booking Type <span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="Please enter name" value="2" name="rb_type">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Package <span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="Please enter name" value="<?php echo $packageRecords[0]['pk_id']; ?>" name="rb_package_id">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Resort ID <span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="Please enter name" value="<?php echo $resort[0]['rs_id'] ?>" name="rb_resort_id">
									</div>
									<div class="col-sm-4">
										<label class="control-label">RoomType ID <span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="Please enter contact number" value="0" name="rb_roomtype_id">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Extra Service <span class="error"> *</span></label>
										<input type="email" class="form-control" placeholder="Please enter email id" name="rb_extra_ser_amt" value="0">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Extra Guest <span class="error"> *</span></label>
										<input type="email" class="form-control" placeholder="Please enter email id" name="rb_extra" value="0">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Extra Guest Amount <span class="error"> *</span></label>
										<input type="email" class="form-control" placeholder="Please enter email id" name="rb_extra_total_amount" value="0">
									</div>
								</div>
								<div class="form-group hidden">
									<div class="col-sm-4">
										<label class="control-label">Start Date <span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="Please enter name" value="<?php echo $start_date;?>" name="rb_start_date">
									</div>
									<div class="col-sm-4">
										<label class="control-label">End Date <span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="Please enter contact number" value="<?php echo $till_date ?>" name="rb_till_date">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Adult<span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="" value="<?php echo $adult; ?>" name="rb_guest">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Child <span class="error"> *</span></label>
										<input type="email" class="form-control" placeholder="" value="<?php echo $child; ?>" name="rb_child">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Rooms <span class="error"> *</span></label>
										<input type="email" class="form-control" placeholder="" value="0" name="rb_rooms">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="control-label">Name / Group Name <span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="Please enter name" name="bu_user_name">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Contact No. <span class="error"> *</span></label>
										<input type="text" class="form-control" placeholder="Please enter contact number" name="bu_user_contact">
									</div>
									<div class="col-sm-4">
										<label class="control-label">Email ID <span class="error"> *</span></label>
										<input type="email" class="form-control" placeholder="Please enter email id" name="bu_user_email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4">
										<label class="control-label">Address <span class="error"> *</span></label>
										<textarea class="form-control" placeholder="Please enter name" name="bu_user_address"></textarea>
									</div>
								</div>
							</div>			
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding: 0px 6%;float: right;">
								<?php if($start_date == '' && $till_date == ''){ ?>
									<h3 class="crs_verification">Please select dates & Rooms for processing</h3>
								<?php }else if($adult == 0){?>
									<h3 class="crs_verification">Please select staying person</h3>
								<?php }else{ ?>
									<button type="submit" class="btn btn-primary" style="width: 100%;text-align: center;font-size: x-large;">Proceed to pay</button>
								<?php } ?>
							</div>					
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- //testimonials -->
