<?php

namespace App\Filament\Resources\AboutDataResource\Pages;

use App\Filament\Resources\AboutDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutData extends ListRecords
{
    protected static string $resource = AboutDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
