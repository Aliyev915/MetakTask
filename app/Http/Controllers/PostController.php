<?php

namespace App\Http\Controllers;

use App\Helpers\FileManager;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(Request $request){
        $page = $request->page ==null ? 1 : $request->page;
        $blogs = Blog::all()->skip(($page-1)*5)->take(5);
        return view('blogs.index',['page'=>$page,'blogs'=>$blogs]);
    }

    public function detail($id){
        $blog = Blog::find($id);
        return view('blogs.detail',['blog'=>$blog]);
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title'=>'required|max:100',
            'image'=>'required|max:100,mimes:png,jpeg,svg',
            'description'=>'max:2000'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $path = FileManager::fileUpload($request->file('image'),'uploads');
        Blog::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$path,
            'datetime'=>Carbon::now()
        ]);
        return redirect('/blog')->with('success','Əlavə olundu');
    }
    
}
