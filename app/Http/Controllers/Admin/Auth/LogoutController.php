<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index()
    {
        if (auth()->guard('admin')->check())
            auth()->guard('admin')->logout();

        return redirect('/admin');
    }
}
