<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function update(Tag $tag)
    {
        $tag->update([
           'title' => 'update tag'
        ]);

        return $tag;
    }
}
