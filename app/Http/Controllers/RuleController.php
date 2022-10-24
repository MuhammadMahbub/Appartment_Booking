<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rule = Rule::latest()->get();
        return view('admin.rooms.rule_index', compact('rule'));
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
        ]);

        Rule::create([
            'name'       => $request->name,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now()
        ]);

       return redirect()->route('rule.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(Rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit(Rule $rule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $room = Rule::find($id);
        $room->update([
            'name'       => $request->name,
            'updated_by' => Auth::id(),
            'updated_at' => Carbon::now(),
        ]);

       return redirect()->route('rule.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rule::find($id)->delete();
       return back()->with('error', 'Delete Successfully!');
    }

    public function rule_multi_delete(Request $request)
    {
        foreach($request->ids as $id){
            Rule::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function rule_single_delete(Request $request)
    {
        foreach($request->ids as $id){
            Rule::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function date_wise_search_rule(Request $request)
    {
        $request->validate([
            'from_date' => 'required',
            'to_date'   => 'required',
        ]);

        $from_date  = Carbon::parse($request->from_date);
        $to_date    = Carbon::parse($request->to_date)->addDay();

        $rule  = Rule::whereBetween('created_at', [$from_date, $to_date])->get();
        $count = $rule->count();

        $view  = view('admin.includes.rule_index', compact('rule'))->render();

        return response()->json(['data' => $view, 'count' => $count]);
    }

    public function date_wise_clear_rule(Request $request){
        $rule = Rule::all();
        $count = $rule->count();

        $view = view('admin.includes.rule_index', compact('rule'))->render();
        return response()->json(['data' => $view, 'count' => $count]);
    }

}
