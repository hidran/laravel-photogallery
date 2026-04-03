<?php

namespace Database\Seeders;

use App\Models\CategoryAlbum;
use Illuminate\Database\Seeder;

class CategoryAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryAlbum::factory(20)->create();
    }
}
