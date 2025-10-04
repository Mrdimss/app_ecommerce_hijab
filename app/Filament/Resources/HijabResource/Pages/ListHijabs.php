<?php

namespace App\Filament\Resources\HijabResource\Pages;

use App\Filament\Resources\HijabResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHijabs extends ListRecords
{
    protected static string $resource = HijabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
