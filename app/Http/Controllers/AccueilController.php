<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function showArticle()
    {
        $categories = Category::with('articles')->with('user')->get();
        dd($categories);
        return view('articles', compact('categories'));
    }
}
