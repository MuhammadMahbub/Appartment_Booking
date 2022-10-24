<?php

use App\Models\TitleAndBannerSetting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodTypeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SocialurlController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ColorSettingController;
use App\Http\Controllers\ThemeSettingController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\TitleAndBannerSettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('admin.index');
// })->name('dashboard');



// Frontend Routing
Route::group(['middleware' => 'visitor_log'], function(){

    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('about/us', [FrontendController::class, 'about_us'])->name('about.us');
    Route::get('rooms', [FrontendController::class, 'rooms'])->name('rooms');
    Route::get('room/list', [FrontendController::class, 'room_list'])->name('room.list');
    Route::get('room/details/{slug}', [FrontendController::class, 'room_details'])->name('room.details');
    Route::get('news', [FrontendController::class, 'news'])->name('news');
    Route::get('/news-details/{slug}', [FrontendController::class, 'news_details'])->name('news.details');
    Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('booking/now', [FrontendController::class, 'booking_now'])->name('booking.now');
    Route::get('food/menu', [FrontendController::class, 'food_menu'])->name('food.menu');
    Route::get('restaurant', [FrontendController::class, 'restaurant'])->name('restaurant');
    Route::get('places', [FrontendController::class, 'places'])->name('places');
    Route::get('place/details', [FrontendController::class, 'places_details'])->name('place.details');
    Route::get('offers', [FrontendController::class, 'offers'])->name('offers');
    Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');
    Route::get('search/result', [FrontendController::class, 'search_result'])->name('search.result');

});



// Admin Group Route
Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

     Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
     Route::get('users/list', [AdminController::class, 'userList'])->name('users.index');
     Route::get('users/create', [AdminController::class, 'userCreate'])->name('users.create');
     Route::get('users/{id}/destroy', [AdminController::class, 'userDestroy'])->name('users.destroy');

    Route::resource('generalSettings', GeneralSettingController::class);

    Route::resource('colorSettings', ColorSettingController::class);

    Route::resource('socialurls', SocialurlController::class);

    Route::get('banner/index', [BannerController::class, 'banner_index'])->name('banner.index');
    Route::put('banner/update/{id}', [BannerController::class, 'banner_update'])->name('banner.update');

    Route::get('about/index', [AboutController::class, 'about_index'])->name('about.index');
    Route::put('about/update/{id}', [AboutController::class, 'about_update'])->name('about.update');

    Route::get('about/feature/index', [AboutController::class, 'about_feature_index'])->name('about_feature.index');
    Route::put('about/feature/update/{id}', [AboutController::class, 'about_feature_update'])->name('about_feature.update');

    Route::get('about/facility/index', [AboutController::class, 'about_facility_index'])->name('about_facility.index');
    Route::post('about/facility/store', [AboutController::class, 'about_facility_store'])->name('about_facility.store');
    Route::put('about/facility/update/{id}', [AboutController::class, 'about_facility_update'])->name('about_facility.update');
    Route::delete('about/facility/destroy/{id}', [AboutController::class, 'about_facility_destroy'])->name('about_facility.destroy');
    Route::get('/about/facility/date-filter', [AboutController::class, 'facilityDateFilter'])->name('about_facility.date.filter');
    Route::post('/about_facility-all-delete', [AboutController::class, 'facilityMassDelete'])->name('about_facility.mass_action');

    Route::get('about/counter/index', [AboutController::class, 'about_counter_index'])->name('about_counter.index');
    Route::put('about/counter/update/{id}', [AboutController::class, 'about_counter_update'])->name('about_counter.update');

    Route::get('title/banner/settings/index', [TitleAndBannerSettingController::class, 'title_banner_index'])->name('title_banner.index');
    Route::put('title/banner/settings/update/{id}', [TitleAndBannerSettingController::class, 'title_banner_update'])->name('title_banner.update');

    Route::resource('room', RoomController::class);
    Route::post('room/search/by/date', [RoomController::class, 'date_wise_search_room'])->name('date_wise_search_room');

    Route::get('roomtype/index', [RoomController::class, 'roomtype_index'])->name('roomtype.index');
    Route::post('thumb/delete', [RoomController::class, 'single_thumb_destroy'])->name('single_thumb_destroy');
    Route::post('roomtype/create', [RoomController::class, 'roomtype_store'])->name('roomtype.store');
    Route::put('roomtype/update/{id}', [RoomController::class, 'roomtype_update'])->name('roomtype.update');
    Route::delete('roomtype/destroy/{id}', [RoomController::class, 'roomtype_destroy'])->name('roomtype.destroy');
    Route::post('roomtype/multi/delete', [RoomController::class, 'roomtype_multi_delete'])->name('roomtype_multi_delete');
    Route::post('roomtype/single/delete', [RoomController::class, 'roomtype_single_delete'])->name('roomtype_single_delete');
    Route::post('roomtype/search/by/date', [RoomController::class, 'date_wise_search_roomtype'])->name('date_wise_search_roomtype');
    Route::post('date/wise/clear/roomtype', [RoomController::class, 'date_wise_clear_roomtype'])->name('date_wise_clear_roomtype');
    // Route::delete('roomtype/bulk/destroy', [RoomController::class, 'roomtype_bulk_destroy'])->name('roomtype.bulk.destroy');
    Route::get('bedtype/index', [RoomController::class, 'bedtype_index'])->name('bedtype.index');
    Route::post('bedtype/create', [RoomController::class, 'bedtype_store'])->name('bedtype.store');
    Route::put('bedtype/update/{id}', [RoomController::class, 'bedtype_update'])->name('bedtype.update');
    Route::delete('bedtype/destroy/{id}', [RoomController::class, 'bedtype_destroy'])->name('bedtype.destroy');
    Route::post('bedtype/multi/delete', [RoomController::class, 'bedtype_multi_delete'])->name('bedtype_multi_delete');
    Route::post('bedtype/single/delete', [RoomController::class, 'bedtype_single_delete'])->name('bedtype_single_delete');
    Route::post('bedtype/search/by/date', [RoomController::class, 'date_wise_search_bedtype'])->name('date_wise_search_bedtype');
    Route::post('date/wise/clear/bedtype', [RoomController::class, 'date_wise_clear_bedtype'])->name('date_wise_clear_bedtype');

    Route::resource('amenity', AmenityController::class);
    Route::post('amenity/multi/delete', [AmenityController::class, 'amenity_multi_delete'])->name('amenity_multi_delete');
    Route::post('amenity/single/delete', [AmenityController::class, 'amenity_single_delete'])->name('amenity_single_delete');
    Route::post('amenity/search/by/date', [AmenityController::class, 'date_wise_search_amenity'])->name('date_wise_search_amenity');
    Route::post('date/wise/clear/amenity', [AmenityController::class, 'date_wise_clear_amenity'])->name('date_wise_clear_amenity');

    Route::resource('rule', RuleController::class);
    Route::post('rule/multi/delete', [RuleController::class, 'rule_multi_delete'])->name('rule_multi_delete');
    Route::post('rule/single/delete', [RuleController::class, 'rule_single_delete'])->name('rule_single_delete');
    Route::post('rule/search/by/date', [RuleController::class, 'date_wise_search_rule'])->name('date_wise_search_rule');
    Route::post('date/wise/clear/rule', [RuleController::class, 'date_wise_clear_rule'])->name('date_wise_clear_rule');


    Route::resource('food', FoodController::class);
    Route::resource('foodtype', FoodTypeController::class);

    Route::resource('testimonial', TestimonialController::class);
    Route::post('testimonial/multi/delete', [TestimonialController::class, 'testimonial_multi_delete'])->name('testimonial_multi_delete');
    Route::post('testimonial/single/delete', [TestimonialController::class, 'testimonial_single_delete'])->name('testimonial_single_delete');
    Route::post('testimonial/search/by/date', [TestimonialController::class, 'date_wise_search_testimonial'])->name('date_wise_search_testimonial');
    Route::post('date/wise/clear/testimonial', [TestimonialController::class, 'date_wise_clear_testimonial'])->name('date_wise_clear_testimonial');
    // Route::post('/testimonials-all-export', [TestimonialController::class, 'mass_export'])->name('testimonial.mass_export');

    Route::get('/blog-search', [BlogController::class, 'blogSearch'])->name('blogs.search');
    Route::resource('blogs', BlogController::class);
    Route::get('blog_category-index', [BlogController::class, 'blog_category_index'])->name('blog_category.index');
    Route::post('blog_category-store', [BlogController::class, 'blog_category_store'])->name('blog_category.store');
    Route::put('blog_category-update/{id}', [BlogController::class, 'blog_category_update'])->name('blog_category.update');
    Route::delete('blog_category-delete/{id}', [BlogController::class, 'blog_category_delete'])->name('blog_category.destroy');

});

    Route::get('theme-color', [ThemeSettingController::class, 'color'])->name('theme.color');
    Route::get('theme-toggle', [ThemeSettingController::class, 'toggle'])->name('theme.toggle');

    Route::resource('contacts', ContactController::class);

    Route::resource('subscribers', SubscriberController::class);

