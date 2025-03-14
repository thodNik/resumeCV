<?php

namespace App\Filament\Resources\ResumeDataResource\Pages;

use App\Filament\Resources\ResumeDataResource;
use Filament\Resources\Pages\CreateRecord;

class CreateResumeData extends CreateRecord
{
    protected static string $resource = ResumeDataResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
