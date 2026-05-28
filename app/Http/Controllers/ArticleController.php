<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(6);

        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $latestArticles = Article::latest()
            ->where('id', '!=', $article->id)
            ->take(5)
            ->get();

        return view('articles.show', compact(
            'article',
            'latestArticles'
        ));
    }
}
