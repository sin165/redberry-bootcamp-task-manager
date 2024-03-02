<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Task extends Model
{
	use HasFactory;

	use HasTranslations;

	public $translatable = ['name', 'description'];

	protected $guarded = [];

	protected $casts = [
		'due_date' => 'datetime',
	];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
