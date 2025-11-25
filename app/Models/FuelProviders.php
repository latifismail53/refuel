<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FuelProviders extends Model
{
    /** @use HasFactory<\Database\Factories\FuelProvidersFactory> */
    use HasFactory, SoftDeletes;


    public function fuel_products(): HasMany
    {
        return $this->hasMany(FuelProducts::class);
    }
}
