<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
	protected $signature = 'user:create';

	protected $description = 'Create a new user';

	public function handle(): void
	{
		$email = $this->ask('Enter email');
		if (User::where('email', $email)->exists()) {
			$this->error('Email already exists. Please choose a different email.');
			return;
		}

		$password = $this->secret('Enter password');
		if (strlen($password) < 4) {
			$this->error('Password must be at least 4 characters long.');
			return;
		}

		User::create([
			'email'    => $email,
			'password' => $password,
		]);

		$this->info('User created successfully!');
	}
}
