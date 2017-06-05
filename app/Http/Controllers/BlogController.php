<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\Blog\BlogRequest;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index(){
        $blogs = Blog::select('title', 'body', 'users.name as author', 'blogs.published_at','blogs.id')
            ->join('users', 'users.id','=','blogs.user_id')
            ->where('active', 1)
            ->get();

        return view('blogs.index', compact('blogs'));
    }

    public function create(){
        return view('blogs.create_edit');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('blogs.create_edit', compact('blog'));
    }

    public function save(BlogRequest $request){
        $title = $request->input('title');
        $body = $request->input('body');
        $active = $request->input('active');
        $id = $request->input('id');

        if(empty($id)) {
            $blog = new Blog();
        }else{
            $blog = Blog::find($id);
        }
        $published_at = new \DateTime();
        $blog->title = $title;
        $blog->body = $body;
        $blog->active = $active;
        $blog->user_id = Auth::user()->id;
        $blog->published_at = $published_at->format('Y:m:d H:i:s');
        if($blog->save()){
            return redirect('/home');
        }

    }

    public function show($id){
        $blog = Blog::select('title', 'body', 'users.name as author', 'blogs.published_at','blogs.id')
            ->join('users', 'users.id','=','blogs.user_id')
            ->where('active', 1)
            ->where('blogs.id', $id)
            ->first();
        return view('blogs.show', compact('blog'));
    }

    public function delete($id){
        if($blog = Blog::find($id)){
            if($blog->delete()){
                return response()->json([true]);
            }
        }
    }
}
