<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;
use App\Models\User;

class RegisterController extends Controller
{
    public function register_form()
    {
        $packages = Package::all();
        $countries = Country::all();
        return view('auth.register', compact('packages', 'countries'));
    }

    public function register(Request $request)
    {
        dd(User::getPlacement(1));
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'sponsor_id' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'f_name' => ['required', 'string'],
            'l_name' => ['required', 'string'],
            'phone_code' => ['required', 'string'],
            'phone' => ['required', 'string', 'min:10'],
            'country' => ['required', 'string'],
            'state' => ['required', 'string'],
            'city' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required_with:password,same:password'],
            'package' => ['required', 'string'],
            'payment' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = new User;
        $user->username         = $request->username;
        $user->user_id          = $this->randomID();
        $user->sponsor_id       = $request->sponsor_id;
        $user->email            = $request->email;
        $user->f_name           = $request->f_name;
        $user->l_name           = $request->l_name;
        $user->phone_code       = $request->phone_code;
        $user->phone            = $request->phone;
        $user->country          = $request->country;
        $user->state            = $request->state;
        $user->city             = $request->city;
        $user->password         = $request->password;
        $user->package          = $request->package;
        $user->payment          = $request->payment;
        $user->reg_fee          = Helper::getRegisterFees();
        $user->vacant           =  "no";

        dd($request->all());
    }

    public function randomID($mode = 2, $len = 6)
    {
        $result = "";
        if ($mode == 1) :
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        elseif ($mode == 2) :
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        elseif ($mode == 3) :
            $chars = "abcdefghijklmnopqrstuvwxyz";
        elseif ($mode == 4) :
            $chars = ".";
        endif;

        $charArray = str_split($chars);
        for ($i = 0; $i < $len; $i++) {
            $randItem = array_rand($charArray);
            $result .= "" . $charArray[$randItem];
        }
        return $result;
    }
}
