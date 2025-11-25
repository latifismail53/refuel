<?php

namespace App\Filament\Manage\Resources\VehicleModels\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VehicleModelsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('vehicle_brand_id')
                    ->relationship('vehicleBrand', 'name')
                    ->preload()
                    ->searchable()
                    ->required(),
                TextInput::make('name')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, $set) {
                        $set('slug', str($state)->slug());
                    })
                    ->required(),
                TextInput::make('slug')
                    ->readOnly()
                    ->unique(ignoreRecord: true)
                    ->required(),
                FileUpload::make('image')
                    ->directory('vehicle-models')
                    ->image(),
                TextInput::make('description'),
            ]);
    }
}
