@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Blogs
@endsection

{{-- Active Menu --}}
@section('blog')
    active
@endsection

@push('css')

@endpush


{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('blogs.index') }}">Blogs</a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="category_id">Category <small class="text-danger">*</small></label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Blog title <small class="text-danger">*</small></label>
                                    <input type="text" value="{{ old('title') }}" class="form-control" id="title" name="title" placeholder="Blog Title">
                                </div>
                                @error('title')
                                    <div class="alert alert-danger">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_description">Short Description <small class="text-danger">*</small></label>
                                    <textarea name="short_description" class="form-control" id="short_description" rows="3">{{ old('short_description') }}</textarea>
                                </div>
                                @error('short_description')
                                    <div class="alert alert-danger">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="long_description">Long Description <small class="text-danger">*</small></label>
                                    <div>
                                        <input id="long_description" value="{{ old('long_description') }}" type="hidden" name="long_description">
                                        <trix-editor input="long_description" class="trix-content"></trix-editor>
                                    </div>
                                </div>
                                @error('long_description')
                                    <div class="alert alert-danger">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Blog Image <small class="text-danger">* (Aspect ratio 7∶5 is preferred for best visualization)</small></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose Image</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image"> {{ __('Preview Image') }}</label>
                                    <img width="200" id="output">
                                </div>
                                @error('image')
                                    <div class="alert alert-danger">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image_2">Blog Image (Optional)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_2" name="image_2">
                                        <label class="custom-file-label" for="image_2">Choose Image</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image_2"> {{ __('Preview Image') }}</label>
                                    <img width="200" id="output_2">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="product_status">Blog Status</label>
                                    <select class="form-control select2" id="product_status" name="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="author_quote"> Author's Qoute </label>
                                    <input type="text" value="{{ old('author_quote') }}" class="form-control" id="author_quote" name="author_quote" placeholder="...">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_title"> Meta title </label>
                                    <input type="text" value="{{ old('meta_title') }}" class="form-control" id="title" name="meta_title" placeholder="Blog Meta Title">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_tags"> Meta Tags </label>
                                    <input type="text" value="{{ old('meta_tags') }}" class="form-control" id="meta_tags" name="meta_tags" placeholder="Blog Meta Tags">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_keywords"> Meta keywords</label>
                                    <input type="text" value="{{ old('meta_keywords') }}" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Blog Meta keywords">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_author"> Meta Author</label>
                                    <input type="text" value="{{ old('meta_author') }}" class="form-control" id="meta_author" name="meta_author" placeholder="Blog Meta Author">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="meta_description"> Meta description</label>
                                   <textarea class="form-control" name="meta_description" id="meta_description" cols="30" rows="4" placeholder="Blog Meta Description"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success waves-effect waves-float waves-light w-100 w-sm-auto">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('js')
<script>
    document.getElementById('image').onchange = function() {
        var src = URL.createObjectURL(this.files[0])
        document.getElementById('output').src = src
    }
    document.getElementById('image_2').onchange = function() {
        var src = URL.createObjectURL(this.files[0])
        document.getElementById('output_2').src = src
    }

</script>
@endsection
