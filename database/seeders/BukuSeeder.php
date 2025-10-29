<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,10) as $i) {
            Buku::create([
                'judul'=>$faker->sentence(3),
                'kategori_id'=>Kategori::inRandomOrder()->first()->id,
                'penerbit_id'=>Penerbit::inRandomOrder()->first()->id,
                'tahun_terbit'=>$faker->year(),
            ]);
        }
    }
}
