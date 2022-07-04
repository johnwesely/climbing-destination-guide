<?php

namespace Database\Seeders;

use App\Models\AreaTag;
use App\Models\RouteTag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areaTags = [
            'AM Shade',
            'PM Shade',
            'Fall',
            'Winter',
            'Spring', 
            'Summer',
            'Kid Friendly',
            'Dog Friendly',
            'Snake Danger',
            'Classic',
            'Chossy',
            'Crowded',
            'Wilderness Experience',
            'Locals Choice',
            'All Abilities',
            'Gumby Paradise',
            'Hard Man Hangout',
        ];

        $routeTags = [
            'Pumpy',
            'Long',
            'Technical',
            'All Time Classic',
            'Future Classic',
            'Shorty',
            'Sustained',
            'One Move Wonder',
            'Multi Cruxed',
            'Spicy',
            'Tame',
            'Chossfest',
            'G',
            'PG',
            'PG-13',
            'R',
            'R/X',
            'X',
            'Unique',
        ];

        foreach ($areaTags as $tag) {
            AreaTag::firstOrCreate(['name' => $tag]);
        }

        foreach ($routeTags as $tag) {
            RouteTag::firstOrCreate(['name' => $tag]);
        }
    }
}
