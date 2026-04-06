<?php

namespace Database\Seeders;

use App\Models\AlbumCategory;
use Illuminate\Database\Seeder;

class AlbumCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlbumCategory::factory()->create();
    }
}
