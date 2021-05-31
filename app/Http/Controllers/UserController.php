<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
use App\Property;
use App\State;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class UserController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function dashboard()
    {

        // $data['list'] = Interest::where('user_id', Auth::user()->id)->get();
        // dd($data['list']->property);
        return view('user.dashboard');
    }
    public function myInterests()
    {

        $data['list'] = Interest::where('user_id', Auth::user()->id)->get();
        // dd($data['list']->property);
        return view('user.wishlist')->with($data);
    }


    public function removeFromWishList(Request $request)
    {
        Interest::where(['id' => $request->id, 'user_id' => Auth::user()->id])->delete();
        return 'success';
    }

    public function addProperty()
    {
        $data['states'] = State::all();
        return view('user.add-properties')->with($data);
    }
    public function myPro()
    {
        // $prop = Property::where('user_id',Auth::user()->id)->get();
        $data['states'] = State::all();
        return view('user.my-property');
    }
    public function showPro($id)
    {
        $pro =  Property::with('otherPhotos')->find($id);
        return view('user.view-property', ['property' => $pro]);
    }

    public function purchased()
    {
        return view('user.purchased');
    }
}