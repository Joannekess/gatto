<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 3,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 4,
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 5,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 6,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 7,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 8,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 1,
            'gejala_id' => 9,
            'CFValue' => 1,
        ]);

        // P02
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 1,
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 10,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 11,
            'CFValue' => 1,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 12,
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 13,
            'CFValue' => 1,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 14,
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 15,
            'CFValue' => 1,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 16,
            'CFValue' => 1,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 17,
            'CFValue' => 1,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 2,
            'gejala_id' => 18,
            'CFValue' => 1,
        ]);


        // P03
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 19,
            'CFValue' => 1,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 20,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 21,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 22,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 23,
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 3,
            'gejala_id' => 24,
            'CFValue' => 1,
        ]);

        // P04
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 1,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 4,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 25,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 26,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 3,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 2,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 27,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 28,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 8,
            'CFValue' => 0.6,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 4,
            'gejala_id' => 29,
            'CFValue' => 0.8,
        ]);

        // P05
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 2,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 3,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 8,
            'CFValue' => 0.4,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 30,
            'CFValue' => 0.2,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 9,
            'CFValue' => 0.8,
        ]);
        DB::table('rules')->insert([
            'penyakit_id' => 5,
            'gejala_id' => 31,
            'CFValue' => 1,
        ]);
        
        // $totalPenyakit = count(DB::table('diseases')->get());
        // Log::info($totalPenyakit);
        // for($j = 1; $j <= $totalPenyakit; $j++){
        //     $i = count(DB::table('rules')->where('penyakit_id',[$j])->get()) + 1;
        //     for($i; $i <= 32; $i++){
        //     DB::table('rules')->insert([
        //         'penyakit_id' => $j,
        //         'gejala_id' => $i,
        //         'CFValue' => 0,
        //     ]);
        //     Log::info($i. 'dan' .$j);
        //     }
        // }

        $request = DB::table('rules')->get();
        Log::info($request);

        $totalPenyakit = count(DB::table('diseases')->get());
        Log::info($totalPenyakit);
        for($j = 1; $j <= $totalPenyakit; $j++){
            for($i = 1; $i < 32; $i++){
                if(DB::table('rules')->where('penyakit_id', $j)->where('gejala_id', $i)->doesntExist()){
                    DB::table('rules')->insert([
                        'penyakit_id' => $j,
                        'gejala_id' => $i,
                        'CFValue' => 0,
                    ]);
                }
            }
        }

        
        // $i = count(DB::table('rules')->where('penyakit_id',[$j])->get());
        // for($i; $i < 32; $i++){
        //     DB::table('rules')->insert([
        //         'penyakit_id' => 1,
        //         'gejala_id' => $i,
        //         'CFValue' => 0,
        //     ]);
        // }

    }
}
