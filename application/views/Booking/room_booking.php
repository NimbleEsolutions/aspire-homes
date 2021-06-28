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
h1,h2{
   font-family: 'Tahoma', sans-serif!important;
   line-height: 1.6;
   font-size:26px;
   margin:0;
   font-weight:600;
               /*text-transform: uppercase;*/
}
h3,h4,h5,h6{
    font-family: 'Tahoma', sans-serif!important;
    margin:0;
    font-size:18px;
}
.hotel_picture,.carousel{
    width: 500px !important;
    height: 200px !important;    
    left: 0;
    top: 0;
    padding-right: 0px;
}
/*.btn-primary{*/
/*	background-color: #f47320;*/
/*    border-color: #f47320;*/
/*    border-radius: 3px;*/
/*}*/
/*.btn-primary:hover{*/
/*	background-color: #2baf2b;*/
/*    border-color: #2baf2b;*/
/*}*/
.navbar-default .navbar-nav > li > a{
	/*color: #ff401b;*/
	/*font-size: 0.8em;*/
}
.inner-header-agile {Rooms
    padding: 0em 0 0em 0.6em;
    /*border-top: 1px solid;*/
    /*border-bottom: 1px solid #e2dfdf;*/
}
.featured, .team-section {
    background: #ffffff;
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
	/*box-shadow: 0 0 3px 2px #b7aeae;*/
	box-shadow: 5px 5px 7px #ddd;
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
   /* text-transform: none;*/
}
.room_subheading{
    color: #000000;
    font-size: 15px;
    /*font-weight: bold;*/
    line-height: 15px;
    padding: 0px 0px 1% 1.5%;
    margin: 5px 0 0;
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    /*text-transform: none;*/
}
.room_price_records{
	padding: 2% 3% 0px 0px;
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
@media (max-width: 400px){
	.title{
		padding-left: 3%;	
	}
}
</style>
<?php $CI = &get_instance(); ?>
<div class="special featured">
	<div class="container">
		<div class="row">
			<div class="title" style="margin-left: 2.5%;border: none;">
				<h2>Booking Details</h2>
			</div>
			<form class="form-horizontal" method="post" id="prjCompare" action="<?php echo site_url('booking')?>">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="row" style="padding: 0px  1%;">
					<?php foreach ($room as $key1) {?>
						<input type="text" name="room_rcd" class="form-control hidden" placeholder="" value="<?php echo $key1['rr_id']?>" style="border:none;padding: 0px;text-align: center;">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details">
							<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
								<h3 class="resort_heading"><?php echo $resort[0]['rs_display_name']; ?></h3>
								<h2 class="room_heading hidden"><?php echo $key1['rr_display_name']; ?></h2>
								<?php $room_type = $CI->Home_model->fetch_details(array('rt_id'=>$key1['rr_rt_id'],'rt_isDelete'=>0),'rm_roomtype');?>

							<!--	<h3 class="room_subheading"><i class="fa fa-home"></i> <?php //if(!empty($room_type)){ echo $room_type[0]['rt_name'];}else{ echo "NA";} ?> <!-- <i class="fa fa-bed" style="padding-left: 2%"></i> 1 Bed --> <!--<i class="fa fa-users" style="padding-left: 2%"></i> <?php //echo $key1['rr_max_person']; ?> + <?php //echo $key1['rr_extra_adult']; ?> Guests</h3>
							<!-- <h3 class="room_price_records" style="padding: 0px 7%;"><i class="fa fa-rupee"> <?php echo number_format($key1['rr_room_rate']); ?></i><span style="font-size: small;text-transform: none;">/night</span></h3> -->
						</div>

							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 room_price_records">
								<h3 class="" style="padding: 0px 7%;"><i class="fa fa-rupee"> <?php echo number_format($key1['rr_room_rate']); ?></i><span style="font-size: small;text-transform: none;">/night</span></h3>
								<!-- <a href=""><span class="btn btn-primary" style="border-radius: 8%;margin: 2% 7%;font-weight: 700;"> Book Room <i class="fa fa-chevron-right"></i> </span></a> -->
							</div>

							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 hotel_picture">
								<div id="myCarousel<?php echo $key1['rr_id'];?>" class="carousel slide">
								    <div class="carousel-inner">
									<?php
										//$room_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$key1['rr_rs_id'],'im_rs_room_id'=>$key1['rr_id'],'im_isDelete'=>0),'rm_image');
										$room_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$key1['rr_rs_id'],'im_rs_room_id'=>$key1['rr_rt_id'],'im_isDelete'=>0,'im_image_type'=>1),'rm_image');
										if (empty($room_img)) { ?>
											<div class="item active">
									        	<img src="<?=base_url()?>assets/images/image-not-available.jpg" alt="Los Angeles" >
									      	</div>
									<?php } else {$j=1;								
							    			foreach ($room_img as $key2) {?>
										      	<div class="item <?php if($j==1) echo "active"; else echo"";?>">
										        	<img src="<?php echo $key2['im_image_url']?>" alt="Room Image" >
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
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
								<!-- <p><?php echo $key1['rr_description']; ?></p><br>
								<!-- <p><?php //echo substr($key1['rr_description'],0,200); ?><?php //if(strlen($key1['rr_description']) >200){?><a href=""> ...See More</a><?php //} ?></p><br> -->
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_amenities_details">
									<?php $room_amenities = $CI->Home_model->fetch_details(array('rra_resort_id'=>$key1['rr_rs_id'],'	rra_roomtype_id'=>$key1['rr_id'],'rra_isDelete'=>0),'rm_resort_room_amenity'); ?>

									<div class="row" style="padding-left: 2%;">
										<?php $to_do_list = explode('#', $key1['rr_note']);?>
										<ul style="font-size: small;">
											<?php if(!empty($key1['rr_note'])){ for ($i=0; $i < count($to_do_list); $i++) { ?>
												<li><?php echo $to_do_list[$i]; ?></li>
											<?php } }?>
										</ul>
									</div>
									<!-- <h4 style="text-decoration: underline;">Room Amenities</h4>
									<ul class="no-bullets">
									<div class="row">
									<?php $i= 1; foreach ($room_amenities as $key) { if($i <= 4){?>
											<div class="col-sm-6">
												<?php $amenity = $CI->Home_model->fetch_details(array('am_id'=>$key['rra_amenity_id']),'rm_amenity'); ?>
												<li style="font-size: small;padding: 4% 0 0 4%;"><i class="fa fa-check fa-sm" aria-hidden="true" style="color: #64c18e;"></i> <?php echo $amenity[0]['am_name']; ?></li>
											</div>
									<?php } $i++;} ?>
										</div>
									</ul> -->
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
					<div class="row" style="padding: 0px 1%;">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details">
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;text-align: center;">
								Check In
	                        	<input type="text" name="form_dates" class="form-control" placeholder="" value="<?php echo $start_date ?>" style="border:none;padding: 0px;text-align: center;">
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;text-align: center;">
								Check Out
								<input type="text" name="till_dates" class="form-control" placeholder="" value="<?php echo $till_date ?>" style="border:none;padding: 0px;text-align: center;">
							</div>							
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;text-align: center;">
								Villa
								<select class="form-control" name="room" style="border:none;padding: 0px;text-align: center;padding-left: 40%;width: 99%;">
									<option value=""></option>
									<?php for ($i=1; $i <= $total_available_room; $i++) { ?>
									<option value="<?php echo $i; ?>" <?php if($i == $totalRoom){ echo "selected"; }?>><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;text-align: center;">
								Guests
								<select class="form-control" name="guests" style="border:none;padding: 0px;text-align: center;padding-left: 40%;">
									<?php if(!empty($adult)){?>
										<option value="<?php echo $adult ?>"><?php echo "".$adult."" ?></option>
									<?php }else if($totalRoom != 0 && $adult == 0){
										$total_adult = $totalRoom * $room[0]['rr_max_person'];?>
										<option value=""></option>
										<?php for ($i=1; $i <= $total_adult; $i++) {?>
											<option value="<?php echo $i; ?>"><?php echo "".$i.""; ?></option>
									<?php } }else{ ?>
										<option value=""></option>
									<?php }?>
								</select>
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6" style="border-right: 1px solid;text-align: center;">
								Extra Guests
								<select class="form-control" name="extra" style="border:none;padding: 0px;text-align: center;padding-left: 40%;">
									<?php if(!empty($extra)){?>
										<option value="<?php echo $extra; ?>"><?php echo "".$extra.""; ?></option>
									<?php }else if($totalRoom != 0 && $extra == 0){
										$total_extra = $totalRoom * $room[0]['rr_extra_adult'];?>
										<option value=""></option>
										<?php for ($i=1; $i <= $total_extra; $i++) {?>
											<option value="<?php echo $i; ?>"><?php echo "".$i.""; ?></option>
									<?php } }else{ ?>
										<option value=""></option>
									<?php }?>
								</select>
							</div>
							<div class="col-sm-2 col-lg-2 col-md-2 col-xs-6 hidden" style="border-right: 1px solid;text-align: center;">
								Child
								<select class="form-control" name="child" style="border:none;padding: 0px;text-align: center;padding-left: 40%;">
									<?php if(!empty($child)){?>
										<option value="<?php echo $child; ?>"><?php echo "".$child.""; ?></option>
									<?php }else if($totalRoom != 0 && $child == 0){
										$total_child = $totalRoom * $room[0]['rr_child'];?>
										<option value=""></option>
										<?php for ($i=1; $i <= $total_child; $i++) {?>
											<option value="<?php echo $i; ?>"><?php echo "".$i.""; ?></option>
									<?php } }else{ ?>
										<option value=""></option>
									<?php }?>
								</select>
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
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						      <button type="button" data-toggle="modal" data-id="2" data-target="#cancellation_policy" style="margin-top:5%;font-size: medium;color: #f47320;padding: 0.5% 1%;background-color: #ffffff;border: 1px solid #000000;border-radius: 8px;">Cancellation Policy</button>
						</div>
				    </div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="color: #7b7b7b;">
					<div class="row" style="padding: 0px 1%;">
					<?php foreach ($room as $key1) {?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 room_details" style="padding: 0px;">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #656970;padding: 3%;color: #ffffff;">
								<h3>Invoice</h3>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #ffffff;">
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding: 3% 3% 5% 8%;">
										<h4 class="invoice_head">Base price <span>/ </span><?php if($key1['rr_pay_type'] == 1){ echo "Room";}else{ echo "Person";} ?></h4>
										<h5>for 1 night, 1 <?php if($key1['rr_pay_type'] == 1){ echo "Room";}else{ echo "Person";} ?>, Max <?php echo $key1['rr_max_person']; ?> Guests</h5>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding: 3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$key1['rr_room_rate'].''); ?></h4>
									</div>
								</div>
								<?php 
									$date1 = new DateTime("".$start_date."");
									$date2 = new DateTime("".$till_date."");
									$numberOfNights= $date2->diff($date1)->format("%a");
									if($key1['rr_pay_type'] == 1){
										$oneNightRate =  $key1['rr_room_rate'] * $totalRoom;
									}else{
										$oneNightRate =  $key1['rr_room_rate'] * $adult;
									}
									$totalNightRate =  $oneNightRate * $numberOfNights;
									$extraoneNightRate =  $key1['rr_extra_person_cost'] * intval($extra);
									$extratotalNightRate =  $extraoneNightRate * $numberOfNights;
									$tax = ((intval($key1['rr_cgst'])/intval(100))*($totalNightRate+$extratotalNightRate) + (intval($key1['rr_sgst'])/intval(100))*($totalNightRate+$extratotalNightRate));
									$totalPrice = $totalNightRate+$extratotalNightRate+$tax;
								?>
								<?php if(!empty($extra)){ ?>
								<div class="hr-line-dashed" style="border: 1px dashed #e8e4e4;    margin-right: 1%;"></div>	
								<?php } ?>	
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding: 3% 3% 5% 8%;">
										<h4 class="invoice_head">Price for 1 night</h4>
										<?php if($key1['rr_pay_type'] == 1){ ?>
											<h5><i class="fa fa-rupee"></i> <?php echo number_format(''.$key1['rr_room_rate'].''); ?> x <?php echo $totalRoom; ?> rooms</h5>
										<?php }else{ ?>
											<h5><i class="fa fa-rupee"></i> <?php echo number_format(''.$key1['rr_room_rate'].''); ?> x <?php echo $adult; ?> person</h5>
										<?php } ?>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding: 3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$oneNightRate.''); ?></h4>
									</div>
								</div>
								<?php if(!empty($extra)){ ?>
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding: 3% 3% 5% 8%;">
										<!-- <h4 class="invoice_head">Price for 1 night</h4> -->
											<h5><i class="fa fa-rupee"></i> <?php echo number_format(''.$key1['rr_extra_person_cost'].''); ?> x <?php echo $extra; ?> Extra Guests</h5>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding: 3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$extraoneNightRate.''); ?></h4>
									</div>
								</div>
								<?php } ?>
								<div class="hr-line-dashed" style="border: 1px dashed #e8e4e4;    margin-right: 1%;"></div>
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding:3% 3% 5% 8%;">
										<h4 class="invoice_head">Total amount</h4>
										<h5><i class="fa fa-rupee"></i> <?php echo number_format(''.$oneNightRate.'') ?> x <?php echo $numberOfNights; ?> nights</h5>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding:3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$totalNightRate.''); ?></h4>
										<input type="text" name="totalNightRate" class="form-control hidden" value="<?php echo $totalNightRate; ?>">
									</div>
								</div>
								<?php if(!empty($extra)){ ?>
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding:3% 3% 5% 8%;">
										<!-- <h4 class="invoice_head">Extra Guests Amount</h4> -->
										<h5><i class="fa fa-rupee"></i> <?php echo number_format(''.$extraoneNightRate.'') ?> x <?php echo $numberOfNights; ?> nights</h5>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding:3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$extratotalNightRate.''); ?></h4>
										<input type="text" name="extratotalNightRate" class="form-control hidden" value="<?php echo $extratotalNightRate; ?>">
									</div>
								</div>
								<?php } ?>						
								<div class="row">
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="background: #ffffff;padding:3% 3% 5% 8%;">
										<h4 class="invoice_head">Service Fees & Taxes</h4>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: #ffffff;padding:3% 8% 5% 3%;">
										<h4 style="text-align: center;font-weight: bold;"> <i class="fa fa-rupee"></i> <?php echo number_format(''.$tax.''); ?></h4>
										<input type="text" name="service_tax" class="form-control hidden" value="<?php echo $tax; ?>">
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
										<input type="text" name="totalResortAmount" class="form-control hidden" value="<?php echo $totalPrice; ?>">
									</div>
								</div>
							</div>			
						</div>					
					<?php } ?>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:6%;">
							<?php if($start_date == '' && $till_date == ''){ ?>
								<h3 class="crs_verification">Please select dates & Rooms for processing</h3>
							<?php }else if($total_available_room == 0){?>
								<h3 class="crs_verification">This room is not availble for selected dates.</h3>
							<?php }else if($totalRoom == 0){?>
								<h3 class="crs_verification">Please select dates & Rooms for processing</h3>
							<?php }else if($adult == 0){?>
								<h3 class="crs_verification">Please select staying person</h3>
							<?php }else{ ?>
								<button type="submit" class="btn btn-primary" style="width: 100%;text-align: center;font-size: x-large;">Proceed to Payment</button>
							<?php } ?>
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
					
					
				</div>
			</form>
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
		
	</div>
</div>

<!-- //testimonials -->
