<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga_genre extends Model
{
    use HasFactory;
    protected $table = 'manga_genres';
    protected $fillable=['mangas_id', 'genre_id'];  
   
 
}
