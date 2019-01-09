<?php

use Faker\Generator as Faker;
use App\Models\Admin as Admin;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => 'aya',
        'email' => 'aya@admin.com',
        'password' => bcrypt(123456789),
    ];
});
