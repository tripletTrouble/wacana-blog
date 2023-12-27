<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $hidden = ['id', 'created_at', 'updated_at', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sex(): Attribute
    {
        return Attribute::make(get: fn(int $value) => [
            'code' => $value, 
            'display' => $value === 1 ? 'Laki-laki' : 'Perempuan'
        ]);
    }
}
