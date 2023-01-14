<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => ['required','max:255','min:3',ValidationRule::unique('users','username')],
            'email' => ['required','max:255','email',ValidationRule::unique('users','email')],
            'password' => 'required|min:7|max:255',
        ]);
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('success','Your account has been created.');
    }
}
