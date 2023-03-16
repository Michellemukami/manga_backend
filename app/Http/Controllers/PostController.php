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
    public function uploadmanga( manga $manga, volume $volume, Request $request)
    {   
        $manga->genre()->sync(
            
            $request->input('genre'),
            $request->input('manga')
              
            );
            
        $volume= volume::create([
            'vol_name' => $request->input('vol_name'), 
            ]);
        
        $manga->volume()->save($volume);

        $volume->chapters()->create([
            
            'chap_name' => $request->input('chap_name'),
            'chap_file' => $request->file('chap_file'),
            $file = $request->file('chap_file'),
            $path = $file->store('uploads')
            ]);
       
       
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
