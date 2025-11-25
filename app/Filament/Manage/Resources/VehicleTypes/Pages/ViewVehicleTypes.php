<?php

namespace App\Filament\Manage\Resources\VehicleTypes\Pages;

use App\Filament\Manage\Resources\VehicleTypes\VehicleTypesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVehicleTypes extends ViewRecord
{
    protected static string $resource = VehicleTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
