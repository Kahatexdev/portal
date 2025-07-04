<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortalResource\Pages;
use App\Filament\Resources\PortalResource\RelationManagers;
use App\Models\Portal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortalResource extends Resource
{
    protected static ?string $model = Portal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('category')
                    ->options([
                        'Apps' => 'Apps',

                    ])
                    ->default('general')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->disk('public')            // ← disk 'public' yang sudah benar di filesystems.php
                    ->directory('portal')      // ← simpan di storage/app/public/uploads
                    ->visibility('public')      // ← pastikan visibilitasnya publik
                    ->preserveFilenames()        // ← untuk menjaga nama file tetap sama
                    ->enableDownload()          // ← memungkinkan file diunduh
                    ->enableOpen()              // ← memungkinkan file dibuka
                    ->required()
                    ->maxSize(20480)             // ← ukuran maksimum file dalam KB (1 MB)
                    ->acceptedFileTypes(['image/*']), // ← hanya menerima file gambar
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),

                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
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
                //
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
            'index' => Pages\ListPortals::route('/'),
            'create' => Pages\CreatePortal::route('/create'),
            'edit' => Pages\EditPortal::route('/{record}/edit'),
        ];
    }
}
