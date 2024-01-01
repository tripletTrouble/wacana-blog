<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostWebController extends Controller
{
    public function show(string $slug): View
    {
        return view('post', ['post' => Post::where('slug', $slug)->first()]);
    }
}
