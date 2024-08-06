<?php

namespace App\Http\Controllers\Teacher\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest:teacher', ['except' => 'logout']);
    }

    public function login()
    {
     // echo  Hash::make("123456"); exit;
        return view('teacher-views.auth.login');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth('teacher')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect()->route('teacher.dashboard');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))
            ->withErrors(['Credentials does not match.']);
    }

    public function logout(Request $request)
    {
        auth()->guard('teacher')->logout();
        return redirect()->route('teacher.auth.login');
    }
}
