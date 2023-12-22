@extends('backend.layouts.main')
@section('main')
    @push('title')
        <title>CODEX | Courses</title>
    @endpush

    <!-- APP-CONTENT OPEN -->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">All Contacts</h1>
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
                                                <th class="bg-transparent border-bottom-0">Email</th>
                                                <th class="bg-transparent border-bottom-0">Subject</th>
                                                <th class="bg-transparent border-bottom-0">Phone Number</th>
                                                <th class="bg-transparent border-bottom-0">Message</th>
                                                <th class="bg-transparent border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                <tr class="border-bottom">
                                                    <td class="text-muted fs-15 fw-semibold text-center">
                                                        {{ $loop->index + 1 }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $contact->name }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $contact->email }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $contact->subject }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $contact->phone_number }}</td>
                                                    <td class="text-muted fs-15 fw-semibold">{{ $contact->message }}</td>
                                                    <td class="">
                                                        <a href="{{ url('contacts/delete/' . $contact->id) }}"
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
