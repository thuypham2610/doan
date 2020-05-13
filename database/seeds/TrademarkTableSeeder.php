<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrademarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trade = [
            // 一般 Sample account
            [
                'name'   => 'Apple',
                'created_at' => now()
            ],[
                'name'   => 'Samsung',
                'created_at' => now()
            ],[
                'name'   => 'Lenovo',
                'created_at' => now()
            ],[
                'name'   => 'Dell',
                'created_at' => now()
            ],[
                'name'   => 'Asus',
                'created_at' => now()
            ],[
                'name'   => 'HP',
                'created_at' => now()
            ],[
                'name'   => 'Acer',
                'created_at' => now()
            ],[
                'name'   => 'Raxer',
                'created_at' => now()
            ],[
                'name'   => 'MSI',
                'created_at' => now()
            ],[
                'name'   => 'Microsoft',
                'created_at' => now()
            ],[
                'name'   => 'Sony',
                'created_at' => now()
            ],[
                'name'   => 'Toshiba',
                'created_at' => now()
            ],[
                'name'   => 'Compaq',
                'created_at' => now()
            ],[
                'name'   => 'IBM',
                'created_at' => now()
            ],[
                'name'   => 'IBall',
                'created_at' => now()
            ]
        ];

        DB::table('Trademark')->insert($trade);
    }
}
