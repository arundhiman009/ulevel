<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\DataTables\UsersDataTable;

class UserController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.user.list');
    }

    public function create()
    {
        $packages = Package::all();
        $countries = Country::all();
        return view('admin.user.create', compact('packages', 'countries'));
    }

    public function add(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'username'              => ['required', 'string', 'max:255', 'unique:users'],
            'sponsor_id'            => ['required', 'string'],
            'email'                 => ['required', 'string', 'email', 'unique:users'],
            'f_name'                => ['required', 'string'],
            'l_name'                => ['required', 'string'],
            'phone_code'            => ['required', 'string'],
            'phone'                 => ['required', 'string', 'min:10'],
            'country'               => ['required', 'string'],
            'state'                 => ['required', 'string'],
            'city'                  => ['required', 'string'],
            'password'              => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required_with:password,same:password'],
            'package'               => ['required', 'string'],
            'terms'                 => ['required', 'string'],
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
        $user->placement_id     = $request->sponsor_id;
        $user->email            = $request->email;
        $user->password         = Hash::make($request->password);
        $user->f_name           = $request->f_name;
        $user->l_name           = $request->l_name;
        $user->phone_code       = $request->phone_code;
        $user->phone            = $request->phone;
        $user->country          = $request->country;
        $user->state            = $request->state;
        $user->city             = $request->city;
        $user->package_id       = $request->package;
        $user->payment_method   = $request->payment;
        $user->invest_amount    = 0;
        $user->commission_balance = 0;
        $user->picture_url      =  "";
        $user->trans_password   = "";
        $user->turnover         = 0;
        $user->rank_id          = 0;
        $user->total_ref_count  = 0;
        $user->qr_url           = "";
        $user->google_secret    = "";
        $user->vacant           =  "no";
        $user->payment_method   = 'manual';
        $user->save();
        return redirect()->back()->with('status', "User registered successfully");
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
