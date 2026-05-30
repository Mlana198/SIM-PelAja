<x-filament-panels::page.simple>
    <x-slot name="heading">
        Sign Up
    </x-slot>

    <x-slot name="subheading">
        or
        <x-filament::link :href="filament()->getLoginUrl()">
            sign in to your account
        </x-filament::link>
    </x-slot>

    <form wire:submit="register" style="width: 100% !important; display: block !important;">
        
        {{ $this->form }}

        {{-- Mengubah pt-6 menjadi margin-top (mt) dengan inline style + memaksa tombol melebar penuh --}}
        <div style="width: 100% !important; margin-top: 1.5rem !important; display: block !important;">
            <x-filament::button type="submit" style="width: 100% !important; display: flex !important; justify-content: center !important; text-align: center !important;">
                Sign up
            </x-filament::button>
        </div>
    </form>
</x-filament-panels::page.simple>