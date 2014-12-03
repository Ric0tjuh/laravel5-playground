<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Song;

class SongsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Song::truncate();

		foreach(range(1, 10) as $index)
		{
			Song::create([
				'title' => $faker->realText($faker->numberBetween(10,40)),
				'lyrics' => $faker->paragraph(10)

			]);
		}
	}

}
