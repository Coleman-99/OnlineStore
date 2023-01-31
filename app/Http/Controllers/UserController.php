<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        $user = $request->validate([
            'name' => ['required', 'min:4'],
            'adress' => 'required',
            'contact' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'

        ]);
        //hashing password
        $user['password'] = bcrypt($user['password']);

        User::create($user);
        return redirect('/')->with('message', 'Account created succesfully');
    }
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Youre now logged in');
        };
        return back()->withErrors(['email' => 'Invalid email'])->onlyInput('email');
    }

    public function loginPage()
    {
        return view('user.login');
    }
}
