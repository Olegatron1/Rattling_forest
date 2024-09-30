<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StoreController extends Controller
{
    public function store()
    {
        $data = [
            'title' => 'new post',
            'content' => 'qqq',
            'description' => 'dlya daunov',
            'views' => 15,
            'like' => 5,
            'author_id' => 1,
            'category_id' => 2,
        ];

        return Post::create($data);
    }
}
