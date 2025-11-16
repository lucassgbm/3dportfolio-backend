<?php

namespace App\Filament\Resources\Images\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ImagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('image_path')
                    ->image()
                    ->required(),
                TextInput::make('portfolio_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
