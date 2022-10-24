@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Update About Counter
@endsection

@section('about_counter')
    active
@endsection

@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item ">About Counter</li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update About Counter</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('about_counter.update', $about_counter->id) }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        @method("PUT")

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="user_name"> {{ __('User Part Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="user_name" class="form-control" name="user_name" value="{{ $about_counter->user_name }}" />
                                </div>
                                @error('user_name')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="user_icon"> {{ __('User Part Icon') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="user_icon" class="form-control" name="user_icon" value="{{ $about_counter->user_icon }}" />
                                </div>
                                @error('user_icon')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="user_count"> {{ __('User Part Count') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="user_count" class="form-control" name="user_count" value="{{ $about_counter->user_count }}" />
                                </div>
                                @error('user_count')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="review_name"> {{ __('Review Part Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="review_name" class="form-control" name="review_name" value="{{ $about_counter->review_name }}" />
                                </div>
                                @error('review_name')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="review_icon"> {{ __('Review Part Icon') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="review_icon" class="form-control" name="review_icon" value="{{ $about_counter->review_icon }}" />
                                </div>
                                @error('review_icon')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="review_count"> {{ __('Review Part Count') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="review_count" class="form-control" name="review_count" value="{{ $about_counter->review_count }}" />
                                </div>
                                @error('review_count')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="country_name"> {{ __('Country Part Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="country_name" class="form-control" name="country_name" value="{{ $about_counter->country_name }}" />
                                </div>
                                @error('country_name')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="country_icon"> {{ __('Country Part Icon') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="country_icon" class="form-control" name="country_icon" value="{{ $about_counter->country_icon }}" />
                                </div>
                                @error('country_icon')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="country_count"> {{ __('Country Part Count') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="country_count" class="form-control" name="country_count" value="{{ $about_counter->country_count }}" />
                                </div>
                                @error('country_count')
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

@endsection

