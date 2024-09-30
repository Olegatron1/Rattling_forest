<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class StoreController extends Controller
{
    public function store()
    {
        $data = [
            'title' => 'tag1',
        ];

        $tag = Tag::create($data);
        return $tag;
    }
}
