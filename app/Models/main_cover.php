<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_cover extends Model
{
    use HasFactory;
    protected $table = 'main_cover';
    protected $fillable=['cover_file', 'mangas_id'];  
    
    public function manga()
    {
        return $this->belongsTo(manga::class);
    }
}
