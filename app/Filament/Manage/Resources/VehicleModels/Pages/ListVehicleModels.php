<?php

namespace App\Filament\Manage\Resources\VehicleModels\Pages;

use App\Filament\Manage\Resources\VehicleModels\VehicleModelsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVehicleModels extends ListRecords
{
    protected static string $resource = VehicleModelsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
