<?php

namespace Database\Factories;

use App\Models\Tags;
use App\Models\Software;
use App\Models\Languages;
use App\Models\OsSystems;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemplateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $num = random_int(3, 8);
        $num1 = random_int(2, 5);
        $lang = Languages::get('name')->random($num);
        $langs = Arr::pluck($lang, 'name');
        $os = OsSystems::get('name')->random($num1);
        $oss = Arr::pluck($os, 'name');
        $software = Software::get('name')->random($num);
        $softwares = Arr::pluck($software, 'name');
        $genre = Tags::get('text')->random($num);
        $genres = Arr::pluck($genre, 'text');   

        $f95Url = "https://f95zone.to/threads/" . implode('-', $this->faker->words($num1)) . '-' . $this->faker->numerify('##.######');
        $userThanks = "https://f95zone.to/members/" . $this->faker->words(1)[0]. "." . $this->faker->numerify('######');
        $vndbUrl = "https://vndb.org/" . $this->faker->numerify('v#####');
        return [
            'type' => $this->faker->randomElement(['animation','asset','collection','comic','game','manga','other']),
            'game_name' => $this->faker->sentence(3),
            'devName' => $this->faker->word(),
            'version' => $this->faker->semver(),
            'overview' => $this->faker->paragraph(2),
            'thread_updated' => Carbon::today()->subDays(rand(0, 180))->format('Y-m-d'),
            'release_date' => Carbon::today()->subDays(rand(0, 180))->format('Y-m-d'),
            'censorship' =>  $this->faker->numberBetween(1, 5),
            'langauge' => $langs,
            'genre' => $genres,
            'osSys' => $oss,
            'voiced' => $langs,
            'prequel' => $f95Url,
            'sequel' => $f95Url,
            'vndb' => $vndbUrl,
            'userThanks' => $userThanks,
            'resolution' => $this->faker->numerify('####x####'),
            'pages' => $this->faker->numerify('###'),
            'content' => $this->faker->paragraph(),
            'originalTitle' => $this->faker->words(3, true),
            'length' => $this->faker->randomElement(['Very short (< 2 hours)', 'Short (2 - 10 hours)', 'Medium (10 - 30 hours)', 'Long (30 - 50 hours)', 'Very long (> 50 hours)']),
            'linkAsset' => $f95Url,
            'compatible' => $softwares,
            'installation' => $this->faker->paragraph(),
            'devNotes' => $this->faker->paragraph(),
            'changelog' => $this->faker->paragraph(),
            'contentList' => $this->faker->paragraph(),
            'included' => $this->faker->paragraph,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ];
    }
}
