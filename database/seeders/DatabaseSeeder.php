<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GenreSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(OsSeeder::class);
        $this->call(SoftwareSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TemplateSeeder::class);
    }
}
