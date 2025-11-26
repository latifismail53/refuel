<?php

namespace App\Filament\Manage\Resources\VehicleBrands;

use App\Filament\Manage\Resources\VehicleBrands\Pages\CreateVehicleBrands;
use App\Filament\Manage\Resources\VehicleBrands\Pages\EditVehicleBrands;
use App\Filament\Manage\Resources\VehicleBrands\Pages\ListVehicleBrands;
use App\Filament\Manage\Resources\VehicleBrands\Pages\ViewVehicleBrands;
use App\Filament\Manage\Resources\VehicleBrands\Schemas\VehicleBrandsForm;
use App\Filament\Manage\Resources\VehicleBrands\Schemas\VehicleBrandsInfolist;
use App\Filament\Manage\Resources\VehicleBrands\Tables\VehicleBrandsTable;
use App\Models\VehicleBrands;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class VehicleBrandsResource extends Resource
{
    protected static ?string $model = VehicleBrands::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'slug';
    protected static string | UnitEnum | null $navigationGroup = 'Vehicle Master';

    public static function form(Schema $schema): Schema
    {
        return VehicleBrandsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VehicleBrandsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VehicleBrandsTable::configure($table);
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
            'index' => ListVehicleBrands::route('/'),
            'create' => CreateVehicleBrands::route('/create'),
            'view' => ViewVehicleBrands::route('/{record}'),
            'edit' => EditVehicleBrands::route('/{record}/edit'),
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
