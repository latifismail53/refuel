<?php

namespace App\Filament\Manage\Resources\VehicleModels;

use App\Filament\Manage\Resources\VehicleModels\Pages\CreateVehicleModels;
use App\Filament\Manage\Resources\VehicleModels\Pages\EditVehicleModels;
use App\Filament\Manage\Resources\VehicleModels\Pages\ListVehicleModels;
use App\Filament\Manage\Resources\VehicleModels\Pages\ViewVehicleModels;
use App\Filament\Manage\Resources\VehicleModels\Schemas\VehicleModelsForm;
use App\Filament\Manage\Resources\VehicleModels\Schemas\VehicleModelsInfolist;
use App\Filament\Manage\Resources\VehicleModels\Tables\VehicleModelsTable;
use App\Models\VehicleModels;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class VehicleModelsResource extends Resource
{
    protected static ?string $model = VehicleModels::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'slug';
    protected static string | UnitEnum | null $navigationGroup = 'Vehicle Master';

    public static function form(Schema $schema): Schema
    {
        return VehicleModelsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VehicleModelsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VehicleModelsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVehicleModels::route('/'),
            'create' => CreateVehicleModels::route('/create'),
            'view' => ViewVehicleModels::route('/{record}'),
            'edit' => EditVehicleModels::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
