<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //fonction qui permet de recuperer les categories
    public function index($id){
        $categories= Category::where('user_id', $id)->with('Articles')->get();
        return view('blog.index', compact('categories'));
    }
}
