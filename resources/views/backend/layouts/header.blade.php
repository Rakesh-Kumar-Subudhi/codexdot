<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="CODEX | Admin">
    <meta name="author" content="Codex">
    <meta name="keywords" content="">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/cx.logo.png')}}">
    <!-- Place favicon.ico in the root directory -->
    <!-- TITLE -->
    @stack('title')

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backend/admin_style/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- STYLE CSS -->
    <link href="{{ asset('backend/admin_style/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/admin_style/assets/css/plugins.css') }}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('backend/admin_style/assets/css/icons.css') }}" rel="stylesheet">

    <!-- INTERNAL SWITCHER CSS -->
    <link href="{{ asset('backend/admin_style/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/admin_style/assets/switcher/demo.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <!--<div id="global-loader">-->
    <!--    <img src="https://php.spruko.com/zanex/zanex/assets/images/loader.svg" class="loader-img" alt="Loader">-->
    <!--</div>-->
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- APP-HEADER -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex align-items-center">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0);"></a>

                        <div class="responsive-logo">
                            <a href="{{ url('/') }}" class="header-logo">
                                <img src=""
                                    class="mobile-logo logo-1" alt="logo">
                                <img src=""
                                    class="mobile-logo dark-logo-1" alt="logo">
                            </a>
                        </div>
                        <!-- sidebar-toggle-->

                        <a class="logo-horizontal " href="{{ url('/') }}">
                            <img src="{{ asset('frontend/assets/images/codex.png')}}"
                                class="header-logo-img desktop-logo" alt="logo">
                            <img src="{{ asset('frontend/assets/images/cx.logo.png')}}"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>


                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">


                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-md-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>



                                        <div class="dropdown d-md-flex profile-1">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex px-1">
                                                <span>
                                                    <img src="{{ asset('frontend/assets/images/cx.logo.png')}}"
                                                        alt="profile-user"
                                                        class="avatar  profile-user brround cover-image">
                                                </span>
                                            </a>


                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0">Admin</h5>
                                                        <small class="text-muted">admin@gmail.com</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>

                                                <a class="dropdown-item" href="{{ route('logout') }}">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>

                                        <!-- SIDE-MENU -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /APP-HEADER -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <aside class="app-sidebar">
                    <div class="side-header">
                        	 <a class="header-brand1" href="{{ url('/') }}">
                            <img src="{{ asset('frontend/assets/images/codex.png')}}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('frontend/assets/images/codex.png')}}"
                                class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{ asset('frontend/assets/images/cx.logo.png')}}"
                                class="header-brand-img light-logo" alt="logo">
                            <img src="{{ asset('frontend/assets/images/codex.png')}}"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('dashboard') }}"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Website </h3>
                            </li>



                            <li>
                                <a class="side-menu__item" href="{{ url('/candidate_view') }}"><i
                                        class="side-menu__icon fa fa-book"></i><span class="side-menu__label"> Candidate Details
                                        </span></a>
                            </li>
                            <li>
                                <a class="side-menu__item" href="{{ url('/contact_view') }}"><i
                                        class="side-menu__icon fa fa-address-book"></i><span class="side-menu__label"> Contacts
                                        </span></a>
                            </li>

                          {{-- <li>
                                <a class="side-menu__item" href="{{ url('/view_testimonial') }}"><i
                                        class="side-menu__icon fa fa-comment"></i><span class="side-menu__label">
                                        Testimonial
                                    </span></a>
                            </li> --}}
                            <!-- <li>-->
                            <!--    <a class="side-menu__item" href="{{ url('/view_courseslide') }}"><i-->
                            <!--            class="side-menu__icon fa fa-product-hunt"></i><span class="side-menu__label">-->
                            <!--            Course Slide-->
                            <!--        </span></a>-->
                            <!--</li>-->
                        </ul>
                    </div>
                </aside>
            </div>
            <!--/APP-SIDEBAR-->
