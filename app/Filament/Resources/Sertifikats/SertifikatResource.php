<?php

namespace App\Filament\Resources\Sertifikats;

use App\Filament\Resources\Sertifikats\Pages\CreateSertifikat;
use App\Filament\Resources\Sertifikats\Pages\EditSertifikat;
use App\Filament\Resources\Sertifikats\Pages\ListSertifikats;
use App\Filament\Resources\Sertifikats\Schemas\SertifikatForm;
use App\Filament\Resources\Sertifikats\Tables\SertifikatsTable;
use App\Models\Sertifikat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SertifikatResource extends Resource
{
    protected static ?string $model = Sertifikat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedIdentification;

    protected static ?string $navigationLabel = 'Sertifikat';

    protected static \UnitEnum|string|null $navigationGroup = 'Kelola';

    protected static ?string $slug = 'kelola-sertifikat';

    protected static ?string $label = 'Sertifikat';

    protected static ?string $recordTitleAttribute = 'nomor_sertifikat';

    public static function form(Schema $schema): Schema
    {
        return SertifikatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SertifikatsTable::configure($table);
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
            'index' => ListSertifikats::route('/'),
            'create' => CreateSertifikat::route('/create'),
            'edit' => EditSertifikat::route('/{record}/edit'),
        ];
    }
}
