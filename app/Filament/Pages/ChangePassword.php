<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;

class ChangePassword extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.change-password';

    protected static ?string $title = 'Ganti Password';

    public ?array $data;

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('currentPassword')->label('Password Saat Ini')
                ->password()
                ->required()
                ->currentPassword(),
            TextInput::make('new_password')->label('Password Baru')
                ->required()
                ->password()
                ->confirmed(),
            TextInput::make('new_password_confirmation')->label('Konfirmasi Password Baru')
                ->required()
                ->password()
        ])->statePath('data');
    }

    public function updatePassword()
    {
        $this->validate();

        auth()->user()->update([
            'password' => bcrypt($this->data['new_password'])
        ]);

        return redirect('/author/my-account');
    }
}
