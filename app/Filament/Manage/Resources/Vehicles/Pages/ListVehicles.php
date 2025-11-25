<?php

namespace App\Filament\Manage\Resources\Vehicles\Pages;

use App\Filament\Manage\Resources\Vehicles\VehiclesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVehicles extends ListRecords
{
    protected static string $resource = VehiclesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
