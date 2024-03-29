<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga extends Model
{
    use HasFactory;
    protected $table = 'mangas';
    protected $primaryKey = 'mangas_id';
    protected $fillable=['manga_name','description'];
    
    public function genre()
    {
        return $this->belongsToMany(genre::class, 'manga_genres','mangas_id', 'genre_id') ;
    }  

    public function manga_covers()
    {
        return $this->hasOne(manga_covers::class);
    }
    public function main_cover()
    {
    return $this->hasOne(main_cover::class, 'mangas_id');
    }
    public function volume()
    {
        return $this->hasMany(volume::class, 'mangas_id');
    }
} 

