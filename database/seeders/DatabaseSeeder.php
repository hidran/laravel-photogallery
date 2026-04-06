<?php

namespace Database\Seeders;

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
        User::factory()->count(20)
            ->hasAlbumCategories(3, function (array $attributes, User $user) {
                return [
                    'user_id' => $user->id,


                ];
            })->hasPhotos(20)
            ->create();
    }
}
