<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [

                [
                    'name' => 'Gudang 1',
                    'email' => 'gudang_1@pengadaan-barang.com',
                    'username' => 'gudang_1',
                    'password' => Hash::make('asdasdasd'),
                    'role' => 'gudang',

                ],
                [
                    'name' => 'Gudang 2',
                    'email' => 'gudang_2@pengadaan-barang.com',
                    'username' => 'gudang_2',
                    'password' => Hash::make('asdasdasd'),
                    'role' => 'gudang',

                ],
                [
                    'name' => 'Admin 1',
                    'email' => 'admin_1@pengadaan-barang.com',
                    'username' => 'admin_1',
                    'password' => Hash::make('asdasdasd'),
                    'role' => 'admin',

                ],

            ]
        );
    }
}
