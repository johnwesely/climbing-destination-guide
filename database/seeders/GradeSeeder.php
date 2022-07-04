<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route = Type::create(['name' => 'sport']);
        $boulder = Type::create(['name' => 'boulder']);
        

        $routeGrades = [
            '5.5',
            '5.6',
            '5.7',
            '5.8',
            '5.9',
            '5.10a',
            '5.10b',
            '5.10c',
            '5.10d',
            '5.11a',
            '5.11b',
            '5.11c',
            '5.11d',
            '5.12a',
            '5.12b',
            '5.12c',
            '5.12d',
            '5.13a',
            '5.13b',
            '5.13c',
            '5.13d',
            '5.14a',
        ];

        $points = 5;

        foreach ($routeGrades as $grade) {
            Grade::firstOrCreate(['us' => $grade,
                'type_id' => $route->id,
                'points' => $points
            ]);

            $points += 5;
        }
    }
}
