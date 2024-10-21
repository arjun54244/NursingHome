<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('department')
                    ->options([
                        'Gynae' => 'Gynae',
                        'GeneralSurgery' => 'General Surgery',
                        'LaserLaprascopicSurgeon' => 'Laser, laprascopic surgeon',
                        'Endocrinologist' => 'Endocrinologist',
                        'Anaesthesiology ' => 'Anaesthesiology ',
                    ])
                    ->required(),
                TextInput::make('title'),
                TextInput::make('short_description'),
                FileUpload::make('icon')
                    ->directory('service')->storeFileNamesIn('service'),
                FileUpload::make('image')
                    ->directory('service')->storeFileNamesIn('service'),
                TextInput::make('image_alt_tag'),
                RichEditor::make('description')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'heading',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'table',
                        'undo',
                        'underline',
                    ])
                    ->columnSpan('full'),
                TextInput::make('slug'),
                TextInput::make('meta_title'),
                TextInput::make('meta_desc'),
                TagsInput::make('tags')
                // Toggle::make('status')
                //     ->onColor('success')
                //     ->offColor('danger')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('department'),
                Tables\Columns\TextColumn::make('title'),
                // Tables\Columns\TextColumn::make('short_description'),
                Tables\Columns\ImageColumn::make('icon')->disk('public'),
                Tables\Columns\ImageColumn::make('image')->disk('public'),
                ToggleColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
