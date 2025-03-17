<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvPdfResource\Pages;
use App\Filament\Resources\CvPdfResource\RelationManagers;
use App\Models\CvPdf;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CvPdfResource extends Resource
{
    protected static ?string $model = CvPdf::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('file_path')
                    ->preserveFilenames()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListCvPdfs::route('/'),
            'create' => Pages\CreateCvPdf::route('/create'),
            'edit' => Pages\EditCvPdf::route('/{record}/edit'),
        ];
    }
}
