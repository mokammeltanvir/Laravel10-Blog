<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title, 
            'slug' => Str::slug($title),
            'thumbnail' => $this->faker->imageUrl(1000, 480, 'Blogs', true),
            'body' => $this->faker->paragraphs(5, true),
            'active' => $this->faker->boolean,
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'user_id' => 1,
        ];
    }
}
