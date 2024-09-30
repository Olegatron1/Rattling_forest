<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Collection;

class IndexController extends Controller
{
    public function index(): Collection
    {
        return Profile::all();
    }
}
