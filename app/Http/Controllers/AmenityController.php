<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Amenity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenity = Amenity::latest()->get();
        return view('admin.rooms.amenity_index', compact('amenity'));
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
            'icon' => 'required',
        ]);

        Amenity::create([
            'name'       => $request->name,
            'icon'       => $request->icon,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now()
        ]);

       return redirect()->route('amenity.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function show(Amenity $amenity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function edit(Amenity $amenity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required',
        ]);

        $amenity = Amenity::find($id);
        $amenity->update([
            'name'       => $request->name,
            'icon'       => $request->icon,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now()
        ]);

       return redirect()->route('amenity.index')->with('success', 'Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amenity  $amenity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Amenity::find($id)->delete();
        return back()->with('error', 'Deleted Successfully!');
    }

    public function amenity_multi_delete(Request $request)
    {
        foreach($request->ids as $id){
            Amenity::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function amenity_single_delete(Request $request)
    {
        foreach($request->ids as $id){
            Amenity::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function date_wise_search_amenity(Request $request)
    {
        $request->validate([
            'from_date' => 'required',
            'to_date'   => 'required',
        ]);

        $from_date  = Carbon::parse($request->from_date);
        $to_date    = Carbon::parse($request->to_date)->addDay();

        $amenity  = Amenity::whereBetween('created_at', [$from_date, $to_date])->get();
        $count = $amenity->count();

        $view  = view('admin.includes.amenity_index', compact('amenity'))->render();

        return response()->json(['data' => $view, 'count' => $count]);
    }

    public function date_wise_clear_amenity(Request $request){
        $amenity = Amenity::all();
        $count = $amenity->count();

        $view = view('admin.includes.amenity_index', compact('amenity'))->render();
        return response()->json(['data' => $view, 'count' => $count]);
    }

}
