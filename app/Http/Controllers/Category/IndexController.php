<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class IndexController extends Controller
{
    public function index(): Collection
    {
        return Category::all();
    }
}
