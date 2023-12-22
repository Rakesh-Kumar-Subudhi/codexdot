@extends('backend.layouts.main')
@section('main')
    @push('title')
        <title>CODEX | Add</title>
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
                                <h4 class="card-title">Add Product</h4>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <form method="post" action="{{ url('/store_course') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Course Image</label>
                                        <input type="file" name="course_image" class="form-control">
                                        @if ($errors->has('course_image'))
                                            <span class="text-danger">{{ $errors->first('course_image') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Course Name</label>
                                        <input type="text" name="course_name" class="form-control" />
                                        @if ($errors->has('course_name'))
                                            <span class="text-danger">{{ $errors->first('course_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Course Price</label>
                                        <input type="number" name="course_price" class="form-control">
                                        @if ($errors->has('course_price'))
                                            <span class="text-danger">{{ $errors->first('course_price') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Offer Price</label>
                                        <input type="number" name="offer_price" class="form-control">
                                        @if ($errors->has('offer_price'))
                                            <span class="text-danger">{{ $errors->first('offer_price') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Offer </label>
                                        <input type="number" name="offer" class="form-control">
                                        @if ($errors->has('offer'))
                                            <span class="text-danger">{{ $errors->first('offer') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Course Details Image</label>
                                        <input type="file" name="course_details_image" class="form-control">
                                        @if ($errors->has('course_details_image'))
                                            <span class="text-danger">{{ $errors->first('course_details_image') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>pdf_file</label>
                                        <input type="file" name="pdf_file" class="form-control">
                                        @if ($errors->has('pdf_file'))
                                            <span class="text-danger">{{ $errors->first('pdf_file') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Video Image</label>
                                        <input type="file" name="video_image" class="form-control">
                                        @if ($errors->has('video_image'))
                                            <span class="text-danger">{{ $errors->first('video_image') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Long Description</label>
                                        <textarea name="long_description" rows="4" class="form-control"></textarea>
                                        @if ($errors->has('long_description'))
                                            <span class="text-danger">{{ $errors->first('long_description') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Short Description</label>
                                        <textarea name="short_description" rows="3" class="form-control"></textarea>
                                        @if ($errors->has('short_description'))
                                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
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
