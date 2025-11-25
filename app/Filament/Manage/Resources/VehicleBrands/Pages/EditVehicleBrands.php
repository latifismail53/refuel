<?php

namespace App\Filament\Manage\Resources\VehicleBrands\Pages;

use App\Filament\Manage\Resources\VehicleBrands\VehicleBrandsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVehicleBrands extends EditRecord
{
    protected static string $resource = VehicleBrandsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
