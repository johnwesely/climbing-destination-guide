<?php

namespace Database\Seeders;

use App\Models\SendType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SendTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'onsight',
            'flash',
            'redpoint',
        ];

        foreach ($types as $type) {
            SendType::firstOrCreate(['name' => $type]);
        }
    }
}
