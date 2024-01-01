<?php

namespace App\Filament\Admin\Pages;

use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Pages\Page;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class Post extends Page implements HasTable, HasActions
{
    use InteractsWithTable, InteractsWithActions;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.post';

    public function table(Tables\Table $table): Tables\Table
    {
        return $table->query(\App\Models\Post::query())
            ->columns([
                TextColumn::make('title')->label('Judul')->wrap(),
                TextColumn::make('author.name')->label('Penulis')->wrap(),
                IconColumn::make('is_featured')->label('Featured')->trueIcon('heroicon-s-star')->falseIcon('heroicon-o-star')->color('success')
                    ->action('toggleFeatured')
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public function toggleFeatured(Model $record)
    {
        $record->is_featured = ! $record->is_featured;
        $record->save();
    }
}
