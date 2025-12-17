<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('intitule')->paginate(10);
        return view('articles.index', compact('articles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'intitule' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
        ]);

        Article::create([
            'intitule' => $request->intitule,
            'description' => $request->description,
            'prix' => $request->prix,
        ]);

        return redirect()->route('articles.index');
    }

    public function show(Article $article)
    {
        //
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article->update([
            'intitule' => $request->intitule,
            'description' => $request->description,
            'prix' => $request->prix,
        ]);

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
