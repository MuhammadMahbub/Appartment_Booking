<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AboutCounter;
use App\Models\AboutFacility;
use App\Models\Amenity;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Rule;
use App\Models\Testimonial;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend_pages.index',[
            'banner' => Banner::first(),
            'testimonials' => Testimonial::latest()->get(),
            'blogs' => Blog::latest()->get(),
        ]);
    }

    public function about_us(){
        return view('frontend_pages.about_us',[
            'about_facilities' => AboutFacility::latest()->get(),
            'about_counter'    => AboutCounter::first(),
        ]);
    }

    public function rooms(){
        return view('frontend_pages.room',[
            'rooms'      => Room::latest()->get(),
            'amenities'  => Amenity::limit(8)->get(),
        ]);
    }


    public function room_list(){
        return view('frontend_pages.room_list');
    }

    public function room_details($slug){
        $single_room = Room::where('slug', $slug)->first();
        return view('frontend_pages.room_details', compact('single_room'));
    }

    public function booking_now(){
        return view('frontend_pages.booking_now');
    }

    public function news(){
        return view('frontend_pages.news',[
            'blogs'      => Blog::latest()->get(),
            'categories' => BlogCategory::all(),
        ]);
    }

    public function news_details($slug){
        return view('frontend_pages.news_details',[
            'single_blog' => Blog::where('slug', $slug)->first(),
            'categories'  => BlogCategory::all(),
        ]);
    }

    public function food_menu(){
        return view('frontend_pages.food_menu',[
            'foods' => Food::latest()->limit(10)->get(),
        ]);
    }

    public function restaurant(){
        return view('frontend_pages.restaurant');
    }

    public function places(){
        return view('frontend_pages.places');
    }

    public function places_details(){
        return view('frontend_pages.place_details');
    }

    public function offers(){
        return view('frontend_pages.offers');
    }

    public function gallery(){
        return view('frontend_pages.gallery');
    }

    public function search_result(){
        return view('frontend_pages.search_result');
    }

    public function contact(){
        return view('frontend_pages.contact');
    }
}
