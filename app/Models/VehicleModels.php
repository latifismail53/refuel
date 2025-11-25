<?php

namespace App\Models;

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleModels extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleModelsFactory> */
    use HasFactory, SoftDeletes;

    public function vehicleBrand(): BelongsTo
    {
        return $this->belongsTo(VehicleBrands::class);
    }
}
