<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WorkActivity;
use Faker\Generator as Faker;



$factory->define(WorkActivity::class, function (Faker $faker) {
    return [
          'schedule_started_at' => $faker->dateTime(),
          'schedule_ended_at' => $faker->dateTime(),
          'started_at' => $faker->dateTime(),
          'ended_at' => $faker->dateTime(),
          'user_id' => $faker->unique()->randomNumber,
          'note' => $faker->text,
    ];
});
