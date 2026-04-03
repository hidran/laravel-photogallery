<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAlbum extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryAlbumFactory> */
    use HasFactory;

    protected $table = 'album_category';
}
