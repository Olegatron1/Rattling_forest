<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;

class IndexController extends Controller
{
    public function index(): Collection
    {
        return Comment::all();
    }
}
