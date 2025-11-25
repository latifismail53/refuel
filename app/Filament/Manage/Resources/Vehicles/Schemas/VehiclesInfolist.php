<?php

namespace App\Filament\Manage\Resources\Vehicles\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VehiclesInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('vehicle_type_id')
                    ->numeric(),
                TextEntry::make('vehicle_brand_id')
                    ->numeric(),
                TextEntry::make('vehicle_model_id')
                    ->numeric(),
                TextEntry::make('year'),
                TextEntry::make('tank_capacity')
                    ->numeric(),
                TextEntry::make('efficiency')
                    ->numeric(),
                TextEntry::make('registration_number'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
