<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan semua seeder yang diperlukan aplikasi.
     */
    public function run(): void
    {
        $this->call([
            KategoriSeeder::class,
            PenerbitSeeder::class,
            BukuSeeder::class,
        ]);
    }
}
