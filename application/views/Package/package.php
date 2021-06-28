  <style type="text/css">
body {
  background-color: #e0eafd;
}

.row .filter {
border: 1px solid #e6e2e2;
  width: 100%;
  /*margin: 20px auto;*/
  font-family: 'Whitney', sans-serif;
}
.row .filter p {
  padding: 0 10px;
}
.row .filter p, .row .filter li {
  font-weight: bold;
  line-height: 35px;
  font-size: 12px;
}
.row .filter .title {
  color: #fff;
  background-color: #2baf2b;
  -moz-border-radius: 3px 3px 0 0;
  -webkit-border-radius: 3px;
  border-radius: 3px 3px 0 0;
  font-size: medium;
}
.row .filter .title_items {
  color: #94a4c3;
  cursor: pointer;
  position: relative;
  background-color: #fff;
  border-bottom: 1px solid #e4effd;
  -moz-transition: linear 0.2s background-color;
  -o-transition: linear 0.2s background-color;
  -webkit-transition: linear 0.2s background-color;
  transition: linear 0.2s background-color;
}
.row .filter .title_items:hover {
  background-color: #f4f4f4;
}
.row .filter .title_items.active + ul + .title_items {
  border-top: 1px solid #e4effd;
}
.row .filter .title_items.active:after {
  height: 5px;
  width: 5px;
  right: 14px;
  margin-top: -2.5px;
}
.row .filter .title_items:before, .row .filter .title_items:after {
  content: "";
  position: absolute;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  background-color: #c3d0e8;
  -moz-transition: linear 0.3s all;
  -o-transition: linear 0.3s all;
  -webkit-transition: linear 0.3s all;
  transition: linear 0.3s all;
}
.row .filter .title_items:before {
  height: 5px;
  width: 13px;
  top: 50%;
  right: 10px;
  margin-top: -2.5px;
}
.row .filter .title_items:after {
  height: 13px;
  width: 5px;
  top: 50%;
  right: 14px;
  margin-top: -6.5px;
}
.row .filter ul {
  -moz-transition-property: all;
  -o-transition-property: all;
  -webkit-transition-property: all;
  transition-property: all;
  -moz-transition-timing-function: linear;
  -o-transition-timing-function: linear;
  -webkit-transition-timing-function: linear;
  transition-timing-function: linear;
}
.row .filter ul li {
  height: 0;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  color: #92a5bf;
  background-color: #f5f8fe;
  -moz-transition: linear 0.2s all;
  -o-transition: linear 0.2s all;
  -webkit-transition: linear 0.2s all;
  transition: linear 0.2s all;
}
.row .filter ul li:nth-child(odd) {
  -moz-transform: scale(0.5) translateX(-150px);
  -ms-transform: scale(0.5) translateX(-150px);
  -webkit-transform: scale(0.5) translateX(-150px);
  transform: scale(0.5) translateX(-150px);
}
.row .filter ul li:nth-child(even) {
  -moz-transform: scale(0.5) translateX(150px);
  -ms-transform: scale(0.5) translateX(150px);
  -webkit-transform: scale(0.5) translateX(150px);
  transform: scale(0.5) translateX(150px);
}
.row .filter ul li.visible {
	display: -webkit-box;
	padding: 0px 10%;
  height: 36px;
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
  -moz-transform: scale(1) translateX(0);
  -ms-transform: scale(1) translateX(0);
  -webkit-transform: scale(1) translateX(0);
  transform: scale(1) translateX(0);
}
.row .filter ul li:last-child label {
  border-bottom: none;
}
.row .filter ul li:nth-child(1) label:before, .row .filter ul li:nth-child(1) label:after {
  border-color: #5db6e2;
}
.row .filter ul li:nth-child(2) label:before, .row .filter ul li:nth-child(2) label:after {
  border-color: #c0a2f1;
}
.row .filter ul li:nth-child(3) label:before, .row .filter ul li:nth-child(3) label:after {
  border-color: #f7a238;
}
.row .filter ul li:nth-child(4) label:before, .row .filter ul li:nth-child(4) label:after {
  border-color: #f6d04d;
}
.row .filter ul li:nth-child(5) label:before, .row .filter ul li:nth-child(5) label:after {
  border-color: #40c9a1;
}
.row .filter ul li:nth-child(6) label:before, .row .filter ul li:nth-child(6) label:after {
  border-color: #ea8b8b;
}
.row .filter ul li:nth-child(7) label:before, .row .filter ul li:nth-child(7) label:after {
  border-color: #fe8ae0;
}
.row .filter ul li:nth-child(8) label:before, .row .filter ul li:nth-child(8) label:after {
  border-color: #abb6d2;
}
.row .filter input[type="radio"] {
  display: none;
}
.row .filter input[type="radio"]:checked + label:after {
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}
.row .filter label {
  /*margin: 0 15px;*/
  display: block;
  cursor: pointer;
  position: relative;
  padding: 0 0px 0 10px;
  /*border-bottom: 1px solid #ddebfd;*/
}
/*.row .filter label:before {
  content: "";
  height: 10px;
  width: 10px;
  top: 50%;
  left: 0;
  margin-top: -9px;
  position: absolute;
  border-width: 3px;
  border-style: solid;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}*/

.row .filter label:after {
  content: "";
  top: 50%;
  left: 5px;
  margin-top: -4px;
  position: absolute;
  border-width: 3px;
  border-style: solid;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -moz-transition: linear 0.2s all;
  -o-transition: linear 0.2s all;
  -webkit-transition: linear 0.2s all;
  transition: linear 0.2s all;
}
.no-bullets {
    list-style-type: none;
}
.budget,.title-items{
    color: #94a4c3;
    background: white;
    font-weight: bold;
    line-height: 35px;
    /*padding: 0 10px;*/
    font-family: 'Open Sans', sans-serif;
}
.bedroom,.title-items{
	bottom: 2%;
    color: #94a4c3;
    background: white;
    font-weight: bold;
    line-height: 35px;
    padding: 4% 0px 4%;
    font-family: 'Open Sans', sans-serif;
    border-bottom: 1px solid #e4effd;
}
.irs--flat .irs-from, .irs--flat .irs-to, .irs--flat .irs-single {
    background-color: #f4801f;
}
.irs--flat .irs-bar {
    background-color: #f37320;
}
.irs--flat {
    margin: 0px 3%;
}
.bedroom .input-group{
	width:42%;
}
.btn-primary{
	background-color: #f47320;
    border-color: #f47320;
}
.btn-primary:hover{
	background-color: #2baf2b;
    border-color: #2baf2b;
}
.view_style a{
	color: #94a4c3;
}
.view_style i{
	color: #2baf2b;
}
.current-view{
	padding-right: 8%;
}
.hotel_details{
	background: white;
	padding: 2% 1%;
	border-radius: 5px;
	margin-bottom: 2%;
}

.hotel_details:hover{
	box-shadow: 0 0 3px 2px #b7aeae;
}
.hotel_picture,.carousel{
    width: 300px !important;
    height: 200px !important;    
    left: 0;
    top: 0;
    padding-right: 0px;
}
.span.glyphicon .glyphicon-chevron-right {
    font-size: 12px !important;
}
.hotel_details_records{
	padding: 0px 0px 0px 0px;
  margin-left: 2%;
}
.hotel_price_records{
	padding: 11% 0px 0px 0px;
	text-align: right;
}
.hotel_heading{
	color: #6c6c6f;
    font-size: 19px;
    line-height: 21px;
    margin: 0;
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-transform: none;
}
.hotel_subheading{
	  color: #858585;
    font-size: 14px;
    line-height: 15px;
    margin: 5px 0 0;
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    text-transform: none;
}
.features{
	color: #858585;
    font-size: 15px;
    padding: 2% 0px;
}
.hotel_review_details{
	padding: 1% 0px;
	color: #858585;
  margin: 5px 0 0 4%;
}
.hotel_review{
	padding: 0px;
}
@media (max-width: 800px){
  .hotel_picture, .carousel{
    width: 98% !important;
  }
  .sortResort,.filter {
    display:none; 
  }
  .hotel_heading{
    padding-top: 3%;
  }
}
</style>
<?php $CI = &get_instance(); ?>
<div class="special featured">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12" style="text-align: right;">
           <h1 style="font-size: 11px;line-height: 15px; font-weight: 400;color: #767676;">Top one day stay picnic spot near pune</h1>
      </div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<div class='filter'>
				  	<p class='title'>Filters</p>
			  		<div class="budget hidden">
			  			<p>Budget per night</p>
			  			<input id="budget_price" name="">
			  		</div>
			  		<div class="bedroom hidden">
			  			<p><span>Bedroom</span><span><input type="text" value="" name="bedroom_number"></span></p>			  						  			
			  		</div>
			  		<p class='title_items active'>Packages</p>
				  	<ul class="no-bullets">
				  		<li class="visible hidden" style="transition-delay: 12ms;text-align: -webkit-center;">
					      	<div class="input-group" style="padding-top: 2%;">
                    <input type="text" placeholder="Search" name="search_records"class="input-sm form-control"> 
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-sm btn-primary serach_record" style="  margin-bottom: 12%;"> <i class="fa fa-search"></i></button> 
                    </span>
                  </div>
					    </li>
					    <?php foreach ($packages as $key) { ?>
						    <li class="visible" style="transition-delay: 12ms;">
						      	<input id='small' name='package' <?php if(!empty($packageType)){if(in_array(''.$key['pt_name'].'',$packageType, TRUE)){ echo "checked"; }}?> class="filterByDestination" type='checkbox' value="<?php echo $key['pt_name']; ?>">
						      	<label for='small'><?php echo ucfirst(strtolower($key['pt_name'])); ?></label>
						    </li>
					    <?php } ?>					    
				  	</ul>
				  	<p class='title_items <?php if(!empty($resortType)){ echo "active";} ?>'>Resort</p>
				  	<ul class="no-bullets">	
				  	<?php foreach ($resort as $key) {?>
				    	<li class="<?php if(!empty($resortType)){ echo "visible";} ?>">
				      		<input id='website' name="resort" <?php if(!empty($resortType)){if(in_array(''.$key['rs_display_name'].'',$resortType, TRUE)){ echo "checked"; }}?> type='checkbox' value="<?php echo $key['rs_display_name']; ?>">
				      		<label for='website'><?php echo $key['rs_display_name']; ?></label>
				    	</li>
				    <?php } ?>
				  	</ul>
				  	<p class='title' style="text-align: center;border-radius: 0px 0px 3px 3px;">Reset All</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<!-- <div class="row" style="padding: 1% 0px;">
					<div class="col-sm-6 col-md-6 col-lg-6 view_style">
						<ul class="no-bullets" style="display: -webkit-inline-box;">
							<li class="list-view current-view"><a href="javascript:void(0);"><i class="fa fa-th-list"></i> List View</a></li>
							<li class="grid-view current-view"><a href="javascript:void(0);"><i class="fa fa-th-large"></i> Grid View</a></li>
	 						<li class="map-view"><a href="javascrip:void(0);"><i class="fa fa-map-marker"></i> Map View</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6"></div>
				</div> -->
				<div class="row" style="padding: 1% 1%;">
					<!-- onclick="window.open('#','mywindow');" style="cursor: pointer;" -->
					<?php foreach ($packageRecords as $key) {?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hotel_details">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hotel_picture">
							<div id="myCarousel<?php echo $key['pk_id'];?>" class="carousel slide">
							    <div class="carousel-inner">
								<?php
									$resort_img = $CI->Home_model->fetch_details(array('im_resort_id'=>$key['pk_resort_id'],'im_isDelete'=>0,'im_image_type'=>0),'rm_image');
									// print_r($resort_img);die();
									if (empty($resort_img)) { ?>
										<div class="item active">
								        	<img src="<?=base_url()?>assets/images/image-not-available.jpg" alt="Los Angeles" style="width:100%;">
								      	</div>
								  <?php } else {$j=1;								
						    			foreach ($resort_img as $key1) {?>
									      	<div class="item <?php if($j==1) echo "active"; else echo"";?>">
									        	<img src="<?php echo $key1['im_image_url']?>" alt="test" style="width:100%;height: 200px;">
									      	</div>
							      <?php $j++;
											} }?>
							    </div>
							    <a class="left carousel-control" href="#myCarousel<?php echo $key['pk_id'];?>" data-slide="prev">
							      <span class="glyphicon glyphicon-chevron-left" style="font-size: 12px;top: 52%;"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="right carousel-control" href="#myCarousel<?php echo $key['pk_id'];?>" data-slide="next">
							      <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;    top: 52%;"></span>
							      <span class="sr-only">Next</span>
							    </a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 hotel_details_records">
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<?php 
                $resort = $CI->Home_model->fetch_details(array('rs_id'=>$key['pk_resort_id']),'rm_resort');
                $city = $CI->Home_model->fetch_details(array('ct_id'=>$resort[0]['rs_city']),'rm_cities');
							 $state = $CI->Home_model->fetch_details(array('st_id'=>$resort[0]['rs_state']),'rm_state'); 
              ?>
							<h2 class="hotel_heading"><?php echo $key['pk_name']; ?></h2>
              <!--<h3 class="hotel_subheading" style="text-transform: capitalize !important;"><?php echo "For ".strtolower($resort[0]['rs_display_name']); ?></h3>-->
							<h3 class="hotel_subheading"> at <?php if(!empty($resort[0]['rs_village'])){echo ucfirst(strtolower($resort[0]['rs_village'])).","; }?> <?php echo ucfirst(strtolower($city[0]['ct_name'])); ?>, <?php echo ucfirst(strtolower($state[0]['st_name'])); ?></h3>
							<div class="features clearfix">
								  
							</div>
						</div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hotel_price_records" style="padding-right: 0px;padding-top: 0px;">
                <h5 class="hidden" style="padding: 0px 7%;"><i class="fa fa-rupee" style="    text-decoration: line-through;"> 7,500</i> <i style="font-size:large;color: #f47320;font-family: sans-serif;">&nbsp 33%</i></span></h3>
                <h3 class="" style="padding: 0px 7%;"><!-- <i class="fa fa-flash" style="    color: #f47320;border: 1px solid #b3acac;font-size: large;padding: 2%;    border-radius: 43%;"></i> --> <i class="fa fa-rupee"> <?php if(!empty($key['pk_cost_adult'])){echo number_format($key['pk_cost_adult']);} ?></i><span style="font-size: small;text-transform: none;">/ Person</span></h3>
                <a href="<?php echo site_url('pkVerify?st_date=&end_dates=&adult=&
child=&pk='.$key['pk_name'].''); ?>"><span class="btn btn-primary" style="border-radius: 8%;margin: 2% 7%;font-weight: 700;"> Book Package <i class="fa fa-chevron-right"></i> </span></a>
              </div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 hotel_review_details" style="padding-right: 0px;">
              <?php echo $key['pk_desc']; ?>           			
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- //testimonials -->
