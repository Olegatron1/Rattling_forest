<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class UpdateController extends Controller
{
    public function update(Category $category)
    {
        $category->update([
           'title' => 'new title'
        ]);

        return $category;
    }
}
