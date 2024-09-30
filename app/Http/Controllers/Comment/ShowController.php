<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Profile;

class ShowController extends Controller
{
    public function show(Comment $comment)
    {
        return $comment;
    }
}
