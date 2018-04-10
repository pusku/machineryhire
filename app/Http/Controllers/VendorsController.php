<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Http\Requests;
use App\Category;
use App\PricingModel;
use App\PricingRate;
use App\Listing;



class VendorsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
	public function index()
	{
		return view('UsersHome');
	}
	public function create()
	{
		$categories= Category::all()->lists('name','id');
		$pricingModels= PricingModel::all();
		$pricingRates= PricingRate::all()->lists('name','id');

		return view('vendors.createListing',compact('categories','pricingModels','pricingRates')) ;
	}
	// public function store(Request $request)
	// {	

	// 	$this->validate($request, [
 //            'item_name'=>'required',
 //            'hiring_cost'=>'required',
 //            'category_id' => 'required',
 //            'pricing_rate_id' => 'required', 
 //            'available_quantity' => 'required',
 //            'item_location'=>'required', 
 //            'available_quantity'=>'required',
 //            'item_contact'=>'required',
 //           ]);

	// 	$listing=$request->all();

	// 	if($request->hasFile('item_picture') && $request->file('item_picture')->isValid()){
	// 		// dd("found");
 //            $destinationPath= 'images/uploads/';
 //            $filename=str_random(10).date("Ymd").'.'.$request->file('item_picture')->getClientOriginalExtension();
 //         	$request->file('item_picture')->move($destinationPath,$filename);

 //         	$listing['item_picture']= $destinationPath.$filename;

        
 //    	}
	// 	$listing['supplier_id']= Auth::user()->id;
	// 	// dd($listing);
	// 	listing::create($listing);

 //        Session::flash('flash_message', 'Listing added!');

 //        return redirect('vendor');
	// }

public function listings()
{
	$VendorsListings= Listing::where('supplier_id',Auth::user()->id)->get();

	return view('vendors.Postedlistings',compact('VendorsListings'));
}
}
