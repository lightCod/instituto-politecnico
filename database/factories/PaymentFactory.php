<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'payment_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'refering_mounth' => $faker->month($max = 'now'),
        'obs' => $faker->text
    ];
});
