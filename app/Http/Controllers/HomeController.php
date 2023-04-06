<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function getLogin() 
    {
        return view('sign');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        // $articles = Article::orderBy('id', 'desc')->take(3)->get();

        return view('home', compact('articles'));
    }

    public function article()
    {
        $articles = Article::all();
        $articles = Article::orderBy('id', 'desc')->get();

        return view('articles', compact('articles'));
    }

    public function about()
    {

        return view('about');
    }
    
    public function showArticle($id)
    {
        $articles = Article::find($id);
        return view('viewArticle', compact('articles'));
    }
}
