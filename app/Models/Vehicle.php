<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function scopeAvailableVehicles($query, $user)
    {
        $availableVehicles = User::with('position')->find($user)->position->available_vehicles;
        return $query->whereIn('category', explode(',', $availableVehicles));
    }
}
