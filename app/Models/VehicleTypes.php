<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleTypes extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleTypesFactory> */
    use HasFactory, SoftDeletes;

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicles::class);
    }
}
