<?php



namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class DashboardController extends Controller
{

    public function index(): View
    {
        $articles = auth()->user()->articles;
        return view('dashboard', compact('articles'));
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
}
