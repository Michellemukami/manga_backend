<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    protected $table = 'chapters';
    protected $primaryKey = 'chap_id';
    protected $fillable=['chap_name','chap_file','chap_id'];  
    public function volume()
    {
        return $this->belongsTo(volume::class) ;
    }

}
