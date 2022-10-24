@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | {{ __("About Facility") }}
@endsection

@section('about_facility')
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
                {{ __("About Facility") }}
            </li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-block d-sm-flex">
                <h4 class="card-title">About Facility ({{ $about_facilities->count() }})</h4>
                <div class="button-group-spacing">
                    <button class="btn btn-success waves-effect w-100 w-sm-auto" data-toggle="modal" data-target="#csvImportModal">+ Import</button>

                    <button class="btn btn-warning waves-effect w-100 w-sm-auto" data-toggle="modal" data-target="#add_facility_modal">+ Add facility</button>

                    <div id="all_actions" class="dropdown w-100 w-sm-auto d-none">
                        <button class="btn btn-info w-100 w-sm-auto dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All Action
                        </button>
                        <div class="dropdown-menu dropdown-menu-right w-100">

                            <button class="dropdown-item" data-toggle="modal" data-target="#deleteModal">Delete</button>
                            @push('all_modals')
                                <!-- Bulk Delete Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="font-size: 100px" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                </svg>
                                                <h2 class="font-weight-normal mt-1">{{ __('Are you sure?') }}?</h2>
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
                                                <button id="delete_all" class="btn btn-danger waves-effect waves-float waves-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                    {{ __('Delete') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endpush

                            <form action="" method="POST">
                                @csrf
                                <input type="hidden" id="export_all" name="id">
                                <button type="submit" class="dropdown-item">Export</button>
                            </form>

                        </div>
                    </div>
                </div>
                @push('all_modals')
                    <!-- Add facility Modal -->
                    <div class="modal fade" id="add_facility_modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Facility</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('about_facility.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="icon">Icon <span class="text-danger">*(<a href="https://fontawesome.com/icons">icon search:</a> )</span></label>
                                            <input type="text" value="{{ old('icon') }}" name="icon" id="icon" class="form-control" placeholder="<i class='flaticon-clock'></i>">
                                        </div>
                                        @error('icon')
                                            <div class="alert alert-danger">
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="title">Title <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ old('title') }}" name="title" id="title" class="form-control">
                                        </div>
                                        @error('title')
                                            <div class="alert alert-danger">
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="description">Description <span class="text-danger">*(max 100 words)</span></label>
                                            <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ old('description') }}</textarea>
                                        </div>
                                        @error('description')
                                            <div class="alert alert-danger">
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="link">Link </label>
                                            <input type="text" value="{{ old('link') }}" name="link" id="link" class="form-control">
                                        </div>
                                        @error('link')
                                            <div class="alert alert-danger">
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @enderror

                                        <div class="form-group">
                                            <label for="count">Count <span class="text-danger">*</span></label>
                                            <input type="number" value="{{ old('count') }}" name="count" id="count" class="form-control" placeholder="01">
                                        </div>
                                        @error('link')
                                            <div class="alert alert-danger">
                                                <div class="alert-body">
                                                    {{ $message }}
                                                </div>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- CSV Import Modal -->
                    <div class="modal fade" id="csvImportModal" tabindex="-1" role="dialog" aria-labelledby="csvImportModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content position-relative">
                                <form action="" method="POST" id="importfacilityForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Import Facility</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group my-2">
                                            <p class="form-label">Import Facility</p> <span id="importError" class="text-danger"></span>
                                            <div class="custom-file cursor-pointer">
                                                <input type="file" name="file" id="importfacility"class="custom-file-input" required>
                                                <label class="custom-file-label">{{ __('Choose file') }} ...</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    {{ __('Table Header ') }}
                                                                </th>
                                                                <th>
                                                                    {{ __('CSV Header') }}
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="facilityCsvHeader">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                                        <button type="submit" id="importSubmitButton" class="btn btn-primary">{{ __('Save changes') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endpush
            </div>
            <div class="card-body">
                <form action="{{ route('about_facility.date.filter') }}" method="GET">
                    <div class="row align-items-end">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                <input type="date" name="start_date" @isset(request()->start_date) value="{{ \Carbon\Carbon::parse(request()->start_date)->format('Y-m-d') }}" @endisset id="start_date" class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="start_date">End Date <span class="text-danger">*</span></label>
                                <input type="date" @isset(request()->start_date) value="{{ \Carbon\Carbon::parse(request()->end_date)->format('Y-m-d') }}" @endisset name="end_date" id="end_date" class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success waves-effect w-100 w-sm-auto">Filter</button>
                                @if(Route::is('about_facility.date.filter'))
                                <a href="{{ route('about_facility.index') }}" class="btn btn-danger waves-effect mt-1 mt-sm-0 w-100 w-sm-auto">Clear</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-md-center">
                        <div class="col-md">
                            <div class="form-group mb-md-0">
                                <div class="input-group">
                                    <input type="search" class="form-control table_search" placeholder="Search Here">
                                    <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i data-feather='search'></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include( 'includes.pagination', ['variables' => $about_facilities, 'pagination_col_class' => 'col-md-auto', 'data_variables' => ['start_date' => request()->start_date,'end_date' => request()->end_date]])
                    </div>
                </form>
                <div class="table-responsive mt-2">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input main_checkbox" id="all-select">
                                        <label class="custom-control-label" for="all-select"></label>
                                    </div>
                                </th>
                                <th>Actions</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th>Count</th>
                                <th>Créé par</th>
                                <th>Modifié par</th>
                                <th>Créé à</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($about_facilities as $facility)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input all_checkbox" name="select_individual[]" id="single-select-{{ $facility->id }}">
                                            <label class="custom-control-label" for="single-select-{{ $facility->id }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-icon btn-outline-secondary waves-effect dropdown-toggle hide-arrow" data-toggle="dropdown" data-boundary="viewport">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <button data-toggle="modal" data-target="#edit_facility_{{ $facility->id }}" class="dropdown-item">
                                                    <i data-feather='edit'></i>
                                                    Edit
                                                </button>

                                                <a class="dropdown-item" data-toggle="modal" data-target="#deleteModal_{{ $facility->id }}" title="Delete">
                                                    <i data-feather="trash" class="mr-50"></i>
                                                    <span>{{ __('Delete') }}</span>
                                                </a>

                                            </div>
                                        </div>
                                    </td>
                                    <td>{!! $facility->icon !!}</td>
                                    <td>{{ $facility->title }}</td>
                                    <td>{!! Str::limit($facility->description, 60) !!}</td>
                                    <td>{{ $facility->link }}</td>
                                    <td>{{ $facility->count }}</td>
                                    @if($facility->created_by)
                                        <td>
                                            <div class="avatar mr-50" data-toggle="tooltip" title="{{ $facility->createdBy->name }}">
                                                <img src="{{ $facility->createdBy->profile_photo_url }}" alt="avatar" width="32" height="32">
                                            </div>
                                            {{ $facility->createdBy->name }}
                                        </td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if($facility->updated_by)
                                        <td>
                                            <div class="avatar mr-50" data-toggle="tooltip" title="{{ $facility->updatedBy->name }}">
                                                <img src="{{ $facility->updatedBy->profile_photo_url }}" alt="avatar" width="32" height="32">
                                            </div>
                                            {{ $facility->updatedBy->name }}
                                        </td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    <td>{{ $facility->created_at->diffForHumans() }}</td>
                                </tr>
                                    @push('all_modals')
                                        <!--Edit Modal -->
                                            <div class="modal fade" id="edit_facility_{{ $facility->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Facility</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('about_facility.update', $facility->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="title_edit">Title <span class="text-danger">*</span></label>
                                                                <input type="text" value="{{ $facility->title }}" name="title_edit" id="title_edit" class="form-control">
                                                            </div>
                                                            @error('title_edit')
                                                                <div class="alert alert-danger">
                                                                    <div class="alert-body">
                                                                        {{ $message }}
                                                                    </div>
                                                                </div>
                                                            @enderror

                                                            <div class="form-group">
                                                                <label for="icon_edit">Icon <span class="text-danger">*(<a href="https://fontawesome.com/icons">icon search:</a> )</span></label>
                                                                <input type="text" value="{{ $facility->icon }}" name="icon_edit" id="icon_edit" class="form-control">
                                                            </div>
                                                            @error('icon_edit')
                                                                <div class="alert alert-danger">
                                                                    <div class="alert-body">
                                                                        {{ $message }}
                                                                    </div>
                                                                </div>
                                                            @enderror

                                                            <div class="form-group">
                                                                <label for="description_edit">Description <span class="text-danger">*</span></label>
                                                                <textarea class="form-control" name="description_edit" id="description_edit" cols="30" rows="5">{{ $facility->description }}</textarea>
                                                            </div>
                                                            @error('description_edit')
                                                                <div class="alert alert-danger">
                                                                    <div class="alert-body">
                                                                        {{ $message }}
                                                                    </div>
                                                                </div>
                                                            @enderror

                                                            <div class="form-group">
                                                                <label for="link_edit">Link </label>
                                                                <input type="text" value="{{ $facility->link }}" name="link_edit" id="link_edit" class="form-control">
                                                            </div>
                                                            @error('link_edit')
                                                                <div class="alert alert-danger">
                                                                    <div class="alert-body">
                                                                        {{ $message }}
                                                                    </div>
                                                                </div>
                                                            @enderror

                                                            <div class="form-group">
                                                                <label for="count_edit">Count <span class="text-danger">*</span></label>
                                                                <input type="number" value="{{ $facility->count }}" name="count_edit" id="count_edit" class="form-control">
                                                            </div>
                                                            @error('count_edit')
                                                                <div class="alert alert-danger">
                                                                    <div class="alert-body">
                                                                        {{ $message }}
                                                                    </div>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Delete Modal -->
                                        <div class="modal fade" id="deleteModal_{{ $facility->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ route('about_facility.destroy', $facility->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="modal-body text-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" style="font-size: 100px" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                            </svg>
                                                            <h2 class="font-weight-normal mt-1">{{ __('Are you sure?') }}?</h2>
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
                @if ($about_facilities instanceof \Illuminate\Pagination\AbstractPaginator)
                    <div class="row mt-1">
                        <div class="col-auto ml-auto">
                            {{ $about_facilities->onEachSide(1)->appends(['start_date' => request()->start_date, 'end_date' => request()->end_date])->links() }}
                        </div>
                    </div>
                @endif
                {{-- @include('includes.pagination' , ['variables' => $about_facilities, 'data_variables' => ['start_date' => request()->start_date,'end_date' => request()->end_date]]) --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section("js")
    <script>

        $(document).ready(function(){
            var ids = [];
            @if($errors->has('title') || $errors->has('icon') || $errors->has('description') | $errors->has('count'))
                $('#add_facility_modal').modal('show');
            @endif
            @if($errors->has('title_edit') || $errors->has('icon_edit') || $errors->has('description_edit') || $errors->has('count_edit'))
                $("#edit_facility_{{ session('id') }}").modal('show');
            @endif
            // Select All Checkbox Features
            $('#all-select').change(function(){
                ids = [];
                // Get all the id
                if($(this).is(":checked")){
                    $('.custom-control-input').prop('checked', true);


                    $('.all_checkbox').each(function(){
                        ids.push($(this).attr('id').split('-')[2]);
                    });

                    if(ids.length == 0){
                        $('#all_actions').removeClass('d-inline-block');
                        $('#all_actions').addClass('d-none');
                    }
                    else
                    {
                        $('#all_actions').removeClass(' d-none');
                        $('#all_actions').addClass('d-inline-block');
                        $('#export_all').val(ids);
                    }
                    // Delete all
                    $("#delete_all").on('click', function(){
                        $.ajax({
                        url: "{{ route('about_facility.mass_action') }}",
                        type: 'POST',
                        data: {
                            ids: ids,
                        },
                        success: function(data){
                            if(data.success == 'done'){
                                window.location.reload();
                            }
                        }
                    });

                });

                }else{
                    $('.custom-control-input').prop('checked', false);
                    $('#all_actions').addClass('d-none');
                    $('#all_actions').removeClass('d-inline-block');
                }
            });

            // Select Individual Checkbox Features
            $('.all_checkbox').change(function(){
                ids = [];
                $('.all_checkbox').each(function(){
                    if($(this).is(":checked")){
                        ids.push($(this).attr('id').split('-')[2]);
                    }
                });
                if(ids.length == 0){
                    $('#all_actions').removeClass('d-inline-block');
                    $('#all_actions').addClass('d-none');
                }
                else
                {
                    $('#all_actions').removeClass(' d-none');
                    $('#all_actions').addClass('d-inline-block');
                    $('#export_all').val(ids);

                    // Delete trigger
                    $("#delete_all").on('click', function(){
                        $.ajax({
                            url: "{{ route('about_facility.mass_action') }}",
                            type: 'POST',
                            data: {
                                ids: ids,
                            },
                            success: function(data){
                                if(data.success == 'done'){
                                    window.location.reload();
                                }
                            }
                        });

                    });
                }
            });

            // facility Import
            $('body').on('change','#importfacility',function(){
                var form_data = new FormData($('#importfacilityForm')[0]);

                $.ajax({
                    url: "",
                    type: "post",
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if(response.data){
                            $('#importSubmitButton').removeClass('d-none');
                            $('#importError').addClass('d-none');
                            $('#facilityCsvHeader').html(response.data);
                        }
                        if(response.error){
                            $('#importSubmitButton').addClass('d-none');
                            $('#importError').removeClass('d-none');
                            $('#importError').text(response.error);
                        }
                    },
                });
            });


            $('.table_search').on('input', function(){
                var tableSearchValue = $(this).val();
                $(this).closest(".card-body").find(".table tbody tr").each(function(){
                    if($(this).text().search(new RegExp(tableSearchValue, "i")) < 0){
                        $(this).hide();
                    }
                    else{
                        $(this).show();
                    }
                });
            });
        });

    </script>
@endsection
