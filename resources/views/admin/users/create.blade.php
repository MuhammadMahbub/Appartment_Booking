@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Users
@endsection

{{-- Active Menu --}}
@section('userCreate')
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
            <li class="breadcrumb-item ">Users</li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control" name="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" id="password" class="form-control" name="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="reset" class="btn btn-primary mr-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
@endsection