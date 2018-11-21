<?php

use Faker\Generator as Faker;


    $factory->define(App\User::class, function (Faker $faker) {
        return [
            'make' => $faker->randomElements($array = array ('ford','honda','toyota')),
            'model' => $faker->randomElements($array = array ('Fiesta','Corolla','Camry','SX','AVM','FX150'))
            'year' => $faker->numberBetween($min = 1995,$max=2018),

        ];
});
