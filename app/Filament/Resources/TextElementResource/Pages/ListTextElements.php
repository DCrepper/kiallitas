<?php

namespace App\Filament\Resources\TextElementResource\Pages;

use App\Filament\Resources\TextElementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextElements extends ListRecords
{
    protected static string $resource = TextElementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
