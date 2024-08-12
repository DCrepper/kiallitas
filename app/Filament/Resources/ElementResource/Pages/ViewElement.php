<?php

namespace App\Filament\Resources\ElementResource\Pages;

use App\Filament\Resources\ElementResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewElement extends ViewRecord
{
    protected static string $resource = ElementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
