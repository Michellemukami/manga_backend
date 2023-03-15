<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;

class GenrePostController extends Controller
{
    public function uploadgenres(Request $request)
    {   

        $genre= genre::create([
                'genre_name' => $request->input('genre_name'),
                ]);  
        return redirect()->back()->with('success','Genre uploaded successfully');
        
        
    }
}
