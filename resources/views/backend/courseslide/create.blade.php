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
                                <h4 class="card-title">Add Course Slide</h4>
                            </div>
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                <form method="post" action="{{ url('/store_courseslide') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Courseslide Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" name="heading" class="form-control">
                                        @if ($errors->has('heading'))
                                            <span class="text-danger">{{ $errors->first('heading') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" />
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
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
