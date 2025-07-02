<?php

namespace App\Filament\Resources\SuggestionBoxResource\Pages;

use App\Filament\Resources\SuggestionBoxResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuggestionBoxes extends ListRecords
{
    protected static string $resource = SuggestionBoxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
