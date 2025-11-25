<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FuelProducts extends Model
{
    /** @use HasFactory<\Database\Factories\FuelProductsFactory> */
    use HasFactory;

    public function fuelProvider(): BelongsTo
    {
        return $this->belongsTo(FuelProviders::class);
    }
}
