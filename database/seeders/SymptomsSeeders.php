<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymptomsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //G01
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G01',
            'namaGejala' => 'Demam',
        ]);
        //G02
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G02',
            'namaGejala' => 'Muntah',
        ]);
        //G03
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G03',
            'namaGejala' => 'Merasa pusing',
        ]);
        //G04
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G04',
            'namaGejala' => 'Diare',
        ]);
        //G05
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G05',
            'namaGejala' => 'Merasa lemas',
        ]);
    }
}