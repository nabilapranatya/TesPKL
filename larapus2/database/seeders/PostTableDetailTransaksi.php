<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableDetailTransaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sample = [
            ['id_dtl_transaksi' => '3fa04', 'no_transaksi' => 0011 , 'no_kamar' => 335],
            ['id_dtl_transaksi' => '7fa05', 'no_transaksi' => 0017 , 'no_kamar' => 327],
            ['id_dtl_transaksi' => '3fa04', 'no_transaksi' => 0020 , 'no_kamar' => 239],
        ];

        //Masukkan data ke database
        DB::table('detail_transaksi')->insert($sample);
    }
}
