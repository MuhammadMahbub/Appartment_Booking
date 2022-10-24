<?php

function generalsettings()
{
    return \App\Models\GeneralSetting::first();
}

function socialurls()
{
    return \App\Models\Socialurl::first();
}

function colorSettings()
{
    return \App\Models\ColorSetting::first();
}

function themesettings($user_id)
{
    return \App\Models\ThemeSetting::where('user_id', $user_id)->first();
}

function amenities()
{
    return \App\Models\Amenity::all();
}

function rules()
{
    return \App\Models\Rule::all();
}

function room_type()
{
    return \App\Models\RoomType::all();
}

function title_banner_settings()
{
    return \App\Models\TitleAndBannerSetting::first();
}

function aboutus()
{
    return \App\Models\About::first();
}

function about_feature()
{
    return \App\Models\AboutFeature::first();
}
