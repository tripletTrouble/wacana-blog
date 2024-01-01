<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'featured_posts' => Post::where('is_featured', 1)->get(),
            'latest_posts' => Post::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
