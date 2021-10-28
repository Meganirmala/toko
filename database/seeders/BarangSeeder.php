<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('table_barang')->insert(
            array(
                array(
                    'nama_barang' => 'Barang Pertama',
                    'deskripsi' => 'Lorem ipsum dolor sit amet',
                    'harga' => 20000,
                    'foto' => NULL,
                    'created_at' => date('Y-m-d'),
                    'updated_at' => date('Y-m-d')
                )
            )
                );
    }
}
