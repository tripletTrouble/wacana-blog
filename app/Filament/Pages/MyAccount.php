<?php

namespace App\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Filament\Pages\Page;

class MyAccount extends Page implements HasForms, HasInfolists
{
    use InteractsWithForms, InteractsWithInfolists;
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static string $view = 'filament.pages.my-account';

    protected static ?string $title = 'Account';

    protected ?object $data;

    public function mount()
    {
        $this->data = auth()->user();
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->record(auth()->user())
            ->schema([
                Fieldset::make('Informasi Akun')
                    ->schema([
                        TextEntry::make('name')->label('Nama Lengkap'),
                        TextEntry::make('uuid')->label('Author Id'),
                        TextEntry::make('email'),
                    ]),
                Fieldset::make('Pofile')
                    ->schema([
                        TextEntry::make('profile.display_name')->label('Display Name'),
                        TextEntry::make('profile.bio')->label('Bio'),
                        TextEntry::make('profile.sex.display')->label('Jenis Kelamin'),
                        TextEntry::make('profile.job')->label('Pekerjaan'),
                        TextEntry::make('profile.city')->label('Kota'),
                        TextEntry::make('profile.country')->label('Negara'),
                    ])
            ])->columns(2);
    }
}
