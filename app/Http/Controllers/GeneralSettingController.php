<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{

     /**
     * Construct
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('verified');
        // $this->middleware('checkAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.generalSettings.index', [
            'generalSettings' => GeneralSetting::first()
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralSetting $generalSetting)
    {
        // return $request;
        $request->validate([
            'logo'              => 'image',
            'front_logo'        => 'image',
            'favicon'           => 'image',

            'phone_title'       => 'required',
            'phone'             => 'required',
            'phone_icon'        => 'required',

            'address_title'     => 'required',
            'address'           => 'required',
            'address_icon'      => 'required',

            'email_title'       => 'required',
            'email'             => 'required',
            'email_icon'        => 'required',

        ]);

         //  Logo
         if($request->hasFile('logo'))
         {
            $logo = $request->file('logo');
            $filename = 'logo.'. $logo->extension('logo');
            $location = public_path('uploads/generalSettings/');
            $logo->move($location, $filename);

            $generalSetting->logo = $filename;
        }
         //  front Logo
         if($request->hasFile('front_logo'))
         {
            $logo = $request->file('front_logo');
            $filename = 'front_logo.'. $logo->extension('front_logo');
            $location = public_path('uploads/generalSettings/');
            $logo->move($location, $filename);

            $generalSetting->front_logo = $filename;
        }
        //  Favicon
        if($request->hasFile('favicon'))
        {
            $favicon = $request->file('favicon');
            $favicon_filename = 'favicon.'. $favicon->extension('favicon');
            $favicon_location = public_path('uploads/generalSettings/');
            $favicon->move($favicon_location, $favicon_filename);

            $generalSetting->favicon = $favicon_filename;
        }


        $generalSetting->email_title            = $request->email_title;
        $generalSetting->email                  = $request->email;
        $generalSetting->email_2                = $request->email_2;
        $generalSetting->email_icon             = $request->email_icon;
        $generalSetting->phone_title            = $request->phone_title;
        $generalSetting->phone                  = $request->phone;
        $generalSetting->phone_2                = $request->phone_2;
        $generalSetting->phone_icon             = $request->phone_icon;
        $generalSetting->address_title          = $request->address_title;
        $generalSetting->address                = $request->address;
        $generalSetting->address_2              = $request->address_2;
        $generalSetting->address_icon           = $request->address_icon;
        $generalSetting->footer_description     = $request->footer_description;
        $generalSetting->copyright              = $request->copyright;
        $generalSetting->meta_tags              = $request->meta_tags;
        $generalSetting->meta_title             = $request->meta_title;
        $generalSetting->meta_description       = $request->meta_description;
        $generalSetting->meta_keywords          = $request->meta_keywords;


        $generalSetting->save();

        return back()->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralSetting $generalSetting)
    {
        //
    }
}
