<?php

namespace App\Http\Requests\Api\Profile;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'name' => 'nullable|string',
			'surname' => 'nullable|string',
			'patronymic' => 'nullable|string',
			'avatar' => 'nullable|string',
			'description' => 'nullable|string',
			'address' => 'nullable|string',
			'profession' => 'nullable|string',
			'phone' => 'nullable|string',
			'birthday' => 'nullable|date',
			'gender' => 'nullable|integer',
        ];
    }
}
