<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Models\TeamMember;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('position')
                    ->maxLength(255),
                Forms\Components\Textarea::make('about')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedIn')
                    ->maxLength(255)
                    ->label('Link to LinkedIn profile'),
                Forms\Components\TextInput::make('orcid')
                    ->maxLength(255)
                    ->label('Link to Orcid profile'),
                Forms\Components\TextInput::make('researchgate')
                    ->maxLength(255)
                    ->label('Link to Research Gate profile'),
                Forms\Components\TextInput::make('phone_number')
                    ->maxLength(255),
                Forms\Components\Select::make('publications')
                    ->multiple()
                    ->relationship('publications', 'title')
                    ->label('Publications'),
                Forms\Components\Select::make('projects')
                    ->multiple()
                    ->relationship('projects', 'title')
                    ->label('Projects'),
                Forms\Components\Select::make('teachings')
                    ->multiple()
                    ->relationship('teachings', 'title')
                    ->label('Teaching Subjects'),
                Forms\Components\Checkbox::make('show_homepage')
                    ->label('Will be Shown on Homepage')
                    ->default(false),
                FileUpload::make('image')
                    ->image()
                    ->directory('team_members')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->label('Team Member Image')
                    ->imagePreviewHeight('250')
                    ->openable()
                    ->getUploadedFileNameForStorageUsing(fn($file) => $file->store('team_members', 'public')),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(TeamMember::orderBy('order', 'asc'))
            ->reorderable('order')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->icon('heroicon-o-user')
                    ->label('Full Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->icon('heroicon-o-briefcase')
                    ->label('Position'),
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
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
