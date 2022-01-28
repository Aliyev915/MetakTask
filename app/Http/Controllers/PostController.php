<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $page = $request->page ==null ? 1 : $request->page;
        return view('blogs.index',['page'=>$page]);
    }

    public function detail($id){
        return view('blogs.detail');
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        return redirect()->back()->with('success','Əlavə olundu');
    }
}
