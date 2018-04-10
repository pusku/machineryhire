<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;

use App\Category;
use App\PricingModel;
use App\PricingRate;
use App\Listing;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
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
     * @return Response
     */
    public function index(Request $request)
    {
        $VendorsListings= Listing::all();
        // $VendorsListings->where('id','>',0);
        // // dd($request->category);
        // if($request->category){
        //     $VendorsListings->where('category_id',$request['category']);
        // }
        // if($request->location){
        //     $VendorsListings->where('location',$request['location']);
        // }
        // if($request->machinery){
        //     $VendorsListings->where('listing_name',$request['machinery']);
        // }

        //  $VendorsListings->get();
         // dd($VendorsListings);
        $categories= Category::all();
        // dd($request);
        return view('browse',compact('VendorsListings','categories'));

    }
     public function upload(Request $request)
    {
        
        // dd($request->file('image')->getRealPath());
       
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $destinationPath= storage_path('app/images/uploads/');
            $filename=str_random(10).date("Ymd").'.'.$request->file('image')->getClientOriginalExtension();
         $request->file('image')->move($destinationPath,$filename);

        return 'There is an image file';
    }else{
        return 'No file';
    }
    }
    public function uploadFile()
    {
        return view('imageUpload');
    }
}