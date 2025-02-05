<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "employer_id" => Employer::factory(),
            "title" => fake()->jobTitle,
            "salary" => fake()->randomElement([
                "$50,000","$60,000","$70,000","$80,000"
            ]),
            "schedule" => fake()->randomElement([
                "Full-Time", "Part-Time"
            ]),
            "location" => fake()->randomElement([
                "Remote","OnSite","Hybrid"
            ]),
            "featured" => fake()->randomElement([false,true])
        ];
    }
}
