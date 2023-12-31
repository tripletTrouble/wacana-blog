<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::select([
                'id', 'title', 'slug', 'excerpt', 'tags', 'user_id', 'category_id',
                'views', 'loves', 'created_at', 'updated_at'
            ])
            ->with([
                'author' => fn($query) => $query->select('id', 'name', 'email', 'uuid'),
                'category' => fn($query) => $query->select('id', 'name')
            ])->paginate(10);

        return response()->json($data);
    }

    public function show(string $slug)
    {
        $data = Post::with([
            'author' => fn($query) => $query->select('id', 'name', 'email', 'uuid'),
            'category' => fn($query) => $query->select('id', 'name')
        ])->where('slug', $slug)->firstOrFail();

        return response()->json($data);
    }
}
