<?php

namespace App\Models;

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicles extends Model
{
    /** @use HasFactory<\Database\Factories\VehiclesFactory> */
    use HasFactory, SoftDeletes;


    protected static function booted(): void
    {
        static::creating(function ($model) {
            $model->registration_number = strtoupper($model->registration_number);
            $model->user_id = Filament::auth()->user()->id;
        });
    }

    // relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function vehicleType(): BelongsTo
    {
        return $this->belongsTo(VehicleTypes::class);
    }

    public function vehicleModel(): BelongsTo
    {
        return $this->belongsTo(VehicleModels::class);
    }

    public function vehicleBrand(): BelongsTo
    {
        return $this->belongsTo(VehicleBrands::class);
    }

    public function getModelNameAttribute(): string
    {
        return $this->vehicleModel?->name;
    }
}
