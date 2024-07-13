<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->insert(
            [
                [
                    'nama_bahan' => 'Raket Bulu Tangkis',
                    'stok_bahan' => 20,
                    'satuan_bahan' => 'pax',
                ],
                [
                    'nama_bahan' => 'Bola Sepak',
                    'stok_bahan' => 50,
                    'satuan_bahan' => 'pax',
                ],
            ]
        );
    }
}
