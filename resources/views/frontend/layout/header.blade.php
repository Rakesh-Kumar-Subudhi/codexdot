<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="{{ url('/') }}" />
    <!-- OG -->
    <meta name="robots" content="index, follow">

    <meta name="keywords" content="Web Design, Education, Institute, Study" />
    <meta name="author" content="ThemeTrades" />
    <meta name="description"
        content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute." />

    <meta property="og:url" content="index.html" />
    <meta property="og:site_name" content="EduChamp : Education HTML Template" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_us" />
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description"
        content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training center or other educational institute." />
    <meta property="og:image" content="preview.png" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="index.html">
    <meta name="twitter:creator" content="@themetrades">
    <meta name="twitter:title" content="EduChamp : Education HTML Template">
    <meta name="twitter:description"
        content="EduChamp is a Fully Creative Mobile Responsive HTML Template. It is designed specifically for University, College, School, Training centre or other educational institute.">
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{ asset('frontend/assets/images/cx.logo.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/cx.logo.png') }}" />

    <!-- PAGE TITLE HERE ============================================= -->
    @stack('title')

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
 <script src="assets/js/html5shiv.min.js"></script>
 <script src="assets/js/respond.min.js"></script>
 <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/assets.css') }}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/typography.css') }}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/shortcodes/shortcodes.css') }}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/color/color-3.css') }}">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendors/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendors/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendors/revolution/css/navigation.css') }}">
    <!-- REVOLUTION SLIDER END -->
</head>





<body id="bg">
    <div class="page-wraper">
        <div id="loading-icon-bx"></div>
        <!-- Header Top ==== -->
        <header class="header rs-nav header-transparent">
            <div class="sticky-header navbar-expand-lg">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <div class="menu-logo logo-change">
                            <a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/images/main_codex_logo.png') }}"
                                    class="logo1" alt=""><img
                                    src="{{ asset('frontend/assets/images/codex.png') }}" class="logo2"
                                    alt=""></a>
                        </div>
                        {{-- <a href="{{ url('/registation') }}" class="register_btn display2"><i
                            class="animation"></i>Register Now<i class="animation"></i> --}}
                    </a>
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        {{-- <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul> --}}
                                    {{-- <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li> --}}
                                    <!-- Search Button ==== -->
                                    {{-- <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li> --}}
                                {{-- </ul>
                            </div>
                        </div> --}}
                        <!-- Search Box ==== -->
                        {{-- <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div> --}}
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-end" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="{{ url('/') }}"><img
                                        src="{{ asset('frontend/assets/images/codex.png') }}" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/#about') }}">About</a></li>
                                <li><a href="{{ url('/#training') }}">Training</a></li>
                                {{-- <li><a href="#faq">FAQ</a></li> --}}
                                <li><a href="{{ url('/#contact') }}">Contact</a></li>
                            </ul>
                            <a href="{{ url('/registation') }}" class="register_btn">Register Now<i class="animation"></i>
                            </a>

                            {{-- <div class="nav-social-link">
                            </div> --}}
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Top END ==== -->
