<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TextElement;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TextElementResource\Pages;
use App\Filament\Resources\TextElementResource\RelationManagers;

class TextElementResource extends Resource
{
    protected static ?string $model = TextElement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('text')->required(),
                TextInput::make('possition')->required(),
                Toggle::make('is_active')->live()
                ->onIcon('heroicon-m-bolt')
                ->offIcon('heroicon-m-user')
                ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('text'),
                TextInputColumn::make('possition')->type('number'),
                ToggleColumn::make('is_active')
                    ->label('Active')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTextElements::route('/'),
            'create' => Pages\CreateTextElement::route('/create'),
            'edit' => Pages\EditTextElement::route('/{record}/edit'),
        ];
    }
}
