<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GenreController extends Controller
{
    public function uploadgenre(Request $request)
    {   
        $options = DB::table('genre')->pluck('genre_name', 'id');

        // return the view with the dropdown options
        return view('uploadpage')->with('options', $options);
    }
}
