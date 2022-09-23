<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga extends Model
{
    use HasFactory;
    protected $fillable=['name','description','file'];
    public function genre()
    {
        return $this->hasMany(manga_genre::class);
    }
    public function manga_vol()
    {
        return $this->hasMany(manga_vol::class);
    }    
}
