<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\manga;

class PageController extends Controller{
    public function uploadmanga(Request $request)
    {   
        $data=new manga();
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
        
    }
    public function show(Request $request)
    {   
       $data=manga::all();
       return view('show',compact('data'));
    }
    public function view($id)
    {   
       $data=manga::find($id);
       return view('viewmanga',compact('data'));
    }
}