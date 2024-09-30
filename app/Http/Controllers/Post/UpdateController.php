<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Post $post)
    {
        $post->update([
           'title' => 'new title'
        ]);

        return $post;
    }
}
