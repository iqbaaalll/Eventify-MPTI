<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

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
    }
}
