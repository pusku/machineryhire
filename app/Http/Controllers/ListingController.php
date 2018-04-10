<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Listing;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Category;
use App\PricingModel;
use App\PricingRate;



class ListingController extends Controller
{
     public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $listing = Listing::paginate(15);

        return view('listing.index', compact('listing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $categories= Category::all()->lists('name','id');
        $pricingModels= PricingModel::all();
        $pricingRates= PricingRate::all()->lists('name','id');

        return view('listing.new',compact('categories','pricingModels','pricingRates')) ;
        // return view('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'item_name'=>'required',
            'hiring_cost'=>'required',
            'category_id' => 'required',
            'pricing_rate_id' => 'required', 
            'available_quantity' => 'required',
            'item_location'=>'required', 
            'available_quantity'=>'required',
            'item_contact'=>'required',
           ]);

        $listing=$request->all();

        if($request->hasFile('item_picture') && $request->file('item_picture')->isValid()){
            // dd("found");
            $destinationPath= 'images/uploads/';
            $filename=str_random(10).date("Ymd").'.'.$request->file('item_picture')->getClientOriginalExtension();
            $request->file('item_picture')->move($destinationPath,$filename);

            $listing['item_picture']= $destinationPath.$filename;

        
        }
        if(!Auth::user()->admin){ $listing['supplier_id']= Auth::user()->id;}
        // dd($listing);
        listing::create($listing);

        Session::flash('flash_message', 'Listing added!');
     if(Auth::user()->admin){
        return redirect('listing');
     }else{
            return redirect('vendor');
        }
     
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);

        return view('listing.show', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $listing = Listing::findOrFail($id);

        return view('listing.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'hiring_cost'=>'request',
            'category_id' => 'required',
            'pricing_rate_id' => 'required', 
            'available_quantity' => 'required',
            'item_location'=>'required', 
            'available_quantity'=>'required',
            'item_contact'=>'required',
            'supplier_id'=>'required']);

        $listing = Listing::findOrFail($id);
        $listing->update($request->all());

        Session::flash('flash_message', 'Listing updated!');

        return redirect('listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Listing::destroy($id);

        Session::flash('flash_message', 'Listing deleted!');

        return redirect('listing');
    }
}
