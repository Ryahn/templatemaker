<?php

namespace Database\Seeders;

use App\Models\BBCode;
use App\Models\Template;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::factory(10)->create()->each(function ($template) {
            $returnHTML = view("template.types.$template->type", ['template' => $template])->render();
            BBCode::updateOrCreate(
                ['template_id' => $template->id],
                ['bbcode' => $returnHTML]
            );
        });
    }
}
