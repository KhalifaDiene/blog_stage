<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Admin\AccueilController as AdminAccueilController;
use App\Http\Controllers\Blogueur\AccueilController as BlogueurAccueilController;
use App\Http\Controllers\Blogueur\CategoryController as BlogueurCategoryController;
use App\Http\Controllers\Blogueur\ArticleController as BlogueurArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\FunctionNode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Cette route permet d'utiliser la page d'accueil du Blog : Pas besoin de ce connecter pour ci accéder.
Route::get('/', [AccueilController::class, 'index'])->name('accueil');

// Cette route permet de gérer la redirection des users selon leur profil vers leurs pages.
Route::get('/home', [HomeController::class, 'index']);

Auth::routes(); // Authentification : (Login and Register).

// Le middleware permet de controler l'accès a certain page
// Ici le middleware oblige une authentification avant d'accéder à la page Admin.
Route::group(['middleware' => ['auth']], function() {

    Route::group(['middleware' => ['role:admin']], function() {
        // Une groupe de route pour la partie Admin
        Route::prefix('/admin')->group(function () {
            Route::get('/', [AdminAccueilController::class, 'index']);
        });
    });

    // Une groupe de route pour la partie Blogueur.
    Route::group(['middleware' => ['role:blogueur']], function() {
        Route::prefix('/blogueur')->group(function() {
            Route::get('/index', [BlogueurAccueilController::class, 'index']);

            // Cette route permet de gérer la catégorie
            Route::prefix('/categories')->group(function() {
                Route::get('/', [BlogueurCategoryController::class, 'index']);
                Route::post('/new-category', [BlogueurCategoryController::class, 'newCategory'])->name('new-category');
            });

            // Cette route permet de gérer les artilces
            Route::prefix('/articles')->group(function() {
                Route::get('/', [BlogueurArticleController::class, 'index']);
            });

            Route::get('/logout', [HomeController::class, 'logout']);
        });
    });
});



// Pour gérer la déconnexion
Route::get('/logout', [HomeController::class, 'logout']);
