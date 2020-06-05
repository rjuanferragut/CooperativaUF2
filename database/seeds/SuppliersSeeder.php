<?php

use Illuminate\Database\Seeder;
use App\Suppliers;
class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $suppliers = [
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
      [
        'name'      => Str::random(7),
        'description' => Str::random(15),
        'email'     => Str::random(7).'@gmail.com',
        'address'   => 'calle '.Str::random(7).' '.rand(0, 10),
        'phone'     => rand(100000000, 999999999),
      ],
    ];

    foreach ($suppliers as $key => $value) {
      Suppliers::create($value);
    }
    }
}
