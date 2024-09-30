<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class DeleteController extends Controller
{
    public function delete(Tag $tag)
    {
        $tag->delete();
        return response([
            'message' => 'post deleted successfully'
        ]);
    }
}
