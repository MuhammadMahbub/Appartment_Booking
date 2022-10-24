@extends('layouts.dashboard')
{{-- Title --}}
@section('title') {{ config('app.name') }} | @endsection
{{-- Active Menu --}}
@section('') active @endsection
{{-- Breadcrumb --}}
@section('breadcrumb')
<h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">
            Users
        </li>
    </ol>
</div>
@endsection
{{-- Main Content --}}
@section('content')

@endsection
