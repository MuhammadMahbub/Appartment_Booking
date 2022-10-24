@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | {{ __("Create Room") }}
@endsection

@section('roomCreate')
    active
@endsection

@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">{{ __("Admin Dashboard") }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">{{ __("Home") }}</a>
            </li>
            <li class="breadcrumb-item "><a href="{{ route('room.index') }}">{{ __("Rooms") }}</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __("Create Room") }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name"> {{ __('Name') }} <span class="text-danger">*</span> </label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" />
                                </div>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_type"> {{ __('Room Type') }} <span class="text-danger">*</span> </label>
                                    <select name="room_type" id="room_type" class="form-control">
                                        <option selected disabled value="">{{ __("Select Room Type") }}</option>
                                        @foreach ($roomtype as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('roomtype')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- <div class="col-12">
                                <div class="form-group">
                                    <label for="bed_type"> {{ __('Bed Type') }} <span class="text-danger">*</span> </label>
                                    <select name="bed_type" id="bed_type" class="form-control">
                                        <option selected disabled value="">{{ __("Select Bed Type") }}</option>
                                        @foreach ($bedtype as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('bed_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_photo"> {{ __('Choose Photo') }} <span class="text-danger">*</span>(size: 370*240px) </label>
                                    <input type="file" id="room_photo" class="form-control" name="room_photo"/>
                                </div>
                                <div class="form-group">
                                    <label for="room_photo"> {{ __('Preview Photo') }} </label>
                                    <img width="200" id="output">
                                </div>
                                @error('room_photo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_thumb"> {{ __('Choose Thumb Photos') }} <span class="text-danger">*</span>(size: 188*188px) </label>
                                    <input type="file" id="room_thumb" name="room_thumb[]" class="form-control" multiple />
                                </div>
                                @error('room_thumb')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_description"> {{ __('Short Description') }} <span class="text-danger">*</span> </label>
                                    <textarea name="short_description" id="short_description" class="form-control" cols="5" rows="5">{{ old('short_description') }}</textarea>
                                </div>
                                @error('short_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="long_description"> {{ __('Long Description') }} <span class="text-danger">*</span></label>
                                    <textarea name="long_description" id="long_description" class="form-control" cols="5" rows="5">{{ old('long_description') }}</textarea>
                                    @error('long_description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_cost"> {{ __('Room Cost') }} <span class="text-danger">*</span> </label>
                                    <input type="text" id="room_cost" class="form-control" name="room_cost" value="{{ old('room_cost') }}" />
                                </div>
                                @error('room_cost')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_amount"> {{ __('Room Amount') }}<span class="text-danger">*</span>  </label>
                                    <input type="text" id="room_amount" class="form-control" name="room_amount" placeholder="1" value="{{ old('room_amount') }}"/>
                                </div>
                                @error('room_amount')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cancellation"> {{ __('Cancellation') }} </label>
                                    <textarea name="cancellation" id="cancellation" class="form-control" cols="5" rows="5">{{ old('cancellation') }}</textarea>
                                </div>
                                @error('room_amount')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_title"> {{ __('Meta Title') }} </label>
                                    <textarea name="meta_title" id="meta_title" class="form-control" cols="5" rows="3">{{ old('meta_title') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_tags"> {{ __('Meta Tags') }} </label>
                                    <textarea name="meta_tags" id="meta_tags" class="form-control" cols="5" rows="3">{{ old('meta_tags') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_keywords"> {{ __('Meta Keywords') }} </label>
                                    <textarea name="meta_keywords" id="meta_keywords" class="form-control" cols="5" rows="3">{{ old('meta_keywords') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_description"> {{ __('Meta Description') }} </label>
                                    <textarea name="meta_description" id="meta_description" class="form-control" cols="5" rows="3">{{ old('meta_description') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_autror"> {{ __('Meta Author') }} </label>
                                    <textarea name="meta_autror" id="meta_autror" class="form-control" cols="5" rows="3">{{ old('meta_autror') }}</textarea>
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

@section('js')
    <script>
        document.getElementById('room_photo').onchange = function() {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('output').src = src
        }
    </script>
@endsection
