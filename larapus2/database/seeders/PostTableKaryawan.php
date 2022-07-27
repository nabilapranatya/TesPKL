<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableKaryawan extends Seeder
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
            ['id_karyawan' => '1001', 'nama_karyawan' => 'Kevin', 'jenis_kelamin' => 'Laki-Laki'],
            ['id_karyawan' => '1002', 'nama_karyawan' => 'Ridwan', 'jenis_kelamin' => 'Laki-Laki'],
            ['id_karyawan' => '1003', 'nama_karyawan' => 'Herlina', 'jenis_kelamin' => 'Perempuan'],
            ['id_karyawan' => '1004', 'nama_karyawan' => 'Haryadi', 'jenis_kelamin' => 'Laki-Laki'],
            ['id_karyawan' => '1005', 'nama_karyawan' => 'Shandrina', 'jenis_kelamin' => 'perempuan'],
        ];

        //Masukkan data ke database
        DB::table('karyawan')->insert($sample);
    }
}
