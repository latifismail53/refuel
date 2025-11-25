<?php

namespace App\Filament\Manage\Resources\VehicleTypes\Pages;

use App\Filament\Manage\Resources\VehicleTypes\VehicleTypesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVehicleTypes extends EditRecord
{
    protected static string $resource = VehicleTypesResource::class;

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
