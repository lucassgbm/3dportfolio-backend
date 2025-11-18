<?php

namespace App\Filament\Resources\Portfolios\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                FileUpload::make('image_path')
                    ->label('Imagem')
                    ->image()
                    ->disk('public')
                    ->directory('images')
                    ->required()
                    ->visibility('public'),
            ]);
    }

    public function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([

        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')
                    ->label('Título'),
                ImageColumn::make('image_path')
                    ->disk('public')
                    ->label('Imagem')
                    ->imageHeight(50)
                    ->circular()
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->filters([])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ])
        ]);
    }
}
