<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\View\View; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

       $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],

        ]);
       
        
        $request->user()->articles()->create([
            'title' => $request->title,
            'name' => $request->name,
            'content' => $request->content,
            'image' => $request->image->store('article'),
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
       
 
        return redirect(route('articles.index'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article): View
    {
       

        $this->authorize('update', $article);
 
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $this->authorize('update', $article);
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
        ]);

        $article->update($validated);
        return redirect(route('dashboard'));
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
