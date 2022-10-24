<?php

namespace App\Providers;

use App\Models\AboutFacility;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Food;
use App\Models\FoodType;
use App\Models\Room;
use App\Models\Testimonial;
use App\Observers\AboutFacilityObserver;
use App\Observers\BannerObserver;
use App\Observers\BlogCategoryObserver;
use App\Observers\BlogObserver;
use App\Observers\RoomObserver;
use App\Observers\FoodObserver;
use App\Observers\FoodTypeOvserver;
use App\Observers\TestimonialObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Food::observe(FoodObserver::class);
        FoodType::observe(FoodTypeOvserver::class);
        Room::observe(RoomObserver::class);
        Banner::observe(BannerObserver::class);
        AboutFacility::observe(AboutFacilityObserver::class);
        Testimonial::observe(TestimonialObserver::class);
        BlogCategory::observe(BlogCategoryObserver::class);
        Blog::observe(BlogObserver::class);
    }
}
