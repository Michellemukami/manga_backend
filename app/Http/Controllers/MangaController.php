<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MangaController extends Controller
{
    public function uploadmanga(Request $request)
    {   
        $options = DB::table('mangas')->pluck('manga_name', 'id');

        return view('uploadpage')->with('options', $options);
    }
}
