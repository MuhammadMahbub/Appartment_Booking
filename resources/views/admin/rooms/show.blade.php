@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | {{ __("Room") }}
@endsection

@section('roomList')
    active
@endsection

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">{{ __("Admin Dashboard") }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __("Home") }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ route('room.index') }}">{{ __("Room") }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __("Room Details") }}
            </li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <img src="{{ asset('uploads/rooms') }}/{{ $single_room_info->room_photo }}" alt="not found" height="300px" width="100%">
    </div>
    @foreach ($single_room_info->roomPhoto as $thumb)
        <div class="col-3 mt-2">
            <img src="{{ asset('uploads/rooms') }}/{{ $thumb->room_thumb }}" alt="not found" height="100px" width="100%">
        </div>
    @endforeach
    <div class="col-lg-12 mt-5">
        <table class="table table-bordered border-width-3">
            <tr>
                <th> {{ __("Name") }}</th>
                <td>{{ $single_room_info->name }}</td>
            </tr>
            <tr>
                <th>{{ __("Room Type") }}</th>
                <td>{{ $single_room_info->roomType->name }}</td>
            </tr>
            <tr>
                <th>{{ __("Bed Type") }}</th>
                <td>{{ $single_room_info->bedType->name }}</td>
            </tr>
            <tr>
                <th>{{ __("Room Cost") }}</th>
                <td>${{ $single_room_info->room_cost }}</td>
            </tr>
            <tr>
                <th>{{ __("Room Availability") }}</th>
                <td>{{ $single_room_info->room_amount ?? "N/A"}}</td>
            </tr>
            <tr>
                <th>{{ __("Short Description") }}</th>
                <td>{!! $single_room_info->short_description !!}</td>
            </tr>
            <tr>
                <th>{{ __("Long Description") }}</th>
                <td>{!! $single_room_info->long_description !!}</td>
            </tr>
            <tr>
                <th>{{ __("Cancellation") }}</th>
                <td>{!! $single_room_info->cancellation !!}</td>
            </tr>
            <tr>
                <th>{{ __("Created By") }}</th>
                <td>{{ $single_room_info->createdBy->created_by ?? "N/A" }}</td>
            </tr>
            <tr>
                <th>{{ __("Updated By") }}</th>
                <td>{{ $single_room_info->updatedBy->updated_by ?? "N/A" }}</td>
            </tr>
        </table>
    </div>
</div>
<div class="mt-5">
    <a class="btn btn-info" href="{{ route('room.index') }}">{{ __("Back") }}</a>
    <a class="btn btn-success" href="{{ route('room.edit', $single_room_info->id) }}">{{ __("Edit") }}</a>
</div>
@endsection
