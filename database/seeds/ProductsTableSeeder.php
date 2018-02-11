<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
                $limit = 333;
        
                for ($i = 0; $i < $limit; $i++) {
                    DB::table('products')->insert([ //,

                        //'name' => $faker->sentence,
                        //'details' => $faker->paragraph,
                        'name' => $faker->name,
                        'details' => $faker->company,
                        //'contact_number' => $faker->phoneNumber,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                        //'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    ]);
                }
    }
}
