<?php

namespace App\Filament\Resources\BerkasPendaftarans;

use App\Filament\Resources\BerkasPendaftarans\Pages\CreateBerkasPendaftaran;
use App\Filament\Resources\BerkasPendaftarans\Pages\EditBerkasPendaftaran;
use App\Filament\Resources\BerkasPendaftarans\Pages\ListBerkasPendaftarans;
use App\Filament\Resources\BerkasPendaftarans\Schemas\BerkasPendaftaranForm;
use App\Filament\Resources\BerkasPendaftarans\Tables\BerkasPendaftaransTable;
use App\Models\BerkasPendaftaran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BerkasPendaftaranResource extends Resource
{
    protected static ?string $model = BerkasPendaftaran::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentDuplicate;

    protected static ?string $navigationLabel = 'Berkas Pendaftaran';

    protected static \UnitEnum|string|null $navigationGroup = 'Kelola';

    protected static ?string $recordTitleAttribute = 'jenis_berkas';

    protected static ?string $slug = 'kelola-berkas-pendaftaran';

    public static ?string $label = 'Berkas Pendaftaran';

    public static function form(Schema $schema): Schema
    {
        return BerkasPendaftaranForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BerkasPendaftaransTable::configure($table);
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
            'index' => ListBerkasPendaftarans::route('/'),
            'create' => CreateBerkasPendaftaran::route('/create'),
            'edit' => EditBerkasPendaftaran::route('/{record}/edit'),
        ];
    }
}
