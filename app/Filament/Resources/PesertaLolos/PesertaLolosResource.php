<?php

namespace App\Filament\Resources\PesertaLolos;

use App\Filament\Resources\PesertaLolos\Pages\CreatePesertaLolos;
use App\Filament\Resources\PesertaLolos\Pages\EditPesertaLolos;
use App\Filament\Resources\PesertaLolos\Pages\ListPesertaLolos;
use App\Filament\Resources\PesertaLolos\Schemas\PesertaLolosForm;
use App\Filament\Resources\PesertaLolos\Tables\PesertaLolosTable;
use App\Models\PesertaLolos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PesertaLolosResource extends Resource
{
    protected static ?string $model = PesertaLolos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTrophy;

    protected static ?string $navigationLabel = 'Peserta Lolos';

    protected static \UnitEnum|string|null $navigationGroup = 'Kelola';

    protected static ?string $slug = 'kelola-peserta-lolos';

    public static ?string $label = 'Peserta Lolos';

    protected static ?string $recordTitleAttribute = 'nama_lengkap';

    public static function form(Schema $schema): Schema
    {
        return PesertaLolosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PesertaLolosTable::configure($table);
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
            'index' => ListPesertaLolos::route('/'),
            'create' => CreatePesertaLolos::route('/create'),
            'edit' => EditPesertaLolos::route('/{record}/edit'),
        ];
    }
}
