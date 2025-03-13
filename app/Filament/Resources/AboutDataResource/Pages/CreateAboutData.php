<?php

namespace App\Filament\Resources\AboutDataResource\Pages;

use App\Filament\Resources\AboutDataResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutData extends CreateRecord
{
    protected static string $resource = AboutDataResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
