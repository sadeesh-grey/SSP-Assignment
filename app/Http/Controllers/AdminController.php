<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    function registeradmin(){

        $attributes = request()->validate([
            'email' => 'required|email|unique:admins,email',
            'name' => 'required',
            'contact' => 'required',
            'password' => 'required|confirmed|min:5|max:20',
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = Admin::create($attributes);

        auth('admin')->login($user);

        session()->flash('success','Your Account has been created !');

        return redirect("/admin/index");
    }

    function logout(){

        auth('admin')->logout();

        return redirect("/adminlogin")->with('success','Logged out !');

        }

    function loginadmin(){
        $attributes = request()->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required'
        ]);

        if(auth('admin')->attempt($attributes)){
            return redirect('/admin/index')->with('success','Welcome back');
        }

        throw ValidationException::withMessages([
            'password' => 'Invalid Password !'
        ]);
    }
}

