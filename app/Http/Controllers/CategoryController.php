<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::select('name')->get();

        return response()->json($data);
    }

    public function showPosts(string $category_name)
    {
        $category = Category::where('name', $category_name)->firstOrFail();

        return response()->json(
            $category->posts()->with([
                'author' => fn($query) => $query->select('id', 'name', 'email', 'uuid'),
                'category' => fn($query) => $query->select('id', 'name')
            ])->paginate(10)
        );
    }
}
