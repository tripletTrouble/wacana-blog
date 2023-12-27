<x-filament-panels::page>
    <form wire:submit="updatePassword">
        {{ $this->form }}
        <div class="pt-6">
            <x-filament::button type="submit">Perbarui</x-filament::button>
        </div>
    </form>
</x-filament-panels::page>
