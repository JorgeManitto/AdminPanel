<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function showForgotPassForm()
    {
        return view('admin.auth.forgotpass');
    }

    public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required'
    ], [
        'email.required' => 'El campo de correo electrónico es obligatorio.',
        'email.email' => 'El formato de correo electrónico es inválido.',
        'password.required' => 'El campo de contraseña es obligatorio.'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
    }

    if (Auth::attempt($request->only(['email', 'password']))) {
        return redirect()->intended('admin');
    } else {
        $validator->errors()->add('password', 'Las credenciales proporcionadas son incorrectas.');
        return redirect()->back()->withErrors($validator)->withInput($request->only('email'));
    }
}

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
