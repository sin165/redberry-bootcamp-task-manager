<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name_en'        => ['required', 'min:3', 'regex:/^[a-zA-Z0-9\p{P}\s]+$/'],
			'name_ka'        => ['required', 'min:3', 'regex:/^[ა-ჰ0-9\p{P}\s]+$/'],
			'description_en' => ['required', 'min:3', 'regex:/^[a-zA-Z0-9\p{P}\s\n]+$/'],
			'description_ka' => ['required', 'min:3', 'regex:/^[ა-ჰ0-9\p{P}\s\n]+$/'],
			'due_date'       => 'required',
		];
	}
}
