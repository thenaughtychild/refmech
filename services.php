
<!DOCTYPE html>
<html>
<head>
<title>Antivirus a Business Category Flat Bootstarp responsive Website Template| Services :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Antivirus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.0.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!--start-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
<!--End-top-nav-script-->
</head>
<body>
<!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="header-mian">
			<div class="head">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="call">
					<ul>
						<li><p>CALL 000.123.4567</p></li>
						<li><p class="msg"><a href="#"><img src="images/msg.png" alt=""/></a></p></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="navigation">
				 	<span class="menu"></span> 
					<ul class="navig">
						<li><a href="index.html">HOME</a></li>
						<li><a href="services.html" class="active">SERVICES</a></li>
						<li><a href="pricing.html">PRICING</a></li>
						<li><a href="404.html">BUSINESS PLANS</a></li>
						<li><a href="about.html">ABOUT</a></li>
						<li><a href="contact.html">CONTACT</a></li>
						<li><a href="404.html">ONLINE BACKUP</a></li>
					</ul>
				</div>
				</div>
			</div>
		</div>	
	<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
	<!-- script-for-menu -->
	<!--start-services-->
	<div class="services">
		<div class="container">
			<div class="services-main">
				<h3>Main Services</h3>
				<div class="services-top">
					<div class="col-md-6 services-top-left">
						<div class="services-top-main">
							<div class="col-md-6 services-left">
								<img src="images/service-1.jpg" alt="" />
							</div>
							<div class="col-md-6 services-left">
								<h4>Proin tempus lacus at</h4>
								<p>Quisque diam risus, scelerisque vitae egestas vitae, congue at neque. Suspendisse tincidunt orci quis est ultrices vehicula. Aliquam risus ex, iaculis hendrerit lobortis eget, pretium eu justo. Duis malesuada enim eros.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="services-top-main">
							<div class="col-md-6 services-left">
								<img src="images/service-4.jpg" alt="" />
							</div>
							<div class="col-md-6 services-left">
								<h4>Maecenas quis lacus</h4>
								<p>Quisque diam risus, scelerisque vitae egestas vitae, congue at neque. Suspendisse tincidunt orci quis est ultrices vehicula. Aliquam risus ex, iaculis hendrerit lobortis eget, pretium eu justo. Duis malesuada enim eros.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-6 services-top-left">
						<div class="services-top-main">
							<div class="col-md-6 services-left">
								<img src="images/service-3.jpg" alt="" />
							</div>
							<div class="col-md-6 services-left">
								<h4>Vestibulum lobortis velit</h4>
								<p>Quisque diam risus, scelerisque vitae egestas vitae, congue at neque. Suspendisse tincidunt orci quis est ultrices vehicula. Aliquam risus ex, iaculis hendrerit lobortis eget, pretium eu justo. Duis malesuada enim eros.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="services-top-main">
							<div class="col-md-6 services-left">
								<img src="images/service-2.jpg" alt="" />
							</div>
							<div class="col-md-6 services-left">
								<h4>Etiam in dolor sed purus</h4>
								<p>Quisque diam risus, scelerisque vitae egestas vitae, congue at neque. Suspendisse tincidunt orci quis est ultrices vehicula. Aliquam risus ex, iaculis hendrerit lobortis eget, pretium eu justo. Duis malesuada enim eros.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--start-services-->
	<!--start-feature-->
	<div class="feature">
		<div class="container">
			<div class="feature-main">
				<h3>Featured Services</h3>
				<div class="feature-top">
					<div class="col-md-4 feature-left">
						<ul>
							<li><a href="#">Suspendisse ullamcorper aliquam justo nec.</a></li>
							<li><a href="#">Donec convallis auctor elit vitae.</a></li>
							<li><a href="#">Cras vulputate vehicula orci vitae facilisis.</a></li>
							<li><a href="#">Nulla eget sodales ante, quis tincidunt.</a></li>
							<li><a href="#">Phasellus elementum scelerisque accumsan</a></li>
							<li><a href="#">Etiam vitae justo a augue lobortis </a></li>
						</ul>
					</div>
					<div class="col-md-4 feature-left">
						<ul>
							<li><a href="#">In maximus at augue in pretium.</a></li>
							<li><a href="#">Class aptent taciti sociosqu ad litora</a></li>
							<li><a href="#">Nulla eget sodales ante, quis tincidunt.</a></li>
							<li><a href="#">Suspendisse consectetur egestas libero</a></li>
						</ul>
					</div>
					<div class="col-md-4 feature-left">
						<ul>
							<li><a href="#">Vestibulum pretium purus sit amet mollis</a></li>
							<li><a href="#">Donec convallis auctor elit vitae.</a></li>
							<li><a href="#">Maecenas metus neque, ornare et condimentum</a></li>
							<li><a href="#">Nulla eget sodales ante, quis tincidunt.</a></li>
							<li><a href="#"> Cras dolor eros, aliquet consequat hendrerit</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-feature-->
	<!--start-footer-->	
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-top-left ftr-one">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="404.html">Business Plans</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="404.html">Online Backup</a></li>
						<li><a href="#">Student Plans</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-top-left ftr-two">
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Disclaimer</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-top-left ftr-tre">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">You Tube</a></li>
						<li><a href="#">Our Blog</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-top-left">
					<p>000.123.4567</p>
					<a href="mailto:example@email.com">info@antivirus.com</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-footer-->	
	<!--start-footer-bottom-->	
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-text">
				<p>Template By <a href="http://w3layouts.com/"> W3layouts</a></p>
			</div>
		</div>
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-bottom-->				 
</body>
</html>