<?php

namespace App\Filament\Manage\Resources\Vehicles;

use App\Filament\Manage\Resources\Vehicles\Pages\CreateVehicles;
use App\Filament\Manage\Resources\Vehicles\Pages\EditVehicles;
use App\Filament\Manage\Resources\Vehicles\Pages\ListVehicles;
use App\Filament\Manage\Resources\Vehicles\Pages\ViewVehicles;
use App\Filament\Manage\Resources\Vehicles\Schemas\VehiclesForm;
use App\Filament\Manage\Resources\Vehicles\Schemas\VehiclesInfolist;
use App\Filament\Manage\Resources\Vehicles\Tables\VehiclesTable;
use App\Models\Vehicles;
use BackedEnum;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehiclesResource extends Resource
{
    protected static ?string $model = Vehicles::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'model_name';

    public static function form(Schema $schema): Schema
    {
        return VehiclesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VehiclesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VehiclesTable::configure($table);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('user_id', Filament::auth()->user()->id)
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVehicles::route('/'),
            'create' => CreateVehicles::route('/create'),
            'view' => ViewVehicles::route('/{record}'),
            'edit' => EditVehicles::route('/{record}/edit'),
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
