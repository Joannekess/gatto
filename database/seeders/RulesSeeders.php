<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RulesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // P01
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 1,
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 2,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 3,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 4,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 5,
            'CFValue' => 0.2,
        ]);

        // P02
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 1,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 2,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 3,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 4,
            'CFValue' => 1,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 5,
            'CFValue' => 0.4,
        ]);

        // P03
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 1,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 2,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 3,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 4,
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 5,
            'CFValue' => 0.2,
        ]);

        // P04
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 1,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 2,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 3,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 4,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 5,
            'CFValue' => 0.4,
        ]);

        // P05
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 1,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 2,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 3,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 4,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 5,
            'CFValue' => 0.2,
        ]);

    }
}
