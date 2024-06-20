<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jabatan::create([
            'jabatan' => 'Direktur Utama (CEO)'
        ]);
        Jabatan::create([
            'jabatan' => 'Manajer Produksi'
        ]);
        Jabatan::create([
            'jabatan' => 'Penjahit'
        ]);
        Jabatan::create([
            'jabatan' => 'Desainer'
        ]);
        Jabatan::create([
            'jabatan' => 'Penjualan'
        ]);
    }
}
