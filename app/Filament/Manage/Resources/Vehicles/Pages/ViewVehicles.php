<?php

namespace App\Filament\Manage\Resources\Vehicles\Pages;

use App\Filament\Manage\Resources\Vehicles\VehiclesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVehicles extends ViewRecord
{
    protected static string $resource = VehiclesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
