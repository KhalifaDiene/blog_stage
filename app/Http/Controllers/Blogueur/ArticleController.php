<?php

namespace App\Http\Controllers\Blogueur;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        // Pour recupérer l'ensemble des articles d'un user on passe par la catégorie
        $categories = Category::where('user_id', Auth::user()->id)->with('articles')->get();
        return view('blogueur.articles.index', compact('categories'));
    }

    public function newArticle()
    {
        // On recupére dans un premier temps les catégories crée par le blogueur (user).
        $categories = Category::where('user_id', Auth::user()->id)->get(); // Un article dépend d'une catégorie

        // Maintenant on retourne la page d'ajout d'un article
        return view('blogueur.articles.new-article', compact('categories'));
    }

    public function addNewArticle(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $article = new Article();
        $article->title = $data['title'];
        $article->content = $data['description'];
        $article->category_id = $data['category'];
        $article->save();
        $id = $article->id;
        if ($data['image'] != null) {
            $this->saveMedia($id, $data['image']);
        }
        return redirect()->back();
    }

    public function saveMedia($id, $imageArticle)
    {
        $article_id = $id;
        $media = new Media();
        $image = $imageArticle;
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('assets/images/categories'),$imageName);

        $media->lien = $imageName;
        $media->couverture = 1;
        $media->article_id = $article_id;
        $media->save();
    }
}
