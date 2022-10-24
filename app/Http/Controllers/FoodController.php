<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Food;
use App\Models\FoodType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\FoodRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateFoodRequest;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::latest()->get();
        return view('admin.food.index', compact('food'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.food.create',[
            'foodtype' => FoodType::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodRequest $request)
    {
        $food = Food::create($request->except('_token') + ['created_at' => Carbon::now()]);

        if ($request->hasFile('image')) {

            $image  = $request->file('image');
            $filename    = uniqid() . '.' . $image->extension('image');
            $location    = public_path('uploads/foods');

            $image->move($location, $filename);

            $food->image = $filename;
        }

        $food->save();

        return redirect()->route('food.index')->withSuccess('Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_food = Food::find($id);
        return view('admin.food.show', compact('single_food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foodtype = FoodType::all();
        $single_food_info = Food::find($id);
        return view('admin.food.edit', compact('single_food_info', 'foodtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodRequest $request, $id)
    {
        $food = Food::find($id);
        $food->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if ($request->hasFile('image')) {

            $image  = $request->file('image');
            $filename    = uniqid() . '.' . $image->extension('image');
            $location    = public_path('uploads/foods');

            $image->move($location, $filename);

            $food->image = $filename;
        }

        $food->save();

        return redirect()->route('food.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Food::find($id)->delete();
        return back()->with('error', 'Delete Successfully!');
    }
}
