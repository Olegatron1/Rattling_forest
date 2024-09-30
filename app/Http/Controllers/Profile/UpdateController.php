<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class UpdateController extends Controller
{
    public function update(Profile $profile)
    {
        $profile->update([
            'name' => 'Oleg',
            'surname' => 'Sharginov',
            'patronymic' => 'Evgenievich',
            'description' => 'krasava kapitalnii',
            'profession' => 'backend senior developer',
            'address' => 'Чехова 22',
            'phone' => '+79093954329',
        ]);

        return $profile;
    }
}
