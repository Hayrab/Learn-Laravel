<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(mt_rand(10,18)),
            //'body' => '<p>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(5,15))).'</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5,15)))
                        ->map(fn($p)=> "<p>$p</p>")
                        ->implode(''),
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,3)
        ];
    }
}
