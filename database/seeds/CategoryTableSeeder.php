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
                'created_at' => now()
            ],[
                'name'   => 'Laptop',
                'created_at' => now()
            ],[
                'name'   => 'Desktop',
                'created_at' => now()
            ]
        ];

        DB::table('categories')->insert($category);
    }
}
