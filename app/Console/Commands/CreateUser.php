<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
	protected $signature = 'user:create {email} {password}';

	protected $description = 'Create a new user with a given email and password';

	public function handle()
	{
		$email = $this->argument('email');
		$password = $this->argument('password');

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
