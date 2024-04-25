<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DiseasesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diseases')->insert([
            'namaPenyakit' => 'Leptospirosis',
            'detailPenyakit' => 'test',
            'pencegahanPenyakit' => 'test',
        ]);

        DB::table('diseases')->insert([
            'namaPenyakit' => 'Rabies',
            'detailPenyakit' => 'test',
            'pencegahanPenyakit' => 'test',
        ]);

        DB::table('diseases')->insert([
            'namaPenyakit' => 'Ringworm',
            'detailPenyakit' => 'test',
            'pencegahanPenyakit' => 'test',
        ]);

        DB::table('diseases')->insert([
            'namaPenyakit' => 'Toxoplasma',
            'detailPenyakit' => 'test',
            'pencegahanPenyakit' => 'test',
        ]);

        DB::table('diseases')->insert([
            'namaPenyakit' => 'Toxocariasis',
            'detailPenyakit' => 'test',
            'pencegahanPenyakit' => 'test',
        ]);
    }
}
