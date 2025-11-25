<?php

namespace App\Filament\Manage\Resources\Vehicles\Schemas;

use App\Filament\Manage\Resources\VehicleBrands\Schemas\VehicleBrandsForm;
use App\Models\VehicleBrands;
use App\Models\VehicleModels;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VehiclesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('vehicle_type_id')
                    ->relationship('vehicleType', 'name')
                    ->preload()
                    ->searchable()
                    ->required(),
                Select::make('vehicle_brand_id')
                    ->options(VehicleBrands::query()->pluck('name', 'id'))
                    ->reactive()
                    ->searchable()
                    ->required(),
                Select::make('vehicle_model_id')
                    ->options(fn($get) => VehicleModels::query()->where('vehicle_brand_id', $get('vehicle_brand_id'))->pluck('name', 'id'))
                    ->reactive()
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('year')
                    ->required(),
                TextInput::make('tank_capacity')
                    ->required()
                    ->numeric(),
                TextInput::make('efficiency')
                    ->required()
                    ->numeric()
                    // label dibawah field
                    ->helperText('Efficiency (L/100km)')
                    ->default(0),
                TextInput::make('registration_number')
                    ->required(),
            ]);
    }
}
