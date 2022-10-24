<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $testimonial = Testimonial::create([
            'name'       => $request->name,
            'designation'       => $request->designation,
            'description'       => $request->description,
            'image' => '01.png',
            'created_at' => Carbon::now()
        ]);

        if($request->hasFile('image'))
        {
           $image     = $request->file('image');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = public_path('uploads/testimonials');
           $image->move( $location, $filename);
           $testimonial->image = $filename;
        }

        $testimonial->save();

       return redirect()->route('testimonial.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        session()->put(['id' => $testimonial->id]);
        $request->validate([
            'name_edit' => 'required',
            'designation_edit' => 'required',
            'description_edit' => 'required',
            'image_edit' => 'image',
        ]);

        $testimonial->update([
            'name'       => $request->name_edit,
            'designation'       => $request->designation_edit,
            'description'       => $request->description_edit,
            'updated_at' => Carbon::now()
        ]);

        if($request->hasFile('image_edit'))
        {
           $image     = $request->file('image_edit');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = public_path('uploads/testimonials');
           $image->move( $location, $filename);
           $testimonial->image = $filename;
        }

        $testimonial->save();

        session()->forget('id');

       return redirect()->route('testimonial.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('error' , 'Deleted Successfully');
    }

    public function testimonial_multi_delete(Request $request)
    {
        foreach($request->ids as $id){

            Testimonial::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function testimonial_single_delete(Request $request)
    {
        foreach($request->ids as $id){

            Testimonial::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function date_wise_search_testimonial(Request $request)
    {

        $from_date  = Carbon::parse($request->from_date);
        $to_date    = Carbon::parse($request->to_date)->addDay();

        $testimonials  = Testimonial::whereBetween('created_at', [$from_date, $to_date])->get();
        $count = $testimonials->count();

        $view  = view('admin.includes.testimonial_index', compact('testimonials'))->render();

        return response()->json(['data' => $view, 'count' => $count]);

    }

    public function date_wise_clear_testimonial(Request $request){
        $testimonials = Testimonial::all();
        $count = $testimonials->count();

        $view = view('admin.includes.testimonial_index', compact('testimonials'))->render();
        return response()->json(['data' => $view, 'count' => $count]);
    }

    // public function mass_export(Request $request)
    // {
    //     $explode = explode(',', $request->id);
    //     $ids = [];

    //     $header = [];
    //     $header [] = 'id';
    //     $header [] = 'name';
    //     $header [] = 'designation';
    //     $header [] = 'description';
    //     $header [] = 'created_by';
    //     $header [] = 'created_at';
    //     $header [] = 'updated_at';
    //     foreach ($explode as $id) {
    //         array_push($ids, $id);
    //     }
    //     return Excel::download(new TestimonialExport($ids,$header), 'testimonials.xlsx');
    // }


}
