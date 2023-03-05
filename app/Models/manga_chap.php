<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga_chap extends Model
{
    protected $table = 'manga_chaps';
    protected $fillable = [ 'chap_file' ];
    use HasFactory;
}
