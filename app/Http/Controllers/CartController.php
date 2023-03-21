<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cart;
use Illuminate\Http\Request;



class CartController extends Controller
{
    
    public function index()
    {
        return view('carts.index', [
            'cart' => Cart::with('user')->latest()->get(),
        ]);

    }
   
    public function create()
    {
        
    }

    public function store(Request $request, Article $article )
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],

        ]);
       
        
        $request->user()->carts()->create([
            'title' => $article->title,
            'name' => $article->name,
            'price' => $article->price,
            'quantity' => $request->quantify,
        ]);
       
 
        return redirect(route('carts.index'));

    }

public function show(Article $article)
    {
        return view('carts.show', compact('cart'));
    }

    public function edit(Article $article)
    {

        //
    }

    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
