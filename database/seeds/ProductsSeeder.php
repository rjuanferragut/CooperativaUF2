<?php

use Illuminate\Database\Seeder;
use App\Products;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $products = [
      [
        'name'        => 'patatas',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
      [
        'name'        => 'zanahoria',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
      [
        'name'        => 'calabacin',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
      [
        'name'        => 'calabaza',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
      [
        'name'        => 'pepino',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
      [
        'name'        => 'trigo',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
      [
        'name'        => 'cevada',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
      [
        'name'        => 'pimiento',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
      [
        'name'        => 'grano',
        'price'       => rand(10,150)/10,
        'description' => Str::random(15),
        'id_supplier' =>  rand(1,17),
      ],
    ];

    foreach ($products as $key => $value) {
      Products::create($value);
    }
    }
}
