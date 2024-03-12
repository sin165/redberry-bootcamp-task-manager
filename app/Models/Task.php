<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
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

	public function scopeDueTasksOnly(Builder $query): Builder
	{
		return $query->where('due_date', '<', now());
	}

	public function scopeOrderByField(Builder $query, string $field): Builder
	{
		$direction = 'asc';
		if (strpos($field, '_desc') !== false) {
			$direction = 'desc';
			$field = str_replace('_desc', '', $field);
		}
		return $query->orderBy($field, $direction);
	}
}
