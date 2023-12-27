<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Models\Post;
use Filament\Actions;
use Illuminate\Support\Str;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function handleRecordCreation(array $data): Post
    {
        $data['slug'] = Str::slug($data['title']) . '-' . uniqid();
        $data['user_id'] = auth()->user()->id;

        return static::getModel()::create($data);
    }
}
