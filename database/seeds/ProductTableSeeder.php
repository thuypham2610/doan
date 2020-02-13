<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            // 一般 Sample account
            [
                'name'         => 'Asus VivoBook A512F i5 8265U',
                'quantity'     => 100,
                'price'        => 17490000,
                'picture'      => 'asus-vivobook-a512f-i5-8265u-8gb-512gb-win10-ej22-(3).jpg',
                'description'  => '',
                'trademark_id' => 5,
                'cate_id'      => 2
            ],
            [
                'name'         => 'Acer Swift 3 SF315-51-54H0',
                'quantity'     => 100,
                'price'        => 16990000,
                'picture'      => 'acer-sf315-51-54h0-i5-8250u-4gb-1tb-win10-1-1-org.jpg',
                'description'  => '',
                'trademark_id' => 5,
                'cate_id'      => 2
            ],
            [
                'name'         => 'Dell Inspiron 5584 i5 8265U',
                'quantity'     => 100,
                'price'        => 17490000,
                'picture'      => 'dell-inspiron-5584-i5-8265u-4gb-1tb-mx130-win10-n-1-2-org.jpg',
                'description'  => '',
                'trademark_id' => 4,
                'cate_id'      => 2
            ],
            [
                'name'         => 'Máy tính bảng Samsung Galaxy Tab A8',
                'quantity'     => 100,
                'price'        => 3690000,
                'picture'      => 'samsung-galaxy-tab-a8-t295-2019-den-1-org.jpg',
                'description'  => '',
                'trademark_id' => 2,
                'cate_id'      => 1
            ],
            [
                'name'         => 'Máy tính bảng Lenovo Tab E10 TB-X104L',
                'quantity'     => 100,
                'price'        => 3990000,
                'picture'      => 'lenovo-tab-e10-tb-x104l-den-1-1-org.jpg',
                'description'  => '',
                'trademark_id' => 3,
                'cate_id'      => 1
            ],
            [
                'name'         => 'Máy tính bảng iPad 10.2 inch Wifi 128GB (2019)',
                'quantity'     => 100,
                'price'        => 11990000,
                'picture'      => 'ipad-10-2-inch-wifi-128gb-2019-bac-1-org.jpg',
                'description'  => '',
                'trademark_id' => 1,
                'cate_id'      => 1
            ],
            [
                'name'         => 'Máy tính bảng iPad 10.2 inch Wifi 32GB (2019)',
                'quantity'     => 100,
                'price'        => 9990000,
                'picture'      => 'ipad-10-2-inch-wifi-32gb-2019-xam-1-org.jpg',
                'description'  => '',
                'trademark_id' => 1,
                'cate_id'      => 1
            ],
            [
                'name'         => 'Máy tính bảng Samsung Galaxy Tab A 10.1 (2019)',
                'quantity'     => 100,
                'price'        => 7490000,
                'picture'      => 'samsung-galaxy-tab-a-101-t515-2019-vang-1-org.jpg',
                'description'  => '',
                'trademark_id' => 2,
                'cate_id'      => 1
            ],
            [
                'name'         => 'Máy tính bảng Samsung Galaxy Tab A 8.0 SPen (2019)',
                'quantity'     => 100,
                'price'        => 6990000,
                'picture'      => 'samsung-galaxy-tab-a8-plus-p205-xam-1-org.jpg',
                'description'  => '',
                'trademark_id' => 2,
                'cate_id'      => 1
            ],
            [
                'name'         => 'Máy tính bảng Samsung Galaxy Tab S2 8',
                'quantity'     => 100,
                'price'        => 3000000,
                'picture'      => 'samsung-galaxy-tab-s2-84--1.jpg',
                'description'  => '',
                'trademark_id' => 2,
                'cate_id'      => 1
            ],
            [
                'name'         => 'HP Pavilion 590 p0108d i3 9100/4GB/1TB/Bàn phim&Chuột/Win10 (6DV41AA)',
                'quantity'     => 100,
                'price'        => 9390000,
                'picture'      => 'hp-pavilion-590-p0108d-6dv41aa-1-org.jpg',
                'description'  => '',
                'trademark_id' => 3,
                'cate_id'      => 3
            ],
            [
                'name'         => 'Dell Vostro 3470 i3 9100/4GB/1TB/Bàn phím&Chuột/Win10 (STI31206W)',
                'quantity'     => 100,
                'price'        => 10190000,
                'picture'      => 'dell-vostro-3470-sti31206w-den-1-org.jpg',
                'description'  => '',
                'trademark_id' => 4,
                'cate_id'      => 3
            ],
            [
                'name'         => 'HP 290 p0110d i3 9100/4GB/1TB/Bàn phím&Chuột/Win10 (6DV51AA)',
                'quantity'     => 100,
                'price'        => 9290000,
                'picture'      => 'hp-slimline-290-p0110d-6dv51aa-den-1-org.jpg',
                'description'  => '',
                'trademark_id' => 3,
                'cate_id'      => 3
            ],
            [
                'name'         => 'HP AIO 22-b201d i3 7100U/4GB/1TB/Bàn phím&Chuột/Win10 (Z8F51AA)',
                'quantity'     => 100,
                'price'        => 15490000,
                'picture'      => 'may-tinh-bo-aio-hp-22-b201d-i3-7100u-4gb-1tb-dos-1-org.jpg',
                'description'  => '',
                'trademark_id' => 3,
                'cate_id'      => 3
            ],
            [
                'name'         => 'MTB Dell Vostro 3668MT i5 7400 (PWVK41)',
                'quantity'     => 100,
                'price'        => 11290000,
                'picture'      => 'may-tinh-de-ban-dell-vostro-3668-mt-core-i5-740-300x300.jpg',
                'description'  => '',
                'trademark_id' => 4,
                'cate_id'      => 3
            ]


        ];

        DB::table('products')->insert($product);
    }
}
