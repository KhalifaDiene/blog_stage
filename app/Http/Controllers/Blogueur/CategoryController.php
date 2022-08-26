<?php

namespace App\Http\Controllers\Blogueur;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories= Category::with('Articles')->get();
        // Pour recupérer l'ensemble des categories de l'utilisateur et des articles qui en dépendent
        $categories = Category::where('user_id', Auth::user()->id)->with('articles')->get();
        // dd($categories);
        return view('blogueur.categories', compact('categories'));
    }

    public function newCategory(Request $request)
    {
        $data = $request->all();
        // dd($data);
        if ($data['image'] != null) {
            // Pour upload l'image
            $image = $data['image'];
            $imageName = time().$image->getClientOriginalName();
            $image->move(public_path('assets/images/categories'),$imageName);

            $category = new Category();
            $category->name = $data['name'];
            $category->image = $imageName;
            if ($data['description'] != null) {
                $category->description = $data['description'];
            }
            $category->user_id = Auth::user()->id;
            $category->save();
            session()->flash("success_add_category", "Catégorie ajouté avec succès ");
            return redirect()->back();
        }
    }
}
