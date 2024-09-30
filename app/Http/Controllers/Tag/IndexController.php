<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class IndexController extends Controller
{
    public function index(): Collection
    {
        return Tag::all();
    }
}
