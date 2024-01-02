<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryWebController extends Controller
{
    public function index(Request $request)
    {

        return view('category', ['categories' => Category::when($request->has('q'), fn($query) => $query->where('name', 'like', "%{$request->q}%"))->where('id', '!=', 1)->paginate(10)]);
    }

    public function posts(string $name)
    {
        $data = Category::where('name', $name)->first();

        return view('category-posts', [
            'category' => $data,
            'posts' => isset($data) ? $data->posts()->with('author', 'category')->paginate(10) : []
        ]);
    }
}
