<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=> $this->faker->text(45),
            'pdfurl' => $this->faker->url(),
            'user_id' => $this->faker->text(),
        ];
    }
}
