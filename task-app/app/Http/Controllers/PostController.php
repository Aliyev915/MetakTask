<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $page = $request->page ==null ? 1 : $request->page;
        return $page;
        return view('blog');
    }

    public function detail($id){
        return view('blog-single');
    }
}