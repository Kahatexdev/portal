<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuggestionBoxResource\Pages;
use App\Filament\Resources\SuggestionBoxResource\RelationManagers;
use App\Models\SuggestionBox;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuggestionBoxResource extends Resource
{
    protected static ?string $model = SuggestionBox::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('bagian')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('message')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('reply')
                    ->columnSpanFull()
                    ->default(null)
                    ->helperText('Reply to the suggestion or message'),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'replied' => 'Replied',
                        'resolved' => 'Resolved',
                    ])
                    ->default('pending')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('replied_at')
                    ->default(null)
                    ->helperText('Date and time when the suggestion was replied to')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bagian')
                    ->searchable(),
                Tables\Columns\TextColumn::make('message'),
                Tables\Columns\TextColumn::make('reply')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('status')
                ->formatStateUsing(fn($state) => match ($state) {
                    'pending' => 'Pending',
                    'replied' => 'Replied',
                    'resolved' => 'Resolved',
                    default => 'Unknown',
                })
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('replied_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
            Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'replied' => 'Replied',
                        'resolved' => 'Resolved',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSuggestionBoxes::route('/'),
            // 'create' => Pages\CreateSuggestionBox::route('/create'),
            // 'edit' => Pages\EditSuggestionBox::route('/{record}/edit'),
        ];
    }
}
