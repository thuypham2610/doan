<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SeedMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        $menu2c = [
            [
                'icon'  => 'nav-icon fas fa-tachometer-alt',
                'text'  => 'Product',
                'badge' => [
                    ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => ''],
                ],
                'child' => [
                    [
                        'text' => 'Add',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-tachometer-alt',
                'text'  => 'Category',
                'badge' => [
                    ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => ''],
                ],
                'child' => [
                    [
                        'text' => 'Add',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-tachometer-alt',
                'text'  => 'Trademark',
                'badge' => [
                    ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => ''],
                ],
                'child' => [
                    [
                        'text' => 'Add',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-tachometer-alt',
                'text'  => 'Order',
                'badge' => [
                    ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => ''],
                ],
                'child' => [
                    [
                        'text' => 'Add',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-tachometer-alt',
                'text'  => 'Order Detail',
                'badge' => [
                    ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => ''],
                ],
                'child' => [
                    [
                        'text' => 'Add',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ]
        ];

        $this->menu($menu2c);
    }

    public function menu($menu)
    {
        foreach ($menu as $menu1) {
            $arrData = [
                'icon' => $menu1['icon'],
                'text' => $menu1['text']
            ];
            DB::table('menu')->insert($arrData);
            $menu_id = array_column(json_decode(json_encode(DB::select('select id from menu where text = "'.$menu1['text'].'"')),true),'id');

            if (isset($menu1['badge'])) {
                foreach ($menu1['badge'] as $badge) {
                    $arrbadge = array(
                        'icon'    => $badge['icon'],
                        'text'    => $badge['text'],
                        'type'    => $badge['type'],
                        'menu-id' => $menu_id[0]
                    );
                    DB::table('badge')->insert($arrbadge);
                }
            }

            if (isset($menu1['child'])) {
                foreach ($menu1['child'] as $child) {
                    $arr = [
                        'icon'      => $child['icon'],
                        'text'      => $child['text'],
                        'parent-id' =>$menu_id[0]
                    ];
                    DB::table('menu')->insert($arr);
                    $menu_id2 = array_column(json_decode(json_encode(DB::select('select id from menu where text = "'.$child['text'].'"')),true),'id');

                    if (isset($child['badge'])) {
                        foreach ($child['badge'] as $badge1) {
                            $arrbadge1 = array(
                                'icon'    => $badge1['icon'],
                                'text'    => $badge1['text'],
                                'type'    => $badge1['type'],
                                'menu-id' => $menu_id2[0]
                            );
                            DB::table('badge')->insert($arrbadge1);
                        }
                    }

                    if (isset($child['child'])) {
                        foreach ($child['child'] as $child2) {
                            $arr1 = [
                                'icon'      => $child2['icon'],
                                'text'      => $child2['text'],
                                'parent-id' =>$menu_id2[0]
                            ];
                            DB::table('menu')->insert($arr1);
                        }
                    }
                }
            }


        }

    }
}
