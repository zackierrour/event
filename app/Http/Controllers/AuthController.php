<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\models\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function login (){
        return view("auth.login");
    }

    public function register (){
        return view("auth.register");
    }

    public function registerUser (Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
        $user->save();
        return redirect()->route('home');


    }

    public function loginUser(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (auth::attempt($credentials)) {
            // Utilisateur authentifié
            if (auth()->user()->role_id == 1) {
                // Rediriger vers le tableau de bord
                return redirect()->route('dashboard');
            } else {
                // Rediriger vers la page d'accueil
                return redirect()->route('home');
            }
        }
    
        // Si l'authentification échoue, rediriger vers la page de connexion avec un message d'erreur
        return redirect()->route('login')->with('error', 'Les informations de connexion ne sont pas valides.');
    }
    
    public function logOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }


}

