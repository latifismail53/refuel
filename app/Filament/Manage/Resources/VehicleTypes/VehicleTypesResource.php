<?php

namespace App\Filament\Manage\Resources\VehicleTypes;

use App\Filament\Manage\Resources\VehicleTypes\Pages\CreateVehicleTypes;
use App\Filament\Manage\Resources\VehicleTypes\Pages\EditVehicleTypes;
use App\Filament\Manage\Resources\VehicleTypes\Pages\ListVehicleTypes;
use App\Filament\Manage\Resources\VehicleTypes\Pages\ViewVehicleTypes;
use App\Filament\Manage\Resources\VehicleTypes\Schemas\VehicleTypesForm;
use App\Filament\Manage\Resources\VehicleTypes\Schemas\VehicleTypesInfolist;
use App\Filament\Manage\Resources\VehicleTypes\Tables\VehicleTypesTable;
use App\Models\VehicleTypes;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehicleTypesResource extends Resource
{
    protected static ?string $model = VehicleTypes::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return VehicleTypesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VehicleTypesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VehicleTypesTable::configure($table);
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
            'index' => ListVehicleTypes::route('/'),
            'create' => CreateVehicleTypes::route('/create'),
            'view' => ViewVehicleTypes::route('/{record}'),
            'edit' => EditVehicleTypes::route('/{record}/edit'),
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
