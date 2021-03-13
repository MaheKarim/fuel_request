<?php

namespace App\Http\Controllers;
use App\FuelDelivery;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }
    public function show_request()
    {
        $delivery = FuelDelivery::all();
        return view('admin.fuel-delivery.index', compact('delivery'));
    }

    public function delivery_edit($id)
    {
        $delivery = FuelDelivery::find($id);

        return view('admin.fuel-delivery.edit', compact('delivery'));
    }

    public function delivery_update(Request $request,$id)
    {
        $delivery = FuelDelivery::find($id)->update([
            'isApproved' => $request->isApproved,
        ]);
        session()->flash('success','Order Requested Successfully Updated!');
        return redirect()->route('admin.fueldelivery');
    }

    public function delivery_destroy($id)
    {
        $delivery = FuelDelivery::where('id', $id)->firstOrFail()->delete();
        session()->flash('error', 'Deleted Successfully!');

        return redirect()->route('admin.fueldelivery');
    }

    public function details($id)
    {
        $delivery = FuelDelivery::find($id);

        return view('admin.fuel-delivery.full_order', compact('delivery'));
    }
}
