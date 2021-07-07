<style type="text/css">
  body {
    background-color: #e0eafd;
  }

  h1,
  h2 {
    margin: 0;
    text-transform: uppercase;
    font-family: inherit !important;
  }

  h3,
  h4,
  h5,
  h6 {
    font-family: inherit !important;
    margin: 0;
    text-transform: uppercase;
  }

  .marginTop {
    margin-top: 20.5%;
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

  .row .filter p,
  .row .filter li {
    font-weight: bold;
    line-height: 35px;
    font-size: 12px;
  }

  .row .filter .title {
    color: #fff;
    background-color: #6f7070;
    -moz-border-radius: 3px 3px 0 0;
    -webkit-border-radius: 3px;
    border-radius: 3px 3px 0 0;
    font-size: medium;
  }

  .row .filter .title_items {
    color: #6f7070;
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

  .row .filter .title_items.active+ul+.title_items {
    border-top: 1px solid #e4effd;
  }

  .row .filter .title_items.active:after {
    height: 5px;
    width: 5px;
    right: 14px;
    margin-top: -2.5px;
  }

  .row .filter .title_items:before,
  .row .filter .title_items:after {
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
    color: #000000;
    background-color: #ffffff;
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

  .row .filter ul li:nth-child(1) label:before,
  .row .filter ul li:nth-child(1) label:after {
    border-color: #5db6e2;
  }

  .row .filter ul li:nth-child(2) label:before,
  .row .filter ul li:nth-child(2) label:after {
    border-color: #c0a2f1;
  }

  .row .filter ul li:nth-child(3) label:before,
  .row .filter ul li:nth-child(3) label:after {
    border-color: #f7a238;
  }

  .row .filter ul li:nth-child(4) label:before,
  .row .filter ul li:nth-child(4) label:after {
    border-color: #f6d04d;
  }

  .row .filter ul li:nth-child(5) label:before,
  .row .filter ul li:nth-child(5) label:after {
    border-color: #40c9a1;
  }

  .row .filter ul li:nth-child(6) label:before,
  .row .filter ul li:nth-child(6) label:after {
    border-color: #ea8b8b;
  }

  .row .filter ul li:nth-child(7) label:before,
  .row .filter ul li:nth-child(7) label:after {
    border-color: #fe8ae0;
  }

  .row .filter ul li:nth-child(8) label:before,
  .row .filter ul li:nth-child(8) label:after {
    border-color: #abb6d2;
  }

  .row .filter input[type="radio"] {
    display: none;
  }

  .row .filter input[type="radio"]:checked+label:after {
    filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
    opacity: 1;
  }

  .row .filter label {
    /*margin: 0 15px;*/
    display: block;
    cursor: pointer;
    position: relative;
    padding: 0 10px 0 25px;
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

  .budget,
  .title-items {
    color: #94a4c3;
    background: white;
    font-weight: bold;
    line-height: 35px;
    /*padding: 0 10px;*/
  }

  .bedroom,
  .title-items {
    bottom: 2%;
    color: #94a4c3;
    background: white;
    font-weight: bold;
    line-height: 35px;
    padding: 4% 0px 4%;
    border-bottom: 1px solid #e4effd;
  }

  .irs--flat .irs-from,
  .irs--flat .irs-to,
  .irs--flat .irs-single {
    background-color: #f4801f;
  }

  .irs--flat .irs-bar {
    background-color: #f47720;
  }

  .irs--flat {
    margin: 0px 3%;
  }

  .bedroom .input-group {
    width: 42%;
  }

  .view_style a {
    color: #94a4c3;
  }

  .view_style i {
    color: #2baf2b;
  }

  .current-view {
    padding-right: 8%;
  }

  .hotel_details {
    background: white;
    padding: 2% 1%;
    border-radius: 5px;
    margin-bottom: 2.5%;
    box-shadow: 5px 5px 7px #ddd;
    border-width: 0px 0px 2px 0px;
    border-bottom: 1px solid #f47720;
  }

  .hotel_details:hover {
    box-shadow: 0 0 4px 4px #ddd;
  }

  .hotel_picture,
  .carousel {
    left: 0;
    top: 0;
    padding-right: 0px;
  }

  .span.glyphicon .glyphicon-chevron-right {
    font-size: 12px !important;
  }

  .hotel_details_records {
    padding: 0px 0px 0px 0px;
    margin-left: 2%;
  }

  .hotel_price_records {
    padding: 11% 0px 0px 0px;
    text-align: right;
    padding-right: 0px;
    width: 100%;
    float: right;
  }

  .hotel_heading {
    color: #212934 !important;
    font-size: 18px;
    line-height: 1.6em;
    font-weight: 600;
    margin: 0;
    text-overflow: ellipsis;
    /*overflow: hidden;*/
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-transform: none;
  }

  .hotel_subheading {
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

  .features {
    color: #858585;
    font-size: 15px;
    padding: 2% 0px;
  }

  .hotel_review_details {
    padding: 1% 0px;
    color: #858585;
    margin: 5px 0 0 4%;
  }

  .hotel_review {
    padding: 0px;
  }

  @media (max-width: 800px) {

    .hotel_picture,
    .carousel {
      width: 98% !important;
    }

    .hotel_heading {
      padding-top: 3%;
    }

    .hotel_price_records {
      /*width: 100%;*/
      padding: 1% 0px 0px 0px;
    }

    .marginTop {
      margin-top: 2%;
      margin-left: 0px;
    }
  }

  .hotel_details_records {
    padding: 0px 0px 0px 0px;

    margin-left: 2%;
  }
</style>
<?php $CI = &get_instance(); ?>
<div class="special featured">
  <div class="container">
    <div class="row">
      <!-- <div class="col-sm-1 col-md-1 col-lg-1"></div> -->
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class='filter'>
          <p class='title'>Filters</p>
          <div class="budget hidden" style="border-bottom: 1px solid #e4effd;padding-bottom: 6px;">
            <p class='title_items active'>Budget per night</p>
            <input id="budget_price" name="">
          </div>
          <div class="bedroom hidden">
            <p><span>Bedroom</span><span><input type="text" value="" name="bedroom_number"></span></p>
          </div>
          <p class='title_items active'>Location</p>
          <ul class="no-bullets">
            <li class="visible hidden" style="transition-delay: 12ms;text-align: -webkit-center;">
              <div class="input-group" style="padding-top: 2%;">
                <input type="text" placeholder="Search" name="search_records" class="input-sm form-control">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-sm btn-primary serach_record" style="  margin-bottom: 12%;"> <i class="fa fa-search"></i></button>
                </span>
              </div>
            </li>
            <?php foreach ($destinations as $key) { ?>
              <li class="visible" style="transition-delay: 12ms;">
                <input id='small' name='destination' <?php if (!empty($destination)) {
                                                        if (in_array('' . $key['des_name'] . '', $destination, TRUE)) {
                                                          echo "checked";
                                                        }
                                                      } ?> class="filterByDestination" type='checkbox' value="<?php echo $key['des_name']; ?>">
                <label for='small'><?php echo ucfirst(strtolower($key['des_name'])); ?></label>
              </li>
            <?php } ?>
          </ul>
          <p class='title_items active<?php /*if(!empty($property)){ echo "active";} */ ?>'>Property Type</p>
          <ul class="no-bullets">
            <?php
            //print_r($proprty_type);

            foreach ($proprty_type as $key) { ?>
              <li class="<?php if (!empty($property)) {
                            echo "visible";
                          } ?>">
                <input id='website' name="property" <?php if (!empty($property)) {
                                                      if (in_array('' . $key['pt_name'] . '', $property, TRUE)) {
                                                        echo "checked";
                                                      }
                                                    } ?> type='checkbox' value="<?php echo $key['pt_name']; ?>">
                <label for='website'><?php echo $key['pt_name']; ?></label>
              </li>
            <?php } ?>
          </ul>
          <ul class="no-bullets hidden">
            <?php
            foreach ($proprty_type as $key) { ?>
              <li class="visible" style="transition-delay: 12ms;">
                <input id='website' name="property" <?php if (!empty($property)) {
                                                      if (in_array('' . $key['pt_name'] . '', $property, TRUE)) {
                                                        echo "checked";
                                                      }
                                                    } ?> type='checkbox' value="<?php echo $key['pt_name']; ?>">
                <label for='website'><?php echo $key['pt_name']; ?></label>
              </li>
            <?php } ?>
          </ul>
          <p class='title_items hidden'>Amenities</p>
          <ul class="no-bullets hidden">
            <?php foreach ($amenities as $key) { ?>
              <li>
                <input id='' name='' type='checkbox'>
                <label for=''><?php echo $key['am_name']; ?></label>
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
        <div class="row" style="padding: 1%;margin-top: -3%;">
          <!-- onclick="window.open('#','mywindow');" style="cursor: pointer;" -->
          <?php foreach ($resort as $key) {
            $resort_des = $CI->Home_model->fetch_details(array('des_id' => $key['rs_des_id'], 'des_isDelete' => 0), 'rm_destination');
            //   print_r($resort_des);
            $resort_seo = $CI->Home_model->fetch_details(array('rm_page' => 3, 'rm_resort_id' => $key['rs_id']), 'rm_seo');
            $SEO_keyword = '';
            if (empty($start_date)) {
              $start_date = "" . date('d M Y') . "";
            }
            if (empty($till_date)) {
              $till_date = "" . date('d M Y', strtotime('+1 day', strtotime($start_date))) . "";
            }
            if (empty($adult)) {
              $adult = 0;
            }
            if (empty($child)) {
              $child = 0;
            }
            if (empty($resort_seo)) {
              $SEO_keyword = 'aspirevillastays';
            } else {
              $SEO_keyword = $resort_seo[0]['rm_keyword'];
            }
            //   echo $SEO_keyword;
          ?>
            <a href="<?php echo site_url('destinationsResort/' . $resort_des[0]['des_name'] . '/' . $SEO_keyword . '/' . $key['rs_display_name'] . '/' . $start_date . '/' . $till_date . '/' . $adult . '/' . $child . ''); ?>">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hotel_details">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 hotel_picture">
                  <div id="myCarousel<?php echo $key['rs_id']; ?>" class="carousel slide">
                    <div class="carousel-inner">
                      <?php
                      $resort_img = $CI->Home_model->fetch_details(array('im_resort_id' => $key['rs_id'], 'im_isDelete' => 0, 'im_image_type' => 0), 'rm_image');
                      // print_r($resort_img);die();
                      if (empty($resort_img)) { ?>
                        <div class="item active">
                          <img src="<?= base_url() ?>assets/images/image-not-available.jpg" alt="Los Angeles" style="width:100%;height: 230px;">
                        </div>
                        <?php } else {
                        $j = 1;
                        foreach ($resort_img as $key1) { ?>
                          <div class="item <?php if ($j == 1) echo "active";
                                            else echo ""; ?>">
                            <img src="<?php echo $key1['im_image_url'] ?>" alt="test" style="width:100%;height: 230px;">
                          </div>
                      <?php $j++;
                        }
                      } ?>
                    </div>
                    <a class="left carousel-control" href="#myCarousel<?php echo $key['rs_id']; ?>" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" style="font-size: 12px;top: 52%;"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel<?php echo $key['rs_id']; ?>" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" style="font-size: 12px;    top: 52%;"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hotel_details_records">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="hotel_heading"><?php echo $key['rs_display_name']; ?></h2>
                    <?php $city = $CI->Home_model->fetch_details(array('ct_id' => $key['rs_city']), 'rm_cities'); ?>
                    <?php $state = $CI->Home_model->fetch_details(array('st_id' => $key['rs_state']), 'rm_state'); ?>
                    <h3 class="hotel_subheading"><?php if (!empty($key['rs_village'])) {
                                                    echo ucfirst(strtolower($key['rs_village'])) . ",";
                                                  } ?> <?php echo ucfirst(strtolower($city[0]['ct_name'])); ?>, <?php echo ucfirst(strtolower($state[0]['st_name'])); ?></h3>
                    <div class="features clearfix">
                      <?php $proprty_type = $CI->Home_model->fetch_details(array('pt_id' => $key['rs_pt_id'], 'pt_isDelete' => 0), 'rm_property_type'); ?>
                      <span><i class="fa fa-home"></i> <?php echo $key['rs_caption']; //echo $proprty_type[0]['pt_name']; 
                                                        ?></span> &nbsp
                      <?php $person = $CI->db->query("SELECT sum((rr_no_of_rooms * (rr_max_person + rr_extra_adult))) as total_person FROM `rm_resort_roomtype` where rr_rs_id =" . $key['rs_id'] . " and rr_isDelete = 0")->result_array(); ?>
                      <!--<span><i class="fa fa-users"></i> <span class="" style='display:none'><?php if (!empty($person)) {
                                                                                                  echo $person[0]['total_person'];
                                                                                                } else {
                                                                                                  echo "0";
                                                                                                } ?> Guests</span></span>-->
                    </div>

                    <?php
                    $rate = $CI->db->query("SELECT min(rr_room_rate) as lowest_rate FROM `rm_resort_roomtype` where rr_rs_id = " . $key['rs_id'] . " and rr_isDelete = 0")->result_array();
                    $records = $CI->db->query("SELECT count(rr_id) as total_records FROM `rm_resort_roomtype` where rr_rs_id = " . $key['rs_id'] . " and rr_isDelete = 0")->result_array();
                    // $average =  $rate[0]['lowest_rate']/$records[0]['total_records'];
                    // print_r($average)
                    ?>
                    <h5 class="hidden" style="padding: 0px 7%;"><i class="fa fa-rupee" style="    text-decoration: line-through;"> 7,500</i> <i style="font-size:large;color: #f47320;font-family: sans-serif;">&nbsp 33%</i></span></h3>
                      <h3 class="marginTop" style="padding: 0px 7%;">
                        <!-- <i class="fa fa-flash" style="    color: #f47320;border: 1px solid #b3acac;font-size: large;padding: 2%;    border-radius: 43%;"></i> --> <i class="fa fa-rupee"> <?php if (!empty($rate)) {
                                                                                                                                                                                                  echo number_format($rate[0]['lowest_rate']);
                                                                                                                                                                                                } ?></i><span style="font-size: small;text-transform: none;">/night</span>
                      </h3>
                      <?php if ($rate[0]['lowest_rate'] != 0) {
                      ?>
                        <a href="<?php echo site_url('destinationsResort/' . $resort_des[0]['des_name'] . '/' . $SEO_keyword . '/' . $key['rs_display_name'] . '/' . $start_date . '/' . $till_date . '/' . $adult . '/' . $child . ''); ?>"><span class="btn btn-primary" style="border-radius: 8%;margin: 2% 7%;font-weight: 700;"> View Details <i class="fa fa-chevron-right"></i> </span></a>
                      <?php } ?>

                  </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="padding-right: 0px;">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hotel_review_details">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hotel_review">
                      <?php //echo $key['rs_caption']; 
                      ?>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hotel_price_records hidden">
                    <?php
                    $rate = $CI->db->query("SELECT min(rr_room_rate) as lowest_rate FROM `rm_resort_roomtype` where rr_rs_id = " . $key['rs_id'] . " and rr_isDelete = 0")->result_array();
                    $records = $CI->db->query("SELECT count(rr_id) as total_records FROM `rm_resort_roomtype` where rr_rs_id = " . $key['rs_id'] . " and rr_isDelete = 0")->result_array();
                    // $average =  $rate[0]['lowest_rate']/$records[0]['total_records'];
                    // print_r($average)
                    ?>
                    <h5 class="hidden" style="padding: 0px 7%;"><i class="fa fa-rupee" style="    text-decoration: line-through;"> 7,500</i> <i style="font-size:large;color: #f47320;font-family: sans-serif;">&nbsp 33%</i></span></h3>
                      <h3 class="" style="padding: 0px 7%;">
                        <!-- <i class="fa fa-flash" style="    color: #f47320;border: 1px solid #b3acac;font-size: large;padding: 2%;    border-radius: 43%;"></i> --> <i class="fa fa-rupee"> <?php if (!empty($rate)) {
                                                                                                                                                                                                  echo number_format($rate[0]['lowest_rate']);
                                                                                                                                                                                                } ?></i><span style="font-size: small;text-transform: none;">/night</span>
                      </h3>
                      <?php if ($rate[0]['lowest_rate'] != 0) {
                      ?>
                        <a href="<?php echo site_url('destinationsResort/' . $resort_des[0]['des_name'] . '/' . $SEO_keyword . '/' . $key['rs_display_name'] . '/' . $start_date . '/' . $till_date . '/' . $adult . '/' . $child . ''); ?>"><span class="btn btn-primary" style="border-radius: 8%;margin: 2% 7%;font-weight: 700;"> View Resort <i class="fa fa-chevron-right"></i> </span></a>
                      <?php } ?>
                  </div>
                </div>
              </div>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- //testimonials -->