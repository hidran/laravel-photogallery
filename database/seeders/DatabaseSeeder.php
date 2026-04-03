<?php

namespace Database\Seeders;

use App\Models\AlbumCategory;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();
        AlbumCategory::factory(50)->create();
        Photo::factory(100)->create();
    }
}
