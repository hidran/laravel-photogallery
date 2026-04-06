<?php

namespace Database\Factories;

use App\Models\AlbumCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AlbumCategory>
 */
class AlbumCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static array $categories = [
        'landscape',
        'cats',
        'buildings',
        'dogs',
        'children',
        'women',
        'birds'
    ];


    public function definition(): array
    {
        return [
            'category_name' => fake()->text(64),
            'description' => fake()->text(),
            'user_id' => User::factory()
        ];
    }
}
