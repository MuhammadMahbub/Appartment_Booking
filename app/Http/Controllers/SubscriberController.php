<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

      /**
     * Construct
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
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
        return view('admin.subscribers.index',[
            'subscribers' => Subscriber::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exist = Subscriber::where('email', $request->email)->first();

        //Form Validation
        $request->validate([
            'email'    => 'required|email',
        ]);

        // Mail::to($request->email)->send(new ClientMail());
        if($exist){
            return response()->json(['success' => '400' , 'message' => 'Email Already Esist']);
        }else{
            Subscriber::create($request->except('_token') + ['created_at' => Carbon::now()]);
            return response()->json(['success' => '200' , 'message' => 'Thanks For Subscribing Us']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();

         // Return back with success message
         return redirect()->route('subscribers.index')->withSuccess('Deleted successfully');
    }
}
