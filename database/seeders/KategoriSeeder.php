<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use Faker\Factory as Faker;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,10) as $i) {
            Kategori::create(['nama_kategori' => $faker->word()]);
        }
    }
}
