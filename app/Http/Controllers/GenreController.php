<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GenreController extends Controller
{
    public function uploadgenre(Request $request)
    {   
        $options = DB::table('manga_genres')->pluck('name', 'id');

        // return the view with the dropdown options
        return view('uploadpage')->with('options', $options);
    }
}
