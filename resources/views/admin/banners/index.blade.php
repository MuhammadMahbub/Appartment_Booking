@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Update Banner
@endsection

@section('banner')
    active
@endsection

@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item ">Banner</li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Banner</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subtitle"> {{ __('Sub Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="subtitle" class="form-control" name="subtitle"  value="{{ $banner->subtitle }}" placeholder="Banner Subtitle" />
                                </div>
                                @error('subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title"> {{ __('Main Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="title" class="form-control" name="title"  value="{{ $banner->title }}" placeholder="Banner title" />
                                </div>
                                @error('title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="button_text_1"> {{ __('1st Button Text') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="button_text_1" class="form-control" name="button_text_1"  value="{{ $banner->button_text_1 }}" />
                                </div>
                                @error('button_text_1')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="button_url_1"> {{ __('1st Button Url') }}</label>
                                    <input type="text" id="button_url_1" class="form-control" name="button_url_1"  value="{{ $banner->button_url_1 }}" />
                                </div>
                                @error('button_url_1')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="button_text_2"> {{ __('2nd Button Text') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="button_text_2" class="form-control" name="button_text_2"  value="{{ $banner->button_text_2 }}" placeholder="Banner title" />
                                </div>
                                @error('button_text_2')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="button_url_2"> {{ __('2nd Button Url') }} </label>
                                    <input type="text" id="button_url_2" class="form-control" name="button_url_2"  value="{{ $banner->button_url_2 }}" />
                                </div>
                                @error('button_url_2')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous 1st Image') }} </label>
                                    <img src="{{ asset('uploads/banners') }}/{{ $banner->banner_image_1 }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="banner_image_1"> {{ __('1st Banner Image') }} </label>
                                    <input type="file" id="banner_image_1" class="form-control" name="banner_image_1"/>
                                </div>
                                @error('banner_image_1')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="image"> {{ __('Preview Image') }}</label>
                                    <img width="200" id="output_1">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous 2nd Image') }} </label>
                                    <img src="{{ asset('uploads/banners') }}/{{ $banner->banner_image_2 }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="banner_image_2"> {{ __('2nd Banner Image') }} </label>
                                    <input type="file" id="banner_image_2" class="form-control" name="banner_image_2"/>
                                </div>
                                @error('banner_image_2')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="image"> {{ __('Preview Image') }}</label>
                                    <img width="200" id="output_2">
                                </div>
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
        document.getElementById('banner_image_1').onchange = function() {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('output_1').src = src
        }
        document.getElementById('banner_image_2').onchange = function() {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('output_2').src = src
        }
    </script>
@endsection
