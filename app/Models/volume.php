<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volume extends Model
{
    use HasFactory;
    protected $table = 'volume';
    protected $fillable=['vol_name'];  
    public function chapter()
    {
        return $this->hasMany(chapter::class);
    }
    public function volume_cover()
    {
        return $this->hasMany(vol_cover::class);
    }
}
