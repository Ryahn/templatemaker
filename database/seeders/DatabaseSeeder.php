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
        $this->call(GenreSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(OsSeeder::class);
        $this->call(SoftwareSeeder::class);
        $this->call(UserSeeder::class);

        if (env('APP_ENV') == 'local') {
            $this->call(TemplateSeeder::class);
        }
    }
}
