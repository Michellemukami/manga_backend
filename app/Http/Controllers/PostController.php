<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Models\manga;
use App\Models\chapter;
use App\Models\main_cover;
use App\Models\volume;
use App\Models\manga_covers;
use App\Models\manga_genre;
use App\Models\vol_cover;
use App\Models\genre;


class PostController extends Controller
{
    public function uploadmanga(Request $request)
    {   

        $manga= manga::create([
                'manga_name' => $request->input('manga_name'),
                'description' => $request->input('description'), 
                ]);
       
        
        $genreids = $request->input('genre');
        $manga->genre()->sync($genreids);
        
        $volume= volume::create([
            'vol_name' => $request->input('vol_name')
            ]);
        $manga->volume()->create([
                'vol_name' => $request->input('vol_name'),]);
        $volume->chapter()->create([
            
            'chap_name' => $request->input('chap_name'),
            'chap_file' => $request->file('chap_file'),
            $file = $request->file('chap_file'),
            $path = $file->store('uploads')]);
           
        $volume->vol_cover()->create([
        'vol_cover_file' => $request->file('vol_cover_file'),
        $file = $request->file('vol_cover_file'),
        $path = $file->store('uploads')]);

        $manga->main_cover()->create([
            'cover_file' => $request->file('cover_file'),
            $file = $request->file('cover_file'),
            $path = $file->store('uploads')   
        ]);
            
        return redirect()->back()->with('success','Manga uploaded successfully');
        
    }
}
