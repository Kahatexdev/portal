<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Filament\Resources\AnnouncementResource\RelationManagers;
use App\Models\Announcement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->disk('public')            // ← disk 'public' yang sudah benar di filesystems.php
                    ->directory('announcement')      // ← simpan di storage/app/public/uploads
                    ->visibility('public')      // ← pastikan visibilitasnya publik
                    ->preserveFilenames()        // ← untuk menjaga nama file tetap sama
                    ->enableDownload()          // ← memungkinkan file diunduh
                    ->enableOpen()              // ← memungkinkan file dibuka
                    ->required()
                    ->maxSize(2048)             // ← ukuran maksimum file dalam KB (1 MB)
                    ->acceptedFileTypes(['image/*']), // ← hanya menerima file gambar
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public') // ← pastikan disk yang digunakan adalah 'public'
                    ->size(50) // ← ukuran thumbnail
                    ->circular() // ← membuat gambar berbentuk lingkaran
                    ->toggleable(isToggledHiddenByDefault: true), // ← toggleable untuk kolom gambar

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
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }
}
