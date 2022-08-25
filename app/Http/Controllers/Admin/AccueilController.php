<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        $users = User::get();
        // dd($users);
        return view('admin.index', compact('users'));
    }

    public function allUsers()
    {
        $users = User::get();
        // dd($users);
        return view('admin.index', compact('users'));
    }
}
