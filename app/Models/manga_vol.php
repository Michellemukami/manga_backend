<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga_vol extends Model
{
    
    protected $table = 'manga_vols';
    protected $fillable = 'vol_name';
    public function manga_chap()
    {
        return $this->hasMany(manga_chap::class);
    }
    use HasFactory;
}
