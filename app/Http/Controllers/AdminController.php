<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Property;
use Auth;
use App\PropertyPhoto;
use App\User;
use App\Interest;
use DB;
class AdminController extends Controller
{
    public function index(){
        $data['users'] = User::orderBy('id', 'Desc')->limit(10)->get();
        $data['properties'] = Property::orderBy('id', 'Desc')->where('status', 'available')->limit(10)->get();
        $data['property_count'] = Property::all()->count();
        $data['available_properties_count'] = Property::where('status', 'available')->count();
        $data['user_count'] = User::all()->count();
        $data['interest_count'] = Interest::all()->count();
        $data['properties_with_interest'] = DB::select("SELECT DISTINCT property_id FROM interests");
        $data['users_with_interest'] = DB::select("SELECT DISTINCT user_id FROM interests");
    	return view('admin.index')->with($data);
    }

    public function addProperty(){
    	$data['states'] = State::all();
    	return view('admin.add-property')->with($data);
    }

     public function editProperty($slug){
    	$data['property'] = Property::where(['slug'=>$slug, 'user_id'=>Auth::user()->id])->first();
        $data['page_title'] = 'Edit Property';
        $data['states'] = State::all();
        if ($data['property']->property_type == 'building') {
           return view('property.edit')->with($data);
        }
        if ($data['property']->property_type == 'land') {
           return view('property.edit-land')->with($data);
        }

    	// dd($property);
    }

    public function properties(){
    	$data['properties'] = Property::where('status', 'available')->orderBy('id', 'Desc')->paginate(12);
    	$data['page_title'] = 'Properties';
    	return view('admin.properties')->with($data);
    }

    public function propertiesTable(){
        $data['properties'] = Property::where('status', 'available')->orderBy('id', 'Desc')->paginate(20);
        $data['page_title'] = 'Properties';
        return view('admin.properties-table')->with($data);
    }

    public function propertyDetail($slug){
        $data['property'] = Property::where('slug', $slug)->first();
        $data['page_title'] = "property Detail";
         return view('admin.property-detail')->with($data);
    }

     public function deleteProperty(Request $request){
        $pp = Property::where(['id'=>$request->id])->first();
        $pp->status = 'deleted';
        $pp->save();
        return 'success';
    }


    public function deleteSingleProperty(Request $request){
        $pp = Property::where(['slug'=>$request->slug])->first();
        $pp->status = 'deleted';
        $pp->save();
        return redirect(route('admin-properties'))->with('success', 'deleted');
    }


    public function users(){
         $data['users'] = User::where('status', 'active')->orderBy('id', 'Desc')->paginate(20);
         return view('admin.users')->with($data);
    }

     public function userDetail($id){
         $data['user'] = User::where('id', $id)->first();
         return view('admin.user-detail')->with($data);
    }

    public function deleteUser(Request $request){
        $user = User::where('id', $request->id)->first();
        $user->status = 'deleted';
        $user->save();
        return 'success';
    }

    public function updateUser(Request $request){
        // dd($request);
        $user = User::where('id', $request->user_id)->first();
        // dd($user);
        $user->phone = $request->phone;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->save();
        Session(['alert'=>'success', 'msg'=>'updated']);
        return redirect()->back();

    }

    
}