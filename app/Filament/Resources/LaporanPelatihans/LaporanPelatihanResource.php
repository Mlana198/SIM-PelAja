<?php

namespace App\Filament\Resources\LaporanPelatihans;

use App\Filament\Resources\LaporanPelatihans\Pages\CreateLaporanPelatihan;
use App\Filament\Resources\LaporanPelatihans\Pages\EditLaporanPelatihan;
use App\Filament\Resources\LaporanPelatihans\Pages\ListLaporanPelatihans;
use App\Filament\Resources\LaporanPelatihans\Schemas\LaporanPelatihanForm;
use App\Filament\Resources\LaporanPelatihans\Tables\LaporanPelatihansTable;
use App\Models\LaporanPelatihan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LaporanPelatihanResource extends Resource
{
    protected static ?string $model = LaporanPelatihan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentChartBar;

    protected static ?string $navigationLabel = 'Laporan Pelatihan';

    protected static \UnitEnum|string|null $navigationGroup = 'Kelola';

    protected static ?string $slug = 'kelola-laporan-pelatihan';

    protected static ?string $label = 'Laporan Pelatihan';

    protected static ?string $recordTitleAttribute = 'tanggal_pelaporan';

    public static function form(Schema $schema): Schema
    {
        return LaporanPelatihanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LaporanPelatihansTable::configure($table);
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
            'index' => ListLaporanPelatihans::route('/'),
            'create' => CreateLaporanPelatihan::route('/create'),
            'edit' => EditLaporanPelatihan::route('/{record}/edit'),
        ];
    }
}
