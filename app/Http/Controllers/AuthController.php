<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPage(LoginRequest $request)
    {
        // dd($request->all());
        $credentials = $request->only('phone', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return redirect()->back()->with('text', 'Ошибка логина или пароля');
    }

    public function edit()
    {
        return view('edit');
    }
    public function editLogin(LoginRequest $request)
    {
        $user = Auth::user();
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/')->with('text', 'Логин и пароль изменены');
    }

    public function logaut()
    {
        Auth::logout();
        return redirect('/login');
    }
}
