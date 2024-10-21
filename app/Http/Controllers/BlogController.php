<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs' , compact('blogs'));
    }
    public function show($slug)
    {
        $blogs = Blog::all();
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog-single', compact('blog', 'blogs'));
    }
}
