<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga extends Model
{
    use HasFactory;
    protected $table = 'mangas';
    protected $primaryKey = 'mangas_id';
    protected $fillable=['manga_name','description','vol_id'];
    
    public function genre()
    {
        return $this->belongsToMany(genre::class, 'manga_genres', 'mangas_id', 'genre_id') ;
    }  

    public function manga_covers()
    {
        return $this->hasOne(manga_covers::class);
    }
    public function main_cover()
    {
    return $this->hasOne(main_cover::class, 'manga_id');
    }
    public function volume()
    {
        return $this->hasMany(volume::class, 'vol_id');
    }
} 

