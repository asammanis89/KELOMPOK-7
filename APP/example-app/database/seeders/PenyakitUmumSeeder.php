<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penyakit_umum')->insert([
            [
                'image' => 'assets/images/PILEK.jfif',
                'title' => 'Penyebab dan Cara Mengatasi Pilek',
                'description' => 'Pilek disebabkan oleh virus dan dapat diatasi dengan istirahat cukup, konsumsi cairan, dan obat pereda gejala.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/images/STRES.jpg',
                'title' => 'Mengelola Stres untuk Kesehatan Optimal',
                'description' => 'Stres dapat memicu berbagai penyakit. Atasi dengan teknik relaksasi, olahraga, dan mengatur waktu dengan baik.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/images/MAG.jpg',
                'title' => 'Cara Mengatasi Gangguan Pencernaan',
                'description' => 'Gangguan pencernaan sering kali disebabkan oleh makanan dan stres. Solusinya termasuk pola makan sehat dan relaksasi.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
