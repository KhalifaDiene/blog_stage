<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //fonction qui permet de recuperer les articles
    public function index(){
        $articles= Article::all();
        return view('blog.index', compact('articles'));
    }
}
