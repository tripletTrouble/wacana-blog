<x-filament-panels::page>
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
        <div class="flex gap-4 items-center col-span-2">
            <x-filament::avatar src="{{ $this->data->getFilamentAvatarUrl() }}" alt="{{ $this->data->name }}"
                style="height: 80px; width: auto;" />
            <div>
                <p class="font-bold text-lg">{{ $this->data->name }}</p>
                <div class="flex gap-4 pt-2">
                    <x-filament::button size="xs" tag="a" href="{{ url('/author/profile-edit') }}">
                        Sunting Profil
                    </x-filament::button>
                    <x-filament::button size="xs" color="warning" tag="a" href="{{ url('/author/change-password') }}">
                        Ganti Sandi
                    </x-filament::button>
                </div>
            </div>
        </div>
        <hr class="mt-3 col-span-2">
        <div>
            {{ $this->infolist }}
        </div>
    </div>
</x-filament-panels::page>
