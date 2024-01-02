<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostWebController extends Controller
{
    public function search(Request $request)
    {
        $this->saveKeyword($request->q);

        $data = Post::with('category', 'author')->whereFullText(['title', 'excerpt', 'content', 'tags'], $request->q, ['mode' => 'boolean'])->paginate(10);

        return view('post-search', ['posts' => $data, 'keywords' => Keyword::orderBy('count', 'desc')->limit(10)->get()]);
    }

    public function show(string $slug): View
    {
        return view('post', ['post' => Post::where('slug', $slug)->first()]);
    }

    private function saveKeyword(string $keyword)
    {
        $keyword_record = Keyword::where('keyword', $keyword)->first();

        if ($keyword_record) {
            return $keyword_record->update(['count' => $keyword_record->count+1]);
        }

        return Keyword::create(['keyword' => $keyword, 'count' => 1]);
    }
}
