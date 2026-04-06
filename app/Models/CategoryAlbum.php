<?php

namespace App\Models;

use Database\Factories\CategoryAlbumFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryAlbum extends Model
{
    /** @use HasFactory<CategoryAlbumFactory> */
    use HasFactory;

    protected $table = 'album_category';

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(AlbumCategory::class, 'album_category_id');
    }
}
