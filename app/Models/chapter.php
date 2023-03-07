<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    protected $table = 'chapters';
    protected $fillable=['chap_name','chap_file'];  
    public function volume()
    {
        return $this->belongsTo(volume::class);
    }
}
