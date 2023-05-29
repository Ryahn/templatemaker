<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $software = [
            ['name' => 'Blender', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Blender 2.9', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Blender 3.0', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Blender 3.1', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Blender 3.2', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Blender 3.3', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Blender 3.4', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Blender 3.5', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Blender 3.5.1', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'blender'],
            ['name' => 'Unreal', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.15', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.16', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.17', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.18', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.19', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.20', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.21', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.22', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.23', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.24', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.26', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 4.27', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 5.0', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 5.1', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 5.2', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Unreal 5.3', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'unreal'],
            ['name' => 'Character Creator 3', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'none'],
            ['name' => 'Other', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'none'],
            ['name' => 'Poser', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'none'],
            ['name' => 'Illusion', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'none'],
            ['name' => 'DAZ', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'none'],
            ['name' => 'Autodesk', 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'group' => 'none'],
        ];

        Software::insert($software);
    }
}
