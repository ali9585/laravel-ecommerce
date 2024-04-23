<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Login;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Login $request)
    {
        if (!auth()->guard('admin')->attempt($request->except('_token')))
            return back()->with('error', 'Email or password is invalid!');

        return redirect()->route('admin.dashboard');
    }
}
