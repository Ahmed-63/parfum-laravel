<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\View\View; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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
 
        return view('articles.edit', [
            'article' => $article,
        ]);
        
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
        ];
        if ($request->has("image")) {
            // On ajoute la règle de validation pour "picture"
            $rules["image"] = ['required', 'image'];
        }

        $this->validate($request, $rules);

        if ($request->has("picture")) {


            Storage::delete($article->picture);

            $chemin_image = $request->picture->store("posts");
        }
        
        $article->update([
            "title" => $request->title,
            'name' => $request->name,
            "content" => $request->content,
            "picture" => isset($chemin_image) ? $chemin_image : $article->image,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article):RedirectResponse
    {
        // On supprime l'image existant
        Storage::delete($article->image);

        // On les informations du $post de la table "posts"
        $article->delete();

        return redirect(route('articles.index')); 
    }
}
