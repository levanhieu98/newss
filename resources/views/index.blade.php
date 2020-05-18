<!DOCTYPE html>
<!--
	24 News by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
<html lang="en" class="no-js">
<head>
	<!-- Required meta tags -->
	 <base href="{{asset('')}}" >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Newss</title>
	<link href="css/media_query.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
	integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="css/animate.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
	<link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap CSS -->
	<link href="css/style_1.css" rel="stylesheet" type="text/css"/>
	<!-- Modernizr JS -->
	<script src="js/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<div class="container-fluid fh5co_header_bg">
		<div class="container">
			<div class="row">
				<div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
					class="fa fa-clock-o"></i>{{date('d-m-Y')}}</a>
					<div class="d-inline-block fh5co_trading_posotion_relative">Long-Hiểu-Đạt</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3 fh5co_padding_menu">
					<img src="hinhmau/logo.png" alt="img" class="fh5co_logo_width"/>
				</div>
				<div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
					<div class="text-center d-inline-block">
						<a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
					</div>
					<div class="text-center d-inline-block">
						<a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
					</div>
					<div class="text-center d-inline-block">
						<a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
					</div>
					<div class="text-center d-inline-block">
						<a  class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
					</div>
					<div class="text-center d-inline-block">
						<a  class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
		@include('menu')
	</div>
	@yield('content');
	<div class="container-fluid fh5co_footer_bg pb-3">
		@include('footer');
	</div>
	<div class="container-fluid fh5co_footer_right_reserved">
		<div class="container">
			<div class="row  ">
				<div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2018, All rights reserved. Design by <a href="https://freehtml5.co" title="Free HTML5 Bootstrap templates">FreeHTML5.co</a>. </div>
				<div class="col-12 col-md-6 spdp_right py-4">
					<a href="#" class="footer_last_part_menu">Home</a>
					<a href="Contact_us.html" class="footer_last_part_menu">About</a>
					<a href="Contact_us.html" class="footer_last_part_menu">Contact</a>
					<a href="blog.html" class="footer_last_part_menu">Latest News</a></div>
				</div>
			</div>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
		integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
		crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
		integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
		crossorigin="anonymous"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Main -->
		<script src="js/main.js"></script>

	</body>
	</html>