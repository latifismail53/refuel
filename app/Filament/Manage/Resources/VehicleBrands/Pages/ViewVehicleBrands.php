<?php

namespace App\Filament\Manage\Resources\VehicleBrands\Pages;

use App\Filament\Manage\Resources\VehicleBrands\VehicleBrandsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVehicleBrands extends ViewRecord
{
    protected static string $resource = VehicleBrandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
