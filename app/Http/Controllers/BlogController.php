<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       return view('Admin.Blog.Add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs=Blog::latest()->get();
        return view('Admin.Blog.View',['blogs'=>$blogs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'title'=>'required',
            'sort_desc'=>'required',
            'url'=>'required|unique:blogs,slug',
            'blogpic'=>'required|image',
            'long_desc'=>'nullable',
        ]);

        $newpic='Blog-'.rand(0,99).'-'.rand(0,99).'-'.time().'.'.$req->blogpic->extension();
        if($req->blogpic->move(public_path('Blogs'),$newpic))
    	 {
            $res=Blog::create([
                // 'user_id'=>Auth::user()->id,
                'user_id'=>1,
                 'title'=>$req->title,
                 'sort_desc'=>$req->sort_desc,
                 'slug'=>Str::slug($req->url),
                 'meta_desc'=>$req->meta_desc,
                 'meta_keyword'=>$req->meta_keyword,
                 'long_desc'=>$req->long_desc,
                 'image'=>$newpic,
             ]);

             if($res)
             {
                Session()->flash('success','Blog Added Successfully');
             }
             else
             {
                Session()->flash('error','Blog Not Added ');
             }


             return redirect()->back();
         }

        
    }




    public function destroy($blog)
    {
       // return $blog;
       $id=Crypt::decrypt($blog);
       Blog::find($id)->delete();
       Session()->flash('success','Blog Deleted Successfully');
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    // public function show(Blog $blog)
    // {
       
    //     return $blog;
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        return view('Admin.Blog.Add',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        Session()->flash('error','Update not working Server Error');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */

 
}
