@extends('layouts.dashboard')

@section('title')
    {{ config('app.name') }} | Update Title & Banner
@endsection

@section('title_banner')
    active
@endsection

@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item ">Title & Banner</li>
            <li class="breadcrumb-item active">Update</li>
        </ol>
    </div>
@endsection

@section('content')
   <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Title & Banner</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('title_banner.update', $title_banner->id) }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                        @csrf
                        @method("PUT")
                        <div class="row">

                            <div class="col-12">
                                <h3>Room Section</h3>
                                <div class="form-group">
                                    <label for="room_section_title"> {{ __('Room Section Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="room_section_title" class="form-control" name="room_section_title" value="{{ $title_banner->room_section_title }}" />
                                </div>
                                @error('room_section_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_section_subtitle"> {{ __('Room Section SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="room_section_subtitle" class="form-control" name="room_section_subtitle" value="{{ $title_banner->room_section_subtitle }}" />
                                </div>
                                @error('room_section_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Bg Image') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->room_section_bg_image }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_section_bg_image"> {{ __('Room Section Bg Image') }} </label>
                                    <input type="file" id="room_section_bg_image" class="form-control" name="room_section_bg_image"/>
                                </div>
                                @error('room_section_bg_image')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Testimonial Section</h3>
                                <div class="form-group">
                                    <label for="testimonial_section_subtitle"> {{ __('Testimonial Section SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="testimonial_section_subtitle" class="form-control" name="testimonial_section_subtitle"  value="{{ $title_banner->testimonial_section_subtitle }}" />
                                </div>
                                @error('testimonial_section_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="testimonial_section_title"> {{ __('Testimonial Section Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="testimonial_section_title" class="form-control" name="testimonial_section_title" value="{{ $title_banner->testimonial_section_title }}" />
                                </div>
                                @error('testimonial_section_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Blog Section</h3>
                                <div class="form-group">
                                    <label for="blog_section_subtitle"> {{ __('Blog Section SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="blog_section_subtitle" class="form-control" name="blog_section_subtitle"  value="{{ $title_banner->blog_section_subtitle }}" />
                                </div>
                                @error('blog_section_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="blog_section_title"> {{ __('Blog Section Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="blog_section_title" class="form-control" name="blog_section_title" value="{{ $title_banner->blog_section_title }}" />
                                </div>
                                @error('blog_section_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>About Page</h3>
                                <div class="form-group">
                                    <label for="about_page_subtitle"> {{ __('About Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="about_page_subtitle" class="form-control" name="about_page_subtitle"  value="{{ $title_banner->about_page_subtitle }}" />
                                </div>
                                @error('about_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="about_page_title"> {{ __('About Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="about_page_title" class="form-control" name="about_page_title" value="{{ $title_banner->about_page_title }}" />
                                </div>
                                @error('about_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->about_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="about_page_banner"> {{ __('About page Banner') }} </label>
                                    <input type="file" id="about_page_banner" class="form-control" name="about_page_banner"/>
                                </div>
                                @error('about_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                                {{-- <div class="form-group">
                                    <label for="image"> {{ __('Preview Image') }}</label>
                                    <img width="200" id="output_1">
                                </div> --}}
                            </div>

                            <div class="col-12">
                                <h3>Contact Page</h3>
                                <div class="form-group">
                                    <label for="contact_page_subtitle"> {{ __('Contact Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="contact_page_subtitle" class="form-control" name="contact_page_subtitle"  value="{{ $title_banner->contact_page_subtitle }}" />
                                </div>
                                @error('contact_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact_page_title"> {{ __('Contact Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="contact_page_title" class="form-control" name="contact_page_title" value="{{ $title_banner->contact_page_title }}" />
                                </div>
                                @error('contact_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->contact_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact_page_banner"> {{ __('Contact page Banner') }} </label>
                                    <input type="file" id="contact_page_banner" class="form-control" name="contact_page_banner"/>
                                </div>
                                @error('contact_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Food Page</h3>
                                <div class="form-group">
                                    <label for="food_page_subtitle"> {{ __('Food Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="food_page_subtitle" class="form-control" name="food_page_subtitle"  value="{{ $title_banner->food_page_subtitle }}" />
                                </div>
                                @error('food_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="food_page_title"> {{ __('Food Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="food_page_title" class="form-control" name="food_page_title" value="{{ $title_banner->food_page_title }}" />
                                </div>
                                @error('food_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->food_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="food_page_banner"> {{ __('Food page Banner') }} </label>
                                    <input type="file" id="food_page_banner" class="form-control" name="food_page_banner"/>
                                </div>
                                @error('food_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Restaurant Page</h3>
                                <div class="form-group">
                                    <label for="restaurant_page_subtitle"> {{ __('Restaurant Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="restaurant_page_subtitle" class="form-control" name="restaurant_page_subtitle"  value="{{ $title_banner->restaurant_page_subtitle }}" />
                                </div>
                                @error('restaurant_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="restaurant_page_title"> {{ __('Restaurant Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="restaurant_page_title" class="form-control" name="restaurant_page_title" value="{{ $title_banner->restaurant_page_title }}" />
                                </div>
                                @error('restaurant_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->restaurant_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="restaurant_page_banner"> {{ __('Restaurant page Banner') }} </label>
                                    <input type="file" id="restaurant_page_banner" class="form-control" name="restaurant_page_banner"/>
                                </div>
                                @error('restaurant_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Places Page</h3>
                                <div class="form-group">
                                    <label for="places_page_subtitle"> {{ __('Places Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="places_page_subtitle" class="form-control" name="places_page_subtitle"  value="{{ $title_banner->places_page_subtitle }}" />
                                </div>
                                @error('places_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="places_page_title"> {{ __('Places Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="places_page_title" class="form-control" name="places_page_title" value="{{ $title_banner->places_page_title }}" />
                                </div>
                                @error('places_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->places_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="places_page_banner"> {{ __('Places page Banner') }} </label>
                                    <input type="file" id="places_page_banner" class="form-control" name="places_page_banner"/>
                                </div>
                                @error('places_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Offers Page</h3>
                                <div class="form-group">
                                    <label for="offers_page_subtitle"> {{ __('Offers Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="offers_page_subtitle" class="form-control" name="offers_page_subtitle"  value="{{ $title_banner->offers_page_subtitle }}" />
                                </div>
                                @error('offers_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="offers_page_title"> {{ __('Offers Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="offers_page_title" class="form-control" name="offers_page_title" value="{{ $title_banner->offers_page_title }}" />
                                </div>
                                @error('offers_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->offers_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="offers_page_banner"> {{ __('Offers page Banner') }} </label>
                                    <input type="file" id="offers_page_banner" class="form-control" name="offers_page_banner"/>
                                </div>
                                @error('offers_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Gallery Page</h3>
                                <div class="form-group">
                                    <label for="gallery_page_subtitle"> {{ __('Gallery Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="gallery_page_subtitle" class="form-control" name="gallery_page_subtitle"  value="{{ $title_banner->gallery_page_subtitle }}" />
                                </div>
                                @error('gallery_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="gallery_page_title"> {{ __('Gallery Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="gallery_page_title" class="form-control" name="gallery_page_title" value="{{ $title_banner->gallery_page_title }}" />
                                </div>
                                @error('gallery_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->gallery_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="gallery_page_banner"> {{ __('Gallery page Banner') }} </label>
                                    <input type="file" id="gallery_page_banner" class="form-control" name="gallery_page_banner"/>
                                </div>
                                @error('gallery_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Room Page</h3>
                                <div class="form-group">
                                    <label for="room_page_subtitle"> {{ __('Room Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="room_page_subtitle" class="form-control" name="room_page_subtitle"  value="{{ $title_banner->room_page_subtitle }}" />
                                </div>
                                @error('room_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_page_title"> {{ __('Room Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="room_page_title" class="form-control" name="room_page_title" value="{{ $title_banner->room_page_title }}" />
                                </div>
                                @error('room_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->room_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="room_page_banner"> {{ __('Room page Banner') }} </label>
                                    <input type="file" id="room_page_banner" class="form-control" name="room_page_banner"/>
                                </div>
                                @error('room_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>News Page</h3>
                                <div class="form-group">
                                    <label for="news_page_subtitle"> {{ __('News Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="news_page_subtitle" class="form-control" name="news_page_subtitle"  value="{{ $title_banner->news_page_subtitle }}" />
                                </div>
                                @error('news_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="news_page_title"> {{ __('News Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="news_page_title" class="form-control" name="news_page_title" value="{{ $title_banner->news_page_title }}" />
                                </div>
                                @error('news_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->news_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="news_page_banner"> {{ __('News page Banner') }} </label>
                                    <input type="file" id="news_page_banner" class="form-control" name="news_page_banner"/>
                                </div>
                                @error('news_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Search Page</h3>
                                <div class="form-group">
                                    <label for="search_page_subtitle"> {{ __('Search Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="search_page_subtitle" class="form-control" name="search_page_subtitle"  value="{{ $title_banner->search_page_subtitle }}" />
                                </div>
                                @error('search_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="search_page_title"> {{ __('Search Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="search_page_title" class="form-control" name="search_page_title" value="{{ $title_banner->search_page_title }}" />
                                </div>
                                @error('search_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->search_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="search_page_banner"> {{ __('Search page Banner') }} </label>
                                    <input type="file" id="search_page_banner" class="form-control" name="search_page_banner"/>
                                </div>
                                @error('search_page_banner')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <h3>Booking Page</h3>
                                <div class="form-group">
                                    <label for="booking_page_subtitle"> {{ __('Booking Page SubTitle') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="booking_page_subtitle" class="form-control" name="booking_page_subtitle"  value="{{ $title_banner->booking_page_subtitle }}" />
                                </div>
                                @error('booking_page_subtitle')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="booking_page_title"> {{ __('Booking Page Title') }} <span class="text-danger">*</span></label>
                                    <input type="text" id="booking_page_title" class="form-control" name="booking_page_title" value="{{ $title_banner->booking_page_title }}" />
                                </div>
                                @error('booking_page_title')
                                    <div class="alert alert-danger" role="alert">
                                        <div class="alert-body">
                                            {{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""> {{ __('Previous Banner') }} </label>
                                    <img src="{{ asset('uploads/title&banners') }}/{{ $title_banner->booking_page_banner }}" alt="not found" width="150">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="booking_page_banner"> {{ __('Booking page Banner') }} </label>
                                    <input type="file" id="booking_page_banner" class="form-control" name="booking_page_banner"/>
                                </div>
                                @error('booking_page_banner')
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
    {{-- <script>
        document.getElementById('banner_image_1').onchange = function() {
            var src = URL.createObjectURL(this.files[0])
            document.getElementById('output_1').src = src
        }

    </script> --}}
@endsection
