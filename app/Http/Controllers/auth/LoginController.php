<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = User::loginValidation($request->all());
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user = User::whereEmail($request->email)->first();
        if (!$user) {
            return back()->with('status', "User does not exist");
        }
        // if (!Auth::attempt($request->only('email', 'password'))) {
        //     return back()->with('status', "Passoword wrong");
        // }
        Auth::login($user);
        if (auth::user()->role == 1) {
            return redirect()->route('admin.dashboard');
        } else if (auth::user()->role == 2) {
            return redirect()->route('customer.dashboard');
        } else {
            return redirect()->route('login-account');
        }
    }
}
