<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\{
    Country,
    State,
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
}
