<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsTableSeeder extends Seeder
{
    public function run()
    {
        $comics = include __DIR__ . '/../../app/Models/comics.php';

        foreach ($comics as $comic) {
            $comic['artists'] = json_encode($comic['artists']);
            $comic['writers'] = json_encode($comic['writers']);
            DB::table('comics')->insert($comic); 
        }
    }
}
