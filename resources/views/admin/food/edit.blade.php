@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Update Food
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
            <li class="breadcrumb-item ">Food</li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Food</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('food.update', $single_food_info->id) }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name"> {{ __('Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name" class="form-control" name="name"  value="{{ $single_food_info->name }}" placeholder="Enter Food name" />
                                </div>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="type"> {{ __('Type') }} <span class="text-danger">*</span> </label>
                                    <select name="type" id="type" class="form-control">
                                        @foreach ($foodtype as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $single_food_info->type ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image"> {{ __('Previous Image') }} </label>
                                    <img src="{{ asset('uploads/foods') }}/{{ $single_food_info->image }}" alt="not found" width="200" height="200">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image"> {{ __('Image') }} <span class="text-danger">*</span> </label>
                                    <input type="file" id="image" class="form-control" name="image"/>
                                </div>
                                <div class="form-group">
                                    <label for="image"> {{ __('Preview Image') }} <span class="text-danger">*</span> </label>
                                    <img width="200" id="output">
                                </div>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description"> {{ __('Description') }} <span class="text-danger">*</span> </label>
                                    <textarea name="description" id="price" class="form-control" cols="5" rows="5">{{ $single_food_info->description }}</textarea>
                                </div>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="price"> {{ __('Price') }} <span class="text-danger">*</span></label>
                                    <input type="number" id="price" class="form-control" name="price" value="{{ $single_food_info->price }}"/>
                                </div>
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1">{{ __('Update') }}</button>
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
        document.getElementById('image').onchange = function() {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('output').src = src
        }
    </script>
@endsection
