<x-filament-panels::page>
    <form wire:submit="updateProfile">
        {{ $this->form }}
        <div class="py-6">
            <x-filament::button type="submit">Perbarui</x-filament::button>
        </div>
    </form>
</x-filament-panels::page>
