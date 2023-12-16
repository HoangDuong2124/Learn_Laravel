<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Hoàng Dương ',
                'phonenumber' => '09123456789',
                'email' => 'abc@gmail.com',
                'password' => Hash::make('123456789'),

            ],
            [
                'id' => 2,
                'name' => 'Hảo Nhi ',
                'phonenumber' => '09123498765',
                'email' => '1234@gmail.com',
                'password' => Hash::make('111111111'),
            ],
        ]);
        DB::table('account_admin')->insert([
            [
                'id' => 1,
                'admin_email' =>'duonghm@gmail.com',
                'admin_name' => 'Hoàng Dương ',
                'admin_phone' => '09123456789',
                'password' => Hash::make('21242003'),

            ],
            [
                'id' => 2,
                'admin_email' =>'nhinguyen@gmail.com',
                'admin_name' => 'Nguyễn Thị Hảo Nhi ',
                'admin_phone' => '09123456789',
                'password' => Hash::make('21242003'),

            ],
            [
                'id' => 3,
                'admin_email' =>'hanguyen@gmail.com',
                'admin_name' => '<a href="https://www.facebook.com/">click</a> ',
                'admin_phone' => '09123456789',
                'password' => Hash::make('21242003'),

            ],
        ]);
    }
}
