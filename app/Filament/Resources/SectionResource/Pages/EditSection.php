<?php

namespace App\Filament\Resources\SectionResource\Pages;

use Filament\Actions;
use App\Models\Section; // Corrected capitalization of "Section"
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\SectionResource;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Section $record) { 
                    if ($record->thumbnail) { 
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            )
        ];
    }
}
