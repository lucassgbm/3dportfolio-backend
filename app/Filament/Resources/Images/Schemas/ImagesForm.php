<?php

namespace App\Filament\Resources\Images\Schemas;

use App\Models\Portfolio;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ImagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Título')
                    ->required(),
                FileUpload::make('image_path')
                    ->label('Imagem')
                    ->image()
                    ->disk('public')
                    ->directory('images')
                    ->required()
                    ->visibility('public'),
                Select::make('portfolio_id')
                    ->label('Portfolio')
                    ->options(Portfolio::query()->pluck('title', 'id'))
                    ->searchable()
                    ->placeholder('Selecione o portfolio')
            ]);
    }
}
