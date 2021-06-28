	<div class="w3l-footer">
		<div class="container">
         	<div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
				       	<li><a href="index.html">Home</a></li> 
						<li><a href="about.html">About</a></li> 
						<li><a href="codes.html">Services</a></li> 
						<li><a href="gallery.html">Gallery</a></li> 
						<li><a href="contact.html">Contact</a></li> 
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
							<li>Telephone : <br>+91 70308 66442 || +91 70308 66443</li>
							<li>Email : <a class="mail" href="mailto:sales@feetupholidays.com">sales@feetupholidays.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 footer-grid">
				   <h4>Instagram</h4>
					<div class="footer-grid-instagram">
					<a href="#"><img src="<?=base_url()?>assets/images/f1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="<?=base_url()?>assets/images/f2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="#"><img src="<?=base_url()?>assets/images/f3.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="<?=base_url()?>assets/images/f4.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-info-grid">
					<div class="connect-social">
						<h4>Connect with us</h4>
						<section class="social">
	                        <ul>
								<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</section>
					</div>					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="connect-agileits newsletter hidden">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
				</p>
				<form action="#" method="post" class="newsletter">
					<input class="email" type="email" placeholder="Your email address..." required="">
					<input type="submit" class="submit" value="Subscribe">
				</form>
			</div>
	   </div>
    </div>
	<div class="w3agile_footer_copy">
		    <p>© 2019 Resort. All rights reserved | Developed by <a href="https://nimble-esolutions.com/" target="_blank">Nimble eSolution</a></p>
	</div>
	<a href="#home" id="toTop" class="scroll" style="display: block;"> <i class="fa fa-home"></i></a>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.zoomslider.min.js"></script>
	<script src="<?=base_url()?>assets/js/main.js"></script>
	<script src="<?=base_url()?>assets/js/simplePlayer.js"></script>
	<script defer src="<?=base_url()?>assets/js/jquery.flexslider.js"></script>
	<script src="<?=base_url()?>assets/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/easing.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/js/wizard/jquery.steps.js"></script>
	<script src="<?php echo base_url()?>assets/js/wizard/main.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.bootstrap-touchspin.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
	<script>
		// var fixmeTop = $('.fixme').offset().top;
		// $(window).scroll(function() {
		//     var currentScroll = $(window).scrollTop();
		//     if (currentScroll >= fixmeTop) {
		//         $('.fixme').css({
		//             position: 'fixed',
		//             top: '0',
		//             width:"81%",
		//             backgroundColor: '#ffffff',
  //  					zIndex: '200',
  //  					borderBottom:"1px solid",
  //  					padding:"1% 1% 1% 0",
  //  					// borderRadius:'12'
		//         });
		//     } else {
		//         $('.fixme').css({
		//             position: 'relative',
		//             zIndex: '100',
		//             width:"100%",
		//             borderBottom:"none",
		//             padding:"1% 1% 1% 0",
		//         });
		//     }
		// });
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
			$().UItoTop({ easingType: 'easeOutQuart' });


			function currencyFormat(num) {
			  return '' + num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
			}

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

            $(function() {  
			  	transition_timeout = 40;
			  	$('.title_items').click(function() {
				    current = $(this).next().find('li');
				    $(this).toggleClass('active');
			    	current.toggleClass('visible');
			    	if ($(this).hasClass('active')) {
				      	for( i = 0; i <= current.length; i++ ) {
				        	$(current[i]).css('transition-delay', transition_timeout * i + 'ms');
					    }
				    }
				    else {
					    for( i = current.length, j = -1; i >= 0; i--, j++) {
					        $(current[i]).css('transition-delay', transition_timeout * j + 'ms');
					    }
				    }
			  	});
			});

            $("#budget_price").ionRangeSlider({
		        type: "double",
		        min: 100,
		        max: 10000,
		        // from: 100,
		        // to: 8000,
		        onChange: function (data) {
		            // console.dir(data);
		        }
		    });	

		    $("input[name='bedroom_number']").TouchSpin({
                initval: 0
            });	

			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});				
		});
	</script>
</body>
</html>