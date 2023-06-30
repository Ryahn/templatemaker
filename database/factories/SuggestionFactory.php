<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suggestion>
 */
class SuggestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::find('72884988374167552');
        return [
            'type' => $this->faker->randomElement(['genre','os','software','language','feature','other']),
            'name' => $this->faker->sentence(),
            'notes' => $this->faker->paragraph(2, true),
            'requested_by' => $user->global_name,
            'approved' => $this->faker->numberBetween(0, 1),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
    }
}
