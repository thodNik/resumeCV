<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationDataResource\Pages;
use App\Filament\Resources\EducationDataResource\RelationManagers;
use App\Models\EducationData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EducationDataResource extends Resource
{
    protected static ?string $model = EducationData::class;
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationLabel = 'Education Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('role')->string()->nullable(),
                Forms\Components\TextInput::make('company')->string()->nullable(),
                Forms\Components\Textarea::make('description')->string()->nullable(),
                Forms\Components\TextInput::make('from')->string()->nullable(),
                Forms\Components\TextInput::make('to')->string()->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('role'),
                Tables\Columns\TextColumn::make('company'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('from'),
                Tables\Columns\TextColumn::make('to'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListEducationData::route('/'),
            'create' => Pages\CreateEducationData::route('/create'),
            'edit' => Pages\EditEducationData::route('/{record}/edit'),
        ];
    }
}
