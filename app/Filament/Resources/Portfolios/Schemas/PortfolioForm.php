<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required(),
                FileUpload::make('image_path')
                    ->image()
                    ->disk('public')
                    ->directory('images')
                    ->required()
                    ->visibility('public')
            ]);
    }
}
