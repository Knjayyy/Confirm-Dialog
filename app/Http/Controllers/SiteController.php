<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiteController extends Controller
{

    public function home() {
        return inertia('Home');
    }

    public function practice() {
        return inertia('Practice');
    }

    public function loginForm() {
        return inertia('Login');
    }

    public function login(Request $request) {

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $login = auth()->attempt($request->all());

        if($login)
            return redirect('/members');
            // dd('You are logged in!');
        else
            return back()->withErrors(['authentication'=>'Invalid username and/or password.']);
    }

    public function logout(){
        auth()->logout();

        return redirect('/login');
    }
}
