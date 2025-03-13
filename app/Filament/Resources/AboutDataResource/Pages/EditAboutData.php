<?php

namespace App\Filament\Resources\AboutDataResource\Pages;

use App\Filament\Resources\AboutDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutData extends EditRecord
{
    protected static string $resource = AboutDataResource::class;

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
