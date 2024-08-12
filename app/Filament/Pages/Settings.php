<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $title = 'Beállítások';
    protected static ?string $navigationLabel = 'Beállítások';
    protected static string $view = 'filament.pages.settings';
    protected  ?string $heading = 'Beállítások';
}
