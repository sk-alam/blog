<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::select('title', 'body', 'users.name as author', 'blogs.published_at', 'blogs.id')
            ->join('users', 'users.id','=','blogs.user_id')
            ->get();
        return view('admin.home', compact('blogs'));
    }
}
