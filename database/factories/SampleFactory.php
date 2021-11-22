<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SampleFactory extends Factory
{
    /* protected $model = Sample::class; */
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
        ];
    }
}
