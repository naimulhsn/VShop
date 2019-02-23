<?php

use App\User;
use App\Product;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
            'country'  => 'Bangladesh',
            'city'     => 'Dhaka'
        ]);

        $faker = Faker\Factory::create();
        for($i=0; $i<100; $i++){
            Product::create([
                'name' => ucfirst($faker->word),
                'price' => rand(100, 10000),
                'discount' => rand(0, 10),
                'description' => $faker->paragraph. " ". $faker->paragraph. " ". $faker->paragraph. " ". $faker->paragraph,
                'image' => 'https://via.placeholder.com/150x200'
            ]);
        }
    }
}
