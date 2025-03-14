<?php

namespace App\Filament\Resources\EducationDataResource\Pages;

use App\Filament\Resources\EducationDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEducationData extends ListRecords
{
    protected static string $resource = EducationDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
