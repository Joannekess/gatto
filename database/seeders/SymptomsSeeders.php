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
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Demam',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Demam',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Demam',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Demam',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G01',
            'NamaGejala' => 'Demam',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G02
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Muntah',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Muntah',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Muntah',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Muntah',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G02',
            'NamaGejala' => 'Muntah',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G03
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Merasa pusing',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Merasa pusing',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Merasa pusing',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Merasa pusing',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G03',
            'NamaGejala' => 'Merasa pusing',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G04
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Diare',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Diare',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Diare',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Diare',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G04',
            'NamaGejala' => 'Diare',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G05
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Kuning pada area mata',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Kuning pada area mata',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Kuning pada area mata',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Kuning pada area mata',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G05',
            'NamaGejala' => 'Kuning pada area mata',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G06
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Warna mulut menguning',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Warna mulut menguning',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Warna mulut menguning',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Warna mulut menguning',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G06',
            'NamaGejala' => 'Warna mulut menguning',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G07
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Ruam',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Ruam',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Ruam',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Ruam',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G07',
            'NamaGejala' => 'Ruam',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G08
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Konjungtivitis (peradangan pada mata)',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Konjungtivitis (peradangan pada mata)',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Konjungtivitis (peradangan pada mata)',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Konjungtivitis (peradangan pada mata)',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G08',
            'NamaGejala' => 'Konjungtivitis (peradangan pada mata)',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G09
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Tubuh kurus',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Tubuh kurus',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Tubuh kurus',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Tubuh kurus',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G09',
            'NamaGejala' => 'Tubuh kurus',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G10
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Lesu',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Lesu',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Lesu',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Lesu',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G10',
            'NamaGejala' => 'Lesu',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G11
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Gelisah / terganggu',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Gelisah / terganggu',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Gelisah / terganggu',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Gelisah / terganggu',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G11',
            'NamaGejala' => 'Gelisah / terganggu',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G12
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Agresif',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Agresif',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Agresif',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Agresif',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G12',
            'NamaGejala' => 'Agresif',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G13
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Hiperaktif',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Hiperaktif',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Hiperaktif',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Hiperaktif',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G13',
            'NamaGejala' => 'Hiperaktif',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G14
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Hipersaliva',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Hipersaliva',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Hipersaliva',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Hipersaliva',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G14',
            'NamaGejala' => 'Hipersaliva',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G15
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Tatapan kosong',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Tatapan kosong',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Tatapan kosong',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Tatapan kosong',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G15',
            'NamaGejala' => 'Tatapan kosong',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G16
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Pembengkakan benjolan mata',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Pembengkakan benjolan mata',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Pembengkakan benjolan mata',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Pembengkakan benjolan mata',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G16',
            'NamaGejala' => 'Pembengkakan benjolan mata',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G17
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Merasa bahagia di tempat gelap',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Merasa bahagia di tempat gelap',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Merasa bahagia di tempat gelap',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Merasa bahagia di tempat gelap',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G17',
            'NamaGejala' => 'Merasa bahagia di tempat gelap',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G18
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Reaksi berlebihan terhadap cahaya dan suara',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Reaksi berlebihan terhadap cahaya dan suara',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Reaksi berlebihan terhadap cahaya dan suara',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Reaksi berlebihan terhadap cahaya dan suara',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G18',
            'NamaGejala' => 'Reaksi berlebihan terhadap cahaya dan suara',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G19
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Kehilangan bulu',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Kehilangan bulu',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Kehilangan bulu',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Kehilangan bulu',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G19',
            'NamaGejala' => 'Kehilangan bulu',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G20
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Patah bulu',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Patah bulu',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Patah bulu',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Patah bulu',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G20',
            'NamaGejala' => 'Patah bulu',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G21
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Sisa kulit kering seperti ketombe',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Sisa kulit kering seperti ketombe',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Sisa kulit kering seperti ketombe',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Sisa kulit kering seperti ketombe',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G21',
            'NamaGejala' => 'Sisa kulit kering seperti ketombe',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G22
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Beberapa bagian kulit mengeras',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Beberapa bagian kulit mengeras',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Beberapa bagian kulit mengeras',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Beberapa bagian kulit mengeras',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G22',
            'NamaGejala' => 'Beberapa bagian kulit mengeras',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G23
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Beberapa bagian kulit bersisik',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Beberapa bagian kulit bersisik',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Beberapa bagian kulit bersisik',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Beberapa bagian kulit bersisik',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G23',
            'NamaGejala' => 'Beberapa bagian kulit bersisik',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G24
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Botak pada beberapa bagian tubuh',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Botak pada beberapa bagian tubuh',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Botak pada beberapa bagian tubuh',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Botak pada beberapa bagian tubuh',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G24',
            'NamaGejala' => 'Botak pada beberapa bagian tubuh',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G25
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Menggaruk berlebihan',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Menggaruk berlebihan',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Menggaruk berlebihan',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Menggaruk berlebihan',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G25',
            'NamaGejala' => 'Menggaruk berlebihan',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G26
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Peradangan kulit dengan bercak merah',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Peradangan kulit dengan bercak merah',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Peradangan kulit dengan bercak merah',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Peradangan kulit dengan bercak merah',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G26',
            'NamaGejala' => 'Peradangan kulit dengan bercak merah',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G27
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Kulit kering dan kerak',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Kulit kering dan kerak',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Kulit kering dan kerak',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Kulit kering dan kerak',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G27',
            'NamaGejala' => 'Kulit kering dan kerak',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G28
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Luka yang berdarah karena menggaruk',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Luka yang berdarah karena menggaruk',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Luka yang berdarah karena menggaruk',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Luka yang berdarah karena menggaruk',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G28',
            'NamaGejala' => 'Luka yang berdarah karena menggaruk',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G29
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Ada luka bernanah',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Ada luka bernanah',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Ada luka bernanah',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Ada luka bernanah',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G29',
            'NamaGejala' => 'Ada luka bernanah',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G30
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Menggesek tubuh pada benda di sekitarnya',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Menggesek tubuh pada benda di sekitarnya',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Menggesek tubuh pada benda di sekitarnya',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Menggesek tubuh pada benda di sekitarnya',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G30',
            'NamaGejala' => 'Menggesek tubuh pada benda di sekitarnya',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G31
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Terdapat cacing berwarna kuning / coklat pada muntahan / tinja',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Terdapat cacing berwarna kuning / coklat pada muntahan / tinja',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Terdapat cacing berwarna kuning / coklat pada muntahan / tinja',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Terdapat cacing berwarna kuning / coklat pada muntahan / tinja',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G31',
            'NamaGejala' => 'Terdapat cacing berwarna kuning / coklat pada muntahan / tinja',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);

        //G32
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Perut membuncit',
            'KodePenyakit' => 'P01',
            'NamaPenyakit' => 'Leptospirosis',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Perut membuncit',
            'KodePenyakit' => 'P02',
            'NamaPenyakit' => 'Rabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Perut membuncit',
            'KodePenyakit' => 'P03',
            'NamaPenyakit' => 'Ringworm',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Perut membuncit',
            'KodePenyakit' => 'P04',
            'NamaPenyakit' => 'Scabies',
            'CFValue' => 1,
        ]);
        DB::table('symptoms')->insert([
            'KodeGejala' => 'G32',
            'NamaGejala' => 'Perut membuncit',
            'KodePenyakit' => 'P05',
            'NamaPenyakit' => 'Toxocariasis',
            'CFValue' => 1,
        ]);
        

















    }
}
