<?php

namespace App\Filament\Resources\EducationDataResource\Pages;

use App\Filament\Resources\EducationDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEducationData extends EditRecord
{
    protected static string $resource = EducationDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
