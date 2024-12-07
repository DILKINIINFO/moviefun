<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{//Register
    public function register(Request $request){
     //validate  
     $feilds=$request->validate([
        'name'=>['required','max:255'],
        'email'=>['required','max:255','email','unique:users'],
        'password'=>['required','min:3','confirmed']
     ]);

     //Register
    $user= User::create($feilds);

     //Login
     Auth::login($user);


    //Redirect
    return redirect()->route('home');
    }

    //Login user
    public function login(Request $request){
        dd('ok');
    }
}
