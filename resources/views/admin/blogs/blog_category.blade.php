@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | {{ __("Blog Category") }}
@endsection

@section('blogCategory')
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
                {{ __("Blog Category") }}
            </li>
        </ol>
    </div>
@endsection

@section('content')

    @push('all_modals')
    <!-- Create Modal -->
    <div class="modal fade" id="categoryCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> {{ __('Blog Category Create') }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('blog_category.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-footer">
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name"> {{ __('Name') }} <span class="text-danger">*</span> </label>
                                <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" />
                            </div>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    <div class="alert-body">
                                        {{ $message }}
                                    </div>
                                </div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">{{ __('Create') }}</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endpush

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="button-group-spacing w-100 text-right">

                        <button class="btn btn-warning waves-effect w-100 w-sm-auto" data-toggle="modal" data-target="#categoryCreate">
                            <i data-feather='plus'></i>
                            <span class="pl-50">{{ __("Create") }}</span>
                        </button>

                    </div>
                </div>
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>{{ __("SL") }}</th>
                                    <th>{{ __("Name") }}</th>
                                    <th>{{ __("Created By") }}</th>
                                    <th>{{ __("Updated By") }}</th>
                                    <th>{{ __("Created At") }}</th>
                                    <th>{{ __("Actions") }}</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($blogCategories as $category)
                                    <tr>

                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->createdBy->name ?? "N/A"}}</td>
                                        <td>{{ $category->updatedBy->name ?? "N/A" }}</td>
                                        <td>{{ $category->created_at->format('d-M-Y') }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-icon btn-outline-secondary waves-effect dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#categoryEdit{{ $category->id }}" title="Edit">
                                                        <i data-feather='edit'></i>
                                                        <span>{{ __('Edit') }}</span>
                                                    </a>

                                                    <a class="dropdown-item" data-toggle="modal" data-target="#categoryDelete{{ $category->id }}" title="Delete">
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>{{ __('Delete') }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    @push('all_modals')
                                        <!-- Single Edit Modal -->
                                        <div class="modal fade" id="categoryEdit{{ $category->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"> {{ __('Blog Category Update') }} </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('blog_category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="name_edit"> {{ __('Name') }} <span class="text-danger">*</span> </label>
                                                                <input type="text" id="name_edit" class="form-control" name="name_edit" value="{{ $category->name }}" />
                                                            </div>
                                                            @error('name_edit')
                                                            <div class="alert alert-danger" role="alert">
                                                                <div class="alert-body">
                                                                    {{ $message }}
                                                                </div>
                                                            </div>
                                                            @enderror

                                                            <div class="text-right">
                                                                <button type="submit" class="btn btn-primary mr-1">{{ __('Update') }}</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Delete Modal -->
                                        <div class="modal fade" id="categoryDelete{{ $category->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ route('blog_category.destroy', $category->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="modal-body text-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" style="font-size: 100px" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                            </svg>
                                                            <h2 class="font-weight-normal mt-1">{{ __('Are you sure') }}?</h2>
                                                            <h4 class="font-weight-light mb-0">{{ __("You won't be able to revert this!") }}</h4>
                                                        </div>
                                                        <div class="modal-footer border-top-0 justify-content-center">
                                                            <button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                </svg>
                                                                {{ __('Close') }}
                                                            </button>
                                                            <button class="btn btn-danger waves-effect waves-float waves-light">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </div>
                                                    </form>
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
        </div>

    </div>
@endsection

@section("js")
    <script>
        $(document).ready(function () {

            @if($errors->has('name'))
                $('#categoryCreate').modal('show');
            @endif
            @if($errors->has('name_edit'))
                $("#categoryEdit{{ session('id') }}").modal('show');
            @endif
        });
    </script>
@endsection
