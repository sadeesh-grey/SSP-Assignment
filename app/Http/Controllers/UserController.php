<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    function userregister(){

        $attributes = request()->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'contact' => 'required',
            'password' => 'required|confirmed|min:5|max:20',
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth('web')->login($user);

        session()->flash('success','Your Account has been created !');

        return redirect("/");
    }

    function logout(){

        auth('web')->logout();

        return redirect("/login")->with('success','Logged out !');

        }

    function login(){
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if(auth('web')->attempt($attributes)){
            return redirect('/')->with('success','Welcome back');
        }

        throw ValidationException::withMessages([
            'password' => 'Invalid Password !'
        ]);
    }
}
