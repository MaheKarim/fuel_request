<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\LPGCylinder;
use Illuminate\Http\Request;

class CylinderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return  'Echo';
        return view('admin.gas-cylinder.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cylinders = new LPGCylinder();
        $cylinders->cylinder_name = $request->cylinder_name;
        $cylinders->cylinder_size = $request->cylinder_size;
        $cylinders->cylinder_stock = $request->cylinder_stock;
        $cylinders->cylinder_price = $request->cylinder_price;
        $cylinders->save();

        return redirect()->route('admin.gasCylinderService');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
