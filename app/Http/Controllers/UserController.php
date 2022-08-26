<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function addNewUser(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $user = new User();
        if ($data['password'] == $data['password_confirmation']) {
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            if ($data['image'] != null) {
                $image = $data['image'];
                $imageName = time().$image->getClientOriginalName();
                $image->move(public_path('assets/images/users'),$imageName);
                $user->image = $imageName;
            }
            if ($data['description'] != null) {
                $user->bio = $data['description'];
            }
            $user->profil = $data['profil'];

            $user->save();
            return redirect()->back();
        } else {
            Session::flash('error', 'Mot de passe incorrect');
            return redirect('/');
        }
    }
}
