<?php

namespace App\Filament\Resources\Images\Pages;

use App\Filament\Resources\Images\ImagesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListImages extends ListRecords
{
    protected static string $resource = ImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
