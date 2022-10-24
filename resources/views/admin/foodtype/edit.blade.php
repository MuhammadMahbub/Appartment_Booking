@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Update Food Type
@endsection

@section('foodtype')
    active
@endsection

@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item ">
                <a href="{{ route('foodtype.index') }}">Food Type</a>
            </li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Food Type</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('foodtype.update', $single_food_info->id) }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name"> {{ __('Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name"  value="{{ $single_food_info->name }}" placeholder="Enter Food name" />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name"> {{ __('Icon') }}  <span class="text-danger">*</span> (<a href="https://fontawesome.com/icons" target="_blank">search icon here: </a> )</label>
                                    <input type="text" name="icon" class="form-control" value="{{ $single_food_info->icon }}">
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
