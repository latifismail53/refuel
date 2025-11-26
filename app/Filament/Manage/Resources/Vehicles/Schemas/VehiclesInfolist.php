<?php

namespace App\Filament\Manage\Resources\Vehicles\Schemas;

use Filament\Infolists\Components\KeyValueEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VehiclesInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Vehicle Profile')
                    ->columns(2)
                    ->compact()
                    ->columnSpanFull()
                    ->description('Identify and manage the main details of your registered vehicle.')
                    ->schema([
                        TextEntry::make('user.name')
                            ->label('Owner')
                            ->numeric(),
                        TextEntry::make('vehicleType.name')
                            ->label('Type'),
                        TextEntry::make('vehicleBrand.name')
                            ->label('Brand'),
                        TextEntry::make('vehicleModel.name')
                            ->label('Model'),
                    ]),

                Section::make('Vehicle Specifications')
                    ->columns(2)
                    ->compact()
                    ->columnSpanFull()
                    ->description('Comprehensive specifications and registration data of this vehicle.')
                    ->schema([
                        TextEntry::make('registration_number'),
                        TextEntry::make('year'),
                        TextEntry::make('tank_capacity')
                            ->numeric(),
                        TextEntry::make('efficiency')
                            ->numeric(),
                        TextEntry::make('created_at')
                            ->dateTime(),
                        TextEntry::make('updated_at')
                            ->dateTime(),
                    ]),




            ]);
    }
}
