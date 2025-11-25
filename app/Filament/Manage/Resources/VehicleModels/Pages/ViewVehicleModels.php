<?php

namespace App\Filament\Manage\Resources\VehicleModels\Pages;

use App\Filament\Manage\Resources\VehicleModels\VehicleModelsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVehicleModels extends ViewRecord
{
    protected static string $resource = VehicleModelsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
