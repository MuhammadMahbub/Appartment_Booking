@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Food Types
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
            <li class="breadcrumb-item active">
                Food Type
            </li>
        </ol>
    </div>
@endsection

@section('css')
    <style>
        .avatar .avater_style{
            width: 100px;
            height: 100px;
            font-size: 4rem;
            color: #000000;
        }
        .feather, [data-feather]{
            width: 1.5rem;
            height: 1.5rem;
        }
    </style>
@endsection

@section('content')

<div class="row">
    @foreach ($foodtype as $food)
    <div class="col-lg-3 col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="avatar bg-light-primary p-50 m-0">
                    <div class="avatar-content avater_style">
                        {!! $food->icon !!}
                    </div>
                </div>
                {{-- <div class="dropdown chart-dropdown">
                    <i data-feather='more-vertical'></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('foodtype.edit', $food->id) }}" class="dropdown-item">Edit</a>
                        <button type="button" data-toggle="modal" data-target="#foodtypeDelete{{ $food->id }}" class="dropdown-item w-100">Delete</button>
                    </div>
                </div> --}}
                <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow vertical_dot" data-toggle="dropdown">
                        <i data-feather="more-vertical"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('foodtype.edit', $food->id) }}">
                            <i data-feather='edit'></i>
                            <span>{{ __('Edit') }}</span>
                        </a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#foodtypeDelete{{ $food->id }}" title="Delete">
                            <i data-feather="trash" class="mr-50"></i>
                            <span>{{ __('Delete') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h3 class="fw-bolder mt-1">{{ $food->name }}</h3>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    @push('all_modals')
        <div class="modal fade" id="foodtypeDelete{{ $food->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> {{ __('Room') }} </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        {{ __("Are You Sure Delete This Food Type !!!") }}
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("Close") }}</button>
                        <form action="{{ route('foodtype.destroy', $food->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">{{ __("Delete") }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endpush

    @endforeach
</div>

@endsection
