<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'teaFirstName' => $this->faker->firstName(),
            'teaName' => $this->faker->lastName(),
            'teaGender' => $this->faker->regexify('[MFO]{1}'),
            'teaNickName' => $this->faker->userName(),
            'teaOrigin' => $this->faker->paragraph(),
            'sections_id' => $this->faker->numberBetween(1, 3),
            'created_at'=> now()
        ];
    }
}
