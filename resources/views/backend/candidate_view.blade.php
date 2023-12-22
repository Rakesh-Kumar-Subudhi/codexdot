@extends('backend.layouts.main')
@section('main')
    @push('title')
        <title>CODEX | Candidate</title>
    @endpush

    <!-- APP-CONTENT OPEN -->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">All Candidates</h1>
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


                                                <th class="bg-transparent border-bottom-0">Name</th>
                                                <th class="bg-transparent border-bottom-0">Father's name</th>
                                                <th class="bg-transparent border-bottom-0">Email</th>
                                                <th class="bg-transparent border-bottom-0">Phone Number</th>
                                                <th class="bg-transparent border-bottom-0">Alternative number</th>
                                                <th class="bg-transparent border-bottom-0">DOB</th>
                                                <th class="bg-transparent border-bottom-0">Gender</th>
                                                <th class="bg-transparent border-bottom-0">City</th>
                                                <th class="bg-transparent border-bottom-0">State</th>
                                                <th class="bg-transparent border-bottom-0">Last Qualification</th>
                                                <th class="bg-transparent border-bottom-0">Work Experience</th>
                                                <th class="bg-transparent border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($register as $registers)
                                                <tr class="border-bottom">
                                                    <td class="text-muted fs-15 fw-semibold text-center">
                                                        {{ $loop->index + 1 }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->name }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->fathername }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->email }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->phone }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->alt_phone }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->gender }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->dob }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->city }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->state }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->last_qualification }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $registers->work_experience }}</td>
                                                    <td class="">
                                                        <a href="{{ url('register/delete/' . $registers->id) }}"
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
