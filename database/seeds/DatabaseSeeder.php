<?php

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
        $this->call([
<<<<<<< HEAD
            CategoryTableSeeder::class,
            ProductTableSeeder::class,
            TrademarkTableSeeder::class,
            UsersTableSeeder::class
=======
            UsersTableSeeder::class,
            TrademarkTableSeeder::class
>>>>>>> a111b71639928994be8e404dbc42f04c826ddc26
        ]);
    }
}
