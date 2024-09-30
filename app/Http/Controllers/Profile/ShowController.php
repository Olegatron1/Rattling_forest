<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class ShowController extends Controller
{
    public function show(Profile $profile)
    {
        return $profile;
    }
}
