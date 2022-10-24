<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\FoodType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FoodTypeRequest;
use App\Http\Requests\UpdateFoodTypeRequest;

class FoodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodtype = FoodType::latest()->get();
        return view('admin.foodtype.index', compact('foodtype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.foodtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodTypeRequest $request)
    {
        $slug = Str::slug($request->product_name) . "-" . Str::random(9);

        FoodType::create($request->except('_token') + ['slug' => $slug, 'created_at' => Carbon::now()]);

        return redirect()->route('foodtype.index')->withSuccess('Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_food_info = FoodType::find($id);
        return view('admin.foodtype.show', compact('single_food_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single_food_info = FoodType::find($id);
        return view('admin.foodtype.edit', compact('single_food_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodTypeRequest $request, $id)
    {
        $foodType = FoodType::find($id);
        $foodType->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        return redirect()->route('foodtype.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodType  $foodType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FoodType::find($id)->delete();
        return back()->with('error', 'Delete Successfully!');
    }
}
