<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(File::get('public/tags.json'), true);
        $tech = $data[0]['technical'];
        $sex = $data[0]['sexual'];
        $nonsex = $data[0]['nonsexual'];
        $assets = $data[0]['assets'];
        Tags::insert($tech);
        Tags::insert($sex);
        Tags::insert($nonsex);
        Tags::insert($assets);

    }
}
