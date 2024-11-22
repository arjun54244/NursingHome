<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartmentResource\Pages;
use App\Filament\Resources\DepartmentResource\RelationManagers;
use App\Models\Department;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DepartmentResource extends Resource
{
    protected static ?string $model = Department::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            Select::make('slug')
                ->options([
                    'none' => 'None',
                    'Gynae' => 'Gynae',
                    'GeneralSurgery' => 'General Surgery',
                    'GynecologyAndObstetrics' => 'Gynecology And Obstetrics',
                    'InternalMedicine' => 'Internal Medicine',
                    'PediatricChildSpecialist' => 'Pediatric Child Specialist',
                    'Anaesthesiology ' => 'Anaesthesiology ',
                    'LaserLaprascopicSurgeon' => 'Laser, laprascopic surgeon',
                    'Endocrinologist' => 'Endocrinologist',
                    'Ultrasound' => 'Ultrasound',
                    'PathologyAndLab' => 'Pathology And Lab',
                ])->required(),

            // Forms\Components\FileUpload::make('icon')
            //     ->label('Icon Image')
            //     ->image()
            //     ->disk('public')
            //     ->directory('department-icons')
            //     ->storeFileNamesIn('department-icons')
            //     ->nullable(),
            Forms\Components\FileUpload::make('icon')
                ->label('Icon Image')
                ->image()
                ->nullable()
                ->disk('public') // Ensure you're using the public disk
                ->directory('department-icons') // Specify the directory for uploads
                ->preserveFilenames(),
            Forms\Components\Textarea::make('description')
                ->maxLength(500)
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('name')->sortable()->searchable(),

            Tables\Columns\ImageColumn::make('icon')
                ->label('Icon')->disk('public')
                ->width(50)
                ->height(50),
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
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }
}
