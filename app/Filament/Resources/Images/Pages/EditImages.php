<?php

namespace App\Filament\Resources\Images\Pages;

use App\Filament\Resources\Images\ImagesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditImages extends EditRecord
{
    protected static string $resource = ImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
