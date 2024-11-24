<?php

namespace App\Http\Requests\Api\Profile;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
			'profession' => 'nullable|string',
			'address' => 'nullable|string',
			'phone' => 'nullable|string',
			'birthday_from' => 'nullable|date_format:Y-m-d',
			'birthday_to' => 'nullable|date_format:Y-m-d',
			'gender' => 'nullable|nullable',
			'user_email' => 'nullable|string',
        ];
    }
}
