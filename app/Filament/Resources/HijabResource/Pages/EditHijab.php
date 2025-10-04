<?php

namespace App\Filament\Resources\HijabResource\Pages;

use App\Filament\Resources\HijabResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHijab extends EditRecord
{
    protected static string $resource = HijabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
