<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register_form()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        dd($request->all());
    }
}
