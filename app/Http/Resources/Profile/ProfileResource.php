<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

			'id' => $this->id,
			'name' => $this->name,
			'surname' => $this->surname,
			'patronymic' => $this->patronymic,
			'avatar' => $this->avatar,
			'description' => $this->description,
			'profession' => $this->profession,
			'address' => $this->address,
			'phone' => $this->phone,
			'birthday' => $this->birthday,
			'gender' => $this->gender,
			'user_id' => $this->user_id,
		];
    }
}
