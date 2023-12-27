<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class ProfileEdit extends Page implements HasForms, HasActions
{
    use InteractsWithForms, InteractsWithActions;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile-edit';

    public ?array $data;
    
    public User $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            SpatieMediaLibraryFileUpload::make('avatar')
                ->avatar()
                ->circleCropper()
                ->imageEditor()
                ->collection('avatars')
                ->moveFiles()
                ->columnSpan(2)
                ->default(fn (User $user) => $user->getMedia('avatars')->first()->getUrl()),
            TextInput::make('name')->label('Nama Lengkap'),
            TextInput::make('email')->label('Email'),
            Fieldset::make('Profile')
                ->relationship('profile')
                ->schema([
                    TextInput::make('display_name')->label('Display Name'),
                    Select::make('sex')->label('Jenis Kelamin')
                        ->options([
                            '1' => 'Laki-laki',
                            '2' => 'Perempuan'
                        ]),
                    TextInput::make('job')->label('Pekerjaan'),
                    TextInput::make('city')->label('Kota Tinggal'),
                    TextInput::make('country')->label('Negara Tinggal'),
                    Textarea::make('bio')->label('Bio')->rows(4),
                ])
        ])
            ->columns([
                'md' => 2
            ])
            ->statePath('data')
            ->model($this->user);
    }

    public function mount()
    {
        $this->form->fill($this->user->toArray());
    }

    public function updateProfile()
    {
        $state = $this->form->getState();
        $this->user->update($state);

        return redirect('author/my-account');
    }
}
