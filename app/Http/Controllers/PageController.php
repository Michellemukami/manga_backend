<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\manga;
use App\Models\manga_chap;
use App\Models\manga_cover;
use App\Models\manga_genre;
use App\Models\manga_vol;

class PageController extends Controller{
    public function uploadmanga(Request $request)
    {   

       $data= [

            'name' => $request->input('name'),
            'description' => $request->input('description'),
           
        ];
        dd($data);
        manga::create($data);
       
        $manga_genre= manga_genre::create([
        'name'=>$request->genre_name,
        ]);
     

        $manga_vol= manga_vol::create([
        'name'=>$request->vol_name,

        ]);
       

        $manga_chap=new manga_chap();
        $chap=$request->chap_file;
        $filename=time().'.'.$chap->getClientOriginalExtension();
        $request->chap_file->move('assets/chaps',$filename);
        $manga_chap->chap_file=$filename;
        $manga_chap->save();

        $manga_cover=new manga_cover();
        $cover=$request->cover_file;
        $filename=time().'.'.$cover->getClientOriginalExtension();
        $request->cover_file->move('assets/covers',$filename);
        $manga_cover->cover_file=$filename;
        $manga_cover->save();
        return redirect()->back()->with('success','Manga uploaded successfully');
        
    }
//     public function show(Request $request)
//     {   
//        $data=manga::all();
       
//        return view('show',compact('data'));
//     }
//     public function view()

//     {  
//       $data=manga::find($id);
//       return view('viewmanga',compact('data'));
     
// }

}