<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View; 
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    
    public function index(): View
    {
        return view('articles.index', [
            'articles' => Article::with('user')->latest()->get(),
        ]);
    }
   
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'content' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'price' => 'int'

        ]);
 
        $request->user()->articles()->create($validated);
 
        return redirect(route('articles.index'));
    }

public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article): View
    {

        $this->authorize('update', $article);
 
        return view('articles.edit', [
            'articles' => $article,
        ]);
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $this->authorize('update', $article);
        $validated = $request->validate([
            'content' => 'required|string|max:255',
            'title' => 'required|string|max:255',

        ]);

        $article->update($validated);
        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article):RedirectResponse
    {
        $this->authorize('delete', $article);
 
        $article->delete();
 
        return redirect(route('articles.index')); 
    }
}
