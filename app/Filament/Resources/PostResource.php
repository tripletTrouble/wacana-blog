<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $modelLabel = 'Postingan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                SpatieMediaLibraryFileUpload::make('thumbnail')->image()
                    ->maxSize(1024)
                    ->imageEditor()->collection('thumbnails')
                    ->helperText('Maksimal file yang diunggah adalah 1024 Megabytes')
                    ->live(),
                TextInput::make('title')->label('Judul Postingan'),
                Select::make('category_id')->label('Kategori Postingan')
                    ->options(Category::all()->pluck('name', 'id'))->default(1)->disablePlaceholderSelection(),
                Textarea::make('excerpt')->label('Ringkasan'),
                RichEditor::make('content')->label('Isi Postingan'),
                TagsInput::make('tags')->separator(',')->splitKeys(['Tab', ' ', 'Enter'])
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Judul Postingan')->wrap()
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->attribute('category_id')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->checkIfRecordIsSelectableUsing(
                fn (Post $post): bool => auth()->user()->hasRole('Administrator') || $post->user_id === auth()->user()->id,
            );
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        if (! auth()->user()->hasRole('Administrator')) {
            return parent::getEloquentQuery()->where('user_id', auth()->user()->id);
        }

        return parent::getEloquentQuery();
    }
}
