<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $data = User::select('id', 'name', 'email', 'uuid')->paginate(10);

        return response()->json($data);
    }

    public function show(string $auhtor_uuid)
    {
        $data = User::select('id', 'name', 'email', 'uuid')->with('profile')->where('uuid', $auhtor_uuid)->firstOrFail();

        return response()->json($data);
    }

    public function posts(string $author_uuid)
    {
        $author = User::where('uuid', $author_uuid)->firstOrFail();

        return response()->json(
            $author->posts()->with([
                'author' => fn($query) => $query->select('id', 'name', 'email', 'uuid'),
                'category' => fn($query) => $query->select('id', 'name')
            ])->paginate(10)
        );
    }
}
