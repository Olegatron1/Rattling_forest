<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeleteController extends Controller
{
    public function delete(Post $post)
    {
        $post->delete();
        return response([
            'message' => 'post deleted successfully'
        ]);
    }
}
