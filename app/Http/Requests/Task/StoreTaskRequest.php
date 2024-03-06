<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
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
		$this->replace(['due_date' => Carbon::createFromFormat('Y-m-d', $this->due_date)->startOfDay()]);
	}
}
