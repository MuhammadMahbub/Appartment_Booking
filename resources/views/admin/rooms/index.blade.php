@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | {{ __("Room List") }}
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
                {{ __("Room List") }}
            </li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="button-group-spacing w-100 text-right">
                    <button class="btn btn-success waves-effect w-100 w-sm-auto" data-toggle="modal" data-target="#csvImportModal">
                        <i data-feather='download'></i>
                        <span class="pl-50">{{ __("Import") }}</span>
                    </button>

                    <a href="{{ route('room.create') }}" type="button" class="btn btn-warning waves-effect w-100 w-sm-auto">
                        <i data-feather='plus'></i>
                        <span class="pl-50">{{ __("Create") }}</span>
                    </a>
                    <div id="all_actions" class="dropdown w-100 w-sm-auto d-none">
                        <button class="btn btn-info w-100 w-sm-auto dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __("All Action") }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right w-100">
                            <button data-toggle="modal" data-target="#deleteModal" type="button" class="dropdown-item">{{ __("Delete Selected") }}</button>
                            @push('all_modals')
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">

                                        </div>
                                    </div>
                                </div>
                            @endpush
                            <form action="#!" method="POST">
                                @csrf
                                <input type="hidden" id="export_all" name="id">
                                <button type="submit" class="dropdown-item" >{{ __("Export") }}</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{-- <form action="#!"> --}}
                <div class="row align-items-end">
                    <div class="col-md">
                        <div class="form-group">
                            <label>{{ __("From") }} <span class="text-danger">*</span></label>
                            <input type="date" class="form-control flatpickr-human-friendly" placeholder="dd-mm-yyyy" required id="from__date" name="from_date">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label>{{ __("To") }} <span class="text-danger">*</span></label>
                            <input type="date" class="form-control flatpickr-human-friendly" placeholder="dd-mm-yyyy" required id="to__date" name="to_date">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="form-group">
                            <button id="filter__date" class="btn btn-primary">{{ __("Filter") }}</button>
                            <button id="clear__filter__date" class="btn btn-danger d-none">{{ __("Clear") }}</button>
                        </div>
                    </div>
                </div>
                <div class="errorPass"></div>
                {{-- </form> --}}
                <div class="input-group mb-2">
                    <input type="text" class="form-control table_search" placeholder="Search Here">
                    <div class="input-group-append">
                      <button class="input-group-text" type="button">
                        <i data-feather='search'></i>
                      </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
        @foreach ($rooms as $room)
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <a href="{{ route('room.show', $room->id) }}" class="d-inline-block">
                        <img src="{{ asset('uploads/rooms') }}/{{ $room->room_photo }}" alt="Room Image" class="card-img-top" height="200px">
                    </a>
                    <div class="card-body text-center">
                        <h3 class="card-title">
                            <a href="{{ route('room.show', $room->id) }}">{{ $room->name }}</a>
                        </h3>
                        <h4 style="color: #bead8e">${{ $room->room_cost }}/Night</h4>
                        <p class="card-text">{!! Str::limit($room->short_description, 60) !!}</p>
                        <a href="{{ route('room.edit', $room->id) }}" class="btn btn-primary">Edit</a>
                        <a data-toggle="modal" data-target="#roomDelete{{ $room->id }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>

            @push('all_modals')
                <!-- Single Delete Modal -->
                <div class="modal fade" id="roomDelete{{ $room->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{ route('room.destroy', $room->id) }}" method="POST" enctype="multipart/form-data">
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
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        var ids = [];
        @if($errors->has('name'))
            $('#ruleCreate').modal('show');
        @endif

        @if($errors->has('subcategory_name'))
            $("#edit_category_{{ session('id')}}").modal('show');
        @endif

        // Select All Checkbox Features
        $('#all_select_checkbox').change(function(){
            ids = [];
            // Get all the id
            if($(this).is(":checked")){
                $('.custom-control-input').prop('checked', true);


                $('.single_select_checkbox').each(function(){
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
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                    url: "{{ route('rule_multi_delete') }}",
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
        $('.single_select_checkbox').change(function(){
            ids = [];
            $('.single_select_checkbox').each(function(){
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
                        $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                        $.ajax({
                                url: "{{ route('rule_single_delete') }}",
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

        // Category Import
        $('body').on('change','#importCategory',function(){
            var form_data = new FormData($('#importCategoryForm')[0]);

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
                        $('#categoryCsvHeader').html(response.data);
                    }
                    if(response.error){
                        $('#importSubmitButton').addClass('d-none');
                        $('#importError').removeClass('d-none');
                        $('#importError').text(response.error);
                    }
                },
            });
        });
        // Table Search
        $('.table_search').on('input', function(){
            var tableSearchValue = $(this).val();
            $(this).closest(".card").find(".table tbody tr").each(function(){
                if($(this).text().search(new RegExp(tableSearchValue, "i")) < 0){
                    $(this).hide();
                }
                else{
                    $(this).show();
                }
            });
        });

        // filter date
        $('#filter__date').on('click',function(){
            // alert('hi');
            let from_date = $('#from__date').val();
            let to_date   = $('#to__date').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('date_wise_search_room') }}",
                data: {
                    from_date: from_date,
                    to_date: to_date,
                },
                success: function(response) {
                    console.log(response);
                    if ((response.count)*1 <  1) {
                        $('#render_faq').html('<tr ><td colspan="1000" class="text-danger text-center py-3">No Data Found</td></tr>');
                    } else {
                        $('#render_faq').html(response.data);
                    }

                    $("#clear__filter__date").removeClass("d-none");
                },
                error: function(){
                    $('.errorPass').html('<p style="color:#fa3232">Please provide both date</p>');
                },
            })

        });
    });
</script>
@endsection
