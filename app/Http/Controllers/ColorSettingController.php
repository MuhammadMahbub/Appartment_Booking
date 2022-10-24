<?php

namespace App\Http\Controllers;

use App\Models\ColorSetting;
use Illuminate\Http\Request;

class ColorSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.colorSettings.index', [

            'colorSettings' => colorSetting::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ColorSetting  $colorSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ColorSetting $colorSetting)
    {
        // Form Validation
        $request->validate([

            'bg_color'              => 'required',
            'secondary_bg_color'    => 'required',
            'button_color'          => 'required',
            'hover_color'           => 'required',
            'title_color'           => 'required',
            'text_color'            => 'required',
            'theme_color'           => 'required',
        ]);

        $colorSetting->bg_color             = $request->bg_color;
        $colorSetting->secondary_bg_color   = $request->secondary_bg_color;
        $colorSetting->button_color         = $request->button_color;
        $colorSetting->hover_color          = $request->hover_color;
        $colorSetting->title_color          = $request->title_color;
        $colorSetting->text_color           = $request->text_color;
        $colorSetting->theme_color          = $request->theme_color;


        $colorSetting->save();

        return back()->withSuccess('Updated Successfully');
    }

}
