<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            // 一般 Sample account
            [
                'name'   => 'Máy tính bảng',
            ],[
                'name'   => 'Laptop',
            ],[
                'name'   => 'Desktop',
            ]
        ];

        DB::table('categories')->insert($category);
    }
}
