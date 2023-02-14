<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(), 
            'category' => $this->faker->sentence(),
            'comments' => $this->faker->sentence(),
            'Author' => $this->faker->company(),
        ];
    }
}
