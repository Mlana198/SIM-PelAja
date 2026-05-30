<?php

namespace App\Filament\Pages\Auth;

use App\Enums\UserRole;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Pages\SimplePage;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomRegister extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'custom-register';

    public function getHeading(): string
    {
        return 'Sign Up';
    }

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255)
                    ->autofocus(),

                TextInput::make('email')
                    ->label('Alamat Email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->unique('users', 'email'),

                Select::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'laki-laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                    ])
                    ->required()
                    ->placeholder('Pilih Jenis Kelamin'),

                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable(true)
                    ->required()
                    ->rule(\Illuminate\Validation\Rules\Password::default())
                    ->same('passwordConfirmation'),

                TextInput::make('passwordConfirmation')
                    ->label('Konfirmasi Password')
                    ->password()
                    ->revealable(true)
                    ->required()
                    ->dehydrated(false),
            ])
            ->statePath('data');
    }

    public function getFormActions(): array
    {
        return [
            Action::make('register')
                ->label('Sign Up')
                ->submit('register')
                ->color('primary'),
        ];
    }

    public function register(): void
    {
        $data = $this->form->getState();

        $insertData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'password' => Hash::make($data['password']),
            'role' => UserRole::Peserta,
        ];

        $user = User::create($insertData);

        Auth::login($user);

        session()->regenerate();

        redirect()->to(filament()->getCurrentPanel()->getUrl());
    }
}
