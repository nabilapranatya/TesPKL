<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableTransaksi extends Seeder
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
            ['no_transaksi' => 1, 'id_pengunjung' => '2001', 'id_karyawan' => '1001', 'jmlh_kamar' => 1, 'tgl_masuk' => '2022-10=27', 'tgl_keluar' => '2022-10-28', 'lama_nginap' => 1, 'total_harga' => 550000],
            ['no_transaksi' => 2, 'id_pengunjung' => '2002', 'id_karyawan' => '1002', 'jmlh_kamar' => 2, 'tgl_masuk' => '2022-05-01', 'tgl_keluar' => '2022-05-03', 'lama_nginap' => 2, 'total_harga' => 650000],
            ['no_transaksi' => 3, 'id_pengunjung' => '2003', 'id_karyawan' => '1003', 'jmlh_kamar' => 4, 'tgl_masuk' => '2022-07-07', 'tgl_keluar' => '2022-07-10', 'lama_nginap' => 3, 'total_harga' => 750000],
            ['no_transaksi' => 4, 'id_pengunjung' => '2004', 'id_karyawan' => '1004', 'jmlh_kamar' => 5, 'tgl_masuk' => '2022-01-09', 'tgl_keluar' => '2022-01-13', 'lama_nginap' => 4, 'total_harga' => 9500000],
            ['no_transaksi' => 5, 'id_pengunjung' => '2005', 'id_karyawan' => '1005', 'jmlh_kamar' => 3, 'tgl_masuk' => '2022-12-15', 'tgl_keluar' => '2022-12-20', 'lama_nginap' => 5, 'total_harga' => 15000000],
        ];

        //Masukkan data ke database
        DB::table('transaksi')->insert($sample);
    }
}
