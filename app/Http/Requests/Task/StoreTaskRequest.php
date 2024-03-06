<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\English;
use App\Rules\Georgian;

class StoreTaskRequest extends FormRequest
{
	public function rules(): array
	{
		$english = new English;
		$georgian = new Georgian;
		return [
			'name.en'        => ['required', 'min:3', $english],
			'name.ka'        => ['required', 'min:3', $georgian],
			'description.en' => ['required', 'min:3', $english],
			'description.ka' => ['required', 'min:3', $georgian],
			'due_date'       => ['required', 'date_format:Y-m-d'],
		];
	}
}
