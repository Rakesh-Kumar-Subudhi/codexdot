@extends('backend.layouts.main')
@section('main')
    @push('title')
        <title>CODEX | Edit</title>
    @endpush
    <!-- for allert box -->


    <!-- APP-CONTENT OPEN -->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- ROW-4 -->
                <div class="row mt-5">
                    <div class="col-12 col-sm-12">
                        <div class="card ">

                            <div class="card-header">
                                <h4 class="card-title">Edit Testimonial</h4>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <form method="post" action="{{ url('/update_testimonial', ['id' => $testimonial->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf




                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @if ($testimonial->image)
                                            <div class="form-group">
                                                <label for="currentImage" class="form-label">Image</label>
                                                <img src="{{ asset('assets/images/' . $testimonial->image) }}"
                                                    alt="Current Product Image" class="img-fluid" style="width:20%;">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name',  $testimonial->name) }}" />
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control"
                                            value="{{ old('designation',  $testimonial->designation) }}">
                                        @if ($errors->has('designation'))
                                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" name="link" class="form-control"
                                            value="{{ old('link',  $testimonial->link) }}">
                                        @if ($errors->has('link'))
                                            <span class="text-danger">{{ $errors->first('link') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <input type="text" name="message" class="form-control"
                                            value="{{ old('message',  $testimonial->message) }}">
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>

                                   
                                    <button type="submit" class="btn btn-success">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
