<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class StoreController extends Controller
{
    public function store()
    {
        $data = [
            'name' => 'Oleg',
            'surname' => 'Sharginov',
            'patronymic' => 'Evgenievich',
            'description' => 'krasava',
            'profession' => 'backend developer',
            'address' => '8-12-11',
            'phone' => '+79093954329',
            'gender' => '1',
        ];

        $profile = Profile::create($data);
        return $profile;
    }
}
