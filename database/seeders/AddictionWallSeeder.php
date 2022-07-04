<?php

namespace Database\Seeders;

use App\Models\Crag;
use App\Models\Type;
use App\Models\Grade;
use App\Models\Route;
use App\Models\Region;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddictionWallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prg = Region::firstOrCreate(['name' => 'Popo Agie River Gorge']);

        $mainWall = Crag::firstOrCreate([
            'name' => 'Main Wall',
            'region_id' => $prg->id,
        ]);

        $addictionWall = Section::firstOrCreate([
            'name' => 'Addiction',
            'crag_id' => $mainWall->id,
        ]);

        $order = 0;

        Route::firstOrCreate([
            'name' => 'Black Celebration',
            'grade_id' => Grade::where('us', '5.11b')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 1,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'A Beautiful Life',
            'grade_id' => Grade::where('us', '5.9')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 3,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Soup Sandwhich',
            'grade_id' => Grade::where('us', '5.8')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 2,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Go West, Young Man',
            'grade_id' => Grade::where('us', '5.7')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 4,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Mezzmerie',
            'grade_id' => Grade::where('us', '5.12c')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 1,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Soul Finger',
            'grade_id' => Grade::where('us', '5.11a')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 2,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'The Road to Dushnabe',
            'grade_id' => Grade::where('us', '5.12a')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 4,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Surplus Fusion Reactor',
            'grade_id' => Grade::where('us', '5.13a')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 4,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Addiction',
            'grade_id' => Grade::where('us', '5.12c')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 5,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Dogs of War',
            'grade_id' => Grade::where('us', '5.13a')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 3,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Pretty Hate Machine',
            'grade_id' => Grade::where('us', '5.13b')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 5,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'The Gathering',
            'grade_id' => Grade::where('us', '5.13c')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 4,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Public Enemy',
            'grade_id' => Grade::where('us', '5.12c')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 2,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Drug Enemy',
            'grade_id' => Grade::where('us', '5.11d')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 3,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'I Want a New Drug',
            'grade_id' => Grade::where('us', '5.12c')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 2,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Corner Drug',
            'grade_id' => Grade::where('us', '5.11a')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 4,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'White Dwarf',
            'grade_id' => Grade::where('us', '5.12c')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 2,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);

        Route::firstOrCreate([
            'name' => 'Dewalt\'s Challenge',
            'grade_id' => Grade::where('us', '5.11d')->first()->id,
            'type_id' => Type::where('name', 'sport')->first()->id,
            'rating' => 1,
            'order' => $order++,
            'section_id' => $addictionWall->id,
        ]);
    }
}
