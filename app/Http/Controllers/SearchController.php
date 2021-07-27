<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Custom\SanitizeInput;
use App\Property;

class SearchController extends Controller
{

	public function __construct(){
		$this->sanitize = new SanitizeInput;
	}

    public function searchPropertyOld(Request $request){

	        $answer= $request->search;

	        $property_type=$request->list_type;

	        $offer_type=$request->offer_type;

	        $city=$request->city;

	        $lga=$request->lga;

	        $locality=$request->locality;

	        $bed=$request->bed;

	        $max_price=$request->max_price;



	        if ($property_type=='Any Type'&& $locality=='Any where' && $bed=='Anyone') {

	          $search=DB::select("SELECT * FROM properties WHERE status ='available' AND (list_type LIKE '%$offer_type%' AND city LIKE '%$city%' AND title LIKE '%$answer%' AND price <= '$max_price')" );
	          dd(1);
	        }

	        elseif ($property_type=='Any Type'&& $locality=='Any where') {

	         $search=DB::select("SELECT * FROM properties WHERE status ='available' AND (list_type LIKE '%$offer_type%' AND city LIKE '%$city%' AND title LIKE '%$answer%' AND beds LIKE '%$bed%' AND price <= '$max_price')" );
	         dd(2);
	        }

	        elseif ($property_type=='Any Type'&& $bed=='Anyone') {

	         $search=DB::select("SELECT * FROM properties WHERE status ='available' AND (list_type LIKE '%$offer_type%' AND city LIKE '%$city%' AND title LIKE '%$answer%' AND price <= '$max_price' AND location LIKE '%$locality%')" );
	         dd(3);
	        }

	        elseif ($locality=='Any where'&& $bed=='Anyone') {

	         $search=DB::select("SELECT * FROM properties WHERE status ='available' AND (list_type LIKE '%$offer_type%' AND city LIKE '%$city%' AND title LIKE '%$answer%' AND price <= '$max_price' AND house_type LIKE '%$property_type%')" );
	         dd(4);
	        }

	         elseif ($locality=='Any where') {

	         $search=DB::select("SELECT * FROM properties WHERE status ='available' AND (list_type LIKE '%$offer_type%' AND city LIKE '%$city%' AND title LIKE '%$answer%' AND price <= '$max_price' AND house_type LIKE '%$property_type%' AND beds LIKE '%$bed%')" );
	         dd(5);
	        }

	         elseif ($property_type=='Any Type') {

	         $search=DB::select("SELECT * FROM properties WHERE status ='available' AND (list_type LIKE '%$offer_type%' AND city LIKE '%$city%' AND title LIKE '%$answer%' AND price <= '$max_price' AND location LIKE '%$locality%' AND beds LIKE '%$bed%')" );
	         dd(6);
	        }

	        elseif ($bed=='Anyone') {

	         $search=DB::select("SELECT * FROM properties WHERE status ='available' AND (list_type LIKE '%$offer_type%' AND city LIKE '%$city%' AND title LIKE '%$answer%' AND price <= '$max_price' AND location LIKE '%$locality%' AND house_type LIKE '%$property_type%')" );

	        dd(7);

	        }

	        else{

	           $search=DB::select("SELECT * FROM properties WHERE status ='available' AND (list_type LIKE '%$offer_type%' AND city LIKE '%$city%' AND title LIKE '%$answer%' AND price <= '$max_price' AND location LIKE '%$locality%' AND house_type LIKE '%$property_type%' AND beds LIKE '%$bed%')" );
	           dd(8);
	        }

    }


    public function searchProperty(Request $request){

    	 Session(['prev_page'=>$request->url()]);
    	$keyword=$request->keyword;

    	$list_type=$request->list_type;

        $city=$request->city;

        $locality=$request->locality;

        $max_price=$request->max_price;

        $min_price=$request->min_price;

        $data['properties'] = Property::where('title','LIKE','%'.$keyword.'%')->orWhere('description','LIKE','%'.$keyword.'%')->orWhere('list_type','LIKE','%'.$list_type.'%')->orwhere('city','LIKE','%'.$city.'%')->orwhere('location','LIKE','%'.$locality.'%')->orwhere('price','>=', $min_price)->orwhere('price','<=', $max_price)->paginate(12);

        $data['beds']= DB::select("SELECT DISTINCT beds FROM properties WHERE beds > 0 ORDER BY beds ASC ");
        return view('property.index')->with($data);
    }
}