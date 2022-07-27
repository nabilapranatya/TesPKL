<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableKamar extends Seeder
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
            ['no_kamar' => '335', 'jenis_kamar' => 'Kedap Suara' , 'harga' => 850000],
            ['no_kamar' => '327', 'jenis_kamar' => 'Deluxe Room' , 'harga' => 970000],
            ['no_kamar' => '239', 'jenis_kamar' => 'Suite Room' , 'harga' => 1000000],
        ];

        //Masukkan data ke database
        DB::table('kamar')->insert($sample);
    }
}
