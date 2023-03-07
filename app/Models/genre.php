<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;
    protected $table = 'genre';
    protected $primaryKey = 'genre_id';
    protected $fillable=['genre_name'];  
    public function manga()
    {
        return $this->belongsToMany(manga::class, 'manga_genres', 'mangas_id', 'genre_id');
    }
}
