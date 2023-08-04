<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\{
    Country,
    State,
    User
};

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_countries($id)
    {
        $states = State::where('country_id', $id)->get();
        $options = '';
        foreach ($states as $state) {
            $options .= "<option value=" . $state->name . ">" . $state->name . "</option>";
        }
        return $options;
    }

    public function get_user_name($id)
    {
        $user = User::where('user_id', $id)->first();
        $error = false;
        $username ='';
        if($user) {
            $error = true;
            $username = $user->f_name . " ". $user->l_name;
        }
        return ["status" => $error, 'username' => $username];
    }
}
