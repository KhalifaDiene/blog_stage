<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Admin\AccueilController as AdminAccueilController;
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

Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('/admin')->group(function () {
        Route::get('/index', [AdminAccueilController::class, 'allUsers']);
    });
});

Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
});
