<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volume extends Model
{
    use HasFactory;
    protected $table = 'volume';
    protected $primaryKey = 'vol_id';
    protected $fillable=['vol_name','chap_id'];  
    public function chapter()
    {
        return $this->hasMany(chapter::class, 'chap_id');
    }
    public function vol_cover()
    {
        return $this->hasMany(vol_cover::class,'vol_id');
    }
    public function manga()
    {
        return $this->belongsTo(manga::class) ;
    }


}
