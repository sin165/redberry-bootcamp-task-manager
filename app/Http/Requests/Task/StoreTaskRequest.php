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
			'name_en'        => ['required', 'min:3', $english],
			'name_ka'        => ['required', 'min:3', $georgian],
			'description_en' => ['required', 'min:3', $english],
			'description_ka' => ['required', 'min:3', $georgian],
			'due_date'       => ['required', 'date_format:Y-m-d'],
		];
	}

	protected function passedValidation(): void
	{
		$data = $this->validated();
		$this->replace([
			'user_id' => auth()->id(),
			'name'    => [
				'en' => $data['name_en'],
				'ka' => $data['name_ka'],
			],
			'description' => [
				'en' => $data['description_en'],
				'ka' => $data['description_ka'],
			],
			'due_date' => $data['due_date'],
		]);
	}
}
