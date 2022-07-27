<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTablePengunjung extends Seeder
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
            ['id_pengunjung' => '2001', 'nama_pengunjung' => 'Astri', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Perempuan', 'no_tlp' => '08969513496', 'no_ktp' => 27],
            ['id_pengunjung' => '2002', 'nama_pengunjung' => 'Hendra', 'alamat' => 'Libanon', 'jenis_kelamin' => 'Laki-Laki', 'no_tlp' => '08969578965', 'no_ktp' => 28],
            ['id_pengunjung' => '2003', 'nama_pengunjung' => 'Bella', 'alamat' => 'Malaysia', 'jenis_kelamin' => 'Perempuan', 'no_tlp' => '08954678654', 'no_ktp' => 29],
            ['id_pengunjung' => '2004', 'nama_pengunjung' => 'Ncep', 'alamat' => 'Saudi', 'jenis_kelamin' => 'Laki-Laki', 'no_tlp' => '08965678986', 'no_ktp' => 17],
            ['id_pengunjung' => '2005', 'nama_pengunjung' => 'Chyntia', 'alamat' => 'Cibaduyut', 'jenis_kelamin' => 'Perempuan', 'no_tlp' => '089643267531', 'no_ktp' => 30],
        ];

        //Masukkan data ke database
        DB::table('pengunjung')->insert($sample);
    }
}
