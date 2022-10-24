@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Color Settings
@endsection

{{-- Active Menu --}}
@section('colorSettings')
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
            <li class="breadcrumb-item active">
                Color Settings
            </li>
        </ol>
    </div>
@endsection

{{-- Page Content --}}
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-7 col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Color Settings</h4>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('colorSettings.update', $colorSettings->id) }}" method="POST" class="form form-vertical">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="bg_color">Bg Color</label>
                                        <input type="color" name="bg_color" value="{{ colorSettings()->bg_color }}" id="bg_color" class="form-control"/>
                                        @error('bg_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="secondary_bg_color">Secondary Bg Color</label>
                                        <input type="color" name="secondary_bg_color" value="{{ colorSettings()->secondary_bg_color }}" id="secondary_bg_color" class="form-control"/>
                                        @error('secondary_bg_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="button_color">Button Color</label>
                                        <input type="color" name="button_color" value="{{ colorSettings()->button_color }}" id="button_color" class="form-control"/>
                                        @error('button_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="hover_color">Hover Color</label>
                                        <input type="color" name="hover_color" value="{{ colorSettings()->hover_color }}" id="hover_color" class="form-control"/>
                                        @error('hover_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="title_color">Title Color</label>
                                        <input type="color" name="title_color" value="{{ colorSettings()->title_color }}" id="title_color" class="form-control"/>
                                        @error('title_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="text_color">Text Color</label>
                                        <input type="color" name="text_color" value="{{ colorSettings()->text_color }}" id="text_color" class="form-control"/>
                                        @error('text_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="theme_color">Theme Color</label>
                                        <input type="color" name="theme_color" value="{{ colorSettings()->theme_color }}" id="theme_color" class="form-control"/>
                                        @error('theme_color')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
