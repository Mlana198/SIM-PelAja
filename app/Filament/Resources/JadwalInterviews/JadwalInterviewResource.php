<?php

namespace App\Filament\Resources\JadwalInterviews;

use App\Filament\Resources\JadwalInterviews\Pages\CreateJadwalInterview;
use App\Filament\Resources\JadwalInterviews\Pages\EditJadwalInterview;
use App\Filament\Resources\JadwalInterviews\Pages\ListJadwalInterviews;
use App\Filament\Resources\JadwalInterviews\Schemas\JadwalInterviewForm;
use App\Filament\Resources\JadwalInterviews\Tables\JadwalInterviewsTable;
use App\Models\JadwalInterview;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JadwalInterviewResource extends Resource
{
    protected static ?string $model = JadwalInterview::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static ?string $navigationLabel = 'Jadwal Interview';

    protected static \UnitEnum|string|null $navigationGroup = 'Kelola';

    protected static ?string $slug = 'kelola-jadwal-interview';

    protected static ?string $label = 'Jadwal Interview';

    protected static ?string $recordTitleAttribute = 'tempat';

    public static function form(Schema $schema): Schema
    {
        return JadwalInterviewForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JadwalInterviewsTable::configure($table);
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
            'index' => ListJadwalInterviews::route('/'),
            'create' => CreateJadwalInterview::route('/create'),
            'edit' => EditJadwalInterview::route('/{record}/edit'),
        ];
    }
}
