<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use RealRashid\SweetAlert\Facades\Alert;
use Alert;

class AuthController extends Controller
{

    public function index()
    {
        $title = 'RightsReports | Login';

        return view('auth.login', compact('title'));
    }

    public function Register()
    {
        $title = 'RightsReports | Register';

        return view('auth.register', compact('title'));
    }

    public function authenticate(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            toast('Berhasil Login', 'success');
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login Failed');
    }



}
