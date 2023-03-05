<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manga_cover extends Model
{
    protected $table = 'manga_covers';
    protected $fillable = [ 'cover_file' ];
    use HasFactory;
}
