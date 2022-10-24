@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | General Settings
@endsection

{{-- Active Menu --}}
@section('generalSettings')
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
                Gerneral Settings
            </li>
        </ol>
    </div>
@endsection

{{-- Page Content --}}
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-12 col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">General Settings</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('generalSettings.update', $generalSettings->id) }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="logo">
                                            <label class="custom-file-label" for="logo">Choose file</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->logo }}" style="max-height: 60px" alt="Not Found">
                                        </div>
                                        @error('logo')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">

                                    <div class="form-group">
                                        <label for="front_logo">Frontend Page Logo</label>
                                        <div class="custom-file">
                                            <input type="file" name="front_logo" class="custom-file-input" id="front_logo">
                                            <label class="custom-file-label" for="front_logo">Choose file</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->front_logo }}" style="max-height: 60px" alt="Not Found">
                                        </div>
                                        @error('front_logo')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="favicon">Favicon</label>
                                        <div class="custom-file">
                                            <input type="file" name="favicon" class="custom-file-input" id="favicon">
                                            <label class="custom-file-label" for="favicon">Choose file</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->favicon }}" style="max-height: 60px" alt="Not Found">
                                        </div>
                                        @error('favicon')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email_title">Email Title <span class="text-danger">*</span></label>
                                        <input type="text" name="email_title" value="{{ generalSettings()->email_title }}" id="email_title" class="form-control" placeholder="Enter Email Title"/>
                                        @error('email_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email address <span class="text-danger">*</span></label>
                                        <input type="text" name="email" value="{{ generalSettings()->email }}" id="email" class="form-control" placeholder="Enter email address"/>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email_2">Email address 2</label>
                                        <input type="text" name="email_2" value="{{ generalSettings()->email_2 }}" id="email_2" class="form-control"/>
                                        @error('email_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email_icon">Email Icon <span class="text-danger">*(<a href="https://fontawesome.com/icons">icon search:</a> )</span></label>
                                        <input type="text" name="email_icon" value="{{ generalSettings()->email_icon }}" id="email_icon" class="form-control"/>
                                        @error('email_icon')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="phone_title">Phone Title <span class="text-danger">*</span></label>
                                        <input type="text" name="phone_title" value="{{ generalSettings()->phone_title }}" id="phone_title" class="form-control" />
                                        @error('phone_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" value="{{ generalSettings()->phone }}" id="phone" class="form-control"/>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="phone_2">Phone No 2</label>
                                        <input type="text" name="phone_2" value="{{ generalSettings()->phone_2 }}" id="phone_2" class="form-control"/>
                                        @error('phone_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="phone_icon">Phone Icon <span class="text-danger">*(<a href="https://fontawesome.com/icons">icon search:</a> )</span></label>
                                        <input type="text" name="phone_icon" value="{{ generalSettings()->phone_icon }}" id="phone_icon" class="form-control"/>
                                        @error('phone_icon')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address_title">Address Title <span class="text-danger">*</span></label>
                                        <input type="text" name="address_title" value="{{ generalSettings()->address_title }}" id="address_title" class="form-control" />
                                        @error('address_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Address <span class="text-danger">*</span></label>
                                        <input type="text" name="address" value="{{ generalSettings()->address }}" id="address" class="form-control"/>
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address_2">Address 2</label>
                                        <input type="text" name="address_2" value="{{ generalSettings()->address_2 }}" id="address_2" class="form-control"/>
                                        @error('address_2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address_icon">Address Icon <span class="text-danger">*(<a href="https://fontawesome.com/icons">icon search:</a> )</span></label>
                                        <input type="text" name="address_icon" value="{{ generalSettings()->address_icon }}" id="address_icon" class="form-control"/>
                                        @error('address_icon')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="footer_description">Footer description <span class="text-danger">*</span></label>
                                        <textarea name="footer_description" id="footer_description" cols="30" rows="5" class="form-control">{{ generalSettings()->footer_description }}</textarea>
                                        @error('footer_description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="copyright">Copyright <span class="text-danger">*</span></label>
                                        <input type="text" name="copyright" value="{{ generalSettings()->copyright }}" id="copyright" class="form-control"/>
                                        @error('copyright')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" name="meta_title" value="{{ generalSettings()->meta_title }}" id="meta_title" class="form-control" placeholder="Enter meta title"/>
                                        @error('meta_title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="meta_tags">Meta Tags</label>
                                        <input type="text" name="meta_tags" value="{{ generalSettings()->meta_tags }}" id="meta_tags" class="form-control"/>
                                        @error('meta_tags')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="meta_keywords">Meta Keywords</label>
                                        <input type="text" name="meta_keywords" value="{{ generalSettings()->meta_keywords }}" id="meta_keywords" class="form-control" placeholder="Enter meta keywords"/>
                                        @error('meta_keywords')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <input type="text" name="meta_description" value="{{ generalSettings()->meta_description }}" id="meta_description" class="form-control" placeholder="Enter meta description"/>
                                        @error('meta_description')
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
