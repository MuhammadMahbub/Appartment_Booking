<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutCounterUpdateRequest;
use App\Http\Requests\AboutFacilityRequest;
use App\Http\Requests\AboutFacilityUpdateRequest;
use App\Http\Requests\AboutFeatureRequest;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\AboutCounter;
use App\Models\AboutFacility;
use App\Models\AboutFeature;

class AboutController extends Controller
{
    public function about_index(){
        return view('admin.about.index',[
            'about' => About::first(),
        ]);
    }

    public function about_update(AboutUpdateRequest $request, $id)
    {
        $about = About::findOrFail($id);
        $about->update([
            'start_year'                => $request->start_year,
            'front_page_heading'        => $request->front_page_heading,
            'internal_page_heading'     => $request->internal_page_heading,
            'video_link'                => $request->video_link,
            'short_description'         => $request->short_description,
            'facility_subtitle'         => $request->facility_subtitle,
            'facility_title'            => $request->facility_title,
            'counter_subtitle'          => $request->counter_subtitle,
            'counter_title'             => $request->counter_title,
            'blog_subtitle'             => $request->blog_subtitle,
            'blog_title'                => $request->blog_title,
            'updated_at'                => Carbon::now()
        ]);

        if($request->hasFile('video_back_image'))
        {
           $image     = $request->file('video_back_image');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = public_path('uploads/abouts');
           $image->move( $location, $filename);
           $about->video_back_image = $filename;
        }
        $about->save();

       return redirect()->route('about.index')->with('success', 'Updated Successfully');
    }

    public function about_feature_index(){
        return view('admin.about.feature_index',[
            'about_feature' => AboutFeature::first(),
        ]);
    }

    public function about_feature_update(AboutFeatureRequest $request, $id)
    {
        $aboutfeature = AboutFeature::findOrFail($id);
        $aboutfeature->update([
            'name_1'       => $request->name_1,
            'name_2'       => $request->name_2,
            'name_3'       => $request->name_3,
            'name_4'       => $request->name_4,
            'name_5'       => $request->name_5,
            'feature_icon_1'       => $request->feature_icon_1,
            'feature_icon_2'       => $request->feature_icon_2,
            'feature_icon_3'       => $request->feature_icon_3,
            'feature_icon_4'       => $request->feature_icon_4,
            'feature_icon_5'       => $request->feature_icon_5,
            'link_1'       => $request->link_1,
            'link_2'       => $request->link_2,
            'link_3'       => $request->link_3,
            'link_4'       => $request->link_4,
            'link_5'       => $request->link_5,
            'updated_at' => Carbon::now()
        ]);

       return redirect()->route('about_feature.index')->with('success', 'Updated Successfully');
    }


    public function about_facility_index(){
        return view('admin.about.facility_index',[
            'about_facilities' => AboutFacility::latest()->paginate(5),
        ]);
    }

    public function about_facility_store(AboutFacilityRequest $request)
    {
        AboutFacility::create([
            'icon'          => $request->icon,
            'title'         => $request->title,
            'description'   => $request->description,
            'link'          => $request->link,
            'count'         => $request->count,
            'created_at'    => Carbon::now()
        ]);

        return back()->withSuccess('Created Successfully');
    }

    public function about_facility_update(AboutFacilityUpdateRequest $request, $id)
    {
        $facility = AboutFacility::find($id);
        $facility->update([
            'icon'          => $request->icon_edit,
            'title'         => $request->title_edit,
            'description'   => $request->description_edit,
            'link'          => $request->link_edit,
            'count'         => $request->count_edit,
            'updated_at'    => Carbon::now()
        ]);

        session()->forget('id');

        return back()->withSuccess('Updated Successfully');
    }

    public function about_facility_destroy($id)
    {
        AboutFacility::find($id)->delete();
        return back()->with('error', 'Deleted Successfully');
    }

    public function facilityDateFilter(){
        $about_facilities = AboutFacility::whereBetween('created_at', [request()->start_date, request()->end_date])->paginate(10);
        return view('admin.about.facility_index', compact('about_facilities'));
    }

    public function facilityMassDelete(Request $request)
    {
        $teams = AboutFacility::findMany($request->ids);
        $teams->each->delete();
        return response()->json(['success' => 'done']);
    }

    public function about_counter_index(){
        return view('admin.about.counter_index',[
            'about_counter' => AboutCounter::first(),
        ]);
    }

    public function about_counter_update(AboutCounterUpdateRequest $request, $id)
    {
        $counter = AboutCounter::find($id);
        $counter->update([
            'user_name'          => $request->user_name,
            'user_icon'          => $request->user_icon,
            'user_count'         => $request->user_count,
            'review_name'        => $request->review_name,
            'review_icon'        => $request->review_icon,
            'review_count'       => $request->review_count,
            'country_name'       => $request->country_name,
            'country_icon'       => $request->country_icon,
            'country_count'      => $request->country_count,
            'updated_at'         => Carbon::now()
        ]);

        return back()->withSuccess('Updated Successfully');
    }


}
