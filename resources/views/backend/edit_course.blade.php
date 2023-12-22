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
                                <h4 class="card-title">Add Product</h4>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <form method="post" action="{{ url('/update_course', ['id' => $course->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf




                                    <div class="form-group">
                                        <label>Course Image</label>
                                        <input type="file" name="course_image" class="form-control">
                                        @if ($course->course_image)
                                            <div class="form-group">
                                                <label for="currentImage" class="form-label">Current Course Image</label>
                                                <img src="{{ asset('assets/images/' . $course->course_image) }}"
                                                    alt="Current Product Image" class="img-fluid" style="width:20%;">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Course Name</label>
                                        <input type="text" name="course_name" class="form-control"
                                            value="{{ old('course_name', $course->course_name) }}" />
                                        @if ($errors->has('course_name'))
                                            <span class="text-danger">{{ $errors->first('course_name') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Course Price</label>
                                        <input type="text" name="course_price" class="form-control"
                                            value="{{ old('course_price', $course->course_price) }}">
                                        @if ($errors->has('course_price'))
                                            <span class="text-danger">{{ $errors->first('course_price') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Offer Price</label>
                                        <input type="text" name="offer_price" class="form-control"
                                            value="{{ old('offer_price', $course->offer_price) }}">
                                        @if ($errors->has('offer_price'))
                                            <span class="text-danger">{{ $errors->first('offer_price') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Offer </label>
                                        <input type="text" name="offer" class="form-control"
                                            value="{{ old('offer', $course->offer) }}">
                                        @if ($errors->has('offer'))
                                            <span class="text-danger">{{ $errors->first('offer') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Course Details Image</label>
                                        <input type="file" name="course_details_image" class="form-control">
                                        @if ($course->course_details_image)
                                            <div class="form-group">
                                                <label for="currentImage" class="form-label">Current Course Details
                                                    Image</label>
                                                <img src="{{ asset('assets/images/' . $course->course_details_image) }}"
                                                    alt="Current Product Image" class="img-fluid" style="width:20%;">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Pdf File</label>
                                        <input type="file" name="pdf_file" class="form-control">
                                        @if ($course->pdf_file)
                                            <div class="form-group">
                                                <label for="currentImage" class="form-label">Pdf File</label>
                                                <iframe src="{{ asset('assets/images/' . $course->pdf_file) }}"
                                                    style="width:50%; height:300px;" frameborder="0"></iframe>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Video Image</label>
                                        <input type="file" name="video_image" class="form-control">
                                        @if ($course->video_image)
                                            <div class="form-group">
                                                <label for="currentImage" class="form-label">Video Image</label>
                                                <img src="{{ asset('assets/images/' . $course->video_image) }}"
                                                    alt="video_image" class="img-fluid" style="width:20%;">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Long Description</label>
                                        <textarea name="long_description" rows="4" class="form-control">{{ old('long_description', $course->long_description) }}</textarea>
                                        @if ($errors->has('long_description'))
                                            <span class="text-danger">{{ $errors->first('long_description') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Short Description</label>
                                        <textarea name="short_description" rows="4" class="form-control">{{ old('short_description', $course->short_description) }}</textarea>
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
