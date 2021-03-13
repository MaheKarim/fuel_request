<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuelDelivery extends Model
{
    protected $guarded = [' '];


    // Fuel Type
    public function Fuel()
    {
        return $this->belongsTo('App\FuelType', 'fuel_name_id','id');
    }
    // Refuelling For
    public function RefuellingName()
    {
        return $this->belongsTo(RefuelingFor::class, 'refueling_for_id', 'id');
    }
    // User Name
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
