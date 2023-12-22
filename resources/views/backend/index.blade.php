@extends('backend.layouts.main')
@section('main')

@push('title')
    <title>CODEX | Dashboard</title>
@endpush

<!-- APP-CONTENT OPEN -->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Dashboard</h1>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="">Total course</h6>
                                            <h3 class="mb-2 number-font"></h3>
                                        </div>
                                        <div class="col col-auto">
                                            <div class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto">
                                                <i class="fa fa-book text-white mb-5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="">Total Enquires</h6>
                                            <h3 class="mb-2 number-font"></h3>

                                        </div>
                                        <div class="col col-auto">
                                            <div class="counter-icon bg-danger-gradient box-shadow-danger brround  ms-auto">
                                                <i class="fa fa-address-book text-white mb-5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="">Total Testimonial</h6>
                                            <h3 class="mb-2 number-font"></h3>

                                        </div>
                                        <div class="col col-auto">
                                            <div class="counter-icon bg-success-gradient box-shadow-success brround  ms-auto">
                                                <i class="fa fa-comment text-white mb-5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER END -->
    </div>
</div>
<!-- APP-CONTENT END -->


@endsection
