<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showblog($slug)
    {
        
        $blog=Blog::where('slug',$slug)->first();
        $blogs=Blog::latest()->take(3)->get();
        return view('FrontEnd.Blog.showSingle',['blog'=>$blog,'blogs'=>$blogs]);
    }

}
