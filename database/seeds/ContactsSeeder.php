<?php

use Illuminate\Database\Seeder;

use App\contacts;

class ContactsSeeder extends Seeder
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

     foreach (range(1, 8) as $index) {
     

      contacts::create([

      	'name' 		=> $faker->name,
      	'phone' 	=> $faker->phoneNumber,
      	'notes' 	=> $faker->text,
        'user_id' 	=> $faker->randomDigit,


      	]);
      }
   }
}
