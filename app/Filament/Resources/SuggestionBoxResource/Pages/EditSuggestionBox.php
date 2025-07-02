<?php

namespace App\Filament\Resources\SuggestionBoxResource\Pages;

use App\Filament\Resources\SuggestionBoxResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuggestionBox extends EditRecord
{
    protected static string $resource = SuggestionBoxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
