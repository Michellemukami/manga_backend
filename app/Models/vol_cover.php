<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vol_cover extends Model
{
    use HasFactory;
    protected $table = 'mangas';
    protected $fillable=['vol_cover_file'];  
    public function volume()
    {
        return $this->belongsTo(volume::class);
    }
   
}
