<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123'),
        ]);

        DB::table('whatsapps')->insert([
            'phone' => '6281234567890',
            'message' => 'Halo, saya butuh bantuan Anda mengenai kucing saya. Apakah Anda bisa membantu saya?',
        ]);
    }
}
