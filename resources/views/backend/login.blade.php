<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="feelash">
		<meta name="author" content="feelash">

		<!-- FAVICON -->


		<!-- TITLE -->
		<title>ADMIN</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="{{ asset('backend/admin_style/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- STYLE CSS -->
		<link href="{{ asset('backend/admin_style/assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('backend/admin_style/assets/css/plugins.css') }}" rel="stylesheet">

		<!--- FONT ICONS CSS -->
		<link href="{{ asset('backend/admin_style/assets/css/icons.css') }}" rel="stylesheet">

		<style>
        .error {
            color: red;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .wrap-input100 {
		    margin-bottom: 0px;
		    margin-top: 10px;
		}
    </style>
	</head>

	<body class="login-img">

		<!-- BACKGROUND-IMAGE -->
		<div>

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="https://php.spruko.com/zanex/zanex/assets/images/loader.svg" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page login-page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto mt-7">
						<div class="text-center">
							<!-- <img src="{{ asset('backend/admin_style/assets/images/brand/logo.png') }}" class="header-brand-img" alt="logo"> -->
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form" method="POST" action="{{ route('login.action') }}">
								@csrf
									<span class="login100-form-title">
										 Admin Login
									</span>

									@if(session('error_msg'))
										<div class="alert alert-danger" role="alert">
										  {{ session('msg') }}
										</div>
										@php
								            Session::forget('error_msg');
								        @endphp
									@endif


									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="email" placeholder="Email">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>

									</div>

									@if ($errors->has('email'))
		                                <style>
		                                    .form_error_email {
		                                        border: 2px solid red;
		                                    }
		                                </style>
		                                <div class="error">{{ $errors->first('email') }}</div>
		                            @endif
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="password" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>

									@if ($errors->has('password'))
		                                <style>
		                                    .form_error_password {
		                                        border: 2px solid red;
		                                    }
		                                </style>
		                                <div class="error">{{ $errors->first('password') }}</div>
		                            @endif

									<div class="container-login100-form-btn">
										<button class="login100-form-btn btn-primary">
											Login
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->


        <!-- JQUERY JS -->
        <script src="{{ asset('backend/admin_style/assets/js/jquery.min.js') }}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('backend/admin_style/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/admin_style/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- PERFECT SCROLLBAR JS -->
        <script src="{{ asset('backend/admin_style/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>

        <!-- COLOR THEME JS -->
        <script src="{{ asset('backend/admin_style/assets/js/themeColors.js') }}"></script>

        <!-- SWITCHER STYLES JS -->
        <script src="{{ asset('backend/admin_style/assets/js/swither-styles.js') }}"></script>

        <!-- CUSTOM JS -->
        <script src="{{ asset('backend/admin_style/assets/js/custom.js') }}"></script>

	</body>
</html>
