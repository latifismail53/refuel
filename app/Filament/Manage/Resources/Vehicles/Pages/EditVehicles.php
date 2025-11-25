<?php

namespace App\Filament\Manage\Resources\Vehicles\Pages;

use App\Filament\Manage\Resources\Vehicles\VehiclesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVehicles extends EditRecord
{
    protected static string $resource = VehiclesResource::class;

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
