<?php

use Faker\Generator as Faker;


$factory->define(\App\Perro::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'race' => $faker->realText(80),
        'weight' => $faker->numberBetween(0,15),
        'image' => 'https://picsum.photos/150/150/?random',
        'sex' => 'macho',
        'color' => $faker->colorName,
        'cut' => $faker->realText(100),
        'notes' => $faker->realText(100),
        'born_date' => $faker->date('d-m-Y',1),
        'transport' => $faker->boolean(50)

    ];
});
