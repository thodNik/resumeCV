<?php

namespace App\Filament\Resources\EducationDataResource\Pages;

use App\Filament\Resources\EducationDataResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEducationData extends CreateRecord
{
    protected static string $resource = EducationDataResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
