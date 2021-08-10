<?php

namespace App\Http\Controllers;

use App\Rules\SamePassword;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function create()
    {
        return view('account');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7', 'max:255']
        ]);

        request()->session()->put('email', $attributes['email']);
        request()->session()->put('password', $attributes['password']);

        return redirect('/products');
    }

    public function edit()
    {
        $attributes = request()->validate([
            'username' => ['required','min:3', 'max:255'],
            'password' => ['required', 'min:7', 'max:255', new SamePassword],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required'],
            'facebook' => ['required', 'url'],
            'twitter' => ['required', 'url'],
            'instagram' => ['required', 'url']
        ]);
    
        request()->session()->put('username', $attributes['username']);
        request()->session()->put('password', $attributes['password']);
        request()->session()->put('email', $attributes['email']);
        request()->session()->put('phone', $attributes['phone']);
        request()->session()->put('facebook', $attributes['facebook']);
        request()->session()->put('twitter', $attributes['twitter']);
        request()->session()->put('instagram', $attributes['instagram']);
        
        return redirect('/');
    }

    public function destroy()
    {
        if (session()->has('email')) {
            session()->pull('email');
        }

        return redirect('/');
    }
}
