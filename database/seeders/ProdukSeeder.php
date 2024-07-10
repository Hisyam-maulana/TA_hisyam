<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('')->insert([
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Produk 1',
                'price' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Produk 2',
                'price' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Produk 3',
                'price' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}