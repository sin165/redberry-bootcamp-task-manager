<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		$user = User::factory()->create([
			'email'    => 'test@example.com',
			'password' => 'password',
		]);
		Task::factory(20)->create([
			'user_id' => $user->id,
		]);
	}
}
