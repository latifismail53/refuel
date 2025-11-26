<?php

namespace App\Filament\Manage\Resources\VehicleBrands\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VehicleBrandsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General')
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('slug')
                            ->required(),
                        TextInput::make('description')
                    ]),
                Section::make('Brand Image')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Upload Image')
                            ->directory('vehicle-brands')
                            ->image()
                    ])
            ]);
    }
}
