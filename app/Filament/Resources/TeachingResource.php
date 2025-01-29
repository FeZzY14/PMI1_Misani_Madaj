<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeachingResource\Pages;
use App\Filament\Resources\TeachingResource\RelationManagers;
use App\Models\Teaching;
use App\Models\TeamMember;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeachingResource extends Resource
{
    protected static ?string $model = Teaching::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('body')
                    ->required()
                    ->maxLength(500),
                Forms\Components\Select::make('authors')
                    ->multiple()
                    ->relationship('authors', 'name')
                    ->label('Team Member'),
                FileUpload::make('image')
                    ->image()
                    ->directory('teachings')
                    ->visibility('public')
                    ->label('Teaching Image')
                    ->imagePreviewHeight('250')
                    ->openable()
                    ->getUploadedFileNameForStorageUsing(fn($file) => $file->store('teachings', 'public')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Teaching::orderBy('order', 'asc'))
            ->reorderable('order')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->icon('heroicon-o-presentation-chart-line')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListTeachings::route('/'),
            'create' => Pages\CreateTeaching::route('/create'),
            'edit' => Pages\EditTeaching::route('/{record}/edit'),
        ];
    }
}
