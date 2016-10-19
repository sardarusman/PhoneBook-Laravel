<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Eloquent::unguard();

      $faker	=	Faker\Factory::create();
     
     foreach (range(1, 8) as $index)
     {

      User::create([

      	'name' 		=> $faker->name,
      	'email' 	=> $faker->email,
        'password'  => Hash::make($faker->word)

      	]);
      }
   }
}