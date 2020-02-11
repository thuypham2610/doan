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
                'text'  => 'Dashboard',
                'badge' => [
                    ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => ''],
                ],
                'child' => [
                    [
                        'text' => 'Dashboard v1',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Dashboard v2',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Dashboard v3',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-th',
                'text'  => 'Widgets',
                'badge' => [
                    ['text' => 'New', 'icon' => '', 'type' => 'danger'],
                ],
            ],
            [
                'icon'  => 'nav-icon fas fa-copy',
                'text'  => 'Layout Options',
                'badge' => [
                    ['text' => '6', 'icon' => 'fas fa-angle-left right', 'type' => 'info'],
                ],
                'child' => [
                    [
                        'text' => 'Top Navigation',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Boxed',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Dashboard v3',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-chart-pie',
                'text'  => 'Charts',
                'badge' => [
                    ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => '']
                ],
                'child' => [
                    [
                        'text' => 'ChartJS',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Flot',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Inline',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-tree',
                'text'  => ' UI Elements',
                'badge' => [
                    ['text' => '', 'icon' => 'fas fa-angle-left right', 'type' => ''],
                ],
                'child' => [
                    [
                        'text' => 'General',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Icons',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Buttons',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Sliders',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Modals & Alerts',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Navbar & Tabs',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Timeline',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Ribbons',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-edit',
                'text'  => 'Forms',
                'badge' => [
                    ['text' => '', 'icon' => 'fas fa-angle-left right', 'type' => '']
                ],
                'child' => [
                    [
                        'text' => 'Advanced Elements',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Editors',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Validation',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-table',
                'text'  => 'Tables',
                'badge' => [
                    ['text' => '', 'icon' => 'fas fa-angle-left right', 'type' => '']
                ],
                'child' => [
                    [
                        'text' => 'Simple Tables',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'DataTables',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'jsGrid',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon far fa-calendar-alt',
                'text'  => 'Calendar',
                'badge' => [
                    ['text' => '2', 'icon' => '', 'type' => 'info']
                ],
            ],
            [
                'icon'  => 'nav-icon far fa-image',
                'text'  => 'Gallery',
                'badge' => [
                    ['text' => '', 'icon' => '', 'type' => '']
                ],
            ],
            [
                'icon'  => 'nav-icon far fa-envelope',
                'text'  => 'Mailbox',
                'badge' => [
                    ['text' => '', 'icon' => 'fas fa-angle-left right', 'type' => '']
                ],
                'child' => [
                    [
                        'text' => 'Inbox',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Compose',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Read',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-book',
                'text'  => 'Pages',
                'badge' => [
                    ['text' => '', 'icon' => 'fas fa-angle-left right', 'type' => '']
                ],
                'child' => [
                    [
                        'text' => 'Invoice',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Profile',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'E-commerce',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Projects',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Project Add',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Project Edit',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Project Detail',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Contacts',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-book',
                'text'  => 'Extras',
                'badge' => [
                    ['text' => '', 'icon' => 'fas fa-angle-left right', 'type' => '']
                ],
                'child' => [
                    [
                        'text' => 'Login',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Register',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Forgot Password',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Recover Password',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Lockscreen',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Legacy User Menu',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Language Menu',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Error 404',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Error 500',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Pace',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Blank Page',
                        'icon' => 'far fa-circle nav-icon'
                    ],
                    [
                        'text' => 'Starter Page',
                        'icon' => 'far fa-circle nav-icon'
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon fas fa-circle',
                'text'  => 'Level 1',
                'badge' => [
                    ['text' => '', 'icon' => '', 'type' => '']
                ],
            ],
            [
                'icon'  => 'nav-icon fas fa-circle',
                'text'  => 'Level 1',
                'badge' => [
                    ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => '']
                ],
                'child' => [
                    [
                        'text'  => 'Level 2',
                        'icon'  => 'far fa-circle nav-icon',
                        'badge' => [
                            ['text' => '', 'icon' => '', 'type' => '']
                        ],
                    ],
                    [
                        'text'  => 'Level 21',
                        'icon'  => 'far fa-circle nav-icon',
                        'badge' => [
                            ['text' => '', 'icon' => 'right fas fa-angle-left', 'type' => '']
                        ],
                        'child' => [
                            [
                                'text' => 'Level 3',
                                'icon' => 'far fa-dot-circle nav-icon',
                            ],
                            [
                                'text' => 'Level 3',
                                'icon' => 'far fa-dot-circle nav-icon',
                            ],
                            [
                                'text' => 'Level 3',
                                'icon' => 'far fa-dot-circle nav-icon',
                            ]
                        ]
                    ]
                ]
            ],
            [
                'icon'  => 'nav-icon far fa-circle text-danger',
                'text'  => 'Important',
                'badge' => [
                    ['text' => '', 'icon' => '', 'type' => '']
                ],
            ],
            [
                'icon'  => 'nav-icon far fa-circle text-warning',
                'text'  => 'Warning',
                'badge' => [
                    ['text' => '', 'icon' => '', 'type' => '']
                ],
            ],
            [
                'icon'  => 'nav-icon fas fa-circle',
                'text'  => 'Level 1',
                'badge' => [
                    ['text' => '', 'icon' => '', 'type' => '']
                ],
            ],
            [
                'icon'  => 'nav-icon far fa-circle text-info',
                'text'  => 'Informational',
                'badge' => [
                    ['text' => '', 'icon' => '', 'type' => '']
                ],
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
               /* foreach ($menu1['child'] as $child) {
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
                }*/
               $this->menu($menu1['child']);
            }


        }

    }
}
