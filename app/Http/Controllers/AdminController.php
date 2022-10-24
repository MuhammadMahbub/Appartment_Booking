<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\User;
use Carbon\Carbon;
use Shetabit\Visitor\Models\Visit;
use DB;

class AdminController extends Controller
{

    public function home(){
        return 'i am here';
    }
    public function index(){

        // $total    = Visit::whereIn('browser', ['IE', 'Firefox', 'Chrome', 'Safari', 'Opera'])->whereDate('created_at', '>', Carbon::now()->subDays(28))->get();
        // $chrome   = $total->where('browser', 'Chrome')->count();
        // $firefox  = $total->where('browser', 'Firefox')->count();
        // $internet = $total->where('browser', 'IE')->count();
        // $safari   = $total->where('browser', 'Safari')->count();
        // $opera    = $total->where('browser', 'Opera')->count();

        // $total   = $total->count();
        // $browser = [];

        // $browser['chrome']   = round(($chrome /  $total) * 100);
        // $browser['firefox']  = round(($firefox /  $total) * 100);
        // $browser['internet'] = round(($internet /  $total) * 100);
        // $browser['safari']   = round(($safari /  $total) * 100);
        // $browser['opera']    = round(($opera /  $total) * 100);

        // $today_page_views = Visit::whereDate('created_at', '=', Carbon::today())->count();

        // $unique_users = User::count();


        // $top_pages = Visit::select('url')
        //     ->selectRaw('COUNT(*) AS count')
        //     ->groupBy('url')
        //     ->orderByDesc('count')
        //     ->limit(10)
        //     ->get();
        //     $subs = Subscriber::select(array(DB::raw('DATE(created_at) AS date')), DB::raw('COUNT(code) AS count'))->groupBy('date')->get();

        //     $total = [];
        //     $date  = [];

        //     foreach($subs as $w){

        //         $total[] = Subscriber::whereDate('created_at', Carbon::parse($w->date))->get()->count();
        //         $date[] = Carbon::parse($w->date)->format('d M');

        //     }

        // return view('admin.index',compact('browser', 'today_page_views', 'unique_users', 'top_pages', 'total', 'date','subs'));
        
        return view('admin.index');

    // End    
    }

    // User List
    public function userList(){

        $users = User::orderBy('name', 'asc')->get();

        return view('admin.users.index', compact('users'));
    }

    // User Create
    public function userCreate(){

        return view('admin.users.create');
    }


    
     // User Delete
    public function userDestroy($id){

        $user = User::find($id);

        $user->delete();

        return back()->withSuccess('User deleted');
    }
    
}
