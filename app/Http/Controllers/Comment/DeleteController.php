<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class DeleteController extends Controller
{
    public function delete(Comment $comment)
    {
        $comment->delete();
        return response([
            'message' => 'post deleted successfully'
        ]);
    }
}
