<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manga;

class MangaPostController extends Controller
{
    public function uploadmangadetails(Request $request)
    {   

        $manga= manga::create([
                'manga_name' => $request->input('manga_name'),
                'description' => $request->input('description'), 
                ]);
        
        return redirect()->back()->with('success','Manga uploaded successfully');
        
    }
}
