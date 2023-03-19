<?php



namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Article;
use Illuminate\Http\Request;



class DashboardController extends Controller
{

    public function index():view
    {
        $articles = auth()->user()->articles;
        return view('dashboard', compact('articles'));
    }

}
