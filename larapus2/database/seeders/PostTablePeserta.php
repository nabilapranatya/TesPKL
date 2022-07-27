<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTablePeserta extends Seeder
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
            ['NoSISWA' => 2001, 'Kode_MP' => 'MP01'],
            ['NoSISWA' => 2001, 'Kode_MP' => 'MP02'],
            ['NoSISWA' => 2003, 'Kode_MP' => 'MP01'],
            ['NoSISWA' => 2003, 'Kode_MP' => 'MP02'],
            ['NoSISWA' => 2004, 'Kode_MP' => 'MP01'],
            ['NoSISWA' => 2004, 'Kode_MP' => 'MP03'],
        ];

         //Masukkan data ke database
         DB::table('peserta')->insert($sample);
    }
}
