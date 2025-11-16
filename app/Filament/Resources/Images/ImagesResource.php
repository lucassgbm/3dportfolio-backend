<?php

namespace App\Filament\Resources\Images;

use App\Filament\Resources\Images\Pages\CreateImages;
use App\Filament\Resources\Images\Pages\EditImages;
use App\Filament\Resources\Images\Pages\ListImages;
use App\Filament\Resources\Images\Schemas\ImagesForm;
use App\Filament\Resources\Images\Tables\ImagesTable;
use App\Models\Images;
use BackedEnum;
use Dom\Text;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ImagesResource extends Resource
{
    protected static ?string $model = Images::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ImagesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name'),
                TextColumn::make('image_path'),
            ]);
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
            'index' => ListImages::route('/'),
            'create' => CreateImages::route('/create'),
            'edit' => EditImages::route('/{record}/edit'),
        ];
    }
}
