<?php

namespace App\Http\Controllers\Blogueur;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccueilController extends Controller
{
    public function index()
    {
        return view('blogueur.index');
    }
}
