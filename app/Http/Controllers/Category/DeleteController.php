<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DeleteController extends Controller
{
    public function delete(Category $category)
    {
        $category->delete();
        return response([
            'message' => 'post deleted successfully'
        ]);
    }
}
