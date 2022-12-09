<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Kategori::create([
            'nama' => 'Music'
        ]);

        Kategori::create([
            'nama' => 'Lomba'
        ]);

        Kategori::create([
            'nama' => 'Exhibition'
        ]);

        Event::create([
            'nama' => 'Mahakarya Brawijaya',
            'tanggalMulai' =>  date("Y-m-d"),
            'tanggalBerakhir' => date("Y-m-d"),
            "jamMulai" => date("h:i:s"),
            "jamBerakhir" => date("h:i:s"),
            "lokasi" => "Malang Kota",
            "budget" => 1000000,
            "kapasitas" => 1000,
            "imagePath" => "image 16.png"
        ]);
        Event::create([
            'nama' => 'Kampung Budaya',
            'tanggalMulai' =>  date("Y-m-d"),
            'tanggalBerakhir' => date("Y-m-d"),
            "jamMulai" => date("h:i:s"),
            "jamBerakhir" => date("h:i:s"),
            "lokasi" => "Universitas Brawijaya",
            "budget" => 3000000,
            "kapasitas" => 3000,
            "imagePath" => "image 25.png"
        ]);
    }
}
