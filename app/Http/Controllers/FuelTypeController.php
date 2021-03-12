<?php

namespace App\Http\Controllers;

use App\FuelType;
use Illuminate\Http\Request;

class FuelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuels = FuelType::all();
        return view('admin.fuel_type.show', compact('fuels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fuel_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $this->validate($request,[
            'fuel_name' => 'required|string|unique:fuel_types|max:255',
        ]);

        $fuels = new FuelType();
        $fuels->fuel_name = $request->fuel_name;
        $fuels->save();

       // Need Refactor
      // $fuels = FuelType()->create($request->validate());


        session()->flash('success','Fuel Type Created Successfully!');
        return redirect()->route('admin.fueltype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function show(FuelType $fuelType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function edit(FuelType $fuelType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuelType $fuelType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuelType  $fuelType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // testing code
        $fuels = FuelType::where('id', $id)->firstOrFail()->delete();
        session()->flash('error', 'Deleted Successfully!');

        return redirect()->route('admin.fueltype');

    }
}
