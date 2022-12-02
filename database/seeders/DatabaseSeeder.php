<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\KartuMahasiswa;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->Seed(123);
        $prodi =[
          'Teknik Kimia',
          'Teknik Elektro',
          'Teknik Mesin',
          'Teknik Industri',
          'Teknik Lingkungan'
        ];
        $masa_berlaku = ['Berlaku','Habis'];

        for($i=0; $i<10; $i++){
            Mahasiswa::create([
                'npm' => $faker->unique()->numerify('20###########'),
                'nama' => $faker->firstName." ".$faker->lastName,
                'prodi' => $faker->randomElement($prodi),
                
            ]);
        }

        for($i=0; $i<5; $i++){
          KartuMahasiswa::create([
            'no_ktm' => $faker->unique()->numerify("1###############"),
            'masa_berlaku' => $faker->randomElement($masa_berlaku),
            'mahasiswa_id' => $faker->unique()->numberBetween(1,9),
          ]);
        }
    }
}
