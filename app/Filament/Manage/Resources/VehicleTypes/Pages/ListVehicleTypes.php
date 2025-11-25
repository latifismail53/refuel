<?php

namespace App\Filament\Manage\Resources\VehicleTypes\Pages;

use App\Filament\Manage\Resources\VehicleTypes\VehicleTypesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVehicleTypes extends ListRecords
{
    protected static string $resource = VehicleTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
