<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'current_password' => ['nullable', 'required_with:new_password,retype_password', 'current_password'],
			'new_password'     => ['nullable', 'required_with:current_password,retype_password', 'min:4'],
			'retype_password'  => ['required_with:current_password,new_password', 'same:new_password'],
			'profile_picture'  => ['image'],
			'cover'            => ['image'],
		];
	}
}
