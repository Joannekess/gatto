<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\DiseasesSeeders;
use Database\Seeders\SymptomsSeeders;
use Database\Seeders\RulesSeeders;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(UsersTableSeeders::class);
        $this->call(DiseasesSeeders::class);
        $this->call(SymptomsSeeders::class);
        $this->call(RulesSeeders::class);
        $this->call(AdminsSeeders::class);



    }
}
