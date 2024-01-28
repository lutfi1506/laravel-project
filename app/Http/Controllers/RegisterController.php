<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email:dns|unique:users',
            'password' => ['required',Password::min(8)->mixedCase()->letters()->numbers()->uncompromised()]
        ]);
        User::create($validatedData);
        
        return redirect('/login')->with('registSuccess','Registration successfull! please login');
    }
}
