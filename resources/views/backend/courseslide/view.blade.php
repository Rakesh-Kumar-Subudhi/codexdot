@extends('backend.layouts.main')
@section('main')
    @push('title')
        <title>CODEX | View</title>
    @endpush

    <!-- <h1>product</h1> -->
    <style>
        .p_220 {
            padding-right: 220px !important;
        }

        .card-body .table-bordered .col-6 {
            white-space: normal;
            word-wrap: break-word;
        }
    </style>

    <!-- APP-CONTENT OPEN -->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">All Course Slide</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">

                        <!-- Button trigger modal -->
                        <a href="{{ url('/create_courseslide') }}"><button type="button" class="btn btn-primary"><i
                                    class="fe fe-plus"></i> Add Course Slide</button></a>

                    </div>
                </div>
                <!-- PAGE-HEADER END -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card ">
                            <div class="card-header">
                                <!-- <h3 class="card-title mb-0">Product Sales</h3> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent border-bottom-0 w-5">sno.</th>

                                                <th class="bg-transparent border-bottom-0">Image</th>
                                                <th class="bg-transparent border-bottom-0">Heading</th>
                                                <th class="bg-transparent border-bottom-0">Description</th>
                                                <th class="bg-transparent border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($courseslide as $courseslides)
                                                <tr class="border-bottom">
                                                    <td class="text-muted fs-15 fw-semibold text-center">
                                                        {{ $loop->index + 1 }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">
                                                        <img src="{{ asset('assets/images/' . $courseslides->image) }}"
                                                            class="rounded-circle" width="50" height="50"
                                                            alt="Course Image">
                                                    </td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $courseslides->heading }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">
                                                        {{ $courseslides->description}}
                                                    </td>





                                                    <td class="">
                                                        <a href="{{ url('/edit_courseslide', ['id' => $courseslides->id]) }}"
                                                            class="btn btn-primary btn-sm rounded-11 me-2"><i><svg
                                                                    class="table-edit" xmlns="http://www.w3.org/2000/svg"
                                                                    height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                                    <path
                                                                        d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z" />
                                                                </svg></i></a>
                                                        <a href="{{ url('/courseslide_delete', ['id' => $courseslides->id]) }}"
                                                            class="btn btn-danger btn-sm rounded-11"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg
                                                                    class="table-delete" xmlns="http://www.w3.org/2000/svg"
                                                                    height="20" viewBox="0 0 24 24" width="16">
                                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                                    <path
                                                                        d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                                </svg></i></a>
                                                    </td>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
