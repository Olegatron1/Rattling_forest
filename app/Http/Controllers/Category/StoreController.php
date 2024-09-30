<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class StoreController extends Controller
{
    public function store()
    {
        $data = [
            'title' => 'title',
        ];

        return Category::create($data);
    }
}
