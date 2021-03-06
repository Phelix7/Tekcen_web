<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Tekcen</title>
		<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<!-- web-font -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<!-- web-font -->
		<!-- js -->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/modernizr.custom.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="/js/move-top.js"></script>
		<script type="text/javascript" src="/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
	</head>
	<body>
		<!-- header -->
		<div id="home" class="header-bg">
			<div class="header-layer">
				<div class="header-top">
					<!-- container -->
					<div class="container">
						<div class="head-logo">
							<a href="#"><img src="images/logo2.png" style="width: 70px; height: 70px;" alt="" /></a>
						</div>
						<div class="top-nav">
							<div class="nav-icon">
								<a href="#" class="right_bt" id="activator"><span> </span> </a>
							</div>
							 <div class="box" id="box" style="top: -1000px;">
								 <div class="box_content">        					                         
									<div class="box_content_center">
										<div class="form_content">
											<div class="menu_box_list">
												<ul>
													<li><a href="#home" class="scroll"><span>home</span></a></li>
													<li><a href="#services" class="scroll"><span>services</span></a></li>
													<!-- <li><a href="#stories" class="scroll"><span>stories</span></a></li>
													<li><a href="#gallery" class="scroll"><span>gallery</span></a></li> -->
													<li><a href="#contact" class="scroll"><span>contact</span></a></li>
												</ul>
											</div>
											<a class="boxclose" id="boxclose"> <span> </span></a>
										</div>                                  
									</div> 	
								</div>  	  
							</div>
							<!-- start-click-drop-down-menu -->
							<!-- start-dropdown -->
							 <script type="text/javascript">
								var $ = jQuery.noConflict();
									$(function() {
										$('#activator').click(function(){
											$('#box').animate({'top':'0px'},900);
										});
										$('#boxclose').click(function(){
										$('#box').animate({'top':'-1000px'},900);
										});
									});
									$(document).ready(function(){
									//Hide (Collapse) the toggle containers on load
									$(".toggle_container").hide(); 
									//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
									$(".trigger").click(function(){
										$(this).toggleClass("active").next().slideToggle("500");
											return false; //Prevent the browser jump to the link anchor
									});
														
								});
							</script>
							<!-- //End-click-drop-down-menu -->
							<!-- top-nav -->
						</div>
						<div class="clearfix"> </div>
						<div class="head-info">
							<h1>TEKCEN</h1>
							<p>{quick_description_here}</p>
							<div class="botton">
								<a href="mailto:tekcentc@gmail.com" style="background: #399dc7; border: none;">Get in Touch</a>
							</div>
						</div>
					</div>
					<!-- //container -->
				</div>
			</div>
		</div>
		<!-- //header -->
		<!-- service -->
		<div id="services" class="service">
			<!-- container -->
			<div class="container">
				<div class="service-grids">
					<div class="col-md-4 service-grid service-left">
						<div class="creative"> </div>
						<h3>We Are Creative</h3>
						<p>{quick_description_here}</p>
					</div>
					<div class="col-md-4 service-grid service-middle">
						<div class="skills"> </div>
						<h3>We have Skills</h3>
						<p>{quick_description_here}</p>
					</div>
					<div class="col-md-4 service-grid service-right">
						<div class="help"> </div>
						<h3>We Love To Help</h3>
						<p>{quick_description_here}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //service -->
		<!-- stories -->
		<div id="stories" class="stories">
			<!-- container -->
			<div class="container">
				<!-- photography -->
				<?php



				if(0){?>
				<div id="gallery" class="photography">
						<div class="photography-images">	
							<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								<img src="images/2.jpg" />
								<div class="caption">
									<span> </span>
								</div>
							</a>
						</div>
						<div class="photography-images middle">
							<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								<img src="images/3.jpg" />
								<div class="caption">
									<span> </span>
								</div>
							</a>
						</div>
						<div class="photography-images">
							<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								<img src="images/4.jpg" />
								<div class="caption">
									<span> </span>
								</div>
							</a>
						</div>
						<div class="photography-images">
							<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								<img src="images/7.jpg" />
								<div class="caption">
									<span> </span>
								</div>
							</a>
						</div>
						<div class="photography-images middle">
							<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								<img src="images/8.jpg" />
								<div class="caption">
									<span> </span>
								</div>
							</a>
						</div>
						<div class="photography-images">
							<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								<img src="images/9.jpg" />
								<div class="caption">
									<span> </span>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
						
					<!---- Script for gallery Here --->
					<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
						<script type="text/javascript">
						$(function () {
							
							var filterList = {
							
								init: function () {
								
									// MixItUp plugin
									// http://mixitup.io
									$('#portfoliolist').mixitup({
										targetSelector: '.portfolio',
										filterSelector: '.filter',
										effects: ['fade'],
										easing: 'snap',
										// call the hover effect
										onMixEnd: filterList.hoverEffect()
									});				
								
								},
								
								hoverEffect: function () {
								
									// Simple parallax effect
									$('#portfoliolist .portfolio').hover(
										function () {
											$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
											$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
										},
										function () {
											$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
											$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
										}		
									);				
								
								}
					
							};
							
							// Run the show!
							filterList.init();
							
							
						});	
						</script>
						<!--- Gallery Script Ends --->
						<!-- pop-up-box -->
						<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
						<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
						<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
						<!-- //pop-up-box -->
						<div id="small-dialog" class="mfp-hide">
							<div class="image-top">
								<img src="images/4.jpg" alt="" />
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
							</div>
						</div>
						<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
				<!-- Work Ends Here -->
				</div>

				<?php 
			}



			?>

				<!-- //photography -->
			</div>
			<!-- //container -->
		</div>
		<!-- //stories -->
		<!-- contact -->
		<div id="contact" class="contact">
			<!-- container -->
			<div class="container">
				<div class="contact-info">
					<h2>Get In Touch</h2>
					<p>We are communicative and social</p>
				</div>
				<div class="contact-bottom">
					<div class="col-md-8 bottom-left">
						<form method="POST" action="/">
							<input type="text" placeholder="Your Name" required="">
							<input type="text" class="mail" placeholder="Your Mail" required="">
							<input type="text" class="subject" placeholder="Subject" required="">
							<textarea placeholder="Type Massage Here..." required=""></textarea>
							<input type="submit" value="SEND" style="background: #399dc7;">
						</form>
					</div>
					<div class="col-md-4">
						<div class="bottom-right">
							<h3>Email</h3>
							<p><a href="mailto:tekcentc@gmail.com">tekcentc@gmail.com</a></p>
							<h3>Phone</h3>
							<p>+2547 19 679 711</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //contact -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="footer-left">
					<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
				<div class="footer-right">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		<!-- //container -->
		</div>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</body>
</html>