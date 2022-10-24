@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Food List
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
                Food List
            </li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    {{-- <div class="col-md-12 col-12 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data_table">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Food Type</th>
                                <th>Photo</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($food as $food)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->food_type->name }}</td>
                                <td>
                                    <img src="{{ asset('uploads/foods') }}/{{ $food->image }}" alt="not found" width="70" height="70">
                                </td>
                                <td>{{ $food->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('food.show', $food->id) }}">
                                                <i data-feather='eye'></i>

                                                <span>{{ __('Show') }}</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('food.edit', $food->id) }}">
                                                <i data-feather='edit'></i>
                                                <span>{{ __('Edit') }}</span>
                                            </a>

                                            <a class="dropdown-item" data-toggle="modal" data-target="#roomDelete{{ $food->id }}" title="Delete">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>{{ __('Delete') }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @push('all_modals')
                                <!-- Delete Modal -->
                                <div class="modal fade" id="roomDelete{{ $food->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> {{ __('Room') }} </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                {{ __("Are You Sure Delete This Food !!!") }}
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("Close") }}</button>
                                                <form action="{{ route('food.destroy', $food->id) }}" method="POST" enctype="multipart/form-data">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    @foreach ($food as $food)
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <a href="{{ route('food.show', $food->id) }}"><img src="{{ asset('uploads/foods') }}/{{ $food->image }}" alt="not found" height="200px" width="100%"></a>
            <div class="card-body">
            <h4 class="card-title"><a href="{{ route('food.show', $food->id) }}">{{ $food->name }}</a></h4>
            <h5>Food Type: <a href="{{ route('foodtype.index') }}">{{ $food->food_type->name }}</a></h5>
            <h5>Price: ${{ $food->price }}</h5>
            <p class="card-text">{!! Str::limit($food->description, 50) !!}</p>
            <a href="{{ route('food.edit', $food->id) }}" class="btn btn-primary">Edit</a>
            <a data-toggle="modal" data-target="#foodDelete{{ $food->id }}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    @push('all_modals')
        <div class="modal fade" id="foodDelete{{ $food->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> {{ __('Room') }} </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        {{ __("Are You Sure Delete This Food !!!") }}
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("Close") }}</button>
                        <form action="{{ route('food.destroy', $food->id) }}" method="POST" enctype="multipart/form-data">
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
