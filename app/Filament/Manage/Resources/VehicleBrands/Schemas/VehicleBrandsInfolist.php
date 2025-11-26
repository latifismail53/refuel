<?php

namespace App\Filament\Manage\Resources\VehicleBrands\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VehicleBrandsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Brand information')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextEntry::make('name'),
                                TextEntry::make('description'),
                                TextEntry::make('deleted_at')
                                    ->dateTime(),
                                TextEntry::make('created_at')
                                    ->dateTime(),
                                TextEntry::make('updated_at')
                                    ->dateTime(),
                            ]),
                        ImageEntry::make('image')
                            ->label('Brand Image')
                            ->columnSpan(1),
                    ])
            ]);
    }
}
