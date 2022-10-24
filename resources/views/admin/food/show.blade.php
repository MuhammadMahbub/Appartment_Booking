@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Food
@endsection

@section('foodList')
    active
@endsection

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                Food
            </li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4">
        <img src="{{ asset('uploads/foods') }}/{{ $single_food->image }}" alt="not found" height="300px" width="100%">
    </div>
    <div class="col-lg-8">
        <table class="table table-bordered border-width-3">
            <tr>
                <th> Name</th>
                <td>{{ $single_food->name }}</td>
            </tr>
            <tr>
                <th>Food Type</th>
                <td>{{ $single_food->food_type->name }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>${{ $single_food->price }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{!! $single_food->description !!}</td>
            </tr>
        </table>
    </div>
</div>
<div class="mt-5"><a class="btn btn-info" href="{{ route('food.index') }}">Back</a></div>
@endsection
