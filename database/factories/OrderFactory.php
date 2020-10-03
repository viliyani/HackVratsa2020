<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\Role;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            $role = Role::where('slug', 'quarantined')->first();
            $users = $role->users;
            return $users->random()->id;
        },
        'category_id' => function(){
            return factory('App\Category')->create()->id;
        },
        'status' => 1,
        'description' => $faker->text(100)
    ];
});
