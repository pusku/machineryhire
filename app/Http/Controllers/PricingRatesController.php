<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PricingRate;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\PricingModel;

class PricingRatesController extends Controller
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
        $pricingrates = PricingRate::paginate(15);

        return view('pricing-rates.index', compact('pricingrates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $pricingModels=PricingModel::All()->lists('name','id');

        return view('pricing-rates.create',compact('pricingModels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'pricing_models_id' => 'required', ]);

        PricingRate::create($request->all());

        Session::flash('flash_message', 'PricingRate added!');

        return redirect('pricing-rates');
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
        $pricingrate = PricingRate::findOrFail($id);

        return view('pricing-rates.show', compact('pricingrate'));
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
        $pricingrate = PricingRate::findOrFail($id);
        $pricingModels=PricingModel::All()->lists('name','id');

        return view('pricing-rates.edit', compact('pricingrate','pricingModels'));
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
        $this->validate($request, ['name' => 'required', 'pricing_models_id' => 'required', ]);

        $pricingrate = PricingRate::findOrFail($id);
        $pricingrate->update($request->all());

        Session::flash('flash_message', 'PricingRate updated!');

        return redirect('pricing-rates');
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
        PricingRate::destroy($id);

        Session::flash('flash_message', 'PricingRate deleted!');

        return redirect('pricing-rates');
    }
}
