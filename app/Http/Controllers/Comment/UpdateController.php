<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function update(Comment $comment)
    {
        $comment->update([
            'like' => 250,
        ]);

        return $comment;
    }
}
