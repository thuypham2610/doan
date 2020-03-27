<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            // 一般 Sample account
            [
                'username' => 'thuy123',
                'name'     => 'Thuy',
                'email'    => '1',
                'phone'    => '12345',
                'address'  => 'nam trieu',
                'birthday' => Carbon::parse('26-10-1998'),
                'password' => Hash::make('12345'),
                'role'     => 1, // 区分 1: 一般/ 2: 管理者/ 3: アシスタント
            ],
        ];

        DB::table('users')->insert($user);
    }
}
