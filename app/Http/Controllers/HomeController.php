<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data['properties'] = Property::orderBy('id', 'Desc')->limit(15)->get();
        $data['ptypes']= DB::select("SELECT DISTINCT house_type FROM properties WHERE house_type IS NOT NULL ");
         $data['beds']= DB::select("SELECT DISTINCT beds FROM properties WHERE beds > 0 ORDER BY beds ASC ");
        

        // dd($data['properties']);
        return view('welcome')->with($data);
    }
}
