<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class StoreController extends Controller
{
    public function store()
    {
        $data = [
            'like' => 200,
            'status' => 1,
        ];

        return Comment::create($data);
    }
}
