<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penerbit;
use Faker\Factory as Faker;

class PenerbitSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1,10) as $i) {
            Penerbit::create([
                'nama_penerbit'=>$faker->company(),
                'alamat'=>$faker->address(),
            ]);
        }
    }
}
