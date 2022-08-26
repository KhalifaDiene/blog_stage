<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->status == 1) {
            if (Auth::user()->profil == "admin") {
                $dir = "/admin";
            } else {
                session()->flash("success", "Vous étes connecté !!!");
                return redirect()->back();
            }
        }

        return redirect($dir);
    }

    public function logout()
    {
        // La variable $dir va recevoir selon le profil de user la redirection
        $dir = "";

        // Si user est un admin $dir reçoit "/login" sinon elle reçoit "/".
        if (Auth::user()->profil == "admin") {
            $dir = "login";
        } else {
            $dir = "/";
        }

        Auth::logout();
        return redirect($dir);
    }
}
