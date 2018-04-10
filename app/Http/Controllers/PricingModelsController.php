<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PricingModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PricingModelsController extends Controller
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
        $pricingmodels = PricingModel::paginate(15);

        return view('pricing-models.index', compact('pricingmodels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('pricing-models.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', ]);

        PricingModel::create($request->all());

        Session::flash('flash_message', 'PricingModel added!');

        return redirect('pricing-models');
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
        $pricingmodel = PricingModel::findOrFail($id);

        return view('pricing-models.show', compact('pricingmodel'));
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
        $pricingmodel = PricingModel::findOrFail($id);

        return view('pricing-models.edit', compact('pricingmodel'));
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
        $this->validate($request, ['name' => 'required', ]);

        $pricingmodel = PricingModel::findOrFail($id);
        $pricingmodel->update($request->all());

        Session::flash('flash_message', 'PricingModel updated!');

        return redirect('pricing-models');
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
        PricingModel::destroy($id);

        Session::flash('flash_message', 'PricingModel deleted!');

        return redirect('pricing-models');
    }
}
