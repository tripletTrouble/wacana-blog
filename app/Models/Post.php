<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id', 'created_at', 'updated_at', 'loves', 'views'];
    protected $hidden = ['id', 'category_id', 'user_id', 'media'];
    protected $appends = ['thumbnail_url'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    protected function thumbnailUrl(): Attribute
    {
        $thumbnails = $this->getMedia('thumbnails');

        return Attribute::make(get: fn() => $thumbnails[0]->getFUllUrl());
    }
}
