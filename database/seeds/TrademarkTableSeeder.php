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
            ],[
                'name'   => 'Samsung',
            ],[
                'name'   => 'Lenovo',
            ],[
                'name'   => 'Dell',
            ],[
                'name'   => 'Asus',
            ],[
                'name'   => 'HP',
            ],[
                'name'   => 'Acer',
            ],[
                'name'   => 'Raxer',
            ],[
                'name'   => 'MSI',
            ],[
                'name'   => 'Microsoft',
            ],[
                'name'   => 'Sony',
            ],[
                'name'   => 'Toshiba',
            ],[
                'name'   => 'Compaq',
            ],[
                'name'   => 'IBM',
            ],[
                'name'   => 'IBall',
            ]
        ];

        DB::table('Trademark')->insert($trade);
    }
}
