	<div class="w3l-footer">
		<div class="container">
         	<div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
				       	<li><a href="https://feetupholidays.com/">Home</a></li> 
						<li><a href="https://feetupholidays.com/Blog/about-us/">About</a></li> 
						<li><a href="https://feetupholidays.com/Blog/gallery/">Gallery</a></li> 
						<li><a href="https://feetupholidays.com/Blog/contact-us/">Contact</a></li> 
						<li><a href="https://feetupholidays.com/Blog/sitemap/">Sitemap</a></li> 
					</ul>
				</div>
				<div class="col-md-3 footer-info-grid address">
					<h4>Address</h4>
					<address>
						<ul>							   
							<li>302, Madhu-Asha Apartment,</li>
							<li>Ambika Housing Society, </li>
							<li>Senapati Bapat Rd, Chattushringi,</li>
							<li> Gokhalenagar, Pune, India 411016</li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 footer-info-grid links">
					<h4>Our Policy</h4>
					<ul>
				       	<li><a href="https://feetupholidays.com/Blog/terms-conditions/" target="_blank">Terms & Conditions</a></li> 
						<li><a href="https://feetupholidays.com/Blog/feetup-security-tips/" target="_blank">feetup security tips</a></li> 
						<!-- <li><a href="codes.html">Services</a></li>  -->
						<li><a href="https://feetupholidays.com/Blog/privacy-security-policies/" target="_blank">Privacy & Security Policies</a></li> 
						<li><a href="https://feetupholidays.com/Blog/refund-policy/" target="_blank">Refund Policy</a></li> 
					</ul>
				</div>
				<div class="col-md-4 footer-info-grid">
					<div class="connect-social">
						<h4>Connect with us</h4>
						<address>
							<ul>
								<li>Telephone : +91 70308 66442 || +91 70308 66443</li>
								<li>Email : <a class="mail" href="mailto:sales@feetupholidays.com">sales@feetupholidays.com</a></li>
							</ul>
						</address>
						<section class="social">
	                        <ul>
								<li><a class="icon fb" href="https://www.facebook.com/FeetupHolidays/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a class="icon pin" href="https://www.instagram.com/feetup.holidays/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<!-- <li><a class="icon fb" href="https://www.linkedin.com/company-beta/13263859" target="_blank"><i class="fa fa-linkedin"></i></a></li> -->
								<!-- <li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li> -->
								<li><a class="icon pin" href="https://www.youtube.com/channel/UCp3M2LG0PzhVTcFXGUwJC9w" target="_blank"><i class="fa fa-youtube"></i></a></li>
								<!-- <li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li> -->
								<!-- <li><a class="icon pin" href="https://in.pinterest.com/feetupholidays/" target="_blank"><i class="fa fa-pinterest"></i></a></li> -->
							</ul>
						</section>
					</div>					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class=" newsletter">
				<h4></h4>
				<p></p>
				<!-- <form action="#" method="post" class="newsletter">
					<input class="email" type="email" placeholder="Your email address..." required="">
					<input type="submit" class="submit" value="Subscribe">
				</form> -->
			</div>
	   </div>
    </div>    
	<div class="w3agile_footer_copy">
		    <p>© 2019 Resort. All rights reserved | Developed by <a href="https://nimble-esolutions.com/" target="_blank">Nimble eSolution</a></p>
	</div>
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <i class="fa fa-home"></i></a>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.zoomslider.min.js"></script>
	<script src="<?=base_url()?>assets/js/main.js"></script>
	<script src="<?=base_url()?>assets/js/simplePlayer.js"></script>
	<script defer src="<?=base_url()?>assets/js/jquery.flexslider.js"></script>
	<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/easing.js"></script>
	<script src="<?php echo base_url()?>assets/sweetalert/sweetalert.min.js"></script>
	<script src="<?php echo  base_url();?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo  base_url();?>assets/js/additional-methods.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
	<script>
		$(window).load(function(){
		  	$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			 });				
		});

		$(document).ready(function(){
			$(".dropdown").hover(            
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
					$(this).toggleClass('open');        
				},
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
					$(this).toggleClass('open');       
				}
			);

			$("#video").simplePlayer();

			$('.carousel').carousel();

			<?php if(isset($flash['active']) && $flash['active'] == 1){ ?>
	            swal({
	                title: "<?=$flash['title']?>",
	                text: "<?=$flash['text']?>",
	                type: "<?=$flash['type']?>",
	            });
	        <?php } ?>

			$().UItoTop({ easingType: 'easeOutQuart' });	

			$(function () {
                $('input[name="form_dates"]').datepicker({
                    numberOfMonths: 2,
                    minDate:"0",
                    dateFormat:'d M yy',
                    onSelect: function (selected) {
                        var dt = new Date(selected);
                        dt.setDate(dt.getDate() + 1);
                        $('input[name="till_dates"]').datepicker("option", "minDate", dt);
                    }
                });
                $('input[name="till_dates"]').datepicker({
                    numberOfMonths: 2,
                    minDate:"0",
                   dateFormat:'d M yy',
                    onSelect: function (selected) {
                        var dt = new Date(selected);
                        dt.setDate(dt.getDate() - 1);
                        $('input[name="form_dates"]').datepicker("option", "maxDate", dt);
                    }
                });
            });

			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});	

			$(document).on('click','#spin-this',function(){
				if($('#spin').hasClass('verify')){
					$('#spin').css('margin-right', '0px');	
					$('#spin').attr("class", "theme-config-box");		
				}else{
					$('#spin').css('margin-right', '-220px');
					$('#spin').attr("class", "theme-config-box verify");
				}
				
			});

			$('#callRequest').validate({
	            rules:{
	                request_person:{
	                    required:true
	                },
	                request_contact:{
	                    required:true,
	                    digits:true,
	                    minlength:10,
	                    maxlength:10
	                },
	                request_email:{
	                    required:true
	                }
	            },
	            message:{

	            }
	        });    			
		});
	</script>
</body>
</html>