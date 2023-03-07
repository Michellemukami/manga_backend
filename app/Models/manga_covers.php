<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga_covers extends Model
{
    use HasFactory;
    protected $table = 'manga_covers';
    protected $fillable=['cover_file'];  
    public function volume()
    {
        return $this->belongsTo(manga::class);
    }
    
}
