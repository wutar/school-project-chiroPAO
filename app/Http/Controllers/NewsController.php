<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $articles = \App\Article::orderBy('created_at', 'desc')->paginate(15);
        return view('news.index',
        [
            'articles' => $articles,
        ]);
    }

    public function detail($id)
    {
        return view('news.detail',['article'=> \App\Article::findOrFail($id)]);
    }
}
