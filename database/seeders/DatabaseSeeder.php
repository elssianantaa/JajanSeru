<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Food;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Elsi',
            'email' => 'elsi@gmail.com',
            'password' => bcrypt('12345'),
            'foto' => '-'
        ]);

        Kategori::create([
            'nm_kategori' => 'Noddles'
        ]);

        Kategori::create([
            'nm_kategori' => 'Drink'
        ]);

        Kategori::create([
            'nm_kategori' => 'otherFoods'
        ]);

        Kategori::create([
            'nm_kategori' => 'oleh-oleh'
        ]);

        Food::create([
            'foodname' => 'Megumi daifuku mochi',
            'foto' => '-',
            'lokasi' => 'Jl. Gegerkalong Girang No.99, Bandung',
            'longtitude' => '108.1973342912729',
            'latitude' => '-7.316737198563659',
            'harga' => 'Rp.10.000',
            'jam' => 'Buka 24 jam',
            'desk' => 'Enak dan lezat',
            'rating' => '4.4',
            'kategoris_id' => 3
        ]);

        Food::create([
            'foodname' => 'Seblak Ceu Edah',
            'foto' => '-',
            'lokasi' => 'Argasari, Kec. Cihideung, Kab. Tasikmalaya, Jawa Barat 46122',
            'longtitude' => '108.21119121989958', 
            'latitude' => '-7.323651324231557',
            'harga' => 'Rp.15.000',
            'jam' => 'Buka pukul 09.00',
            'desk' => 'Dengan toping lengkap dan harga terjangkau',
            'rating' => '4.5',
            'kategoris_id' => 1
        ]);

    }
}
