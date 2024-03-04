<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name_en'        => 'required',
			'name_ka'        => 'required',
			'description_en' => 'required',
			'description_ka' => 'required',
			'due_date'       => 'required',
		];
	}
}
