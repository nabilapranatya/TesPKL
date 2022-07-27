<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
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
            ['title' => 'Tips cepat nikah', 'content' => 'assalaam studio'],
            ['title' => 'Harus menunda nikah?', 'content' => 'assalaam studio'],
            ['title' => 'Membangun visi misi keluarga', 'content' => 'assalaam studio'],
        ];
        // MASUKKAN DATA KE DATABASE
        DB::table('posts')->insert($sample);
    }
}
