<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            PostTableSeeder::class,
    );
        $this->call(PostTableSiswa::class);
        $this->call(PostTablePeserta::class);
        $this->call(PostTableMapel::class);
        $this->call(PostTableKaryawan::class);
        $this->call(PostTablePengunjung::class);
        $this->call(PostTableTransaksi::class);
        $this->call(PostTableDetailTransaksi::class);
        $this->call(PostTableKamar::class);
        // \App\Models\User::factory(10)->create();
    }
}
