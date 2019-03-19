<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Charts\Customers;
use Illuminate\Http\Request;
// use Charts;
use Vendor\ConsoleTVs\Charts\scr\Config\Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $chart = Customers::test();
        return view('home',compact('chart', 'user'));
    }

    // public function makeChart()
    // {
    //     $users = User::where(DB::raw("(date_format(created_at,'%Y'))"),date('Y'))->get();

    //     $chart = Charts::create('pie', 'highcharts')

    //     ->title('HDTuto.com Laravel Pie Chart')

    //     ->labels(['Codeigniter','Laravel','PHP'])

    //     ->values([5,10,20])

    //     ->dimensions(1000,500)

    //     ->responsive(true);

    //     return view('chart',compact('chart'));
    // }
}
