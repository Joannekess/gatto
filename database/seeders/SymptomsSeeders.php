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
            'namaGejala' => 'Diare',
        ]);
        //G04
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G04',
            'namaGejala' => 'Nafsu makan menghilang',
        ]);
        //G05
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G05',
            'namaGejala' => 'Kuning pada area mata',
        ]);
        //G06
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G06',
            'namaGejala' => 'Warna mulut menguning',
        ]);
        //G07
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G07',
            'namaGejala' => 'Konjungtivitis (peradangan pada mata)',
        ]);
        //G08
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G08',
            'namaGejala' => 'Tubuh kurus',
        ]);
        //G09
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G09',
            'namaGejala' => 'Lesu',
        ]);
        //G10
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G10',
            'namaGejala' => 'Gelisah atau terganggu',
        ]);
        //G11
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G11',
            'namaGejala' => 'Agresif',
        ]);
        //G12
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G12',
            'namaGejala' => 'Sensitif dan reaktif terhadap rangsangan',
        ]);
        //G13
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G13',
            'namaGejala' => 'Hipersalivasi (produksi air liur berlebih)',
        ]);
        //G14
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G14',
            'namaGejala' => 'Tidak fokus / tidak konsentrasi',
        ]);
        //G15
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G15',
            'namaGejala' => 'Pupil mata melebar',
        ]);
        //G16
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G16',
            'namaGejala' => 'Cenderung di tempat gelap / fotofobia',
        ]);
        //G17
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G17',
            'namaGejala' => 'Reaksi berlebihan terhadap cahaya dan suara',
        ]);
        //G18
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G18',
            'namaGejala' => 'Takut air / hidrophobia',
        ]);
        //G19
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G19',
            'namaGejala' => 'Kerontokan bulu',
        ]);
        //G20
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G20',
            'namaGejala' => 'Kerusakan bulu (patah, kusam, kering)',
        ]);
        //G21
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G21',
            'namaGejala' => 'Sisa kulit kering seperti ketombe',
        ]);
        //G22
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G22',
            'namaGejala' => 'Beberapa bagian kulit mengeras',
        ]);
        //G23
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G23',
            'namaGejala' => 'Beberapa bagian kulit bersisik',
        ]);
        //G24
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G24',
            'namaGejala' => 'Botak pada beberapa bagian tubuh',
        ]);
        //G25
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G25',
            'namaGejala' => 'Pembesaran perut / kembung',
        ]);
        //G26
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G26',
            'namaGejala' => 'Berat badan menurun',
        ]);
        //G27
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G27',
            'namaGejala' => 'Lidahnya pucat / berwarna putih',
        ]);
        //G28
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G28',
            'namaGejala' => 'Ukuran pupil mata tidak normal / tidak sama besar',
        ]);
        //G29
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G29',
            'namaGejala' => 'Sulit menahan buang air kecil',
        ]);
        //G30
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G30',
            'namaGejala' => 'Perut membuncit',
        ]);
        //G31
        DB::table('symptoms')->insert([
            'kodeGejala' => 'G31',
            'namaGejala' => 'Terdapat cacing berwarna kuning krem pada muntahan atau kotorannya ',
        ]);

    }
}