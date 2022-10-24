@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Update About
@endsection

@section('about')
    active
@endsection

@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item ">About</li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update About</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="start_year"> {{ __('Starting Year') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="start_year" class="form-control" name="start_year"  value="{{ $about->start_year }}" />
                                </div>
                                @error('start_year')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="front_page_heading"> {{ __('Front Page heading') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="front_page_heading" class="form-control" name="front_page_heading" value="{{ $about->front_page_heading }}" />
                                </div>
                                @error('front_page_heading')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="internal_page_heading"> {{ __('Internal Page heading') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="internal_page_heading" class="form-control" name="internal_page_heading" value="{{ $about->internal_page_heading }}" />
                                </div>
                                @error('internal_page_heading')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_description"> {{ __('Short Description') }} <span class="text-danger">* (within 100 words)</span></label>
                                    <textarea name="short_description" id="short_description" class="form-control" cols="30" rows="5">{{ $about->short_description }}</textarea>
                                </div>
                                @error('short_description')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Video Back Image') }} </label>
                                    <img src="{{ asset('uploads/abouts') }}/{{ $about->video_back_image }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="video_back_image"> {{ __('Video Back Image') }} </label>
                                    <input type="file" id="video_back_image" class="form-control" name="video_back_image"/>
                                </div>
                                @error('video_back_image')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="video_back_image"> {{ __('Preview Image') }}</label>
                                    <img width="200" id="output">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="video_link"> {{ __('Video Link') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="video_link" class="form-control" name="video_link" value="{{ $about->video_link }}"/>
                                </div>
                                @error('video_link')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="facility_subtitle"> {{ __('Facility Subtitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="facility_subtitle" class="form-control" name="facility_subtitle" value="{{ $about->facility_subtitle }}"/>
                                </div>
                                @error('facility_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="facility_title"> {{ __('Facility Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="facility_title" class="form-control" name="facility_title" value="{{ $about->facility_title }}"/>
                                </div>
                                @error('facility_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="counter_subtitle"> {{ __('Counter Subtitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="counter_subtitle" class="form-control" name="counter_subtitle" value="{{ $about->counter_subtitle }}"/>
                                </div>
                                @error('counter_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="counter_title"> {{ __('Counter Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="counter_title" class="form-control" name="counter_title" value="{{ $about->counter_title }}"/>
                                </div>
                                @error('counter_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="blog_subtitle"> {{ __('Blog Subtitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="blog_subtitle" class="form-control" name="blog_subtitle" value="{{ $about->blog_subtitle }}"/>
                                </div>
                                @error('blog_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="blog_title"> {{ __('Blog Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="blog_title" class="form-control" name="blog_title" value="{{ $about->blog_title }}"/>
                                </div>
                                @error('blog_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1">{{ __('Update') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
@endsection

@section('js')
    <script>
        document.getElementById('video_back_image').onchange = function() {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('output').src = src
        }

    </script>
@endsection

