<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = [
        [
          'name' => 'Enric Mieza',
          'email' => 'emieza'.'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => 'Leandro Zabala',
          'email' => 'lzabala'.'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 0,
          'password'  => Hash::make('password'),
        ],
        [
          'name' => Str::random(7),
          'email' => Str::random(7).'@gmail.com',
          'is_admin'  => 1,
          'password'  => Hash::make('password'),
        ],
      ];

      foreach ($user as $key => $value) {
        User::create($value);
      }
    }
}
