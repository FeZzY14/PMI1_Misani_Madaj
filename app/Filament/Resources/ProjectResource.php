<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('type')
                    ->maxLength(255),
                Forms\Components\Textarea::make('abstract'),
                Forms\Components\Textarea::make('body'),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255),
                Forms\Components\Select::make('authors')
                    ->multiple()
                    ->relationship('authors', 'name')
                    ->label('Authors'),
                Forms\Components\DatePicker::make('project_date')
                    ->required(),
                Forms\Components\Checkbox::make('show_homepage')
                    ->label('Will be Shown on Homepage')
                    ->default(false),
                FileUpload::make('image')
                    ->image()
                    ->directory('projects')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->label('Project Image')
                    ->imagePreviewHeight('250')
                    ->openable()
                    ->getUploadedFileNameForStorageUsing(fn($file) => $file->store('projects', 'public')),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Project::orderBy('order', 'asc'))
            ->reorderable('order')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->icon('heroicon-o-beaker')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
