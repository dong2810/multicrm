<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Warehouse\Entities\Staff::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
