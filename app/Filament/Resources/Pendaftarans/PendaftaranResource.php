<?php

namespace App\Filament\Resources\Pendaftarans;

use App\Filament\Resources\Pendaftarans\Pages\CreatePendaftaran;
use App\Filament\Resources\Pendaftarans\Pages\EditPendaftaran;
use App\Filament\Resources\Pendaftarans\Pages\ListPendaftarans;
use App\Filament\Resources\Pendaftarans\Schemas\PendaftaranForm;
use App\Filament\Resources\Pendaftarans\Tables\PendaftaransTable;
use App\Models\Pendaftaran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentCheck;

    protected static ?string $navigationLabel = 'Pendaftaran';

    protected static \UnitEnum|string|null $navigationGroup = 'Kelola';

    public static ?string $label = 'Pendaftaran';

    protected static ?string $slug = 'kelola-pendaftaran';

    public static function form(Schema $schema): Schema
    {
        return PendaftaranForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PendaftaransTable::configure($table);
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
            'index' => ListPendaftarans::route('/'),
            'create' => CreatePendaftaran::route('/create'),
            'edit' => EditPendaftaran::route('/{record}/edit'),
        ];
    }
}
