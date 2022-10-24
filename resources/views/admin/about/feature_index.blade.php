@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Update About Feature
@endsection

@section('about_feature')
    active
@endsection

@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item ">About Feature</li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update About Feature</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('about_feature.update', $about_feature->id) }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        @method("PUT")

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name_1"> {{ __('1st Feature Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name_1" class="form-control" name="name_1" value="{{ $about_feature->name_1 }}" />
                                </div>
                                @error('name_1')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="feature_icon_1"> {{ __('1st Feature Icon') }} <span class="text-danger">*</span>(<a href="https://fontawesome.com/icons">search flaticon here: </a>)</label>
                                    <input type="text" id="feature_icon_1" class="form-control" name="feature_icon_1" value="{{ $about_feature->feature_icon_1 }}" />
                                </div>
                                @error('feature_icon_1')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="link_1"> {{ __('1st Link') }} </label>
                                    <input type="text" id="link_1" class="form-control" name="link_1"  value="{{ $about_feature->link_1 }}" />
                                </div>
                                @error('link_1')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name_2"> {{ __('2nd Feature Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name_2" class="form-control" name="name_2" value="{{ $about_feature->name_2 }}" />
                                </div>
                                @error('name_2')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="feature_icon_2"> {{ __('2nd Feature Icon') }} <span class="text-danger">*</span>(<a href="https://www.flaticon.com">search flaticon here: </a>)</label>
                                    <input type="text" id="feature_icon_2" class="form-control" name="feature_icon_2" value="{{ $about_feature->feature_icon_2 }}" />
                                </div>
                                @error('feature_icon_2')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="link_2"> {{ __('2nd Link') }} </label>
                                    <input type="text" id="link_2" class="form-control" name="link_2"  value="{{ $about_feature->link_2 }}" />
                                </div>
                                @error('link_2')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name_3"> {{ __('3rd Feature Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name_3" class="form-control" name="name_3" value="{{ $about_feature->name_3 }}" />
                                </div>
                                @error('name_3')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="feature_icon_3"> {{ __('3rd Feature Icon') }} <span class="text-danger">*</span>(<a href="https://www.flaticon.com">search flaticon here: </a>)</label>
                                    <input type="text" id="feature_icon_3" class="form-control" name="feature_icon_3" value="{{ $about_feature->feature_icon_3 }}" />
                                </div>
                                @error('feature_icon_3')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="link_3"> {{ __('3rd Link') }} </label>
                                    <input type="text" id="link_3" class="form-control" name="link_3"  value="{{ $about_feature->link_3 }}" />
                                </div>
                                @error('link_3')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name_4"> {{ __('4th Feature Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name_4" class="form-control" name="name_4" value="{{ $about_feature->name_4 }}" />
                                </div>
                                @error('name_4')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="feature_icon_4"> {{ __('4th Feature Icon') }} <span class="text-danger">*</span>(<a href="https://www.flaticon.com">search flaticon here: </a>)</label>
                                    <input type="text" id="feature_icon_4" class="form-control" name="feature_icon_4" value="{{ $about_feature->feature_icon_4 }}" />
                                </div>
                                @error('feature_icon_4')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="link_4"> {{ __('4th Link') }} </label>
                                    <input type="text" id="link_4" class="form-control" name="link_4"  value="{{ $about_feature->link_4 }}" />
                                </div>
                                @error('link_4')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name_5"> {{ __('5th Feature Name') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="name_5" class="form-control" name="name_5" value="{{ $about_feature->name_5 }}" />
                                </div>
                                @error('name_5')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="feature_icon_5"> {{ __('5th Feature Icon') }} <span class="text-danger">*</span>(<a href="https://www.flaticon.com">search flaticon here: </a>)</label>
                                    <input type="text" id="feature_icon_5" class="form-control" name="feature_icon_5" value="{{ $about_feature->feature_icon_5 }}" />
                                </div>
                                @error('feature_icon_5')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="link_5"> {{ __('5th Link') }} </label>
                                    <input type="text" id="link_5" class="form-control" name="link_5"  value="{{ $about_feature->link_5 }}" />
                                </div>
                                @error('link_5')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
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

@endsection

