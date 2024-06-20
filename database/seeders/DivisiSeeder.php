<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::create([
            'divisi' => 'Divisi Produksi'
        ]);
        Divisi::create([
            'divisi' => 'Divisi Desain'
        ]);
        Divisi::create([
            'divisi' => 'Divisi Penjualan'
        ]);
        Divisi::create([
            'divisi' => 'Divisi Administrasi'
        ]);
    }
}
