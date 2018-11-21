<?php

use Faker\Generator as Faker;


    $factory->define(App\Car::class, function (Faker $faker) {
        return [
            'make' => $faker->randomElement($array = array ('ford','honda','toyota')),
            'model' => $faker->randomElement($array = array ('SX','AVM','FX150')),
            'year' => $faker->numberBetween($min = 1995,$max=2018),

        ];
});
