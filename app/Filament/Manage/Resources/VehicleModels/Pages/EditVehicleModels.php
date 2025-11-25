<?php

namespace App\Filament\Manage\Resources\VehicleModels\Pages;

use App\Filament\Manage\Resources\VehicleModels\VehicleModelsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVehicleModels extends EditRecord
{
    protected static string $resource = VehicleModelsResource::class;

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
