<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class DeleteController extends Controller
{
    public function delete(Profile $profile)
    {
        $profile->delete();
        return response([
            'message' => 'post deleted successfully'
        ]);
    }
}
