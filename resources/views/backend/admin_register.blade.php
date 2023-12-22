<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="canonical" href="index.html" />
	<!-- OG -->
	<meta name="robots" content="index, follow">

	<meta name="keywords" content="Web Design, Education, Institute, Study" />
	<meta name="author" content="ThemeTrades" />
	<meta name="description" content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute." />

	<meta property="og:url" content="index.html" />
	<meta property="og:site_name" content="EduChamp : Education HTML Template"/>
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_us" />
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training center or other educational institute." />
	<meta property="og:image" content="preview.png"/>

	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="index.html">
	<meta name="twitter:creator" content="@themetrades">
	<meta name="twitter:title" content="EduChamp : Education HTML Template">
	<meta name="twitter:description" content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute.">

	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{ asset('frontend/assets/images/cx.logo.png')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/cx.logo.png')}}" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Admin Registration :: CodeX</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/assets.css')}}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/typography.css')}}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/shortcodes/shortcodes.css')}}">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/color/color-1.css')}}">

</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(frontend/assets/images/background/bg2.jpg);">
			<a href="{{url('/')}}"><img src="{{ asset('frontend/assets/images/footer_logo.png')}}" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Admin <span>Registration</span></h2>
					<p>Login Your Account <a href="{{url('/login')}}">Click here</a></p>
				</div>
				<form class="contact-bx">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Name</label>
									<input name="name" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input name="email" type="email" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Password</label>
									<input name="password" type="password" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/masonry/filter.js')}}"></script>
<script src="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{ asset('frontend/assets/js/functions.js')}}"></script>
<script src="{{ asset('frontend/assets/js/contact.js')}}"></script>
{{-- <script src='{{ asset('frontend/assets/vendors/switcher/switcher.js')}}'></script> --}}
</body>

</html>
