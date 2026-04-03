<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\AlbumCategory;
use App\Models\CategoryAlbum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CategoryAlbum>
 */
class CategoryAlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'album_category_id' => AlbumCategory::query()->inRandomOrder()->first(['id']),
            'album_id' => Album::query()->inRandomOrder()->first(['id']),
        ];
    }
}
