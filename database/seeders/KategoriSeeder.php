<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Kategori::insert([
            [
                'nama' => 'Makanan',
                'slug' => 'makanan',
                'deskripsi' => 'Kategori untuk produk makanan.',
                'icon' => 'restaurant',
                'urutan' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Minuman',
                'slug' => 'minuman',
                'deskripsi' => 'Kategori untuk produk minuman.',
                'icon' => 'local_cafe',
                'urutan' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Batik & Tekstil',
                'slug' => 'batik-tekstil',
                'deskripsi' => 'Kategori untuk produk batik.',
                'icon' => 'styler',
                'urutan' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
