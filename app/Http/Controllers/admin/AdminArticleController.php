<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|image',
        ]);

        $thumbnail = $request->file('thumbnail')
            ->store('articles', 'public');

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'thumbnail' => $thumbnail,
        ]);

        return redirect('/admin/articles')
            ->with('success', 'Article created successfully');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
        ];

        if ($request->hasFile('thumbnail')) {

            $thumbnail = $request->file('thumbnail')
                ->store('articles', 'public');

            $data['thumbnail'] = $thumbnail;
        }

        $article->update($data);

        return redirect('/admin/articles')
            ->with('success', 'Article updated successfully');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return back()
            ->with('success', 'Article deleted successfully');
    }
}
