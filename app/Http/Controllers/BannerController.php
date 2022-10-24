<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerUpdateRequest;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function banner_index()
    {
        return view('admin.banners.index',[
            'banner' => Banner::first(),
        ]);
    }

    public function banner_update(BannerUpdateRequest $request, $id)
    {
        $banner = Banner::find($id);

        $banner->update([
            'subtitle'      => $request->subtitle,
            'title'         => $request->title,
            'button_text_1' => $request->button_text_1,
            'button_url_1'  => $request->button_url_1,
            'button_text_2' => $request->button_text_2,
            'button_url_2'  => $request->button_url_2,
            'updated_at'    => Carbon::now()
        ]);

        if($request->hasFile('banner_image_1'))
        {
           $image1     = $request->file('banner_image_1');
           $filename1   = uniqid() . '.' . $image1->getClientOriginalExtension();
           $location   = public_path('uploads/banners');
           $image1->move( $location, $filename1);
           $banner->banner_image_1 = $filename1;
        }

        if($request->hasFile('banner_image_2'))
        {
           $image2     = $request->file('banner_image_2');
           $filename2   = uniqid() . '.' . $image2->getClientOriginalExtension();
           $location   = public_path('uploads/banners');
           $image2->move( $location, $filename2);
           $banner->banner_image_2 = $filename2;
        }
        $banner->save();

        return back()->withSuccess('Banner Updated Successfully');
    }
}
