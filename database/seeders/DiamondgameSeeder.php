<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DiamondgameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diamondgame')->insert([
            [
                'server' => 1,
                'pilih_nominal' => '100 Diamonds',
                'jumlah_pembelian' => 1,
                'pembayaran' => 'Credit Card',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'server' => 2,
                'pilih_nominal' => '200 Diamonds',
                'jumlah_pembelian' => 2,
                'pembayaran' => 'PayPal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'server' => 3,
                'pilih_nominal' => '500 Diamonds',
                'jumlah_pembelian' => 3,
                'pembayaran' => 'Bank Transfer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}