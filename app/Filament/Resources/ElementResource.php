<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Element;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextInputColumn;
use App\Filament\Resources\ElementResource\Pages;

class ElementResource extends Resource
{
    protected static ?string $model = Element::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                Select::make('status')
                    ->options([
                        'video' => 'Video',
                        'image' => 'Image',
                    ])->rules(['required'])->required()->live(),
                FileUpload::make('image_from_disc')
                ->visible(fn (Get $get): bool =>  $get('status')=='image')
                ->image()
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9',
                    '4:3',
                    '1:1',
                ]),
                TextInput::make('image_text')
                ->visible(fn (Get $get): bool =>  $get('status')=='image'),
                FileUpload::make('video_from_disc')
                ->visible(fn (Get $get): bool => $get('status')=="video")
                ->preserveFilenames(),
                TextInput::make('possition')->type('number')->rules(['required']),
                TextInput::make('slide_length')->type('number')->rules(['required']),
                Toggle::make('is_active')->live()
                ->onIcon('heroicon-m-bolt')
                ->offIcon('heroicon-m-user')
            ]);
    }
/* <iframe width="1278" height="719" src="https://www.youtube.com/embed/1VoVo7P6Vcs" title="Casati - Design Műhely" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                SelectColumn::make('status')
                    ->options([
                        'video' => 'Video',
                        'image' => 'Image',
                    ]),
                TextInputColumn::make('possition')->type('number')->rules(['required','unique:elements,possition']),
                ToggleColumn::make('is_active')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListElements::route('/'),
            'create' => Pages\CreateElement::route('/create'),
            'view' => Pages\ViewElement::route('/{record}'),
            'edit' => Pages\EditElement::route('/{record}/edit'),
        ];
    }
}
