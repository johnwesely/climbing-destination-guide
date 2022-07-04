<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GradeSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TagSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(AddictionWallSeeder::class);
    }
}
