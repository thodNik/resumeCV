<?php

namespace App\Filament\Resources\ResumeDataResource\Pages;

use App\Filament\Resources\ResumeDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResumeData extends EditRecord
{
    protected static string $resource = ResumeDataResource::class;

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
