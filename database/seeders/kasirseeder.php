<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kasirseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_kasir' => 'K001',
                'nama_kasir' => 'kasir 1',
                'password' => hash::make('1234'),
            ]
            ];
        DB::table('kasir')->insert($data);
       
    }
}
