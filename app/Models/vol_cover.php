<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vol_cover extends Model
{
    use HasFactory;
    protected $table = 'vol_cover';
    
    protected $fillable=['vol_id','vol_cover_file'];  
    public function volume()
    {
        return $this->belongsTo(volume::class);
    }


}
