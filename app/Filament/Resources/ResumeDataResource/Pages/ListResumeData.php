<?php

namespace App\Filament\Resources\ResumeDataResource\Pages;

use App\Filament\Resources\ResumeDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResumeData extends ListRecords
{
    protected static string $resource = ResumeDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
