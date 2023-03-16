<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\genre;
use App\Models\manga;

class MangaController extends Controller
{
    public function uploadmanga(Request $request)
    {   

        $genres = DB::table('genre')->pluck('genre_name', 'id');
        $options = DB::table('mangas')->pluck('manga_name', 'id');

     
        return view('uploadpage', compact('options', 'genres'));

     
    }

}
