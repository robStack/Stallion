<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			$user = User::create([
				'username' => $faker->userName,
				'email' => $faker->safeEmail,
				'password' => \Hash::make('123456'),
				'type' => $faker->randomElement(['Leader', 'Integrant', 'Client']),
				'enabled' => $faker->randomElement([true, false]),
				'avatar' => 'assets/img/avatar.png'
			]);

			UserProfile::create([
				'fullname' => $faker->name,
				'website' => $faker->url,
				'about' => $faker->text(255),
				'id' => $user->id
			]);
		}
	}

}