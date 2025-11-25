<?php

namespace App\Filament\Manage\Resources\VehicleBrands\Pages;

use App\Filament\Manage\Resources\VehicleBrands\VehicleBrandsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVehicleBrands extends ListRecords
{
    protected static string $resource = VehicleBrandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
