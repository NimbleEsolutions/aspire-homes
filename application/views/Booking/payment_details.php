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
	color: #ff401b;
	font-size: 0.8em;
}
.inner-header-agile {
    padding: 0.8em 0 0.8em 0.6em;
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
</style>
<?php $CI = &get_instance(); ?>
<div class="special featured">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>Booking Payment Details</h2>
			</div>
			<form class="form-horizontal" method="post" id="prjCompare" action="<?php echo site_url('booking')?>">
			</form>
		</div>
	</div>
</div>

<!-- //testimonials -->
