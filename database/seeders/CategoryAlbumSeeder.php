<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\CategoryAlbum;
use Exception;
use Illuminate\Database\Seeder;

class CategoryAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = Album::pluck('id');
        foreach ($albums as $album) {
            foreach (range(0, 3) as $val) {
                try {
                    CategoryAlbum::factory()->create([
                        'album_id' => $album,
                    ]);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
        }
    }
}
