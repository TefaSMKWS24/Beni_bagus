<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_barang' => 'B001',
                'nama_barang' => 'beras',
                'harga' => '10000',
                'stok' => '10',
                'kode_kategori' => 'K001',
            ],
            [   'kode_barang' => 'B002',
                'nama_barang' => 'telur',
                'harga' => '10000',
                'stok' => '10',
                'kode_kategori' => 'K001',
        ],
        ];
        DB::table('barang')->insert($data);
    }
}
