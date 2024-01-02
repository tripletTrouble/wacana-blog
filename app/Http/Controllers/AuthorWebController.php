<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorWebController extends Controller
{
    public function posts(string $uuid)
    {
        $author = User::where('uuid', $uuid)->first();
        
        return view('author-post', [
            'author' => $author,
            'posts' => $author->posts()->with('category', 'author')->paginate(10)
        ]);
    }
}
