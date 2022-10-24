@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Create FoodType
@endsection

{{-- Active Menu --}}
@section('foodtypeCreate')
    active
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('foodtype.index') }}">Food Type</a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Food Type</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('foodtype.store') }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name"> {{ __('Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Enter Food name" value="{{ old('name') }}" />
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name"> {{ __('Icon') }}  <span class="text-danger">*</span> (<a href="https://fontawesome.com/icons" target="_blank">search icon here: </a> )</label>
                                    <input type="text" name="icon" class="form-control" value="{{ old('icon') }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1">{{ __('Create') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
@endsection
